<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Barcodes</title>
</head>

<body>
<?php 
//require_once('buildBarcode.php');

$link = mysql_connect('localhost', 'root', 'dieuarcher'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . 

mysql_error()); 
}

mysql_select_db('barcode',$link); 
$req = mysql_query('SELECT * FROM barcode');
$res = mysql_num_rows($req); 

echo "<table border=\"2\" cellpadding=\"15\" cellspacing=\"10\">";
while($tab = mysql_fetch_array($req)) {
	echo "<tr><td>".$tab['id']."</td>";
	echo "<td><img src=\"buildBarcode.php?text=".$tab['uid']."\"></td></tr>";
}
echo "</table>";
?>
</body>
</html>
