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
		$sql="UPDATE member SET Member_id='$memb_id', Name='$name', Address='$address', Member_type='$memb_type' WHERE Name='{$_GET['id']}' ";
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
	$sql="SELECT * FROM member where Name='{$_GET['id']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$memb_id=$row->Member_id;
	$name=$row->Name;
	$address=$row->Address;
	$memb_type=$row->Member_type;
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
			<td><input type="number" name="Member_id" value="<?php echo $memb_id; ?>"><input type="hidden" name="txtid" value="0" /></td>
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
			<td>Member Type</td>
			<td><input type="text" name="Member_type" value="<?php echo $memb_type; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SAVE" name="btnsave"></td>
			<td><input type="submit" value="CANCEL" name="btncan"></td>
		</tr>
	</table>
</form>