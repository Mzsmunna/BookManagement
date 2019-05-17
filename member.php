<?php
	include('searchm.php');
	//echo "Member :";
?>

<br /><br />
<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<th>Member ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>Member Type</th>
	<th>Action</th>
</tr>
<?php
$sql="SELECT * FROM member";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
	while($row=mysql_fetch_object($query))
	{
?>
		<tr>
			<td><?php echo $row->Member_id; ?></td>
			<td><?php echo $row->Name; ?></td>
			<td><?php echo $row->Address; ?></td>
			<td><?php echo $row->Member_type; ?></td>
			<td>
				<a href="editmember.php?edited=1&id=<?php echo $row->Name; ?>">EDIT</a>
				<a href="deletemember.php?deleted=1&id=<?php echo $row->Name; ?>">DELETE</a>
			</td>
		</tr>
<?php
	}
}
?>
</table>
<a href="addmember.php">Add New Member</a>
<br /><br />