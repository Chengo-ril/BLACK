<?php
include('dbb.php');
session_start();
$user_check=$_SESSION['emailed'];

$sql = mysqli_query($conn,"SELECT * FROM blogtable WHERE category='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$session_uin = $row['uin'];
$session_date =$row['date'];
$session_headline = $row['headline'];
$session_category =$row['category'];
$session_cover = $row['cover'];
$session_photocredit = $row['photocredit'];
$session_embed = $row['embed'];
$session_content = $row['content'];
$session_blockquote = $row['blockquote'];
$session_link = $row['link'];
$session_post_view = $row['post_view'];

if(!isset($user_check))
{
header("Location: ../login/index.php");
}
?>