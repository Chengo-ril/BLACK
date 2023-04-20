<?php
include('dbb.php');
session_start();
$user_check=$_SESSION['emailed'];

$sql = mysqli_query($conn,"SELECT * FROM form_register WHERE emailed='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$session_fullname =$row['fullname'];
$session_uin =$row['uin'];
$session_emailed = $row['emailed'];
$session_phone = $row['phone']; 
$session_dob = $row['dob'];
$session_passport = $row['passport'];
$session_gender = $row['gender'];
$session_civic = $row['civic'];


if(!isset($user_check))
{
header("Location: ../index.php");
}
?>

