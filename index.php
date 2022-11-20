<?php 
$connect=mysqli_connect('localhost','root','','test_db');
if(!$connect){
   die("Query Fail");
}
$encodeData=file_get_contents('php://input');
$decodeData=json_decode($encodeData,true);
$name=$decodeData['name'];
$email=$decodeData['email'];
$phone=$decodeData['phone'];
$password=$decodeData['password'];
$query="INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
$result=mysqli_query($connect,$query);
if($result){
    $msg="Registered Successfully!";
}else{
    $msg="Please try again....";
}
$res[]=array("Message:"=>$msg);
echo json_encode($res);




?>