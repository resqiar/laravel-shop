<?php

    // import helper
    include_once("function/helper.php");
    
    $page = isset($_GET['page']) ? $_GET['page'] : false // jika page ada maka masukkan 'page' dalam variabel // jika tidak maka throw false
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL."css/indexStyle.css";?>" type="text/css">
    <title>Res | Electronic Store</title>
</head>
<body>
    <div class="container">

        <!-- NAV BAR -->
        <div id="header">
            <a href= "<?php echo BASE_URL."index.php";?>">
                <img src="<?php echo BASE_URL."images/logo.png"; ?>" alt="" />
            </a>

            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                </div>

                <!-- CART LINK -->
                <a href= "<?php echo BASE_URL."index.php?page=keranjang";?>" id="btn_keranjang">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" alt="" />
                </a>
            </div>
        </div>

        <!-- CONTENT BODY -->
        <div id="content">

            <!-- DYNAMIC DONTENT -->
            <?php
                $file = "$page.php";

                if(file_exists($file)){
                    include_once($file);
                }else{
                    echo "404 Error Page Not Found!";
                }

            ?>

        </div>

        <!-- FOOTER COMPONENT -->
        <div id="footer">
            <p> Copyright Weshop 2020 </p>
        </div>

    </div>
</body>
</html>