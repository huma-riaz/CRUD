<?php include 'conn.php';
echo '<br><br>';
$id=$_GET['id'];
$select="SELECT * FROM students WHERE id='$id'";
$data=mysqli_query($con, $select);
$row=mysqli_fetch_array($data);
?>


<form action="" method="POST"> <br>
    <input type="text" name="username" placeholder="Your Name" 
            value="<?php echo $row['name']  ?>"> <br><br>
    <input type="text" name="useremail" placeholder="Your Email"
            value="<?php echo $row['email']  ?>"> <br><br>
    <input type="number" name="userage" placeholder="Your Age"
            value="<?php echo $row['age']  ?>"> <br><br>
    <input type="submit" name="update_btn" value="Update"> 
    <button><a href="view.php">Back</a></button>
</form>


<?php 
if(isset($_POST['update_btn'])) {
    $myname= $_POST['username'];
    $myemail= $_POST['useremail'];
    $myage= $_POST['userage'];

    $update="UPDATE students SET name='$myname', email='$myemail', 
               age='$myage' WHERE id='$id'";

    $data=mysqli_query($con,$update);

    if($data) {
        ?>
        <script type="text/javascript">
            alert("Data Update Successfully");
            window.open("http://localhost/CRUD/view.php", "_self");
        </script>
    <?php 
    }else {
        ?>
    <script type="text/javascript">
        alert("Please Try Again");
    </script>
    <?php
    }
}
?>