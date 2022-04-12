<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Material Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.2/css/bootstrap.min.css" />
    <!-- Custom css -->
    <?php define('SCRIPT_ROOT', 'http://localhost/BKPhone'); ?>
    <link rel="stylesheet" href="<?php echo SCRIPT_ROOT . '/public/css/admin_style_add.css'; ?>">

</head>

<body>
    <div id="content">
        <!-- ========= NAVBAR ============ -->
        <nav>
            <div class="siderbar-header">
                <div class="brand">
                    <img src="<?php echo SCRIPT_ROOT . '/public/images/logo.png'; ?>" alt="">
                    <h2>BKStore</h2>
                </div>
                <div class="close" id="close-btn"><span class="material-icons-sharp">close</span></div>
            </div>
            <div class="sidebar">
                <a href="http://localhost/BKPhone/AdminOrder"><span class="material-icons-sharp">receipt_long</span>
                    <h3>Order</h3>
                </a>
                <a href="http://localhost/BKPhone/AdminBrand"><span class="material-icons-sharp">format_list_bulleted</span>
                    <h3>Brand</h3>
                </a>
                <a href="http://localhost/BKPhone/AdminPhone"><span class="material-icons-sharp">smartphone</span>
                    <h3>Phone</h3>
                </a>
                <a href="http://localhost/BKPhone/AdminCustomer"><span class="material-icons-sharp">person_outline</span>
                    <h3>Customer</h3>
                </a>

                <a href="http://localhost/BKPhone/AdminAnalytic"><span class="material-icons-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>

                <a href="http://localhost/BKPhone/AdminAdd" class="active"><span class="material-icons-sharp">add</span>
                    <h3>Add Product</h3>
                </a>

                <a href="#" id="helloName" class="profile"><span class="material-icons-sharp">waving_hand</span>
                    <h3>Hello, Phuc</h3>
                </a>

                <a href="#" class="logout"><span class="material-icons-sharp">logout</span>
                    <h3>Log Out</h3>
                </a>

            </div>
        </nav>