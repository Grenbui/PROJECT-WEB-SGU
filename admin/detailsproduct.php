<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/detailproduct.css">
</head>
<body>
    
</body>
</html>
<div class="container">
    <?php 
     $servername = "LAPTOP-8QF16IA0";
     $username = "";   
     $password = "";
     $dbname = "POURHOMME_MANAGEMENT";
     // Tạo kết nối
     function init_db_connection() {
         global $servername, $dbname, $username, $password;
         $conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $conn;
     }
     $orderID = $_GET['code'];
    
         // Thiết lập chế độ lỗi PDO để thông báo lỗi trở lại từ SQL Server
         $conn = init_db_connection();
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         // Thực hiện truy vấn SQL
         $sql = "SELECT 
         CUSTOMER.customerName, 
         ORDERS.orderDate, 
         ORDERS.subAddress,
         STRING_AGG(PRODUCT.productName, ', ') WITHIN GROUP (ORDER BY PRODUCT.productName) AS products, 
         SUM(ORDER_DETAIL.quantityOrdered * ORDER_DETAIL.priceEach) AS total
       FROM 
         ORDERS 
         JOIN CUSTOMER ON ORDERS.customerID = CUSTOMER.customerID
         JOIN ORDER_DETAIL ON ORDERS.orderID = ORDER_DETAIL.orderID
         JOIN PRODUCT ON ORDER_DETAIL.productID = PRODUCT.productID
       WHERE 
         ORDERS.orderID = '$orderID'
       GROUP BY 
         CUSTOMER.customerName, 
         ORDERS.orderDate, 
         ORDERS.subAddress;
       
         ";
         
         $stmt = $conn->prepare($sql);
         $stmt->execute();
        
         $orders = $stmt->fetch();
         
            echo "
            <h2>Chi tiết hóa đơn</h2>
            <table>
			<tr>
				<th>Mã hóa đơn</th>
				<td>".$orderID."</td>
			</tr>
            <tr>
				<th>Ngày đặt hàng</th>
				<td>". $orders['orderDate'] ."</td>
			</tr>
            <tr>
				<th>Tên khách hàng</th>
				<td>". $orders['customerName'] ."</td>
			</tr>
            <tr>
				<th>Tên sản phẩm</th>
				<td>". $orders['products'] ."</td>
			</tr>
			<tr>
				<th>Địa chỉ giao hàng</th>
				<td>". $orders['subAddress'] ."</td>
			</tr>
			
			<tr>
				<th>Tổng tiền</th>
				<td>". $orders['total'] ."</td>
			</tr>
		</table>
            ";
        
        
    ?>
		
		
			
			
        <button class="btn">In hóa đơn</button>
        <button class="btn"><a href="sidebar.php" class="btn_goback">Trở về</a></button>
</div>
</body>
</html>