<?php
include_once('config.php');
$id=$_GET['Proid'];
$sql="DELETE t1,t2 FROM tbl_products AS t1 INNER JOIN tblpro_details AS t2 ON t1.pro_id=t2.pro_id WHERE t1.pro_id='$id'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die('error'.mysqli_error($conn));
}
header("location: index.php");
?>