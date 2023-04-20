<?php 
include('dbb.php');
if(isset($_REQUEST['id'])){
    $sql="SELECT * FROM blogtable WHERE id='$_REQUEST[id]'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>
<?php 
$sql="DELETE FROM blogtable WHERE id=$_REQUEST[id]";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Record deleted successfully')
    location.href='newstable.php'</script>";
}
}
?>