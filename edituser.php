<?php
include('dbconnect.php');
//$error="";
if(isset($_POST['btnsave']))
{
	echo "Clicked";
	$user_id=$_POST['ID'];
	$username=$_POST['Username'];
	$pass=$_POST['Password'];
	$usertype=$_POST['Usertype'];

	//if($_POST['textid']=="0")
	//{
		$sql="UPDATE users SET ID='$user_id', Username='$username', Password='$pass', Usertype='$usertype' WHERE Username LIKE '{$_GET['id']}' ";
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
	$sql="SELECT * FROM users where Username LIKE '{$_GET['id']}' ";
	$query=mysql_query($sql);
	$row=mysql_fetch_object($query);
	$user_id=$row->ID;
	$username=$row->Username;
	$pass=$row->Password;
	$usertype=$row->Usertype;
}
if(isset($_POST['btncan']))
{
	header('Refresh:0; home.php');
}
?>

<form action="" method="post">
	<table>
		<tr>
			<td>User ID</td>
			<td><input type="number" name="ID" value="<?php echo $user_id; ?>"><input type="hidden" name="txtid" value="0" /></td>
		</tr>
		<tr>	
			<td>User Name</td>
			<td><input type="text" name="Username" value="<?php echo $username; ?>"></td>
		</tr>
		<tr>	
			<td>Password</td>
			<td><input type="text" name="Password" value="<?php echo $pass; ?>"></td>
		</tr>
		<tr>	
			<td>User Type</td>
			<td>
				<select name="Usertype">
					<option value="Admin">Admin</option>
					<option value="Student">Student</option>
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