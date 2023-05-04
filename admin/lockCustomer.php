<?php 
  require_once('connectPHP.php');
  
  
  // Kiểm tra xem trạng thái mới của khách hàng là gì
  if (isset($_POST['status'])) {
      $status = $_POST['status'];
  
      // Kiểm tra xem customerID có được truyền vào không
      if (isset($_POST['customer_id'])) {
          $customerID = $_POST['customerID'];
  
          // Cập nhật trạng thái của khách hàng
          $stmt = $conn->prepare("UPDATE CUSTOMER SET customerStatus = :status WHERE customerID = :customerID");
          $stmt->bindParam(':status', $status, PDO::PARAM_BOOL);
          $stmt->bindParam(':customerID', $customerID);
          $stmt->execute();
  
          // Chuyển hướng về trang khách hàng
          header("Location: customer.php");
          exit();
      }
  }
  
  // Đóng kết nối
  
 
  
?>