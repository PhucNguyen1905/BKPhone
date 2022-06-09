<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redstore</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php define('SCRIPT_ROOT', 'http://localhost/BKPhone'); ?>
    <link rel="stylesheet" href="<?php echo SCRIPT_ROOT . '/public/css/product_detail_style.css'; ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">


        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./HCMUT_official_logo.png" alt="" width="40px" height="40px"> BachKhoaStore
                </div>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="./images/cart.png" alt="" width="30px" height="30px">
            </div>
        </div>
    </div>

    <div class="small-container single-product">
        <br>

        <h4><?= $data["productItem"]["name"] ?> - Sản phẩm chính hãng</h4>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half"></i> (67 đánh giá)
        <div class="row">
            <div class="col-3">
                <img src="<?= $data["productItem"]["thumbnail"] ?>" alt="" width="100%" id="product-img">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="<?= $data["productItem"]["thumbnail"] ?>" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="<?= $data["productItem"]["thumbnail"] ?>" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="<?= $data["productItem"]["thumbnail"] ?>" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="<?= $data["productItem"]["thumbnail"] ?>" alt="" width="100%" class="small-img">
                    </div>

                </div>
                <div class="situation">
                    <h3 class="situation-title">Tình trạng máy</h3>
                    <div class="situation-content">
                        <p style="color: black; font-size: 15px">Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất Bảo hành 18
                            tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi phần cứng từ nhà
                            sản xuất.</p>
                    </div>
                </div>

            </div>
            <div class="col-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $data["productItem"]["name"] ?></li>
                    </ol>
                </nav>
                <div class="price"><?= number_format($data["productItem"]["final_price"], 0, ',', '.') ?> VND</div>
                <br>

                <div class="endow">
                    <h3>
                        Mô tả sản phẩm
                    </h3>
                    <div class="ex_endow" id="ex_endow">
                        <p style="color:black; padding: 15px; text-align: center;"> &emsp; &emsp; &emsp;
                            <?= $data["productItem"]["description"] ?></p>
                        <!-- <ul>
                            <li style="color: red"><i class="fa-solid fa-gift"></i>Khuyến mãi giá chỉ còn 4.290.000đ trong 2 ngày 19-20/3</li>
                            <li><i class="fa-solid fa-gift"></i>Tặng gói bảo hành rơi vỡ – vào nước 12 tháng( chi tiết)</li>
                            <li><i class="fa-solid fa-gift"></i>Thu cũ đổi mới – Trợ giá 1.000.000đ ( chi tiết)</li>
                            <li><i class="fa-solid fa-gift"></i>Giảm giá 5% khi mua phụ kiện</li>
                            <li><i class="fa-solid fa-gift"></i>Tặng phiếu mua hàng trị giá 200.000đ sử dụng khi mua laptop.</li>
                            <li><i class="fa-solid fa-gift"></i>Giảm thêm 2 triệu khi thanh toán qua VNPAY-QR</li>
                            <li><i class="fa-solid fa-gift"></i>Giảm thêm 2 triệu qua galaxy gift ( xem chi tiết). Không có mã Gift giảm 1.500.000đ</li>
                            <li style="font-weight: bold;"><i class="fa-solid fa-gift"></i>Gói dịch vụ ưu tiên cao cấp và phòng chờ hạng thương gia (xem chi tiết)</li>
                        </ul> -->
                    </div>
                </div>
                <div class="endow">
                    <h3>
                        Ưu đãi
                    </h3>
                    <div class="ex_endow">
                        <ul>
                            <li style="color: red"><i class="fa-solid fa-gift"></i>Khuyến mãi giá chỉ còn 4.290.000đ
                                trong 2 ngày 19-20/3</li>
                            <li><i class="fa-solid fa-gift"></i>Tặng gói bảo hành rơi vỡ – vào nước 12 tháng( chi tiết)
                            </li>
                            <li><i class="fa-solid fa-gift"></i>Thu cũ đổi mới – Trợ giá 1.000.000đ ( chi tiết)</li>
                            <!-- <li><i class="fa-solid fa-gift"></i>Giảm giá 5% khi mua phụ kiện</li>
                            <li><i class="fa-solid fa-gift"></i>Tặng phiếu mua hàng trị giá 200.000đ sử dụng khi mua laptop.</li>
                            <li><i class="fa-solid fa-gift"></i>Giảm thêm 2 triệu khi thanh toán qua VNPAY-QR</li> -->
                            <li><i class="fa-solid fa-gift"></i>Giảm thêm 2 triệu qua galaxy gift ( xem chi tiết). Không
                                có mã Gift giảm 1.500.000đ</li>
                            <li style="font-weight: bold;"><i class="fa-solid fa-gift"></i>Gói dịch vụ ưu tiên cao cấp
                                và phòng chờ hạng thương gia (xem chi tiết)</li>
                        </ul>
                    </div>
                </div>


                <button type="submit" class="add-to-cart button alt">
                    <span>
                        Mua ngay
                        <span class="subcart">(Nhận tại cửa hàng hoặc giao tại nhà)</span>
                    </span>
                </button>
                <br>
                <br>
                <br>
                <button type="submit" class="add-to-cart button alt" style="background: #007eaf; width: 49%">
                    <span>
                        Trả góp 0%
                        <span class="subcart">(Xét duyệt nhanh chóng qua điện thoại)</span>
                    </span>
                </button>
                <button type="submit" class="add-to-cart button alt"
                    style="background: #007eaf; width: 49%; margin-left: 2%;">
                    <span>
                        Trả góp qua thẻ
                        <span class="subcart">(Visa, Thẻ ngân hàng, Momo,...)</span>
                    </span>
                </button>


            </div>
            <div class="col-3">
                <div class="location">
                    <h3> <i class="fa-solid fa-location-dot"></i>Store lacation</h3>
                    <div class="text-widget">
                        <ul>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>111 Trần
                                Đăng Ninh, Hà Nội <span style="color: red;">09.7673.2468</span> </li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>446 Xã
                                Đàn, Hà Nội <span style="color: red;">09.7673.2468</span></li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>118 Thái
                                hà, Hà Nội <span style="color: red;">09.7673.2468</span></li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>312
                                Nguyễn Trãi, Trung Văn, Nam Từ Liêm, Hà Nội – Gần chợ Phùng Khoang <span
                                    style="color: red;">09.7673.2468</span></li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>380 Trần
                                Phú, TP.Thanh Hóa</li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>107
                                Nguyễn Hữu Tiến – TT Đồng Văn – Duy Tiên – Hà Nam <span
                                    style="color: red;">09.7673.2468</span></li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>82 Lạch
                                Tray, Hải Phòng <span style="color: red;">09.7673.2468</span></li>
                            <li><i class="fa-solid fa-location-dot" style="color: rgba(20, 136, 219, 255)"></i>Viet Nam
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="location">
                    <h3> <i class="fa-solid fa-location-dot"></i>Ưu đãi trả góp <i class="fa-solid fa-heart"></i></h3>
                    <div class="text-widget">
                        <ul>
                            <li style="color: red"><i class="fa-solid fa-gift"></i>Trả trước 20% nhận máy sau 15 phút
                            </li>
                            <li><i class="fa-solid fa-gift"></i>Chỉ cần bằng lái xe & chứng minh thư</li>
                            <li><i class="fa-solid fa-gift"></i>Hỗ trợ trả góp các ngân hàng trả góp HD SaiSon, MB
                                MCredit, Fe Credit</li>




                        </ul>
                    </div>
                </div>
                <div class="phone-number">
                    <div class="register-phone">
                        <div class="register-phone-title">

                            <h3 style="color: white; font-size: 18px;"><i class="fa-solid fa-headphones"></i> Contact
                                our staff</h3>

                        </div>
                        <div class="register-phone-body" style="position: relative;">
                            <input type="text" maxlength="10" class="form-control"
                                placeholder="Tư vấn qua số điện thoại">
                            <button type="button">Gửi</button>
                        </div>
                    </div>

                </div>
                <div class="shop-contact">
                    <ul>
                        <li><i class="fa-solid fa-phone" style="color: red;"></i> Gọi <span
                                style="color: red;">0858114558</span> để được tư vấn (Từ 8:00-21:00)</li>
                        <li><i class="fa-solid fa-phone" style="color: red;"></i> Gọi <span
                                style="color: red;">0858114558</span> để được tư vấn (Từ 8:00-21:00)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>


    <div class="small-container">
        <h2 class="title">Related products</h2>
        <div class="row">
            <?php $i = 1;
            foreach ($data['allProductRelated'] as $item) { ?>
            <a href="/BKPhone/ProductDetail/viewProduct/<?= $item["id"] ?>" class="ra">
                <div class="col-4">
                    <img src="<?= $item["thumbnail"] ?>" alt="">
                    <h4><?= $item["name"] ?></h4>
                    <p><?= number_format($item["final_price"], 0, ',', '.') ?> VND</p>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                </div>
            </a>
            <?php $i = $i + 1;
            } ?>

        </div>


    </div>
    <br>
    <br>
    <div class="small-container">
        <h2 class="title">Comments about product</h2>
        <form id="feedbackForm"
            style="display: flex; flex-direction: column; justify-content: center; align-items: center;"
            action="/BKPhone/ProductDetail/pushFeedback/<?= $data['productItem']['id'] ?>" method="post">
            <input type='hidden' name='userid' value='1' />
            <input type='hidden' name='productid' value="<?= $data['productItem']['id'] ?>" />
            <div class='form-group pb-2'>
                <textarea class='form-control' style="font-size: 18px!important; height: 120px; width: 500px;"
                    name='content' placeholder='Gõ bình luận ở đây'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Đăng bình luận</button>
        </form>


        <div class="row">
            <div class="col-88888">
                <section id="testimonials">
                    <!--heading--->
                    <div class="testimonial-heading">
                        <h1>Clients Says</h1>
                    </div>
                    <!--testimonials-box-container------>
                    <div class="testimonial-box-container">


                        <?php $i = 1;
                        // echo json_encode($data['feedbacks']);
                        foreach ($data['feedbacks'] as $item) { ?>
                        <div class="testimonial-box">
                            <!--top------------------------->
                            <div class="box-top">
                                <!--profile----->
                                <div class="profile">
                                    <!--img---->
                                    <div class="profile-img">
                                        <img
                                            src="https://thuvienplus.com/themes/cynoebook/public/images/default-user-image.png" />
                                    </div>
                                    <!--name-and-username-->
                                    <div class="name-user">
                                        <strong><?= $item["fullname"] ?></strong>
                                        <span><?= $item["email"] ?></span>
                                    </div>
                                </div>
                                <!--reviews------>
                                <div class="reviews">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <!--Empty star-->
                                </div>
                            </div>
                            <!--Comments---------------------------------------->
                            <div class="client-comment">
                                <p><?= $item["content"] ?></p>
                            </div>
                        </div>

                        <?php $i = $i + 1;
                        } ?>


                    </div>



                </section>
            </div>
        </div>


    </div>





    <script>
    var productImg = document.getElementById('product-img');
    var smallImg = document.getElementsByClassName('small-img');

    smallImg[0].onclick = () => {
        productImg.src = smallImg[0].src
    }
    smallImg[1].onclick = () => {
        productImg.src = smallImg[1].src
    }
    smallImg[2].onclick = () => {
        productImg.src = smallImg[2].src
    }
    smallImg[3].onclick = () => {
        productImg.src = smallImg[3].src
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>