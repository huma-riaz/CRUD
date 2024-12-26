<?php include 'conn.php';

$id= $_GET['id'];
$query="DELETE FROM students Where id=$id";
$data=mysqli_query($con,$query);

if($data) {
    ?>
    <script type="text/javascript">
        alert("Data Deleted Successfully");
        window.open("http://localhost/CRUD/view.php", "_self");
    </script>
    <?php
}
else {
    ?>
    <script type="text/javascript">
        alert("Please Try Again")
    </script>
    <?php
}
?>