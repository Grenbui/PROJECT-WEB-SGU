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

    <!-- Framework -->
    <link rel="stylesheet" href="./Framework/bootstrap/css.css">
    <script src="./Framework/jquery/jquery.js"></script>
    <!-- <script src="./Framework/jquery/jquery.mask.js"></script> -->
    <script src="./Framework/jquery/jquery.maskedinput.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="page-wrapper">
        <div class="container-checkout-payment">
            <form action="#" method="post">
                <div class="container form-checkout">
                    <div class="address-receive">
                        <div class="address-header">
                            <i class="fa-solid fa-location-dot" style="margin-right: 9px;"></i>Địa chỉ nhân hàng
                        </div>
                        <div class="address customer">

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
                                    <p><img src="./Image/boots/Johny Classique Chelsea1.webp" alt="Johny Classique Chelsea" style="width: 15%; margin-right: 9px">Johny Classique Chelsea</p>
                                    
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
                        <div class="checkout-header">
                            <div class="checkout-setting">Phương thức thanh toán: </div>
                            <div class="checkout-setting-tab">
                                <!-- <span><button type="button" class="card-payment-btn product-variation" name="card_payment" required>Thẻ tín dụng/Ghi nợ</button></span>
                                <span><button type="button" class="COD-payment-btn product-variation" name="cod_payment" required>Thanh toán khi nhận hàng</button></span> -->
                                <span class="label cod__listener">
                                    <div class="style-label selectedCODPayement">
                                    <input type="radio" name="payment-method" value="cod" id="radioCOD">
                                        <div class="cod-method">
                                            <img class="method-icon" src="./Image/Option_Payment/COD_Payment.png" alt="" width="32" height="32">
                                            <div class="method-content">
                                                <span>Thanh toán khi nhận hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                </span>

                                <span class="label card__listener">
                                    <div class="style-label selectedCardPayment">
                                    <input type="radio" name="payment-method" value="card" id="radioCard">
                                        <div class="cod-method">
                                            <img class="method-icon" src="./Image/Option_Payment/Card_Payment.png" alt="" width="32" height="32">
                                            <div class="method-content d-flex flex-column">
                                                <span>Thanh toán bằng thẻ quốc tế</span>
                                                <div class="card-img">
                                                    <img src="./Image/Option_Payment/example_card_payment.png" alt="" width="auto" height="24">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="card-content">
                                    <div class="card-info">
                                        <div class="title"><h2>Điền thông tin thẻ tín dụng/Ghi nợ</h2></div>
                                        <div class="card-list">
                                            <img src="./Image/Option_Payment/example_card_payment.png" alt="" width="auto" height="32">
                                        </div>
                                        <div class="write-card-form">
                                            <div class="left">
                                                <div class="card-number">
                                                    <div class="card_field">
                                                        <div class="label">Số thẻ</div>
                                                        <input type="text" class="card-number-input card-input" name="number" data-mask="9999-9999-9999-9999" placeholder="VD: 4123 4567 8901 2345">
                                                    </div>
                                                    <div class="card_field">
                                                        <div class="label">Tên in trên thẻ</div>
                                                        <input type="text" class="card-name-input card-input" name="name" placeholder="VD: NGUYEN VAN A">
                                                    </div>
                                                    <div class="card_field">
                                                        <div class="label">Ngày hết hạn</div>
                                                        <input type="text" name="expiry" class="card-expiry_date-input card-input" pattern="(0[1-9]|1[0-2])/[0-9]{2}" data-mask="00/00" placeholder="MM/YY" required>
                                                    </div>
                                                    <div class="card_field">
                                                        <div class="label">Mã bảo mật</div>
                                                        <input type="text" name="cvc" class="card-cvc-input card-input" data-mask="000" placeholder="VD: 123">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="checkout-payment-body">
                            <div class="card__payment-selected">

                            </div>
                        </div>
                    </div>
                    
                    <div class="checkout-payment-cost">
                        <!-- <div class="cost-payment-container">
                            <div class="product-cost">Tổng tiền hàng</div>
                            <div class="product-cost-num">3,050,000đ</div>
                            <div class="shipping-cost">Phí vận chuyển</div>
                            <div class="shipping-cost-num">30,000đ</div>
                            <div class="total-cost">Tổng thanh toán</div>
                            <div class="total-cost-num">3,080,000đ</div>
                        </div> -->
                        <div class="cost-container">
                            <div class="cost-col1">
                                <div class="product-cost">Tổng tiền hàng: </div>
                                <div class="shipping-cost">Phí vận chuyển: </div>
                                <div class="total-cost">Tổng thanh toán: </div>                       
                            </div>
                            <div class="cost-col2">
                                <div class="product-cost-num">3,050,000đ</div>
                                <div class="shipping-cost-num">30,000đ</div>
                                <div class="total-cost-num">3,080,000đ</div>
                            </div>
                        </div>
                        <div class="checkout-btn">
                            <input type="submit" name="payment" value="Đặt hàng">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section> 

    

    <script>
        $(document).ready(function() {
            $('.card-number-input').mask('9999-9999-9999-9999');
            $('.card-expiry_date-input').mask('99/99');
            $('.card-cvc-input').mask('999');
        });
    </script>

    <?php include 'footer.php'; ?>
    <script src="./Javascript/collections.js"></script>
    <script src="./Javascript/checkout-payment.js"></script>

</body>
</html>