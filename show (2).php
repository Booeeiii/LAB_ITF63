<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitfyanisa.mysql.database.azure.com', 'booeeiii@labitfyanisa', '16398booN', 'Ynaisa', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container" align="center">
	<table class="table table-hoverable"width="600" border="1" bgcolor="pink" bordercolorlight="white">
	
  <tr>
	  <th width="100"> <div align="center">id</div></th>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
	<th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
		$count = 1;
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
	  <td><?php echo $count;?></td>
    <td><?php echo $Result['Name'];?></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
	<td><a href="delete.php"><input type="button" value="ลบ"></a></td>
  </tr>
		<?php $count++;}?>
<?php
}
?>
</table>
	<a href="https://yanisa.azurewebsites.net/form%20(1).html"><input type="button" value="เพิ่ม"></a>
</div>
<?php
mysqli_close($conn);
?>

 

</body>
</html>
