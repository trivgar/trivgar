<html>
<head><title>MySQL Status Script</title></head>
<body><pre>
<?
/*

Please upload this file to your admin directory

*/


extract($HTTP_GET_VARS);
// stat.php - Last modified: 03/19/02  02:17:00  P.Kelly
/**************************************************************/
/* Set-up default parameters                                  */
/* Override them using get vars eg. stats.php?ns=0              */
/* Or override the constant settings below                       */
/**************************************************************/
$ns  = isset($ns)  ? $ns  : 1; // allow netstat
$htp = isset($htp) ? $htp : 1; // allow http process count
$msp = isset($msp) ? $msp : 1; // allow mysql process count
$tp  = isset($tp)  ? $tp  : 1; // allow top information
$mss = isset($mss) ? $mss : 1; // allow mysql status information
/**************************************************************/

/***
  Configure statistic gathering programs; specify path if necessary
***/

$netstat = 'netstat -a -n|grep -E "^(tcp)"| cut -c 68-|sort|uniq -c|sort -n';
$http = "ps -auxww | grep -c http";
$mysql = "ps -auxww | grep -c mysql";
$top = "top";
$uptime = "uptime";
$free = "free";

require('./config.php');

// echo escapeshellarg("$mysqladmin $mysqllogin variables")."\n\n";


function SecToDHMS($secs) {
  $showSecs = $uptime == 0;
  $s = "";
  if ($secs >= 86400) {
    $n = (int) ($secs/86400);
    $s = $n." day".($n>1?"s":"");
    $secs %= 86400;
  }
  if ($secs >= 3600) {
    $n = (int) ($secs/3600);
    $s .= " ".$n." hr".($n>1?"s":"");
    $secs %= 3600;
  }
  if ($secs >= 60) {
    $n = (int) ($secs/60);
    $s .= " ".$n." min".($n>1?"s":"");
    $secs %= 60;
  }
  if ($secs || $showSecs == 1)
    $s .= " ".$secs." sec".($secs>1?"s":"");
  return trim ($s);
}



/***
  Display current date time
***/
system ("date");
echo "\n\n";




/***
  Display "top" information if available; otherwise display similar information
***/
if($tp)
{
    if (isset ($top) && $top != "")
    {
        $fp = popen ("$top -i -n 1 -b", "r");
        $buffer = "";
        while (!feof ($fp) && $buffer == "")  // skip any blank header lines
        $buffer = rtrim (fgets ($fp, 1024));

        if (!feof ($fp) && $buffer != "")
        {
            echo "$buffer\n";
            while (!feof ($fp) && $buffer != "")
            {  // display all except CPU details
                $buffer = rtrim (fgets ($fp, 1024));
                if (substr ($buffer, 0, 11) != "CPU states:")
                    echo "$buffer\n";
            }
        }
        // display details; filter to show only "nobody" and "mysql" users excluding "top" process
        while (!feof ($fp))
        {
            $buffer = rtrim (fgets ($fp, 1024));
            $user = rtrim (substr ($buffer, 6, 9));
            if ($user == "USER")
                $header = $buffer;
            if (($user == "nobody" || $user == "mysql") && substr ($buffer, 67, 3) != "top")
            {
                if ($header != "")
                {
                    echo "$header\n";
                    $header = "";
                }
                echo "$buffer\n";
            }
        }
        pclose ($fp);
        echo "\n";
        }
        else {
        if (isset ($uptime) && $uptime != "")
            system ("$uptime");
        if (isset ($free) && $free != "")
            system ("$free");
        echo "\n";
    }
}




/***
  Display current number of http processes
***/
if($htp)
{
echo "\nHttp processes currently running = ";
system ($http);
}


/***
  Display current number of http processes
***/
if($msp)
{
echo "Mysql processes currently running = ";
system ($mysql);
}

/***
  Display current number of http processes
***/
if($ns)
{
echo "\nNetstat information summary\n";
system ($netstat);
echo "\n";
}



