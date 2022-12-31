<?php
include_once('config.php');
$ID = isset($_REQUEST['Proid']) ? $_REQUEST['Proid'] : '';

$folder="../img/product/";
$code1=isset($_POST['txtcode'])? $_POST['txtcode']:'';
$name1=isset($_POST['txtname'])? $_POST['txtname']:'';
$img1=isset($_FILES['files']['name'])? $_FILES['files']['name']:'';
$pricein1=isset($_POST['txtpricein'])? $_POST['txtpricein']:'';
$priceout1=isset($_POST['txtpriceout'])? $_POST['txtpriceout']:'';
$qty1=isset($_POST['txtqty'])? $_POST['txtqty']:'';
$cate1=isset($_POST['txtcate'])? $_POST['txtcate']:'';
$size1=isset($_POST['txtsize'])? $_POST['txtsize']:'';
$colour1=isset($_POST['txtcolour'])? $_POST['txtcolour']:'';
$country1=isset($_POST['txtcountry'])? $_POST['txtcountry']:'';
$descrip1=isset($_POST['txtdescrip'])? $_POST['txtdescrip']:'';

include_once('config.php');
move_uploaded_file($_FILES['files']['tmp_name'], $folder.$img1);

$sql = "UPDATE tbl_products a, tblpro_details b
        SET a.pro_code='$code1', a.pro_name='$name1', a.img='$img1', a.size='$size1', a.price='$priceout1',
            b.cate='$cate1', b.colour='$colour1', b.country='$country1', b.description='$descrip1', b.price_in='$pricein1',
            b.qty='$qty1' WHERE a.pro_id='$ID' AND b.pro_id='$ID'";
$retval = mysqli_query($conn, $sql);
if(!$retval){
    die('could not add!'.mysqli_error($conn));
}
header("location: index.php");
?>