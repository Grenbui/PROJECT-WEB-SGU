<?php
    $servername = "LAPTOP-8QF16IA0";
    $username = "";   
    $password = "";
    $dbname = "POURHOMME_MANAGEMENT";
    // Tạo kết nối
    try {
        $conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
        // Thiết lập chế độ lỗi PDO để thông báo lỗi trở lại từ SQL Server
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
    }
?>
