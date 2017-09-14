<!DOCTYPE html>
<html>
    <head>
        <title>Updating database...&middot; KeasyShoppe</title>
    </head>
    <body>
        <?php 
        $con = mysqli_connect('localhost', 'admin', 'keasyshoppe', 'db_testKeasy2');
        if (!$con) {
            die("Unable to connect to database." . mysqli_error($con));
        }
        mysqli_select_db($con, "db_testKeasy2");
        $id = intval($_GET['id']);
        $name = $_GET['name'];
        $qty = $_GET['qty'];
        $price = $_GET['price'];

        $name = mysqli_escape_string($name);
        $qty = mysqli_escape_string($qty);
        $price = mysqli_escape_string($price);

        $sql = "UPDATE tblTest SET prodName = '" . $name . "' WHERE prodID = " . $id;
        $result = mysqli_query($con, $sql) or die("Failed to execute query." . mysqli_error($con));

        $sql = "SELECT * FROM tblTest";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr data-prodID='{$row["prodID"]}'>" .
                    "<td><span class='sad-row-content_name'>{$row['prodName']}</span><input value='{$row["prodName"]}' class='hide sad-row-content_name-editor' type='text'></td>" .
                    "<td><span class='sad-row-content_qty'>{$row['prodQty']}</span><input type='text' value='{$row["prodQty"]}' class='sad-row-content_qty-editor hide'></td>" .
                    "<td><span class='sad-row-content_price'>{$row['prodPrice']}</span><input type='text' value='{$row['prodPrice']}' class='sad-row-content_price-editor hide'></td>" .
                    "<td style='padding: 0 !important;'><button onclick='showRowEditors({$row["prodID"]});var btnSave = this;' class='right btn-flat waves-effect sad-btn_showEditors'><i class='material-icons'>edit</i></button>" .
                    "<button onclick='showRowEditors({$row["prodID"]});saveEdits({$row["prodID"]})' class='right btn-flat waves-effect sad-btn_saveEdits hide'><i class='material-icons'>save</i></button></td>" .
                    '</tr>';
            }
        }
        else {
            echo "0 results";
        }

        mysqli_close($connection);
        ?>
    </body>
</html>