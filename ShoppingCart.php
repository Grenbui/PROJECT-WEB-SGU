<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour Homme - Shopping cart</title>
    <link rel="shortcut icon" type="image/png" href="./Image/favicon.webp">
    <link rel="stylesheet" href="./CSS/shoppingCart.css">
    <link rel="stylesheet" href="./Framework/bootstrap/css.css">
    <link rel="stylesheet" href="./Framework/bootstrap/bootstrap-4.0.0-dist/css/bootstrap-grid.css">
</head>

<body>
<?php include './header.php';?>
    <section class="page-wrapper">
        <div class="container-checkout-payment">
            <form action="#" method="post">
                <div class="container form-checkout">
                    <div class="address-receive">
                        <div class="address-header">
                            <i class="fa-solid fa-location-dot" style="margin-right: 9px;"></i>Địa chỉ nhận hàng
                        </div>
                        <div class="address customer">

                        </div>
                    </div>
                    
                    <div class="product-checkout" >
                        <div class="product-header row" style="margin-bottom: 10px;">
                            <div class="text-start col-5">Sản phẩm</div>
                            <div class="text-center col-1">Đơn giá</div>
                            <div class="text-center col-2">Số lượng</div>
                            <div class="text-center col-2">Thành tiền</div>
                            <div class="text-center col-2">Xóa sản phẩm</div>
                        </div>
                        
                        <?php
                            if(isset($_COOKIE['cart'])){
                                $cart_items = json_decode($_COOKIE['cart'], true);
                               
                            } else {
                                // Nếu chưa có cookie, tạo mới một mảng rỗng để lưu sản phẩm
                                $cart_items = array();
                            }
                            $total_price = 0;
                            foreach ($cart_items as $item) {
                                // $total_price = $item['price'] * $item['quantity'];
                                echo '
                                <div class="product-contain row align-items-center">
                                <div class="product-select text-start col-1">
                                    <span><input type="checkbox"></span>
                                </div>
                                <div class="product-name text-center col-4">
                                    <span>
                                        <p><img src="./Image/boots/Johny Classique Chelsea1.webp" alt="Johny Classique Chelsea" style="width: 15%; margin-right: 9px">'. $item['name'] .'</p>
                                        
                                    </span>
                                </div>
                                <div class="product-price text-center col-1">
                                    <span>
                                        <p>'.$item['price'].'</p>
                                    </span>
                                </div>
                                <div class="product-quality text-center col-2" style="display: flex; justify-content: center;">
                                    <span class="qty-btn qty-plus"><i class="fa-solid fa-plus"></i></span>
                                    <input type="number" pattern="\d*" min="0" step="1" value="'. "3" .'" class="qty-input">
                                    <span class="qty-btn qty-minus"><i class="fa-solid fa-minus"></i></span>
                                </div>
    
                                <div class="product-cost text-center col-2">
                                    <span>
                                        <p>'. $total_price .'</p>
                                    </span>
                                </div>
                                <div class="product-delete-icon text-center col-2">
                                    <span>
                                        <p><i class="fa-solid fa-trash"></i></p>
                                    </span>
                                </div>
                            </div>
                                ';
                            }
                        ?>
                        <div class="product-contain row align-items-center">
                            <div class="product-select text-start col-1">
                                <span><input type="checkbox"></span>
                            </div>
                            <div class="product-name text-center col-4">
                                <span>
                                    <p><img src="./Image/boots/Johny Classique Chelsea1.webp" alt="Johny Classique Chelsea" style="width: 15%; margin-right: 9px">Johny Classique Chelsea</p>
                                    
                                </span>
                            </div>
                            <div class="product-price text-center col-1">
                                <span>
                                    <p>3,050,000đ</p>
                                </span>
                            </div>
                            <div class="product-quality text-center col-2" style="display: flex; justify-content: center;">
                                <span class="qty-btn qty-plus"><i class="fa-solid fa-plus"></i></span>
                                <input type="number" pattern="\d*" min="0" step="1" value="1" class="qty-input">
                                <span class="qty-btn qty-minus"><i class="fa-solid fa-minus"></i></span>
                            </div>

                            <div class="product-cost text-center col-2">
                                <span>
                                    <p>3,050,000đ</p>
                                </span>
                            </div>
                            <div class="product-delete-icon text-center col-2">
                                <span>
                                    <p><i class="fa-solid fa-trash"></i></p>
                                </span>
                            </div>
                        </div>
                        <div class="product-contain row align-items-center">
                            <div class="product-select text-start col-1">
                                <span><input type="checkbox"></span>
                            </div>
                            <div class="product-name text-center col-4">
                                <span>
                                    <p><img src="./Image/boots/Johny Classique Chelsea1.webp" alt="Johny Classique Chelsea" style="width: 15%; margin-right: 9px">Johny Classique Chelsea</p>
                                    
                                </span>
                            </div>
                            <div class="product-price text-center col-1">
                                <span>
                                    <p>3,050,000đ</p>
                                </span>
                            </div>
                            <div class="product-quality text-center col-2" style="display: flex; justify-content: center;">
                                <span class="qty-btn qty-plus"><i class="fa-solid fa-plus"></i></span>
                                <input type="number" pattern="\d*" min="0" step="1" value="1" class="qty-input">
                                <span class="qty-btn qty-minus"><i class="fa-solid fa-minus"></i></span>
                            </div>

                            <div class="product-cost text-center col-2">
                                <span>
                                    <p>3,050,000đ</p>
                                </span>
                            </div>
                            <div class="product-delete-icon text-center col-2">
                                <span>
                                    <p><i class="fa-solid fa-trash"></i></p>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cart-information" style="display: flex; justify-content: space-between">
                        <div class="product-checkout " style="width: 45%">
                            <div class="product-header row text-bold" style="margin-bottom: 10px; font-size: 18px">Thông tin giao hàng </div>
                            <div class="product-contain row align-items-center">
                                <div class="ship-information text-start">
                                    <p>
                                        <span>Họ và tên: </span> Huỳnh Thị Tuyết Ngọc
                                    </p>
                                    <p>
                                        <span>Địa chỉ: </span> 217/32/9 Bà Hom Phường 13 Quận 6
                                    </p>
                                    <p>
                                        <span>Số điện thoại: </span>0899307672
                                    </p>
                                    
                                </div>  
                                <div class="ship-information text-center">
                                    <button class="btn">Thay đổi địa chỉ giao hàng</button>
                                </div>  
                            </div>
                        </div>
                        
                        <div class="product-checkout " style="width: 50%">
                            <div class="product-header row text-bold" style="margin-bottom: 10px; font-size: 18px">Thông tin thanh toán </div>
                            <div class="product-contain row align-items-center">
                                 <div class="payment-information text-start">
                                    <p><span>Số lượng sản phẩm: </span> 3</p>
                                </div>
                                <div class="payment-information text-start">
                                    <p><span>Tạm tính: </span> 1,000,000d</p>
                                </div>
                                <div class="payment-information text-start">
                                    <p><span>Tổng tiền: </span> 1,000,000d</p>
                                </div>
                                <div class="payment-information text-center">
                                    <button class="btn">Mua hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                  
                    
                   
                </div>
            </form>
        </div>
    </section> 
    <?php include 'footer.php' ?>

