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
		$sql="UPDATE publisher SET Pub_id='$pub_id', Name='$name', Address='$address' WHERE Name='{$_GET['id']}' ";
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
	$sql="SELECT * FROM publisher where Name='{$_GET['id']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$pub_id=$row->Pub_id;
	$name=$row->Name;
	$address=$row->Address;
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
			<td><input type="number" name="Pub_id" value="<?php echo $pub_id; ?>"><input type="hidden" name="txtid" value="0" /></td>
		</tr>
		<tr>	
			<td>Name</td>
			<td><input type="text" name="Name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>	
			<td>Address</td>
			<td><input type="text" name="Address" value="<?php echo $address; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SAVE" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>