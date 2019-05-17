<?php
	include('searchu.php');
	//echo "Users :";
?>

<br /><br />
<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<th>ID</th>
	<th>Username</th>
	<th>Password</th>
	<th>User Type</th>
	<th>Action</th>
</tr>
<?php
$sql="SELECT * FROM users";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
	while($row=mysql_fetch_object($query))
	{
?>
		<tr>
			<td><?php echo $row->ID; ?></td>
			<td><?php echo $row->Username; ?></td>
			<td><?php echo $row->Password; ?></td>
			<td><?php echo $row->Usertype; ?></td>
			<td>
				<a href="edituser.php?edited=1&id=<?php echo $row->Username; ?>">EDIT</a>
				<a href="deleteuser.php?deleted=1&id=<?php echo $row->Username; ?>">DELETE</a>
			</td>
		</tr>
<?php
	}
}
?>
</table>

