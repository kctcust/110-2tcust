
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁建置</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "myDB1";
$tbname = "MyTable1";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tbname";
$data = $conn->query($sql);
?>
<table width="700" border="1">
   <tr>
    <td>id</td>
    <td>姓名</td>
    <td>email信箱</td>
  </tr>
  <?php
  for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_row($data);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
  </tr>  
  <?php
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>