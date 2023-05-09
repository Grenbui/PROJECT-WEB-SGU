<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="./Font/fontawesome-free-6.2.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="./Image/favicon.webp">

    <!-- ICON -->
    <link rel="stylesheet" href="./Font/fontawesome-free-6.2.0-web/css/all.css">
    

    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/productdetail.css">
    <link rel="stylesheet" href="./CSS/collections.css">

    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="./Framework/bootstrap/bootstrap-4.0.0-dist/css/bootstrap-grid.css">
    
</head>
<body>
    <?php include 'header.php'; ?>

    <section id="breadcrump-wrapper">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content text-center">
            <h2>Detail of product (Chi tiết sản phẩm)</h2>
        </div>
    </section>

    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <!-- card right -->
        <!-- <div class = "product-content">
          <h2 class = "product-title">nike shoes</h2>
          

          <div class = "product-price">
            <p class = "price">Giá: <span>$249.00 (5%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>Mô tả sản phẩm: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            <ul>
              <li>Màu sắc: <span>Black</span></li>
              <li>Tình trạng: <span>in stock</span></li>
              <li>Phân loại: <span>Shoes</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Thêm vào giỏ hàng <i class = "fas fa-shopping-cart"></i>
            </button>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div> -->
        <?php
        include './ConnectDatabase/connectDatabase.php';
     
         try {
            
            if(isset($_GET['productID'])){
                $id = $_GET['productID'];

                $productImageSQL = "SELECT productImageURL, isMainImage FROM PRODUCT_IMAGE WHERE productID = '$id'";
                $stmt = $conn->query($productImageSQL);
                $productImages = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                if (count($productImages) > 0) {
                    echo '<div class="product-imgs">';
                    echo '<div class="img-display">';
                    echo '<div class="img-showcase">';
                    foreach ($productImages as $row) {
                        if ($row["isMainImage"] == 1) {
                            echo '<img src="' . $row["productImageURL"] . '" alt="shoe image">';
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="img-select">';
                    foreach ($productImages as $row) {
                        if ($row["isMainImage"] == 0) {
                           echo '<div class="img-item">';
                           echo '<a href="#" data-id="1">';
                           echo '<img src="' . $row["productImageURL"] . '" alt="shoe image">';
                           echo '</a>';
                           echo '</div>';
                       }
                    }
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo "No images found.";
                }
   
                echo '<div class = "product-content">';
   
                $productSQL = "SELECT productName, buyPrice, productDescription, quantityInStock FROM PRODUCT WHERE productID = '$id'";
                $stmt = $conn->query($productSQL);
                $product = $stmt->fetch(PDO::FETCH_ASSOC);
   
                if(count($product) > 0){
                   $price = $product['buyPrice'];
                   $formatted_price = number_format($price, 0, ',', ',') . '₫';
                   echo '<h2 class="product-title">' . $product['productName'] . '</h2>';
                   echo '<div class="product-price">';
                   echo '<p class="price">Giá: <span>' . $formatted_price . '</span></p>';
                   echo '</div>';
                   echo '<div class = "product-detail">';
                   echo '<h2>Mô tả sản phẩm: </h2>';
                   echo '<p>' . $product['productDescription'] . '</p>';
                  
               }
   
               echo '<ul>';
               $productColorSQL = "SELECT DISTINCT PRODUCT_COLOR.productColor FROM PRODUCT_COLOR WHERE productID = '$id'";
               $productColorResult = $conn->query($productColorSQL);
               $productColors = $productColorResult->fetchAll(PDO::FETCH_ASSOC);
   
               if (count($productColors) > 0) {
              
               echo '<li>Màu sắc:';
               foreach ($productColors as $row) {
                   echo '<span class="product-color" >' . $row['productColor'] . '</span>' ;
               }
               echo '</li>';
               } else {
               echo 'Không có màu sắc nào cho sản phẩm này';
               }
               echo '<li>Tình trạng:';
               if(count($product) > 0){
                   if($product['quantityInStock'] > 0){
                       echo '<span style="margin-left: 4px">Còn hàng</span>';
                   }else{
                       echo '<span style="margin-left: 4px">Hết hàng</span>';
                   }
               }
               echo '</li>';
   
               $productLineSQL = "SELECT productLineName FROM PRODUCT_LINE, PRODUCT WHERE productID = '$id' AND PRODUCT_LINE.productLineID =  PRODUCT.productLineID";
               $productLineResult = $conn->query($productLineSQL);
               $productLines = $productLineResult->fetchAll(PDO::FETCH_ASSOC);
               echo '<li>Phân loại:';
                   if(count($productLines) > 0){
                      echo '<span style="margin-left: 4px">' . $productLines[0]['productLineName'] .'</span>';
                   }
               echo '</li>';
   
               $productSizeSQL = "SELECT productSize FROM PRODUCT_SIZE WHERE productID = '$id' ORDER BY productSize ASC";
               $productSizeResult = $conn->query($productSizeSQL);
               $productSizes = $productSizeResult->fetchAll(PDO::FETCH_ASSOC);
               echo '<li> Kích thước: ';
                   if(count($productSizes) > 0){
                       foreach ($productSizes as $row) {
                           echo '<span class="product-color">' . $row['productSize'] . '</span>' ;
                       }
                   }
               echo '</li>';
               echo '</ul>';
               echo '</div>';
   
              
           //   echo '<div class = "social-links">
           //   <p>Share At: </p>
           //   <a href = "#">
           //     <i class = "fab fa-facebook-f"></i>
           //   </a>
           //   <a href = "#">
           //     <i class = "fab fa-twitter"></i>
           //   </a>
           //   <a href = "#">
           //     <i class = "fab fa-instagram"></i>
           //   </a>
           //   <a href = "#">
           //     <i class = "fab fa-whatsapp"></i>
           //   </a>
           //   <a href = "#">
           //     <i class = "fab fa-pinterest"></i>
           //   </a>
           // </div>';
   
               
   
   
               
            }else{
                echo 'Không thể lấy được id của sản phẩm';
            }
            
            

           


         } catch (PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
         }

       
    ?>
    <form action="./ShoppingCart.php" method="post">
      <div class = "purchase-info">
               <input type="number" min = "0" value = "1">
               <button type = "button" class = "btn" name="add_to_cart">
                 Thêm vào giỏ hàng <i class = "fas fa-shopping-cart"></i>
               </button>
               <!-- <button type = "button" class = "btn"> Mua ngay</button> -->
      </div>
    </form>

    <?php
       if(isset($_GET['productID'])){
          $id = $_GET['productID'];

          // Tạo cartID
          $maxCartID = "SELECT cartID FROM CART WHERE cartID LIKE 'CA%' " ;
          $max_i = 0;
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Sử dụng biểu thức chính quy để tách phần số i từ mỗi ID
            preg_match('/CA(\d+)/', $row['cartID'], $matches);
            $i = intval($matches[1]);
            
            // Sử dụng hàm max() để tìm i lớn nhất
            if ($i > $max_i) {
              $max_i = $i;
            }

            $new_id = 'CA' . ($max_i + 1);


            //Lấy customer ID
            
            //Lấy ngày cập nhật giỏ hàng


          }


          
          


       }
     
    ?>
        </div>
      </div>
    </div>
   


   
    <?php include 'footer.php';?>
</body>
<script src="./Javascript/indexJS.js"></script>
<script src="./Javascript/headerScroll.js"></script>
<script>
    const spans = document.querySelectorAll('span.product-color');
    spans.forEach(span => {
        span.addEventListener('click', () => {
            // Xóa lớp CSS đã chọn trước đó cho tất cả các thẻ span khác
            spans.forEach(s => s.classList.remove('selected-color'));

            // Thêm lớp CSS mới cho thẻ được click
            span.classList.add('selected-color');
        });
    });
</script>

</html>