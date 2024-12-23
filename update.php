<?php include "conn.php";
echo '<br><br>';
$id= $_GET['id'];
?>


<form action="" method="POST"> <br>
    <input type="text" name="username" placeholder="Your Name"> <br><br>
    <input type="text" name="useremail" placeholder="Your Email"> <br><br>
    <input type="number" name="userage" placeholder="Your Age"> <br><br>
    <input type="submit" name="update_btn" value="Update"> 
    <button><a href="view.php">Back</a></button>
</form>