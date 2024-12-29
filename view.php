<?php include "conn.php"; 
echo "<br><br>" ?>
<a href="form.php">FORM:</a>

<table border = '1px' cellpadding = '10px'>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th colspan = "2">Actions</th>
    </tr>

<?php 
$query= "SELECT * from students";
$data= mysqli_query($con,$query);
$result=mysqli_num_rows($data);

if($result) {
    while($row=mysqli_fetch_array($data)) {
        ?>
        <tr>
        <td><?php echo $row['name']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['age']; ?> </td>
        <td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
        <td><a onclick="return confirm('Are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
    <?php
    }
} else{
    ?>
    <tr>
        <td>No Record</td>
    </tr>
    <?php
}
?>
</table>