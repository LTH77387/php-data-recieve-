<?php
include 'db.php';
if(!$connect){
    die("Query fail");
}
 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');
 
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
 
 // Populate name from JSON $obj array and store into $name.
$name = $obj['name'];
 
// Populate email from JSON $obj array and store into $email.
$email = $obj['email'];
 
// Populate phone number from JSON $obj array and store into $phone_number.
$phone_number = $obj['phone'];
$password=$obj['password'];
$query="INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone_number','$password')";
$result=mysqli_query($connect,$result);
if($result){
    $msg="data inserted!";
    $json = json_encode($msg);
}else{
    echo "try again!";
}


?>