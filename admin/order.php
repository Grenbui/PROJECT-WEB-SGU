
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
                $sql = "SELECT * FROM ORDERS";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $orders = $stmt->fetchAll();
               
                echo "<table>";
echo "<tr><th>Order ID</th><th>Ngày đặt</th><th>Ngày giao</th><th>Trạng thái</th><th>Comments</th><th>Customer ID</th><th>Địa chỉ</th><th>Chi tiết hóa đơn</th></tr>";
foreach ($orders as $order) {
    echo "<tr>";
    echo "<td>" . $order['orderID'] . "</td>";
    echo "<td>" . $order['orderDate'] . "</td>";
    echo "<td>" . $order['shippedDate'] . "</td>";
    echo "<td>" . $order['status'] . "</td>";
    echo "<td>" . $order['comments'] . "</td>";
    echo "<td>" . $order['customerID'] . "</td>";
    echo "<td>" . $order['subAddress'] . "</td>";
   
    echo '<td><a href="detailsproduct.php?code='. $order['orderID'].'">View Details</a></td>';
    echo "</tr>";
} 
echo "</table>";
            ?>
       
    <div id="product-modal" class="modal_detail">
    <div class="modal-content-detail">
    <span class="close" onclick="hideModal()">&times;</span>
    <table id="product-table" class="product-table">
    <thead>
    <tr>
    <th>Ảnh sản phẩm</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Tổng giá trị</th>
    </tr>
    </thead>
    <tbody></tbody>
    <tfoot>
    <tr>
    <td colspan="3" class="text-right">Tổng giá trị:</td>
    <td id="total-value"></td>
    </tr>
    </tfoot>
    </table>
    </div>
    </div>
<script>

function ModalDetails(btn) {
  var modal = document.getElementById("product-modal");
  modal.classList.add("show-modal");
}
function hideModal() {
  var modal = document.getElementById("product-modal");
  modal.classList.remove("show-modal");
}
</script>