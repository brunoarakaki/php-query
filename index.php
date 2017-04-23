<?php
$servername = "104.198.224.126";
$username = "root";
$password = "root";
$dbname = "query";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get items from db
$sql = "SELECT * FROM userinfo";
$result = $conn->query($sql);

// Use html template to display items
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      echo("CPF: " . $row["cpf"]);
      echo("\tName: " . $row["name"]);
      echo("\tPhone: " . $row["phone"]);
      echo("\tEmail: " . $row["email"]);
      echo("</br>");
  }
} else {
    echo "Empty list.";
}

// Get html and display it, replacing selected items from db
$html_index = file_get_contents(__DIR__ . '/index.html');
echo($html_index);

$conn->close();
?>
