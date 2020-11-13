<?php
$conn = mysqli_init();
include('show (2).php');
mysqli_real_connect($conn, 'labitfyanisa.mysql.database.azure.com', 'booeeiii@labitfyanisa', '16398booN', 'Ynaisa', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "DELETE FROM guestbook WHERE name="$name"";


if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
    #echo "window.location = "show (2).php";";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
