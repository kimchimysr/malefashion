<?php
$servername="localhost";
$username="root";
$pws="";
$db="db_malefashion";

// connection
$conn=mysqli_connect($servername, $username, $pws);
$check=mysqli_select_db($conn,$db);

// check connect to database
if(!$check){
    die("connection failed...".mysqli_error($conn));
}
//echo"connect successful";
?>