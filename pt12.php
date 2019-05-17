<?php
	include('search.php');
	echo "Books :";
?>
<br /><br />
<table cellpadding="5" cellspacing="0" border="1">
<tr>
	<th>Book ID</th>
	<th>Title</th>
	<th>Author</th>
	<th>Price</th>
	<th>Available</th>
	<th>Action</th>
</tr>
<?php
$sql="SELECT * FROM book";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
	while($row=mysql_fetch_object($query))
	{
?>
		<tr>
			<td><?php echo $row->Book_id; ?></td>
			<td><?php echo $row->Title; ?></td>
			<td><?php echo $row->Author; ?></td>
			<td><?php echo $row->Price; ?></td>
			<td><?php echo $row->Available; ?></td>
			<td>
				<a href="editbook.php?edited=1&id=<?php echo $row->Title; ?>">EDIT</a>
				<a href="deletebook.php?deleted=1&id=<?php echo $row->Title; ?>">DELETE</a>
			</td>
		</tr>
<?php
	}
}
?>

</table>
<a href="addbook.php">Add New Book</a>
<br /><br />

<?php
	//echo "  "
	echo "Borrower :"
	//echo "  "
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
<?php
	//echo "  "
	echo "Publisher :"
	//echo "  "
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
<?php
	//echo "  "
	echo "Member :";
	//echo "  "
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
<?php
	//echo "  "
	echo "User :";
	//echo "  "
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

