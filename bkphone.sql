-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2022 lúc 04:10 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bkphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Samsung'),
(2, 'iPhone'),
(3, 'Xiaomi'),
(10, 'Nokia'),
(11, 'Huawei'),
(12, 'Sony');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 2, 'iPhone 13 Pro Max 128GB', 34990000, 29690000, 'https://clickbuy.com.vn/uploads/2021/11/13-1.jpg', 'iPhone 13 Pro Max – siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(2, 2, 'iPhone 13 mini 256GB', 24990000, 21990000, 'https://clickbuy.com.vn/uploads/2021/10/13.jpg', 'iPhone 13 Mini – siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(3, 1, 'Samsung Galaxy S22 Ultra 5G', 20990000, 28990000, 'https://clickbuy.com.vn/uploads/2022/03/s22-ultra.jpg', 'Galaxy S22 Ultra 5G với bút S-Pen tích hợp. Samsung Galaxy S22 Ultra 5G (8GB|128GB) Chính hãng mang đến trải nghiệm di động tối ưu và cao cấp. Bằng cách kết hợp các tính năng tốt nhất của dòng Note và S', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(4, 1, 'Galaxy Z Fold3 5G 256GB', 41990000, 34490000, 'https://clickbuy.com.vn/uploads/2021/10/3-1.jpg', 'Galaxy Z Fold3 5G (Z Fold 3) là chiếc điện thoại màn hình gập cao cấp nhất của Samsung. Z Fold 3 sẽ là chiếc điện thoại Samsung đầu tiên có camera dưới màn hình, đẳng cấp, góp phần mang đến những trải nghiệm mới mẻ, ấn tượng hơn cho người dùng.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(5, 3, 'Xiaomi Redmi 10C', 3890000, 3690000, 'https://clickbuy.com.vn/uploads/2022/03/redmi10.jpg', 'Điện thoại Xiaomi Redmi 10C – Hiệu năng “khủng” trong tầm giá phải chăng. Xiaomi vừa cho ra mắt thêm một lựa chọn smartphone tuyệt vời trong phân khúc phổ thông: điện thoại Xiaomi Redmi 10C với màn hình lớn, hiệu năng “khủng” kèm thời lượng pin dài sẽ giúp người dùng công nghệ có được chiếc smartphone thích hợp cho năm 2022.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(6, 3, 'Poco M4 Pro 5G (6GB/128GB)', 5790000, 5290000, 'https://clickbuy.com.vn/uploads/2022/02/3.jpg', 'POCO M4 Pro 5G chính là dòng điện thoại tầm trung được phát hành bởi công ty con của Xiaomi với nhiều cải tiến so với thế hệ tiền nhiệm. Chỉ sau một thời gian ngắn ra mắt, POCO M4 Pro 5G đã nhận được sự yêu thích và tin dùng từ nhiều người dùng.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(7, 2, 'Apple iPhone 11 64GB', 17990000, 11990000, 'https://clickbuy.com.vn/uploads/2021/08/11-2.jpg', 'iPhone 11 vẫn sở hữu thiết kế tràn viền với “tai thỏ” giống iPhone X. Viền bezel phía trên và dưới cũng được làm gọn lại nhằm tối đa màn hình sử dụng. Cùng với đó, 4 góc của máy cũng được bo tròn nhẹ tạo cảm giác chắc chắn khi cầm trên tay. Mặt lưng iPhone 11 làm từ chất liệu kính nên rất sang trọng, tinh tế. Khác với các dòng iPhone trước, sản phẩm này sẽ có 6 màu bản bạc, vàng, xanh lá, trắng, đen đỏ.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(9, 10, 'Nokia G10', 4190000, 3690000, 'https://clickbuy.com.vn/uploads/2021/11/nokia-g10.jpg', 'Nokia G10 là sản phẩm mới nhất với các ưu điểm chính là viên pin dung lượng lên tới 5050mAh hỗ trợ AI, màn hình lớn 6,5 inch, 3 camera sau và khả năng năng nhận diện khuôn mặt.', '2022-06-17 01:51:53', '2022-06-17 01:51:53', 0),
(50, 1, 'Samsung Galaxy A73 (5G) 256GB', 12990000, 10690000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/a/7/a73-xanh.jpg', 'Điện thoại cao cấp nhất dòng Galaxy A series sở hữu nhiều nâng cấp đáng giá so với thế hệ trước, từ ngoại hình cho đến hiệu năng, đặc biệt là hệ thống camera. Sau đây là những đánh giá chi tiết về chiếc Samsung A73 giúp bạn có cái nhìn tổng quan nhất về chiếc smartphone cận cao cấp này.', '2022-06-17 01:55:16', '2022-06-17 01:55:16', 0),
(51, 1, 'Samsung Galaxy S20 FE 256GB (Fan Edition)', 15490000, 10990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/a/samsung-galaxy-20-fe_4_.jpg', 'Samsung S20 FE là chiếc điện thoại sắp được ra mắt từ Samsung, với chữ FE đằng sau tên gọi của máy có nghĩa là Fan Edition. Đây là dòng điện thoại ra mắt như để gửi lời tri ân đến các fan trung thành đã và đang sử dụng các sản phẩm của Samsung. Với số lượng sản phẩm được giới hạn và chỉ mở bán trong thời gian ngắn.', '2022-06-17 01:56:34', '2022-06-17 01:56:34', 0),
(52, 2, 'iPhone 12 128GB I Chính hãng VN/A', 24990000, 17990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/i/p/iphone-12_2__1.jpg', 'iPhone 12 hiện nay là cái tên “sốt xình xịch” bởi đây là một trong 4 siêu phẩm vừa được ra mắt của Apple với những đột phá về cả thiết kế lẫn cấu hình. Phiên bản Apple iPhone 12 128GB chính là một trong những chiếc iPhone được săn đón nhất bởi dung lượng bộ nhớ khủng, cho phép bạn thoải mái với vô vàn ứng dụng.', '2022-06-17 01:57:38', '2022-06-17 01:57:38', 0),
(53, 3, 'Xiaomi Redmi Note 11 Pro Plus 5G', 9990000, 8690000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/1/11-pro-plus-blue.jpg', 'Điện thoại Redmi Note 11 Pro+ có thiết kế thanh lịch và vuông vắn hơn, mặt trước và sau được vát phẳng hơn mang đến kiểu dáng hiện đại, hợp xu hướng. Bốn góc của smartphone vẫn được bo cong để hài hòa với tổng thể, mềm mại cũng như cầm nắm thoải mái.', '2022-06-17 01:58:57', '2022-06-17 01:58:57', 0),
(54, 3, 'Xiaomi 12', 19990000, 14990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/t/_/t_i_xu_ng_1__3_10.png', 'Nối tiếp thành công của Mi 11, hãng điện thoại Xiaomi tiếp tục cho ra mắt mẫu sản phẩm kế nhiệm mang tên Xiaomi 12 với nhiều cải tiến vượt trội so với thế hệ trước. Đây hứa hẹn là một flagship mạnh mẽ về nhiều mặt từ hiệu năng, dung lượng pin đến camera.', '2022-06-17 01:59:49', '2022-06-17 01:59:49', 0),
(55, 10, 'Nokia 105 4G', 900000, 750000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/1/0/105-2.jpg', 'Điện thoại Nokia 105 4G tập trung vào tối ưu tính tiện lợi cho người dùng. Chiếc máy sở hữu thân hình gọn gàng, mỏng nhẹ, với thiết kế bỏ túi thân thiện giúp bạn dễ dàng cất giữ và lấy máy nghe gọi khi cần. Lớp vỏ máy được chế tác từ chất liệu bền bỉ chuẩn Châu Âu nhằm tăng cường độ cứng cáp và an toàn cho máy.', '2022-06-17 02:03:28', '2022-06-17 02:03:28', 0),
(56, 10, 'Nokia C30 2GB 32GB', 3000000, 2500000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-c30-xanh-600x600_4_4.jpg', 'Thoải mái trải nghiệm cả ngày - Viên pin cực lớn 6000 mAh, sạc tối đa 10W', '2022-06-17 02:05:31', '2022-06-17 02:05:31', 0),
(57, 10, 'Nokia 215 4G', 1500000, 1250000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/n/o/nokia-215-4g-600jpg-600x600.jpg', 'Với nhiều người dùng thích sự nhỏ gọn của các thiết kế dòng điện thoại phổ thông của Nokia, việc trang bị cho mình một chiếc Nokia 215 4G là một sự lựa chọn phù hợp với đầy đủ các tính năng và còn thêm cả khả năng có thể truy cập internet mang đến cho người dùng trải nghiệm hoàn toàn mới.', '2022-06-17 02:06:33', '2022-06-17 02:06:33', 0),
(58, 11, 'Huawei P30', 20990000, 15990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/e/l/elle_aurora_rear_rgb-500x500_1.png', 'Điện thoại Huawei P30 nổi bật với màu “Gradient” vốn đã được sử dụng trên Huawei P20, được lấy cảm hứng từ xu hướng sử dụng bản màu Gradients trên các giao diện. Với lớp phủ quang học NCVM bên dưới mặt kính, kết hợp phản chiếu khúc xạ ánh sáng để tạo nên dải màu tươi mới, giúp nó có thể đổi màu từ màu tím sang xanh lục, sang xanh lam.', '2022-06-17 02:07:49', '2022-06-17 02:07:49', 0),
(59, 11, 'Huawei Mate X3', 18500000, 15000000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-mate-x2-4g-1-500x500.jpg', 'Huawei Mate X3 là chiếc smartphone màn hình gập tiếp theo nhà Huawei muốn mang đến cho người dùng. Sở hữu màn hình gập độc đáo cùng những trang bị hiện đại về vi xử lý, camera cũng như công nghệ sạc ấn tượng Mate X3 sẽ giúp người dùng có những giây phút trải nghiệm cực chất và bất tận.', '2022-06-17 02:08:31', '2022-06-17 02:08:31', 0),
(60, 11, 'Huawei Nova 8i', 12990000, 11990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-nova-8-600x600-600x600.jpg', 'Là một hãng điện thoại nổi tiêng với các sản phẩm chất lượng, Huawei mới đây tiếp tục cho ra mắt mẫu smartphone mới mang tên Huawei Nova 8i. Điện thoại Huawei Nova 8i là mẫu điện thoại phân khúc tầm trung với thiết kế cùng hiệu năng ấn tượng.', '2022-06-17 02:09:09', '2022-06-17 02:09:09', 0),
(61, 11, 'Huawei P50 Pro+', 25990000, 20990000, 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/h/u/huawei-p50-pro-plus.jpg', 'Điện thoại Huawei P50 Pro Plus được trang bị màn hình cong thác nước đẹp mắt cùng hai viền bezel cạnh bên siêu mỏng. Bên trong màn hình là thiết kế đục lỗ chứa camera selfie bên trong màn hình. Nhờ đó màn hình Huawei P50 Pro Plus có một không gian hiển thị khá lớn, lên đến 91,6%.', '2022-06-17 02:09:48', '2022-06-17 02:09:48', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `deleted`) VALUES
(46, 'admin', 'admin@gmail.com', '0388542487', 'Vĩnh Long', 'b4cbd48886a5331c5eb2fedadabe311c', 2, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userreview` (`user_id`),
  ADD KEY `productreview` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderSuccess` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `a` (`order_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymentUserid` (`user_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`user_id`,`token`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `productreview` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `userreview` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orderSuccess` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `a` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `paymentUserid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `fk_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
