<?php
include('dbconnect.php');
//$error="";
if(isset($_POST['btnsave']))
{
	echo "Clicked";
	$pub_id=$_POST['Pub_id'];
	$name=$_POST['Name'];
	$address=$_POST['Address'];

	//if($_POST['textid']=="0")
	//{
		$sql="INSERT INTO publisher(Pub_id, Name, Address) VALUES('$pub_id', '$name', '$address')";
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
			<td>Publisher ID</td>
			<td><input type="number" name="Pub_id"><input type="hidden" name="txtid" value="0" /></td>
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
			<td></td>
			<td><input type="submit" value="ADD" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>