/***
  Display MySQL extended-status (with special metric calculations to follow)
***/
if($mss)
{
    // Get MySql Variables.

    $con = mysql_connect($servername, $dbusername, $dbpassword);


    $rs =mysql_query("SHOW VARIABLES",$con);
    while($row=mysql_fetch_array($rs))
    {
    $mysqlvar[$row[0]] = $row[1];
    }

    // Get MySql Status.

    echo "\n";
    echo "+---------------------------+-----------------+\n";
    echo "| Variable_name             | Value           |\n";
    echo "+---------------------------+-----------------+\n";
    $rs =mysql_query("SHOW STATUS",$con);
    while($row=mysql_fetch_array($rs))
    {
        $param = $row[0];
        $var   = $row[1];
        $mysqlstat[$param] = $var;
        $buffer = sprintf("| %-25s | %-15s |",$param,$var);

        if ($param == "Key_blocks_used" && isset ($mysqlvar[key_buffer])) {
          $temp = sprintf ("%.0f", $var/($mysqlvar["key_buffer"]>>10)*100);
          echo $buffer," Approx. $temp% of key_buffer in use";
        }
        else if ($param == "Max_used_connections" && $var == $mysqlvar["max_connections"])
          echo $buffer," Max. connections reached\n";
        else if ($param == "Open_tables" && isset ($mysqlvar["table_cache"])) {
          $temp = sprintf("%.0f", $var/$mysqlvar["table_cache"]*100);
          echo $buffer," $temp% of table_cache in use";
        }
        else if ($param == "Slow_queries" && isset ($mysqlvar["long_query_time"]))
          echo $buffer." (execution time > ".$mysqlvar["long_query_time"]." secs)";
        else if ($param == "Uptime")
          echo $buffer." ".SecToDHMS($var);
        else
          echo $buffer;

        echo "\n";
    }
    echo "+---------------------------+-----------------+\n";

      echo "\n\n";
      if (isset ($mysqlstat[Key_read_requests]) && isset ($mysqlstat[Key_reads]) && $mysqlstat[Key_read_requests]) {
        $temp = sprintf ("%.6f", $mysqlstat[Key_reads]/$mysqlstat[Key_read_requests]);
        echo "Key Reads/Key Read Requests = $temp  (Cache hit = ",100-$temp,"%)\n";
      }
      if (isset ($mysqlstat[Key_write_requests]) && isset ($mysqlstat[Key_writes]) && $mysqlstat[Key_write_requests]) {
        $temp = sprintf ("%.6f", $mysqlstat[Key_writes]/$mysqlstat[Key_write_requests]);
        echo "Key Writes/Key Write Requests = $temp\n";
      }
      if (isset ($mysqlstat[Uptime])) {
        $uptime = $mysqlstat[Uptime];
        if ($uptime) {
          if (isset ($mysqlstat[Connections])) {
            $temp = $mysqlstat[Connections]/$uptime;
            echo "Connections/second = ",sprintf ("%.3f", $temp), " (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlstat[Bytes_received])) {
            $temp = ($mysqlstat[Bytes_received] >> 10)/$uptime;
            echo "KB received/second = ",sprintf ("%.3f", $temp), " (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlstat[Bytes_sent])) {
            $temp = ($mysqlstat[Bytes_sent] >> 10)/$uptime;
            echo "KB sent/second = ",sprintf ("%.3f", $temp), " (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlstat[Created_tmp_tables])) {
            $temp = $mysqlstat[Created_tmp_tables]/$uptime;
            echo "Temporary Tables Created/second = ",sprintf ("%.3f", $temp)," (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlstat[Opened_tables])) {
            $temp = $mysqlstat[Opened_tables]/$uptime;
            echo "Opened Tables/second = ",sprintf ("%.3f", $temp)," (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlstat[Slow_queries])) {
            $temp = $mysqlstat[Slow_queries]/$uptime;
            echo "Slow Queries/second = ",sprintf ("%.3f", $temp)," (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlstat[Questions])) {
            echo "% of slow queries = ",sprintf ("%.3f%%", $mysqlstat[Slow_queries]/$mysqlstat[Questions]*100),"\n";
            $temp = $mysqlstat[Questions]/$uptime;
            echo "Queries/second = ",sprintf ("%.3f", $temp)," (/hour = ",sprintf ("%.3f", $temp*3600),")\n";
          }
          if (isset ($mysqlvar[flush_time]) && $mysqlvar[flush_time] != 0)
            echo "Next automatic buffers flush in ",SecToDHMS($mysqlvar[flush_time]-($uptime % $mysqlvar[flush_time]));
        }
    }
}
?>
</pre></body></html>