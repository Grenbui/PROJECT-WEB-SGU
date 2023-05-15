<?php 
 require_once 'connectPHP.php';

 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
    // cập nhật các thông tin khác
    $productID = $_GET['productID'];
    $productName = $_POST['productName'];
    $productVendor = $_POST['productVendor'];
    $productLine = $_POST['productLine'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];
    $productMaterial = $_POST['productMaterial'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $sql_3 = "SELECT productLineID FROM product_line WHERE productLineName = '$productLine'";
    $productLineID_query = mysqli_query($conn,$sql_3);
    $productLineID_query = mysqli_fetch_array($productLineID_query);
    $productLineID = $productLineID_query[0];
    if($_GET['action'] == 'edit') {
        $sql = "UPDATE product 
        SET productName='$productName', 
            productVendor='$productVendor', 
            productLineID='$productLineID', 
            buyPrice='$buyPrice', 
            MSRP='$MSRP', 
            productMaterial='$productMaterial', 
            productDescription='$productDescription', 
            quantityInStock='$quantityInStock' 
        WHERE productID='$productID'";
        echo $sql;
    $rows = mysqli_query($conn,$sql);
  
    }
    else {
        $sql = "INSERT INTO product (productID, productName, productVendor, productLineID, buyPrice, MSRP, productMaterial, productDescription, quantityInStock,productStatus) 
        VALUES ('$productID', '$productName', '$productVendor', '$productLineID', '$buyPrice', '$MSRP', '$productMaterial', '$productDescription', '$quantityInStock',0);";
        echo $sql;
    $rows = mysqli_query($conn,$sql);
   
    }

   
    
    // cập nhật hình ảnh
    $target_dir = "../Image/".$productLine;
    $productImageID_ischange = array();
    $productImageID = array();
    $sql_2 = "SELECT * FROM product_image WHERE productID = '$productID' ORDER BY `isMainImage` DESC";
    $listproductImage = mysqli_query($conn,$sql_2);
    while ($row = mysqli_fetch_assoc($listproductImage)) {
        $productImageID[] = $row['productImageID'];
    }
    $file_names = array("main_img", "img_1", "img_2", "img_3", "img_4");
    $file_names_notempty = array();
    $target_files = array();
    foreach ($file_names as $key => $file_names) {
        if (!empty($_FILES[$file_names]["name"])) {
            $target_files[] = $target_dir ."/" . basename($_FILES[$file_names]["name"]);
            $file_names_notempty[] = $file_names;
            $productImageID_ischange[] = $productImageID[$key];
           
        }
    }
foreach ($target_files as $key => $target_file) {
    uploadFileToVisual($target_file, $file_names_notempty[$key],$productImageID_ischange[$key],$productID,$conn);
}
 }
 function uploadFileToVisual($UrlImage, $file_name,$productImageID,$productID,$conn) {
    $imageFileType = strtolower(pathinfo($UrlImage,PATHINFO_EXTENSION));
    $uploadOk = 1;
    $check = getimagesize($_FILES[$file_name]["tmp_name"]);
    if($check !== false) {
      
        $uploadOk = 1;
    } else {
       
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($UrlImage)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES[$file_name]["size"] > 500000) {
       
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Upload ảnh không thành công";
    // if everything is ok, try to upload file
    } else {
        $filename_without_ext = substr($UrlImage, 0, strrpos($UrlImage, '.')); 
        $newUrlImage_insertVisual = $filename_without_ext . '.webp';
        $UrlImage = substr($UrlImage, 1, strrpos($UrlImage, '.') - 1);
        if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $newUrlImage_insertVisual)) {
            if($file_name == 'main_img')
            $sql = "UPDATE `product_image` SET `productImageURL` = '$UrlImage', `isMainImage`= 1 WHERE `productID` = '$productID' AND `productImageID` = '$productImageID'";
            else 
            $sql = "UPDATE `product_image` SET `productImageURL` = '$UrlImage', `isMainImage`= 0 WHERE `productID` = '$productID' AND `productImageID` = '$productImageID'";
            $row = mysqli_query($conn,$sql);
            if($row) echo "Thành công";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
}
 header('Location: admin.php?page=product');
 exit();
?>
