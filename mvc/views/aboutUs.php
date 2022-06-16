<?php
$title = 'About Us';
$activeNav = 'aboutUs';
require_once('mvc/views/blocks/header.php');
?>

<main>
    <section>
        <p class="page-header">CHÚNG TÔI LÀ AI</p>
        <div class="textbox">
            <p class="page-section">BKPhone - Nhà phân phối/Đại lý bán lẻ điện thoại số một miền Nam</p>
            <p>BKPhone là nhà phân phối/đại lý bán lẻ uy tín. Tuy chỉ mới bắt đầu hoạt động kinh doanh trong 3 năm nhưng đã gặt hái được nhiều thành tựu đáng giá.</p>
            <div class="intro">
                <ul>
                    <li>Doanh thu bán lẻ đạt Top 1</li>
                    <li>Chỉ số tăng trưởng từng năm đạt Top 1</li>
                    <li>Được đánh giá 4.9/5 từ người tiêu dùng</li>
                    <li>Được đề cử giải thương hiệu nổi bật 2021</li>
                </ul>
            </div>
            <p class="page-section">Giá trị cốt lõi</p>
            <p>BKPhone mong muốn mang đến nhanh nhất cho người tiêu dùng những sản phẩm chất lượng.</p>
        </div>
    </section>
    <section>
        <p class="page-header">CÁC NHÀ SÁNG LẬP</p>
        <div class="container textbox">
            <div class="row m-4">
                <div class="col-md-6 col-xl-3">
                    <div class="card-founder">
                        <img src="https://gptgroup.net/img/personnel/img/1650856925245_644234514_leader-img.jpg" alt="founder">
                        <p>Nguyễn Trọng Phúc</p>
                        <p>CEO</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-founder">
                        <img src="https://gptgroup.net/img/personnel/img/1650856925245_644234514_leader-img.jpg" alt="founder">
                        <p>Lê Mạnh Hùng</p>
                        <p>CMO</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-founder">
                        <img src="https://gptgroup.net/img/personnel/img/1650856925245_644234514_leader-img.jpg" alt="founder">
                        <p>Nguyễn Ngọc Nguyên</p>
                        <p>CHRO</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-founder">
                        <img src="https://gptgroup.net/img/personnel/img/1650856925245_644234514_leader-img.jpg" alt="founder">
                        <p>Nguyễn Văn Xuân Vũ</p>
                        <p>CIO</p>
                    </div>
                </div>
            </div>
            <p class="page-section">Thông điệp từ nhà sáng lập</p>
            <p style="text-align: center;">"Chúng tôi mong mọi người sẽ có trải nghiệm mua sắm tốt nhất." <i class="page-quote">(CEO)</i></p>
            <p style="text-align: center;">"Mọi chính sách của chúng tôi sẽ luôn hướng đến người tiêu dùng." <i class="page-quote">(CMO)</i></p>
        </div>
    </section>
    <section>
        <p class="page-header">CÁC ĐỐI TÁC</p>
        <div class="container-fluid">
            <div class="row">
                <div class="m-auto">
                    <div class="owl-carousel owl-theme">
                        <?php
                        foreach ($data['brands'] as $item) { ?>
                            <div class="brand-name"><?php echo $item['name'] ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
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
                items: 2
            },
            550: {
                items: 4
            },
            900: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    })
</script>
</body>

</html>