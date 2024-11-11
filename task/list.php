<?php 
include '../include/db.php';

include '../template/header.php';

$sql ="select * from task order by create_at desc "; 
$result = $conn ->query($sql);

?>

<h2>task list</h2>
<table border="1">
  <tr>
    <th>id</th>
    <th>title</th>
    <th>description</th>
    <th>actions</th>
  </tr>

<?php 
while ($row = $result -> fetch_assoc()): ?>
<tr>
<td><?php  echo $row ['id'];?> </td>
<td><?php  echo $row ['title'];?> </td>
<td><?php  echo $row ['description'];?> </td>
<td>
    <a href="edit.php?id=<?php  echo $row ['id'];?>" >edit</a> 
    <a href="delete.php?id=<?php  echo $row ['id'];?>" >delete</a> 
</td>


</tr>
<?php endwhile; ?> 

</table>
<?php 
include '../template/footer.php';
?> 
