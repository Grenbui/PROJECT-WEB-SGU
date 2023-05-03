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

    <!-- CONNECT DATABASE -->
   
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
                    <?php
                    include './ConnectDatabase/connectDatabase.php';
                       
                        try {

                            // Định nghĩa số lượng sản phẩm muốn hiển thị trên mỗi trang
                            $limit = 12;

                            // Xác định vị trí bắt đầu của dữ liệu trong truy vấn
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $offset = ($page - 1) * $limit;

                           
                            $sql = "SELECT productName, buyPrice, PRODUCT.productID, PRODUCT_IMAGE.productImageURL
                                    FROM PRODUCT
                                    INNER JOIN PRODUCT_IMAGE ON PRODUCT.productID = PRODUCT_IMAGE.productID
                                    WHERE PRODUCT_IMAGE.isMainImage = 1
                                    ORDER BY PRODUCT.productID ASC
                                    OFFSET $offset ROWS
                                    FETCH NEXT $limit ROWS ONLY";
                            $stmt = $conn->query($sql);

                            
                            while ($row = $stmt->fetch()) {
                                $price = $row["buyPrice"];
                                $formatted_price = number_format($price, 0, ',', ',') . '₫';
                                echo '<div class="body__product col-lg-3" data-aos="fade-up" data-id="' . $row["productID"] . '" onclick="showProductDetail(this)">
                                        <div class="product__detail">
                                            <div class="body__product-img-content">
                                                <a href="#">
                                                    <img src="' . $row["productImageURL"] . '" alt="Product image" class="body__product-img">
                                                </a>
                                            </div>

                                            <div class="body__product-text">
                                                <a href="#" class="text__link">
                                                    <h2 class="body__product-name">' . $row["productName"] . '</h2>
                                                </a>
                                                <h3 class="body__product-price">' . $formatted_price . '</h3>
                                            </div>
                                        </div>
                                    </div>';
                            }

                            // Tạo các nút điều hướng trang
                            $sql = "SELECT COUNT(*) AS total FROM PRODUCT";
                            $stmt = $conn->query($sql);
                            $row = $stmt->fetch();
                            $total_pages = ceil($row['total'] / $limit);
                            $prev_page = $page - 1;
                            $next_page = $page + 1;

                            echo '<div class="pagination">';
                            if ($prev_page > 0) {
                                echo '<a href="?page=' . $prev_page . '" class="page-link">&laquo;</a>';
                            }

                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $page) {
                                    echo '<span class="page-link current">' . $i . '</span>';
                                } else {
                                    echo '<a href="?page=' . $i . '" class="page-link">' . $i . '</a>';
                                }
                            }

                            if ($next_page <= $total_pages) {
                                echo '<a href="?page=' . $next_page . '" class="page-link">&raquo;</a>';
                            }

                            echo '</div>';

                            $conn = null;
                        } catch (PDOException $e) {
                            echo "Connection failed: " . $e->getMessage();
                        }
                    ?>

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
    <script>
        function showProductDetail(element) {
            const productID = element.getAttribute('data-id');
            window.location.href = 'productDetail.php?productID=' + productID;
        }

    </script>
</html>