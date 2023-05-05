
<?php 
           require_once('connectPHP.php');
                // Thực hiện truy vấn SQL
                if (isset($_POST['submit'])) {
                  $sql = "SELECT ORDERS.orderID, ORDERS.customerID, ORDERS.comments, ORDERS.orderDate, ORDERS.shippedDate, ORDERS.subAddress, ORDERS.status
                  FROM ORDERS
                  INNER JOIN CUSTOMER ON ORDERS.customerID = CUSTOMER.customerID
                  WHERE 1=1"; // điều kiện giả để giúp thêm các điều kiện sau dễ dàng hơn
              
                  if (!empty($_POST['province'])) {
                      $province = $_POST['province'];
                      $sql .= " AND CUSTOMER.city = '" . $province . "'";
                  }
              
                  if (!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
                      $start_date = $_POST['start_date'];
                      $end_date = $_POST['end_date'];
                      $sql .= " AND ORDERS.orderDate BETWEEN '$start_date' AND '$end_date'";
                  }
                 $stmt = $conn->prepare($sql);  
                 $stmt->execute();
                 $orders = $stmt->fetchAll();
                }
                else {
                  $sql = "SELECT * FROM ORDERS";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute();
                  $orders = $stmt->fetchAll();
                }
            ?>
      <table>
               <tr>
                 <th>Order ID</th>
                 <th>Ngày đặt</th>
                 <th>Ngày giao</th>
                 <th>Trạng thái</th>
                 <th>Comments</th>
                 <th>Customer ID</th>
                 <th>Địa chỉ</th>
                 <th>Chi tiết hóa đơn</th>
                 </tr>
                 <?php foreach ($orders as $order) { ?>
                    <tr>
                     <td><?php echo $order['orderID']; ?> </td>
                     <td><?php echo $order['orderDate'] ?></td>
                     <td><?php echo $order['shippedDate'] ?></td>
                     <td><?php echo $order['status'] ?></td>
                     <td><?php echo $order['comments'] ?></td>
                     <td><?php echo $order['customerID'] ?></td>
                     <td><?php echo $order['subAddress'] ?></td>
                    <td><a href="<?php echo 'detailsproduct.php?code='. $order['orderID'] ?>">View Details</a></td>
                     </tr>
                     <?php } ?>
                </table>
<script>

</script>