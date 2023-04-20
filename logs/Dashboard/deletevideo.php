<?php
include('dbb.php');
if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM videotable WHERE id='$_REQUEST[id]'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>

<?php

// sql to delete a record
$sql = "DELETE FROM videotable WHERE id=$_REQUEST[id]";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Video Successfully DELETED')
location.href='videoinventory.php'</script>";
} else {
    echo "Error deleting Video: " . mysqli_error($conn);
}

mysqli_close($conn);
}

