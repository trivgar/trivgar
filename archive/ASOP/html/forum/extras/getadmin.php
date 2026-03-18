<html><head><title>vBulletin Administrator Utility</title></head>
<body>
<?php
extract($HTTP_GET_VARS);

if ($username=="") {

  echo "<form action=\"getadmin.php\" method=get><p>Username to activate: <input type=text name=username></p>";
  echo "<p><input type=submit value=\"Make administrator\"></p>";

} else {

  include("global.php");

  if ($checkadmin=$DB_site->query_first("SELECT cancontrolpanel FROM usergroup WHERE usergroupid=6")) {
    if ($checkadmin[cancontrolpanel]!=1) {
      $DB_site->query("UPDATE usergroup SET cancontrolpanel=1 WHERE usergroupid=6");
    }
  } else {
    $DB_site->query("INSERT INTO usergroup VALUES (6,'Administrator','Administrator',1,1,1,1,1,1,1,1,1,1,1)");
  }

  $DB_site->query("UPDATE user SET usergroupid=6 WHERE username='".addslashes($username)."'");

  echo "<p>Administrator reinstated. Please try to access the <a href='admin/index.php'>control panel</a>.</p>";

}

?>
</body>
</html>