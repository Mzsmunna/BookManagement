<?php
	include('searchb.php');
	//echo "Books :";
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