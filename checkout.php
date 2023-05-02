<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour Homme - Shoes & Leather - Thanh toán đơn hàng</title>
    <link rel="shortcut icon" type="image/png" href="./Image/favicon.webp">

    <!-- ICON -->
    <link rel="stylesheet" href="./Font/fontawesome-free-6.2.0-web/css/all.css">
    

    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/collections.css">

    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="./Framework/bootstrap/css.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <form action="#" method="post">
        <div class="container form-checkout">
            <div class="address-receive">
                <div>
                    <i class="fa-solid fa-location-dot"></i>Địa chỉ nhân hàng
                </div>
            </div>
            
            <div class="product-checkout">
                <div class="product-header row">
                    <div class="text-start col-6">Sản phẩm</div>
                    <div class="text-center col-2">Đơn giá</div>
                    <div class="text-center col-1">Số lượng</div>
                    <div class="text-end col-3">Thành tiền</div>
                </div>
                
                <div class="product-contain row align-items-center">
                    <div class="product-name text-start col-6">
                        <span>
                            <p><img src="./Image/boots/Johny Classique Chelsea1.webp" alt="Johny Classique Chelsea" style="width: 20%;">Johny Classique Chelsea</p>
                            
                        </span>
                    </div>
                    <div class="product-price text-center col-2">
                        <span>
                            <p>3,050,000đ</p>
                        </span>
                    </div>
                    <div class="product-quality text-center col-1">
                        <span>
                            <p>1</p>
                        </span>
                    </div>
                    <div class="product-cost text-end col-3">
                        <span>
                            <p>3,050,000đ</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="checkout-method">
                <div class="checkout-header d-flex">
                    <div class="checkout-setting">Phương thức thanh toán: </div>
                    <div class="checkout-setting-tab">
                        <span><button class="card-payment product-variation">Thẻ tín dụng/Ghi nợ</button></span>
                        <span><button class="COD-payment product-variation">Thanh toán khi nhận hàng</button></span>
                    </div>
                </div>
                <div class="checkout-payment-body">
                    
                </div>
            </div>
        </div>
    </form>

    <?php include 'footer.php'; ?>
    <script src="./Javascript/collections.js"></script>
</body>
</html>