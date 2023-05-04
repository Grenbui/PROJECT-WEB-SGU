<?php
  require('connectPHP.php');
     // Thực hiện truy vấn SQL
     $sql ="SELECT * FROM CUSTOMER";
     $stmt = $conn->prepare($sql);  
     $stmt->execute();
     $customers = $stmt->fetchAll();
?>

<table>
  <thead>
    <tr>
      <th>ID Khách hàng</th>
      <th>Tên Khách hàng</th>
      <th>Email</th>
      <th>Số điện thoại</th>
      <th>Địa chỉ</th>
      <th>Thành phố</th>
      <th>Quốc gia</th>
      <th>Trạng thái</th>
      <th>Chức năng</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($customers as $customer) { ?>
      <tr>
        <td><?php echo $customer['customerID']; ?></td>
        <td><?php echo $customer['customerName']; ?></td>
        <td><?php echo $customer['customerEmail']; ?></td>
        <td><?php echo $customer['phoneNumber']; ?></td>
        <td><?php echo $customer['addressLine1'] . ', ' . $customer['addressLine2']; ?></td>
        <td><?php echo $customer['city']; ?></td>
        <td><?php echo $customer['country']; ?></td>
        <td><?php echo $customer['customerStatus'] ? 'Active' : 'Inactive'; ?></td>
        <td style="display: flex;justify-content: space-around;"> 
            <a href="edit_customer.php?id=<?php echo $customer['customerID']; ?>"><i class="fa-solid fa-edit"></i></a>
            <?php 
          echo "<form method='post'>
          <button type='submit' name='status' value='" . $customer['customerID'] . "|" . $customer['customerStatus'] . "'>
              <i class='fa " . ($customer['customerStatus'] ? 'fa-lock' : 'fa-lock-open') . "'></i>
          </button>
      </form>
      ";
            ?>
          

        </td>
      </tr>
    <?php } ?>
    <?php 
    require('connectPHP.php');
   if(isset($_POST['status'])){
    $status = $_POST['status'];
    $statusArr = explode('|', $status);
    $customerID = $statusArr[0];
    $customerStatus = $statusArr[1];

    // chuyển giá trị $customerStatus thành kiểu boolean
    $customerStatus = ($customerStatus === "1") ? true : false;

    // kiểm tra giá trị $customerID và $customerStatus
    if (!$customerID || !is_bool($customerStatus)) {
        echo "Giá trị không hợp lệ";
        return;
    }

    // thực hiện truy vấn
    if(!$customerStatus){
        $sql = "UPDATE CUSTOMER SET customerStatus = 1 WHERE customerID = '".$customerID."'";
        echo "Bằng 0, đã update lại = 1";
        echo "</br> $customerID";
    }
    else {
        $sql = "UPDATE CUSTOMER SET customerStatus = 0 WHERE customerID = '".$customerID."'";
        echo "Bằng 1, đã update lại = 0";
        echo "</br> $customerID";
    }

    $stmt = $conn->prepare($sql); 
    $stmt->execute(); 

    if ($stmt->rowCount() > 0) {
        echo ' </br> Cập nhật thành công';
    } else {
        echo 'Không có bản ghi nào được cập nhật';
    }
}
                                          
     ?>
  </tbody>
</table>
<script>

   

  
</script>
