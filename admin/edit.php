<?php 
include_once('config.php');
$ID=isset($_REQUEST['Proid']) ? $_REQUEST['Proid']:'';
$query = "SELECT a.pro_code, a.pro_name, a.img, a.size, a.price, b.price_in, b.cate, b.colour, b.country, b.description, b.qty
            FROM tbl_products a, tblpro_details b WHERE a.pro_id='$ID' AND b.pro_id='$ID'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit Product</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <?php
    if(isset($_POST['delete'])){
        include_once("delete.php");
    }
    else if(isset($_POST['update'])){
        include_once("update.php");
    }
    else{
    ?>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Edit product Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Product Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtcode" value="<?php echo $row['pro_code']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Product Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtname" value="<?php echo $row['pro_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Image</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="files">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Price In ($)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtpricein" value="<?php echo $row['price_in']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Price Out ($)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtpriceout" value="<?php echo $row['price']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Qty</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtqty" value="<?php echo $row['qty']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtcate" value="<?php echo $row['cate']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Size</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="txtsize">
                                            <!-- <option disabled="disabled" selected="selected">Choose size</option> -->
                                            <option selected value="<?php echo $row['size']; ?>"><?php echo $row['size']; ?></option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Colour</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtcolour" value="<?php echo $row['colour']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtcountry" value="<?php echo $row['country']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="txtdescrip" value="<?php echo $row['description']; ?>">
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--green" type="submit" name="update">Update</button>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="delete">Delete</button>
                        </div>
                    </form>
                    <br>
                    <button onclick="location.href='index.php'" class="btn btn--radius-2 btn--blue">Back</button>
                    <?php
        }
    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->