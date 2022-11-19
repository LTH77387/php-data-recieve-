<?php 
$connect=mysqli_connect('localhost','root','','test_db');
if(!$connect){
   die("Query Fail");
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
if($name == "" || $name==null && $email=="" || $email==null && $phone=="" || $phone==null && $password=="" || $password==null){
    return "error";
}else{
    $query="INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
    $result=mysqli_query($connect,$query);
    if(!$result){
        die("Query Fail");
    }
}




?>