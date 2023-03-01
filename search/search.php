<?php

//Database connection
$host_name = '#';
$database = '#';
$user_name = '#';
$password = '#';

$conn = new mysqli($servername, $username, $password, $dbname);


$search = $_POST["search"];

//You can use different things for "username" and "accounts", it always depends on what kind of TABLE / COLUMN you have in your database.
$sql = "SELECT Username FROM accounts WHERE username LIKE '%$search%'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<a href='profile.php?username=" . $row["username"] . "'>" . $row["username"] . "</a><br>";
  } 
} else {
  echo "no results";
}


$conn->close();
?>
