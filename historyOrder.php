<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Pour Homme - Shoes & Leather | Thông tin tài khoản khách hàng</title>
    <link rel="shortcut icon" type="image/png" href="./Image/favicon.webp">


    <!-- ICON -->
    <link rel="stylesheet" href="./Font/fontawesome-free-6.2.0-web/css/all.css">


    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/historyOrder.css">

    <!-- Framework -->
    <script src="./Framework/aos-master/src/js/aos.js"></script>
    <link rel="stylesheet" href="./Framework/bootstrap/css.css">
    <script src="./Framework/bootstrap/js.js"></script>
    <script src="./Framework/jquery/jquery.js"></script>
    <!-- <script src="./Framework/jquery/jquery.mask.js"></script> -->
    <script src="./Framework/jquery/jquery.maskedinput.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="user_container">
        <div class="user_content container">
            <div class="table_user row">
                <div class="user_sidebar col-3">
                    <div class="detail_sidebar">
                        <ul class="style_sidebar">
                            <li>
                                <a href="./accountEdit.php" class="text_href">
                                    <i class="fa-solid fa-user icon"></i>
                                    <span class="text_style">Thông tin tài khoản</span>
                                </a>
                            </li>
                            <li>
                                <a href="./historyOrder.php" class="text_href">
                                    <i class="fa-solid fa-receipt icon"></i>
                                    <span class="text_style">Lịch sử đơn hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="./address.php" class="text_href">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    <span class="text_style">Số địa chỉ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user_detail col-9">
                    <div class="history_detail">
                        <form action="" class="history_content">
                        <div class="history_header">
                            <h3 class="header_title text-center">Lịch sử đơn hàng</h3>
                        </div>

                        <div class="history_body">
                            <div class="body_column-names row">
                                <div class="column-name col-3">Mã Đơn Hàng</div>
                                <div class="column-name text-center col-3">Tổng tiền</div>
                                <div class="column-name text-center col-3">Ngày đặt hàng</div>
                                <div class="column-name col-3"></div>
                                
                                <div class="column-content col-3">

                                </div>
                                <div class="column-content text-center col-3">

                                </div>
                                <div class="column-content text-center col-3">

                                </div>
                                <div class="column-content text-center col-3">
                                    <div class="detail_btn">Chi tiết</div>
                                </div>
                            </div>
                        </div>

                        <div class="history_footer row">
                                    
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="popup_content">
        <aside class="popup_container" data-aos="fade-up">
            <div class="address__popup">
                <div class="address__popup-container d-flex flex-collumn">
                    <div class="address__popup-content">
                        <div class="address__popup-header">
                            <p>Địa Chỉ Của Tôi</p>
                        </div>
                        <div class="address__popup-body">

                        </div>
                        <div class="address__popup-footer">
                            <button class="address_btn cancel_btn">Huỷ</button>
                            <button class="address_btn submit_btn">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <?php include 'footer.php'; ?>
    <script src="./Javascript/addressEdit.js"></script>
</body>
</html>