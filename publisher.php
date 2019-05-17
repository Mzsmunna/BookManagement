<?php
	include('searchp.php');
	//echo "Publisher :";
?>

<br /><br />
<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<th>Publisher ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>Action</th>
</tr>
<?php
$sql="SELECT * FROM publisher";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
	while($row=mysql_fetch_object($query))
	{
?>
		<tr>
			<td><?php echo $row->Pub_id; ?></td>
			<td><?php echo $row->Name; ?></td>
			<td><?php echo $row->Address; ?></td>
			<td>
				<a href="editpublisher.php?edited=1&id=<?php echo $row->Name; ?>">EDIT</a>
				<a href="deletepublisher.php?deleted=1&id=<?php echo $row->Name; ?>">DELETE</a>
			</td>
		</tr>
<?php
	}
}
?>
</table>
<a href="addpublisher.php">Add New Publisher</a>
<br /><br />