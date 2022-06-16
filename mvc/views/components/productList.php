<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PhoneStore</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/BKPhone/public/images/favicon.png">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="http://localhost/BKPhone/public/css/style.css">
    <!-- Modernizr js -->
    <link href="http://localhost/BKPhone/public/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--load all styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- Begin Breadcrumb -->
    <nav id="nav-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="ml125 breadcrumb-item"><a href="http://localhost/BKPhone/Home">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
        </ol>
    </nav>
    <!-- End Breadcrumb -->

    <div id="wrapper">
        <p style="font-weight:600">Danh mục sản phẩm</p>
        <button style="margin-bottom: 5px; margin-right: 5px;
        <?php
        if ($data["category_id"] == 0)
            echo "background-color:red";
        ?>
        " type="button" class="btn btn-primary">
            <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Products/0">Tất cả</a>
        </button>
        <?php
        $countBrand = count($data["allBrand"]);
        for ($i = 0; $i < $countBrand; $i++) {
            echo   '<button style="margin-bottom: 5px; margin-right: 5px;';
            if ($data["category_id"] == $data["allBrand"][$i]["id"]) echo "background-color:red";
            echo '" type="button" class="btn btn-primary">
                    <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Products/' . $data["allBrand"][$i]["id"] . '">' . $data["allBrand"][$i]["name"] . '</a></button>';
        }

        ?>

        <hr>
        <p style="font-weight:600">Bộ lọc</p>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["filter"] == 1)
                echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white;text-decoration:none  " href="http://localhost/BKPhone/Products/<?= $data["category_id"] ?>/1/1">Giá (Cao &gt; Thấp)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["filter"] == 2)
                echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Products/<?= $data["category_id"] ?>/1/2">Giá (Thấp &gt; Cao)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["filter"] == 3)
                echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Products/<?= $data["category_id"] ?>/1/3">Tên (A &gt; Z)</a></button>
        <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["filter"] == 4)
                echo "background-color:red";
            ?>
        " type="button" class="btn btn-primary">
            <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Products/<?= $data["category_id"] ?>/1/4">Tên (Z &gt; A)</a></button>

        <hr>
        <?php
        $countCategoryCheck = 0;
        $countProduct = count($data["allProductBrand"]);
        echo '<p style="font-weight:600">Tổng cộng có ' . $countProduct . ' sản phẩm (Từ: ' . (1 + $data["currentIndex"]) . ' -> ';
        if ($data["currentIndex"] + 12 < $countProduct)
            echo $data["currentIndex"] + 12;
        else echo $countProduct;
        echo ')</p> ';
        ?>
        <hr>
        <div class="showproduct">
            <div class="container-fluid">
                <div class="row">
                    <div class="m-auto">
                        <div class="row d-flex justify-content-center">
                            <?php
                            for ($i = $data["currentIndex"]; $i < $data["currentIndex"] + 12 && $i < $countProduct; $i++) {
                                echo    '<div class="col-md-3 col-sm-6 col-12">';
                                echo    '<div style="margin-bottom:10px" class="card">';
                                echo        '<a href="http://localhost/BKPhone/Detail/p/' . $data["allProductBrand"][$i]["id"] . '">
                                <img class="card-img-top mt-2"
                                    src="' . $data["allProductBrand"][$i]["thumbnail"] . '"
                                    alt="Card image cap">
                            </a>';
                                echo        '<div class="card-body text-center">';
                                echo            '<a id="taga" href="http://localhost/BKPhone/Detail/p/' . $data["allProductBrand"][$i]["id"] . '"><h5 class="card-title">' . $data["allProductBrand"][$i]["name"] . '</h5></a>
                                <hr />';
                                echo            '<span class="card-text">' . number_format($data["allProductBrand"][$i]["final_price"]) . 'đ</span>';
                                echo        '</div>';
                                echo        '<button type="button" class="btnOrder btn btn-danger" onclick="addToCard(' . $data["allProductBrand"][$i]["id"] . ')">Đặt hàng</button>';
                                echo    '</div></div>';
                            }




                            ?>

                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pg-blue justify-content-center">
                                <li class="page-item">
                                    <?php
                                    if ($data["numPages"] > 1) {
                                        if ($data["pages"] == 1) {
                                            echo    '<a href="http://localhost/BKPhone/Products/' . $data["category_id"] . '/1" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                                        } else echo    '<a href="http://localhost/BKPhone/Products/' . $data["category_id"] . '/' . ($data["pages"] - 1) . '" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                                        echo '</li>';
                                        for ($i = 1; $i <= $data["numPages"]; $i++) {
                                            if ($i == $data["pages"]) {
                                                echo '<li class="page-item active"><a class="page-link" href="http://localhost/BKPhone/productList/' . $data["category_id"] . '/' . $i . '">' . $i . '</a></li>';
                                            } else echo '<li><a class="page-link" href="http://localhost/BKPhone/Products/' . $data["category_id"] . '/' . $i . '">' . $i . '</a></li>';
                                        }
                                        echo '<li class="page-item">';
                                        if ($data["pages"] == $data["numPages"]) {
                                            echo '<a href="http://localhost/BKPhone/Products/' . $data["category_id"] . '/' . $data["numPages"] . '" class="page-link"> Next <i class="fa fa-chevron-right"></i></a>';
                                        } else echo '<a href="http://localhost/BKPhone/Products/' . $data["category_id"] . '/' . ($data["pages"] + 1) . '" class="page-link "> Next <i class="fa fa-chevron-right"></i></a>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".btnOrder").click(function() {
                                $("#alertSuccess").html('<p style="background-color: #55e073;padding: 10px;"><i class="fas fa-check-circle"></i>Thêm vào giỏ hàng thành công</p>');
                            });
                        });

                        function addToCard(productId, priceProduct) {
                            var action = "add";
                            $.ajax({
                                url: "http://localhost/BKPhone/Products/addToCart",
                                method: "POST",
                                data: {
                                    action: action,
                                    productId: productId,
                                    num: 1,
                                    priceProduct: priceProduct
                                },
                                success: function(data) {
                                    location.reload();
                                }
                            });
                        }
                    </script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>