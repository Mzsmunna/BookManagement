<?php
include('dbconnect.php');
//$error="";
if(isset($_POST['btnsave']))
{
	echo "Clicked";
	$book_id=$_POST['Book_id'];
	$name=$_POST['Name'];
	$memb_id=$_POST['Member_id'];
	$title=$_POST['Title'];
	$due_date=$_POST['Due_date'];
	$return_date=$_POST['Return_date'];

	//if($_POST['textid']=="0")
	//{
		$sql="UPDATE borrower SET Book_id='$book_id', Name='$name', Member_id='$memb_id', Title='$title', Due_date='$due_date', Return_date='$return_date' WHERE Name='{$_GET['id']}' ";
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
	$sql="SELECT * FROM borrower where Name='{$_GET['id']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$book_id=$row->Book_id;
	$name=$row->Name;
	$memb_id=$row->Member_id;
	$title=$row->Title;
	$due_date=$row->Due_date;
	$return_date=$row->Return_date;
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
			<td><input type="number" name="Book_id" value="<?php echo $book_id; ?>"><input type="hidden" name="txtid" value="0" /></td>
		</tr>
		<tr>	
			<td>Name</td>
			<td><input type="text" name="Name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>	
			<td>Member ID</td>
			<td><input type="number" name="Member_id" value="<?php echo $memb_id; ?>"></td>
		</tr>
		<tr>	
			<td>Title</td>
			<td><input type="text" name="Title" value="<?php echo $title; ?>"></td>
		</tr>
		<tr>	
			<td>Due Date</td>
			<td><input type="date" name="Due_date" value="<?php echo $due_date; ?>"></td>
		</tr>
		<tr>	
			<td>Return Date</td>
			<td><input type="date" name="Return_date" value="<?php echo $return_date; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SAVE" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>