</body>
<script>
const qtyInput = document.querySelector('.qty-input');
const qtyPlusBtn = document.querySelector('.qty-plus');
const qtyMinusBtn = document.querySelector('.qty-minus');


qtyPlusBtn.addEventListener('click', function() {
  let qty = parseInt(qtyInput.value);
  qty += 1;
  qtyInput.value = qty;
});


qtyMinusBtn.addEventListener('click', function() {
  let qty = parseInt(qtyInput.value);
  qty = Math.max(qty - 1, 0);
  qtyInput.value = qty;
});

</script>
<script>
     // Kiểm tra xem cookie 'cart' đã tồn tại hay chưa
     var cartItems = [];
        if (getCookie('cart')) {
            cartItems = JSON.parse(getCookie('cart'));
        }
       
        // Hiển thị thông tin giỏ hàng
        for (var i = 0; i < cartItems.length; i++) {
            var product = cartItems[i];
            console.log('Product ID: ' + product.id);
            console.log('Product Name: ' + product.name);
            console.log('Product Price: ' + product.price);
            // console.log('Product Quantity: ' + product.quantity);
            console.log('--------------------------');
        }

        // Hàm lấy cookie theo tên
        function getCookie(name) {
            var cookieArr = document.cookie.split(';');
            for (var i = 0; i < cookieArr.length; i++) {
                var cookiePair = cookieArr[i].split('=');
                if (name === cookiePair[0].trim()) {
                    return decodeURIComponent(cookiePair[1]);
                }
            }
            return null;
        }
</script>


</html>