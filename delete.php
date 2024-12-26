<?php 'conn.php';

$id= $_GET['id'];
$query="DELETE FROM students Where id='$id'";
$data=mysqli_query($con,$query);

?>