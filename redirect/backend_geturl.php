<?php
include("dbConnect.php");
usleep(1000000);
$name =  $_POST['name'];
$sql = "SELECT url FROM redirect where name = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $redirect_url = $row['url'];
  echo $redirect_url;
}
else
  echo "No User";

?>
