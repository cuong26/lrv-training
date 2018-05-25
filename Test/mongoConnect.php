
<?php
	require 'connect.php';	
	//select DB
	$db = $conn ->Dbstudent;
	//select collection
	$coll = $db ->dbcollection;
	$user = $coll->find();

?>
<table style='border:1px solid red border-collapse:collapse' border='1px'>
    <thead>
        <tr>
        	<th> Tên </th>
            <th> Tuổi </th>
            <th> Lớp </th>
            <th> Sửa </th>
            <th> Xóa </th>
           
        </tr>
    </thead>
<tbody>
	<?php 
    foreach($user as $document){
    	?>
	<tr>
		<td><?= $document["name"]?></td>
		<td><?= $document["tuoi"]?></td>
		<td><?= $document["lop"]?></td>
		<td><a href="/Test/edit.php?id=<?php echo $document['_id']; ?>">Sửa</a></td>
		<td><a href="/Test/delete.php?id=<?php echo $document['_id']; ?>">Xóa</a></td>


	</tr>
	<?php
	   }
	?>
</tbody>
</table>
