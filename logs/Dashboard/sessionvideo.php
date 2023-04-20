<?php
include('dbb.php');
session_start();
$user_check=$_SESSION['emailed'];

$sql = mysqli_query($conn,"SELECT * FROM videotable WHERE category='$user_check'");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$session_uin = $row['uin'];
$session_videoheadline = $row['videoheadline'];
$session_date =$row['date'];
$session_category =$row['category'];
$session_videourl = $row['videourl'];
$session_yec = $row['yec'];


if(!isset($user_check))
{
header("Location: ../login/index.php");
}
?>