<?php 
include("./includes/connection.php");
include("./includes/header.php")
?>

<table>
<tr>
<td>Reviewer Name</td>
<td>Stars</td>
<td>Details</td>
</tr>
<?php
$query = mysqli_query($con,"SELECT * FROM users");
while($row = mysqli_fetch_assoc($query))
    { ?>
       <tr>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
       </tr> 
    <?php } ?>
</table>
<?php include("./includes/footer.php") ?>
