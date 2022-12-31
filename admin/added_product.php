<?php
$folder="../img/product/";
$code=isset($_POST['txtcode'])? $_POST['txtcode']:'';
$name=isset($_POST['txtname'])? $_POST['txtname']:'';
$img=isset($_FILES['files']['name'])? $_FILES['files']['name']:'';
$pricein=isset($_POST['txtpricein'])? $_POST['txtpricein']:'';
$priceout=isset($_POST['txtpriceout'])? $_POST['txtpriceout']:'';
$qty=isset($_POST['txtqty'])? $_POST['txtqty']:'';
$cate=isset($_POST['txtcate'])? $_POST['txtcate']:'';
$size=isset($_POST['txtsize'])? $_POST['txtsize']:'';
$colour=isset($_POST['txtcolour'])? $_POST['txtcolour']:'';
$country=isset($_POST['txtcountry'])? $_POST['txtcountry']:'';
$descrip=isset($_POST['txtdescrip'])? $_POST['txtdescrip']:'';

include_once('config.php');
move_uploaded_file($_FILES['files']['tmp_name'],$folder.$img);
$sql="INSERT INTO `tbl_products`(`pro_id`, `pro_code` , `pro_name`, `img`, `size`, `price`) 
      VALUES (NULL,'$code','$name','$img','$size','$priceout')";
$retval=mysqli_query($conn, $sql);
if(!$retval){
    die('could not load...'.mysqli_error($conn));
}
$last_id = mysqli_insert_id($conn);
$sql2="INSERT INTO `tblpro_details`(`pro_detail_id`, `pro_id` , `cate`, `colour`, `country`, `description`, `price_in`, `qty`) 
VALUES (NULL,'$last_id','$cate','$colour','$country','$descrip','$pricein','$qty')";
$retval=mysqli_query($conn, $sql2);
if(!$retval){
    die('could not load...'.mysqli_error($conn));
}
include_once('index.php');
?>