
<?php
<meta charset="UTF-8">
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitfyanisa.mysql.database.azure.com', 'booeeiii@labitfyanisa', '16398booN', 'Ynaisa', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['Name'];


$sql = "DELETE FROM guestbook WHERE Name='$name'";

if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
  } 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

mysqli_close($conn);
?>
