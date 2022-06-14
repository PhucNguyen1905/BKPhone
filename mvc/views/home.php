<?php
$title = 'Home';
$activeNav = 'home';
require_once('mvc/views/blocks/header.php');
?>

<header id="header" class="page-header gradient">
    <div class="container pt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <h1 class="fw-bold text-appear-lr">Điện thoại WP</h1>
                <h3 class="fw-bold text-appear-rl">Website Bán Điện Thoại Chuyên Nghiệp</h3>
                <a href="#intro" class="mt-2 btn btn-outline-light btn-lg fw-bold btn-appear">
                    Giới thiệu
                </a>
                <a href="#news" class="mt-2 btn btn-outline-info btn-lg fw-bold btn-appear">
                    Tin mới
                </a>
                <a href="#product" class="mt-2 btn btn-outline-warning btn-lg fw-bold btn-appear">
                    Sản phẩm
                </a>
            </div>
            <div class="col-md-6">
                <img src="public/images/handshake.svg" alt="Header image" />
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
        <path fill="#fff" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</header>

<section id="intro" class="intro">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="public/images/seo_monochromatic.svg" alt="" />
            </div>

            <div class="col-md-7">
                <h2 class="fw-bold">Website Chuyên Các Mặt Hàng Điện Thoại</h2>
                <p>Chuỗi cửa hàng điện thoại uy tín tại Việt Nam.</p>
                <p>Giá tốt. Dịch vụ tốt.</p>
                <p class="my-4">Đa dạng các mặt hàng của các thương hiệu điện thoại thông minh nổi tiếng</p>
                <ul>
                    <?php
                    foreach ($data['brands'] as $item) { ?>
                        <li><?php echo $item['name'] ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="news" class="news gradient">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <h2 class="fw-bold">Tin mới</h2>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="title">Chào mừng Lễ 30 - 04</p>
                <p class="discription">Ưu đãi 10 - 50% mọi mặt hàng</p>
            </div>
            <div class="col-lg-5">
                <p class="title">Tin khác</p>
                <div class="events">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, assumenda!
                            <hr>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
        <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</section>

<section id="product" class="product">
    <div class="container py-4">
        <h1>Sản phẩm mới nhất</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="m-auto">
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($data['phones'] as $item) { ?>
                            <div class="item p-2">
                                <div class="card">
                                    <img src="<?php echo $item['thumbnail'] ?>" class="card-img-top" alt="product image">
                                    <div class="card-body">
                                        <h5 class="card-title text-white fw-bold overflow-hidden w-100" style="line-height: 1.5em; height: 3em;"><?php echo $item['name'] ?></h5>
                                        <p class="price mb-0">
                                            <?php echo number_format($item['final_price'], 0, ',', '.') . ' VNĐ' ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo '/BKPhone/Detail/p/' . $item['id']; ?>" class="btn btn-outline-warning">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-end">
            <div class="col-md-2">
                <a href="/BKPhone/#" class="btn btn-outline-dark fw-bold">
                    Xem thêm nhiều
                </a>
            </div>
        </div>
    </div>
</section>

<section class="text-white gradient text-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <p class="h1 text-decoration-underline fw-bold">About Us</p>
        <p class="fs-3">Nhóm Sinh Viên Đại Học Bách Khoa TP.HCM</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
        <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</section>

<div class="up-btn rounded">
    <a href="#header">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffc107" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
            <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z" />
        </svg>
    </a>
</div>

<footer>
    <div class="container-fluid text-center fw-bold fs-4">
        <span>Đồ án môn học Lập trình Web học kì 212</span>
    </div>
</footer>

<script src="public/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
</script>
</body>

</html>