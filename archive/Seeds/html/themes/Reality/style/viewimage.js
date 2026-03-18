function viewImage(id,x,y,realfile) {
  x = x + 50;
  y = y + 70;
  x = (x < 175 ? 175 : x);
  if (realfile) {
    imagepreview = open('/showimage.php?image=' + id, 'imagepreview', 'toolbar=no,resizable=yes,width=' + x + ',height=' + y);
  }
  else {
    imagepreview = open('/showimage.php?id=' + id, 'imagepreview', 'toolbar=no,resizable=yes,width=' + x + ',height=' + y);
  }
  imagepreview.focus();
}
