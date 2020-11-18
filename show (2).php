<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>ITF Lab</title>
  <link rel="stylesheet" href="css/style.css">
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
    <table class="table table-hover">
	<thead class="thead-dark">
    <tr>
        <th width="100"> <div>Name</div></th>
        <th width="350"> <div>Comment </div></th>
        <th width="150"> <div>Link </div></th>
	<th width="150"> <div>Action </div></th>
    </tr>
	</thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td>
	<div class="d-inline">
	    <form action="delete (1).php" method="post" class="d-inline">
                <input type="hidden" name="ID" value=<?php echo $Result['ID'];?>>
                <button type="submit" class="btn btn-outline-danger">Del</button>
            </form>
	    <form action="edit.php" method="post" class="d-inline">
                <input type="hidden" name="ID" value=<?php echo $Result['ID'];?>>
                <button type="submit" class="btn btn-outline-primary">Edit</button>
            </form>
	</div>
     </td>
  </tr>
<?php
}
?>
</table>
	<a href="https://yanisa.azurewebsites.net/form%20(1).html"><input type="button" class="btn btn-outline-info" value="Add"></a>
</div>
<?php
mysqli_close($conn);
?>

 

</body>
</html>
