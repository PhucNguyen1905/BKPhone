CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NULL
);

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Samsung'),
(2, 'iPhone'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Huawei');



CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `address` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_money` int(11) NOT NULL
) ;

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
);


CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `money` float NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `vnp_response_code` varchar(255) NOT NULL,
  `code_vnpay` varchar(255) NOT NULL,
  `code_bank` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() NOT NULL
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(350) DEFAULT NULL,
  `base_price` int(11) DEFAULT NULL,
  `final_price` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `description` text  DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` int(11) DEFAULT 0
) ;

INSERT INTO `product` (`id`, `category_id`, `name`, `base_price`, `final_price`, `thumbnail`, `description`) VALUES
(1, 2, 'iPhone 13 Pro Max 128GB', 34990000, 29690000, 'https://clickbuy.com.vn/uploads/2021/11/13-1.jpg', 'iPhone 13 Pro Max – siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.'),
(2, 2, 'iPhone 13 mini 256GB', 24990000, 21990000, 'https://clickbuy.com.vn/uploads/2021/10/13.jpg', 'iPhone 13 Mini – siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.'),
(3, 1, 'Samsung Galaxy S22 Ultra 5G', 20990000, 28990000, 'https://clickbuy.com.vn/uploads/2022/03/s22-ultra.jpg', 'Galaxy S22 Ultra 5G với bút S-Pen tích hợp. Samsung Galaxy S22 Ultra 5G (8GB|128GB) Chính hãng mang đến trải nghiệm di động tối ưu và cao cấp. Bằng cách kết hợp các tính năng tốt nhất của dòng Note và S'),
(4, 1, 'Galaxy Z Fold3 5G 256GB', 41990000, 34490000, 'https://clickbuy.com.vn/uploads/2021/10/3-1.jpg', 'Galaxy Z Fold3 5G (Z Fold 3) là chiếc điện thoại màn hình gập cao cấp nhất của Samsung. Z Fold 3 sẽ là chiếc điện thoại Samsung đầu tiên có camera dưới màn hình, đẳng cấp, góp phần mang đến những trải nghiệm mới mẻ, ấn tượng hơn cho người dùng.'),
(5, 3, 'Xiaomi Redmi 10C', 3890000, 3690000, 'https://clickbuy.com.vn/uploads/2022/03/redmi10.jpg', 'Điện thoại Xiaomi Redmi 10C – Hiệu năng “khủng” trong tầm giá phải chăng. Xiaomi vừa cho ra mắt thêm một lựa chọn smartphone tuyệt vời trong phân khúc phổ thông: điện thoại Xiaomi Redmi 10C với màn hình lớn, hiệu năng “khủng” kèm thời lượng pin dài sẽ giúp người dùng công nghệ có được chiếc smartphone thích hợp cho năm 2022.'),
(6, 3, 'Poco M4 Pro 5G (6GB/128GB)', 5790000, 5290000, 'https://clickbuy.com.vn/uploads/2022/02/3.jpg', 'POCO M4 Pro 5G chính là dòng điện thoại tầm trung được phát hành bởi công ty con của Xiaomi với nhiều cải tiến so với thế hệ tiền nhiệm. Chỉ sau một thời gian ngắn ra mắt, POCO M4 Pro 5G đã nhận được sự yêu thích và tin dùng từ nhiều người dùng.');


CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `deleted` int(11) NOT NULL
);


ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--


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

