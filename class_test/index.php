<?php 
require_once('db_root.php');
if(isset($_POST['manufaBtn'])) {
    $manu_name = $_POST['name'];
    $manu_address = $_POST['add'];
    $manu_contact = $_POST['conta'];

    $insertManufac = $db_root->query("call manufac('$manu_name', '$manu_address', '$manu_contact')");
    header("Location:" . $_SERVER["PHP_SELF"]);
    exit;
}
// insert product info 

if(isset($_POST['productBtn'])) {
    $pro_name = $_POST['pname'];
    $pro_price = $_POST['price'];
    $manu_id = $_POST['manu_id'];

    $insertManufac = $db_root->query("call products('$pro_name', '$pro_price', '$manu_id')");
    header("Location:" . $_SERVER["PHP_SELF"]);
    exit;
}

// delete product 

if(isset($_POST['delBtn'])) {
    $manu_id = $_POST['manu_id'];
    $db_root->query("delete from manufacture where id = $manu_id ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacture Info</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4C4C6C;
            font-size: 1.6em;
        }

        /* Section Styling */
        section {
            background-color: #ffffff;
            padding: 20px;
            width: 100%;
            max-width: 700px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
        }

        /* Input and Select Field Styling */
        .input_box {
            margin-bottom: 15px;
        }

        .input_box label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        .input_box input,
        .input_box select,
        .input_box textarea {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .input_box input:focus,
        .input_box select:focus,
        .input_box textarea:focus {
            outline: none;
            border-color: #007bff;
            background-color: #fff;
        }

        .input_box textarea {
            resize: vertical;
            height: 120px;
        }

        /* Button Styling */
        .btn {
            text-align: center;
        }

        .btn input[type="submit"] {
            padding: 15px 30px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Table Styling */
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            section {
                padding: 15px;
            }

            .input_box input,
            .input_box select,
            .input_box textarea {
                font-size: 14px;
                padding: 10px;
            }

            .btn input[type="submit"] {
                padding: 12px 25px;
                font-size: 14px;
            }

            table th, table td {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <section>
        <h2>Manufacture Info</h2>
        <form action="" method="post">
            <div class="input_box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter manufacturer name" required>
            </div>
            <div class="input_box">
                <label for="add">Address</label>
                <textarea name="add" id="add" placeholder="Enter manufacturer address" required></textarea>
            </div>
            <div class="input_box">
                <label for="conta">Contact</label>
                <input type="number" name="conta" id="conta" placeholder="Enter contact number" required>
            </div>
            <div class="btn">
                <input type="submit" value="Insert Manufacturer" name="manufaBtn">
            </div>
        </form>
    </section>

    <section>
        <h2>Product Form</h2>
        <form action="" method="post">
            <div class="input_box">
                <label for="pname">Product Name</label>
                <input type="text" name="pname" id="pname" placeholder="Enter product name" required>
            </div>
            <div class="input_box">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" placeholder="Enter product price" required>
            </div>
            <div class="input_box">
                <label for="manu_id">Brand</label>
                <select name="manu_id" id="manu_id" required>
                    <?php 
                    $getManufa = $db_root->query("select * from manufacture");
                    while(list($manufa_Id,$manu_name) = $getManufa->fetch_row()) {
                        echo "<option value='$manufa_Id'>$manu_name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="btn">
                <input type="submit" value="Insert Product" name="productBtn">
            </div>
        </form>
    </section>

    <section>
        <h2>Delete Product</h2>
        <form action="" method="post">
            <div class="input_box">
                <label for="manu_id">Brand</label>
                <select name="manu_id" id="manu_id" required>
                    <?php 
                    $getManufa = $db_root->query("select * from manufacture");
                    while(list($manufa_Id,$manu_name) = $getManufa->fetch_row()) {
                        echo "<option value='$manufa_Id'>$manu_name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="btn">
                <input type="submit" value="Delete" name="delBtn">
            </div>
        </form>
    </section>

    <section>
        <h2>Product List</h2>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Brand Name</th>
                <th>Brand Address</th>
                <th>Contact</th>
            </tr>
            <?php 
            $pro_view = $db_root->query('select * from products_details');

            if($pro_view->num_rows > 0) {
                while(list($pro_name, $pro_price, $brand_name, $brand_address, $brand_contact) = $pro_view->fetch_row()) {
                    echo "
                    <tr>
                        <td>$pro_name</td>
                        <td>$pro_price</td>
                        <td>$brand_name</td>
                        <td>$brand_address</td>
                        <td>$brand_contact</td>
                    </tr>
                    ";
                }
            } else {
                echo "<tr><td colspan='5'>No data found</td></tr>";
            }
            ?>
        </table>
    </section>
    
</body>
</html>
   