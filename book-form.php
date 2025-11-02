<?php

$con = mysqli_connect('localhost','root','kanishka');
if($con){
    echo "connection successfull";

}
else{
    echo   "no connection";
}

mysqli_select_db($con,'book_db');

$name =$_POST['name'];
$email =$_POST['email'];
$aadhaar =$_POST['aadhaar'];
$phone =$_POST['phone'];
$address=$_POST['address'];
$location =$_POST['location'];
$guests =$_POST['guests'];
$arrivals =$_POST['arrivals'];
$leaving =$_POST['leaving'];

$query = "insert into book_db (name, email ,aadhaar, phone, address, location, guests, arrivals, leaving) 
values ('$name','$email','$aadhaar','$phone','$address','$location','$guests','$arrivals',$leaving')";

echo "$query";

mysqli_query($con, $query);

header('location:home.php');



?>


