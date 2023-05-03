<?php
    $servername = "DESKTOP-MHFDASJ";
    $username = "";
    $password = "";
    $database = "POURHOMME_MANAGEMENT";
    
    try {
      $conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "<script>console.log('Connected successfully');</script>";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    
?>