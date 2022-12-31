<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <?php
    include_once('config.php');
    ?>
    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 14px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            font-size: 14px;
            padding: 10px 20px;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
            font-size: 14px;
            padding: 10px 20px;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>

<body>
    <a href="../index.php"><button class="button button1">Home</button></a>
    <a href="add_product.php"><button class="button button1">Add New Product</button></a>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Image</th>
                <th>Size</th>
                <th>Price</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * From tbl_products ORDER BY pro_id";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <tr>
                        <td align="center"><?php echo $row['pro_id']; ?></td>
                        <td align="center"><?php echo $row['pro_code']; ?></td>
                        <td align="center"><?php echo $row['pro_name']; ?></td>
                        <td align="center"><img src="../img/product/<?php echo $row['img']; ?>" width=100></td>
                        <td align="center"><?php echo $row['size']; ?></td>
                        <td align="center"><?php echo $row['price']; ?></td>
                        <td align="center">
                            <a href="edit.php?Proid=<?php echo $row["pro_id"]; ?>"><button class="button button2">Edit</button></a> |
                            <a href="delete.php?Proid=<?php echo $row["pro_id"]; ?>"><button class="button button3">Delete</button></a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Image</th>
                <th>Size</th>
                <th>Price</th>
                <th>Options</th>
            </tr>
            </tr>
        </tfoot>
    </table>
</body>

</html>