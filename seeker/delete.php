<?php

include('C:\xampp\htdocs\BloodBankManagementSystem\conn.php');
echo $_GET['sid'];

$query1="DELETE FROM `requests` WHERE `requests`.`sid` = '".$_GET['sid'] ."'";
mysqli_query($conn, $query1);
$query="DELETE FROM `seeker` WHERE `seeker`.`sid` = '".$_GET['sid'] ."'";
mysqli_query($conn, $query);
header('location:seeker.php');
?>
