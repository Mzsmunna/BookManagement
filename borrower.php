<?php
	include('searchbr.php');
	//echo "Borrower :";
?>
<br /><br />

<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<th>Book ID</th>
	<th>Name</th>
	<th>Member ID</th>
	<th>Title</th>
	<th>Due Date</th>
	<th>Return Date</th>
	<th>Action</th>
</tr>
<?php
$sql="SELECT * FROM borrower";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
	while($row=mysql_fetch_object($query))
	{
?>
		<tr>
			<td><?php echo $row->Book_id; ?></td>
			<td><?php echo $row->Name; ?></td>
			<td><?php echo $row->Member_id; ?></td>
			<td><?php echo $row->Title; ?></td>
			<td><?php echo $row->Due_date; ?></td>
			<td><?php echo $row->Return_date; ?></td>
			<td>
				<a href="editborrower.php?edited=1&id=<?php echo $row->Name; ?>">EDIT</a>
				<a href="deleteborrower.php?deleted=1&id=<?php echo $row->Name; ?>">DELETE</a>
			</td>
		</tr>
<?php
	}
}
?>
</table>
<a href="addborrower.php">Add New Entry</a>
<br /><br />