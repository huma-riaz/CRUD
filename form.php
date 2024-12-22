<?php include "conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>

<form action="" method="POST"> <br>
    <input type="text" name="username" placeholder="Your Name"> <br><br>
    <input type="text" name="useremail" placeholder="Your Email"> <br><br>
    <input type="number" name="userage" placeholder="Your Age"> <br><br>
    <input type="submit" name="save_btn" value="Save"> 
    <button><a href="view.php">View</a></button>
</form>


<?php 
if(isset($_POST['save_btn'])) {
    $myname= $_POST['username'];
    $myemail= $_POST['useremail'];
    $myage= $_POST['userage'];

    $query= "INSERT INTO students (name,email,age)
            VALUES ('$myname', '$myemail', '$myage')";

    $data=mysqli_query($con, $query);

    if($data) {
        ?>
        <script type="text/javascript">
            alert("Data Save Successfully");
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
    
</body>
</html>