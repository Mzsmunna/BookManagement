<?php
include('dbconnect.php');
//$error="";
if(isset($_POST['btnsave']))
{
	echo "Clicked";
	$book_id=$_POST['Book_id'];
	$title=$_POST['Title'];
	$author=$_POST['Author'];
	$price=$_POST['Price'];
	$available=$_POST['Available'];

	//if($_POST['textid']=="0")
	//{
		$sql="INSERT INTO book(Book_id, Title, Author, Price, Available) VALUES('$book_id', '$title', '$author', '$price', '$available')";
		$query=mysql_query($sql);
		if($query)
		{
			echo "Added";
			header('Refresh:0; home.php');
		}else{
			echo " :( ";
		}
	//}else{
	//	echo "Update";
	//}

//$dbcon->close();

}
if(isset($_POST['btncan']))
{
	header('Refresh:0; home.php');
}
?>

<form action="" method="post">
	<table>
		<tr>
			<td>Book ID</td>
			<td><input type="number" name="Book_id"><input type="hidden" name="txtid" value="0" /></td>
		</tr>
		<tr>	
			<td>Title</td>
			<td><input type="text" name="Title"></td>
		</tr>
		<tr>	
			<td>Author</td>
			<td><input type="text" name="Author"></td>
		</tr>
		<tr>	
			<td>Price</td>
			<td><input type="number" name="Price"></td>
		</tr>
		<tr>	
			<td>Available</td>
			<td>
				<select name="Available">
					<option value="yes">yes</option>
					<option value="no">no</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="ADD" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>