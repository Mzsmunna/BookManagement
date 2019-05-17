<?php
include('dbconnect.php');
//$error="";
if(isset($_POST['btnsave']))
{
	echo "Clicked";
	$memb_id=$_POST['Member_id'];
	$name=$_POST['Name'];
	$address=$_POST['Address'];
	$memb_type=$_POST['Member_type'];

	//if($_POST['textid']=="0")
	//{
		$sql="INSERT INTO member(Member_id, Name, Address, Member_type) VALUES('$memb_id', '$name', '$address', '$memb_type')";
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
			<td>Member ID</td>
			<td><input type="number" name="Member_id"><input type="hidden" name="txtid" value="0" /></td>
		</tr>
		<tr>	
			<td>Name</td>
			<td><input type="text" name="Name"></td>
		</tr>
		<tr>	
			<td>Address</td>
			<td><input type="text" name="Address"></td>
		</tr>
		<tr>	
			<td>Member Type</td>
			<td><input type="text" name="Member_type"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="ADD" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>