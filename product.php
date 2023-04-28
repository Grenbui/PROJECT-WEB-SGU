<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Pour Homme - Shoes & Leather</title>
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

        <section id="breadcrump-wrapper">
            <div class="breadcrumb-overlay"></div>
            <div class="breadcrumb-content text-center">
                <h2>Product (Sản Phẩm)</h2>
            </div>
            
        </section>
        <div class="collections-container container">
            <div class="collections-header row text-center">
                
                <div class="collections-title col">
                    <h2>Sản phẩm</h2>
                </div>
                
            </div>
            <div class="collections-col row">
                <div class="filter-col col-2 border rounded">
                    <div class="collections-filter mb-4">
                        <span class="filter"><b>Bộ lọc</b></span>
                    </div>
                    <div class="category-filter">
                        <div class="filter-price">
                            <button type="button" class="filter-price-name"><b>Khoảng Giá</b>
                                    <i class="fa-solid fa-plus"></i>
                            </button>
                            <div class="price-level">
                                <ul class="price-list">
                                    <li>
                                        <label for="">
                                            <input class="Btn_All" type="radio" name="price-filter" id="">
                                            <span>Tất cả</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input class="Btn_Less500" type="radio" name="price-filter" id="">
                                            <span>Dưới 500.000đ</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input class="Btn_500kTo1Mil" type="radio" name="price-filter" id="">
                                            <span>500.000đ -> 1.000.000đ</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input class="Btn_1MilTo2Mil" type="radio" name="price-filter" id="">
                                            <span>1.000.000đ -> 2.000.000đ</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input class="Btn_2MilTo3Mil" type="radio" name="price-filter" id="">
                                            <span>2.000.000đ -> 3.000.000đ</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input class="Btn_3MilTo4Mil" type="radio" name="price-filter" id="">
                                            <span>3.000.000đ -> 4.000.000đáp</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input class="Btn_above4Mil" type="radio" name="price-filter" id="">
                                            <span>Trên 4.000.000đ</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-stuff">
                            <button type="button" class="filter-stuff-name"><b>Loại</b> <i style="margin-left: 55px;" class="fa-solid fa-plus"></i></button>
                            <div class="stuff-category">
                                <ul class="stuff-list">
                                    <li>
                                        <label for="">
                                            <input type="radio" name="stuff-filter" id="">
                                            <span>Dress Boots</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="stuff-filter" id="">
                                            <span>Mocassins</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="stuff-filter" id="">
                                            <span>Flip-Flop</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="stuff-filter" id="">
                                            <span>Thắt lưng (Belt)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="stuff-filter" id="">
                                            <span>Ví (Wallet)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-material">
                            <button type="button" class="filter-material-name"><b>Chất liệu</b> <i style="margin-left: 55px;" class="fa-solid fa-plus"></i></button>
                            <div class="material-category">
                                <ul class="material-list">
                                    <li>
                                        <label for="">
                                            <input type="radio" name="material-filter" id="">
                                            <span>Velvet (Nhung)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="material-filter" id="">
                                            <span>Fabric (Bố)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="material-filter" id="">
                                            <span>Leather (Da)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="material-filter" id="">
                                            <span>Patent (Da bóng)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="material-filter" id="">
                                            <span>Suede (Da lộn)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-style">
                            <button type="button" class="filter-style-name"><b>Kiểu dáng</b><i style="margin-left: 55px;" class="fa-solid fa-plus"></i></button>
                            <div class="style-category">
                                <ul class="style-list">
                                    <li>
                                        <label for="">
                                            <input type="radio" name="style-filter" id="">
                                            <span>Mũi Tròn</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="style-filter" id="">
                                            <span>Cao cổ</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="style-filter" id="">
                                            <span>Cột Dây</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="style-filter" id="">
                                            <span>Không Dây</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="style-filter" id="">
                                            <span>Đế Bằng</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="filter-color">
                            <button type="button" class="filter-color-name"><b>Màu Sắc</b></button>
                            <div class="color-category">
                                <ul class="color-list">
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Xanh</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Đỏ</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Tím</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Vàng</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Đen</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Trắng</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Xám</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Nâu</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="">
                                            <input type="radio" name="color-filter" id="">
                                            <span>Kem</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="sorting-col col-10">
                    <div class="collections-sort col">
                        <label for="sortBy" class="">Sắp Xếp</label>
                        <select name="sortBy" id="sortBy">
                            <option value="best-selling">Bán Chạy Nhất </option>
                            <option value="product-newest">Mới nhất</option>
                            <option value="product-oldest">Cũ nhất</option>
                            <option value="price-ascending">Giá Thấp - Cao</option>
                            <option value="price-descending">Giá Cao - Thấp</option>
                        </select>
                    </div>
                    <div class="row collection-product">
                        
                    </div>
                </div>
            </div>
        </div>

        <?php 
            include 'footer.php'; 
        ?>
    </body>

    <script src="./Javascript/collections.js"></script>
    <script src="./Javascript/productList.js"></script>
</html>