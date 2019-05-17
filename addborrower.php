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
		$sql="INSERT INTO borrower(Book_id, Name, Member_id, Title, Due_date, Return_date) VALUES('$book_id', '$name', '$memb_id', '$title', '$due_date', '$return_date')";
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
			<td>Name</td>
			<td><input type="text" name="Name"></td>
		</tr>
		<tr>	
			<td>Member ID</td>
			<td><input type="number" name="Member_id"></td>
		</tr>
		<tr>	
			<td>Title</td>
			<td><input type="text" name="Title"></td>
		</tr>
		<tr>	
			<td>Due Date</td>
			<td><input type="date" name="Due_date"></td>
		</tr>
		<tr>	
			<td>Return Date</td>
			<td><input type="date" name="Return_date"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="ADD" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>