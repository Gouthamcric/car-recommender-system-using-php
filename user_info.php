<?php 
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
//$values="goutham,goutham@gmail.com,9340554408";
$array=explode(",",$values);
$querry="insert into user_info(name,email,phone) values('$array[0]','$array[1]','$array[2]') ";
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

?>