<?php
include_once('database.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM manage WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>