<?php
include('dbconnect.php');
$mysqli = NEW mysqli("localhost", "root", "root123", "library_management");
$outputb = NULL;
$outputt = NULL;
$outputa = NULL;
$r=0;

if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM users WHERE ID LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$user_id = $rows['ID'];
			$username = $rows['Username'];
			$pass = $rows['Password'];
			$usertype = $rows['Usertype'];

			$outputt .= "From Table USER:<br /><br />USER ID: $user_id<br />Username: $username<br />Password: $pass<br />User Type: $usertype<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM users WHERE Username LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$user_id = $rows['ID'];
			$username = $rows['Username'];
			$pass = $rows['Password'];
			$usertype = $rows['Usertype'];

			$outputt .= "From Table USER:<br /><br />USER ID: $user_id<br />Username: $username<br />Password: $pass<br />User Type: $usertype<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM users WHERE Usertype LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$user_id = $rows['ID'];
			$username = $rows['Username'];
			$pass = $rows['Password'];
			$usertype = $rows['Usertype'];

			$outputt .= "From Table USER:<br /><br />USER ID: $user_id<br />Username: $username<br />Password: $pass<br />User Type: $usertype<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}

?>

<form action="", method="post">
	<input type="text" name="searchbox" placeholder="Search here"><br><br>
	<input type="submit" name="searchbtn" value="Search"><br><br>
</form>

<?php
 if(isset($_POST['searchbtn']))
 {
	if($r==1)
	{
		echo " Below  Results were Found! :D";
	}else{
		echo " NO Result Found! :(";
	}
}
?>
<br><br>
<?php
 echo "$outputb";
 echo "$outputt";
 echo "$outputa";

?>