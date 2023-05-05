<?php
    $servername = "localhost";//LAPTOP-8QF16IA0
    $username = "root";   
    $password = "";
    $dbname = "POURHOMME_MANAGEMENT";
    // Tạo kết nối
    try {
        //$conn = new PDO("sqlsrv:Server=$servername;Database=$dbname", $username, $password);
        $conn=new mysqli($servername,$username,$password,$dbname);
        // Thiết lập chế độ lỗi PDO để thông báo lỗi trở lại từ SQL Server
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($conn->connect_error){
            echo "success";
        }
        else echo "success";
    }
    catch(PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
    }
?>
