<?php
require_once "mvc/views/blocks/header.php";

if($data["render"] == "home") {
    require_once "mvc/views/components/sliderbar.php";
    require_once "mvc/views/components/showProduct.php";
}
else if($data["render"] == "productDetail"){
    require_once "mvc/views/components/product_detail.php";
}
else if($data["render"] == "productList"){
    require_once "mvc/views/components/productList.php";
}
else if($data["render"] == "card"){
    require_once "mvc/views/components/card.php";
}
else if($data["render"] == "contact"){
    require_once "mvc/views/components/contact.php";
}
else if($data["render"] == "introduce"){
    require_once "mvc/views/components/introduce.php";
}
else if($data["render"] == "news"){
    require_once "mvc/views/components/news.php";
}
else if($data["render"] == "manageAccount"){
    require_once "mvc/views/components/updateInfoUser.php";
}
else if($data["render"] == "checkout"){
    require_once "mvc/views/components/checkout.php";
}
else if($data["render"] == "succesOrder"){
    require_once "mvc/views/components/succesOrder.php";
}
else if($data["render"] == "manageOrder"){
    require_once "mvc/views/components/manageOrder.php";
}
else if($data["render"] == "orderDetail"){
    require_once "mvc/views/components/detailOrder.php";
}
else if($data["render"] == "paymentOnline"){
    require_once "mvc/views/components/paymentOnline.php";
}
else if($data["render"] == "paymentReturn"){
    require_once "mvc/views/components/paymentReturn.php";
}

require_once "mvc/views/blocks/footer.php";