<?php
include('dbconnect.php');
$mysqli = NEW mysqli("localhost", "root", "root123", "library_management");
$outputb = NULL;
$outputt = NULL;
$outputa = NULL;
$r=0;

if(isset($_POST['searchbtn']))
{
	if('searchbox'=="")
	{
			echo ("Type Someting");
}
else{

	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM book WHERE Book_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$title = $rows['Title'];
			$author = $rows['Author'];
			$price = $rows['Price'];
			$available = $rows['Available'];

			$outputb .= "From Table BOOK:<br /><br />Book ID: $book_id<br />Title: $title<br />Author: $author<br />Price: $price<br />Available: $available<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputb = "Book No results";
	}
}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM book WHERE Title LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$title = $rows['Title'];
			$author = $rows['Author'];
			$price = $rows['Price'];
			$available = $rows['Available'];

			$outputt .= "From Table BOOK:<br /><br />Book ID: $book_id<br />Title: $title<br />Author: $author<br />Price: $price<br />Available: $available<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM book WHERE Author LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$title = $rows['Title'];
			$author = $rows['Author'];
			$price = $rows['Price'];
			$available = $rows['Available'];

			$outputa .= "From Table BOOK:<br /><br />Book ID: $book_id<br />Title: $title<br />Author: $author<br />Price: $price<br />Available: $available<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputa = "Author No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM borrower WHERE Book_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$name = $rows['Name'];
			$memb_id = $rows['Member_id'];
			$title = $rows['Title'];
			$due_date = $rows['Due_date'];
			$return_date = $rows['Return_date'];

			$outputt .= "From Table BORROER:<br /><br />Book ID: $book_id<br />Name: $name<br />Member ID: $memb_id<br />Title: $title<br />Due Date: $due_date<br />Return Date: $return_date<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM borrower WHERE Member_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$name = $rows['Name'];
			$memb_id = $rows['Member_id'];
			$title = $rows['Title'];
			$due_date = $rows['Due_date'];
			$return_date = $rows['Return_date'];

			$outputt .= "From Table BORROER:<br /><br />Book ID: $book_id<br />Name: $name<br />Member ID: $memb_id<br />Title: $title<br />Due Date: $due_date<br />Return Date: $return_date<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM borrower WHERE Name LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$name = $rows['Name'];
			$memb_id = $rows['Member_id'];
			$title = $rows['Title'];
			$due_date = $rows['Due_date'];
			$return_date = $rows['Return_date'];

			$outputt .= "From Table BORROER:<br /><br />Book ID: $book_id<br />Name: $name<br />Member ID: $memb_id<br />Title: $title<br />Due Date: $due_date<br />Return Date: $return_date<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM borrower WHERE Title LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$name = $rows['Name'];
			$memb_id = $rows['Member_id'];
			$title = $rows['Title'];
			$due_date = $rows['Due_date'];
			$return_date = $rows['Return_date'];

			$outputt .= "From Table BORROER:<br /><br />Book ID: $book_id<br />Name: $name<br />Member ID: $memb_id<br />Title: $title<br />Due Date: $due_date<br />Return Date: $return_date<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM publisher WHERE Pub_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$pub_id = $rows['Pub_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];

			$outputt .= "From Table PUBLISHER:<br /><br />Publisher ID: $pub_id<br />Name: $name<br />Address: $address<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM publisher WHERE Name LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{

			$r=1;
			$pub_id = $rows['Pub_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];

			$outputt .= "From Table PUBLISHER:<br /><br />Publisher ID: $pub_id<br />Name: $name<br />Address: $address<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM publisher WHERE Address LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$pub_id = $rows['Pub_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];

			$outputt .= "From Table PUBLISHER:<br /><br />Publisher ID: $pub_id<br />Name: $name<br />Address: $address<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Member_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Name LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Address LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Member_type LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

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