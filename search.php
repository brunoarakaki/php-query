<?php
include_once 'helper.php';

// Create connection
$servername = "104.198.224.126";
$username = "root";
$password = "root";
$dbname = "query";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// QUERY REQUEST
if(isset($_GET['query'])){ //check if form was submitted
  $q = $_GET['query'];
  $sql = "SELECT * FROM userinfo WHERE cpf='" . $q .
  "' OR email='" . $q . "' OR phone='" . $q . "'";
  $conn->query($sql);
  $result = $conn->query($sql);
}

// GET RESULTS
if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();
  //hide fields
  $user['email'] = hide_email($user['email']);
  $user['phone'] = hide_phone($user['phone']);
  $user['cpf'] = hide_cpf($user['cpf']);
  //display result json encoded
  echo json_encode($user);
} else {
    echo "{}"; //empty result
}

$conn->close();
?>
