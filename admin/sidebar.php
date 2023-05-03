<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Web-index/font/fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="../CSS/base.css">
    <link rel="stylesheet" href="../Font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../Framework/bootstrap/css.css">
    <title>Total</title>
</head>
<body>
    <nav class="sidebar">
        <div class="logo">
            <a href="">
                <img src="../Image/logo.webp" class="img-logo" style="width: 100%;" alt="">
            </a>
        </div>
        <ul class="sidebar_list">
            <li class="sidebar_list-item active_list">
                <a href="" class="item">
                  <i class="fa-solid fa-house"></i>
                    <span>Quản lý hóa đơn</span>
                </a>
            </li>
            <li class="sidebar_list-item">
                <a href="" class="item">
                  <i class="fa-solid fa-users"></i>
                    <span>Quản lý khách hàng</span>
                </a>
            </li>
            <li class="sidebar_list-item ">
                <a href="" class="item">
                  <i class="fa-brands fa-product-hunt"></i>
                    <span>Danh sách sản phẩm</span>
                </a>
            </li>
            <li class="sidebar_list-item">
                <a href="" class="item">
                  <i class="fa-solid fa-spinner"></i>
                   <span>Danh sách sản phẩm đang xử lý</span>
                </a>
            </li>
        </ul>
    </nav>
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header_iner">
                        <div class="searchbar">
                            <div class="searchbar-iner">
                                <input class="input_search_header" type="text" placeholder="Search">
                            </div>
                        </div>
                        <div class="admin_avatar">
                            <div class="admin_user">
                                <span >
                                    <i class="fa-solid fa-bell" style="font-size: 25px;"></i>
                                </span>
                                <span >
                                    <i class="fa-solid fa-comment-medical" style="font-size: 25px;"></i>
                                 </span>
                                <div class="avatar">
                                    <img src="../Image/t-shirt.webp" alt="">
                                    <div class="menu_admin">
                                        <div class="menu_content">
                                            <p class="text-1">Welcome Admin!</p>
                                            <p class="text-2">Văn Sìnl</p>
                                           <div class="profile_details">
                                               <a href="" class="text-5">Log out <span></span></a>
                                           </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_iner">
    <div class="total_header">
        <p>Lọc theo ngày</p>
    </div>
    
    <div class="form_control">

    <div class="form_date">
        <input type="text" class="" placeholder="Từ ngày" aria-label="Username">
        <span class="input-group-text" style="font-size: 16px;"><i class="fa-solid fa-arrow-right"></i></span>
        <input type="text" class="" placeholder="Đến ngày" aria-label="Server">
    </div>
    <div class="form_checkbox">
        <?php 
         $servername = "LAPTOP-8QF16IA0";
         $username = "";   
         $password = "";
         $dbname = "POURHOMME_MANAGEMENT";
         // Tạo kết nối
       
           
             $conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
             // Thiết lập chế độ lỗi PDO để thông báo lỗi trở lại từ SQL Server
           
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             // Thực hiện truy vấn SQL
             $sql = "SELECT DISTINCT city FROM CUSTOMER;";
             $stmt = $conn->prepare($sql);
             $stmt->execute();
             $cities = $stmt->fetchAll();
           
             echo " <label for='city'>Chọn vùng:</label>
             <select id='city'>";
             echo ' <option value="" disabled selected>Tỉnh/Thành</option>';
             foreach($cities as $city) {
                echo ' <option value="' . $city['city'] . '">' . $city['city'] . '</option>';
               
             }
            
            
              
              
            echo "</select>";
            
        ?>
  
    </div>
    </div>
            
            <?php 
            if(empty($_SERVER['QUERY_STRING']) == 1){
                include 'order.php';
            }
           
            ?>
           
            

    </section>

</body>
</html>

