<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Data</title>
</head>
<body>
    <form action="" method="post">
        <div id="wrap">
            <label for="name">Brand Name</label>
            <select name="brand" id="brand">
                <option value="" selected>Select</option>
                <option value="Oppo">Oppo</option>
                <option value="Vivo">Vivo</option>
                <option value="Apple">Apple</option>
                <option value="Readmi">Readmi</option>
            </select>
        </div>

        <div id="wrap">
            <label for="official">Official</label>
            <select name="official" id="offical">
                <option value="" selected>Selecte</option>
                <option value="official">Official</option>
                <option value="unofficial">Unofficial</option>
            </select>
        </div>
        <div>
            <input type="submit" value="submit" name ="insertBtn">
        </div>
    </form>

    <div id="wrap-2">
        
    </div>
</body>
</html>

<?php
$db = mysqli_connect('localhost', 'root', '', 'products');

if(isset($_POST['insertBtn'])){
    $b_name = $_POST['brand'];
    $official = $_POST['official'];
    
    $insert_b_data = $db->query("call brand('$b_name', '$official')");
}
?>

<br><br><br>

 <form action="" method="post">
        <div id="wrap">
            <label for="name">Product Name</label>
           <input type="text" name="p_name" id="p_name">
        </div>

        <div id="wrap">
            <label for="official">Brand Name</label>
            <select name="b_name" id="b_name">
              <?php
              $p_info = $db->query('select * from brand_data');

              while(list( $b_id, $br_name, $offi) =  $p_info->fetch_row()){
                echo "<option value='$b_id'>$br_name</option>";
              }
              ?>
            </select>
        </div>

        <div>
            <input type="submit" value="insert" name ="insertBt">
        </div>
    </form>

<?php
    $db = mysqli_connect('localhost', 'root', '', 'products');

    if(isset($_POST['insertBt'])){
        $p_name = $_POST['p_name'];
        $b_name = $_POST['b_name'];
        
        $insert_b_data = $db->query("call product_info('$p_name', '$b_name')");
    }
?>