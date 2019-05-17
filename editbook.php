<?php
include('dbconnect.php');
//$error="";
if(isset($_POST['btnsave']))
{
	//echo "Clicked";
	$book_id=$_POST['Book_id'];
	$title=$_POST['Title'];
	$author=$_POST['Author'];
	$price=$_POST['Price'];
	$available=$_POST['Available'];

	//if($_POST['textid']=="0")
	//{
		$sql="UPDATE book SET Book_id='$book_id', Title='$title', Author='$author', Price='$price', Available='$available' WHERE Title LIKE '{$_GET['id']}' ";
		$query=mysql_query($sql);
		if($query)
		{
			echo "Updated";
			header('Refresh:0; home.php');
		}else{
			echo " :( ";
		}
	//}else{
	//	echo "Update";
	//}

//$dbcon->close();	

}

if(isset($_GET['edited']))
{
	//echo "i am in!";
	$sql="SELECT * FROM book where Title LIKE '{$_GET['id']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$book_id=$row->Book_id;
	$title=$row->Title;
	$author=$row->Author;
	$price=$row->Price;
	$available=$row->Available;
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
			<td><input type="number" name="Book_id" value="<?php echo $book_id; ?>"><input type="hidden" name="txtid" value="0" /> </td>
		</tr>
		<tr>	
			<td>Title</td>
			<td><input type="text" name="Title" value="<?php echo $title; ?>"></td>
		</tr>
		<tr>	
			<td>Author</td>
			<td><input type="text" name="Author" value="<?php echo $author; ?>"></td>
		</tr>
		<tr>	
			<td>Price</td>
			<td><input type="number" name="Price" value="<?php echo $price; ?>"></td>
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
			<td><input type="submit" value="SAVE" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>