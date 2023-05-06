USE POURHOMME_MANAGEMENT
GO

/*Lệnh xóa tất cả các giá trị trong bảng*/
DELETE FROM PRODUCT_LINE
DELETE FROM PRODUCT

/*Câu truy vấn dữ liệu*/
SELECT * FROM PRODUCT_LINE
SELECT * FROM PRODUCT
SELECT * FROM PRODUCT_COLOR
SELECT * FROM PRODUCT_SIZE
SELECT * FROM PRODUCT_IMAGE
SELECT * FROM CUSTOMER
SELECT * FROM ORDERS
SELECT * FROM ORDER_DETAIL
SELECT * FROM PAYMENT

/*Dữ liệu danh mục sản phẩm*/
INSERT INTO PRODUCT_LINE VALUES 
('PL1', 'boots'),
('PL2', 'Mosscasins'),
('PL3', 'Flip-flop'),
('PL4', 'Belt'),
('PL5', 'Wallet')


/*Dữ liệu sản phẩm*/
INSERT INTO PRODUCT VALUES
('P1', 'Johny Classique Chelsea', 'PL1', 'NSX A', '', 30, 3050000, 2000000,'Da'),
('P2', 'Johny Pointed Brogue Chelsea', 'PL1', 'NSX A', '', 4, 2050000, 1500000, 'Da'),
('P3', 'Johny Pointed Chelsea', 'PL1', 'NSX A', '', 16, 1050000, 700000, 'Da'),
('P4', 'Johny Pointed Patent Chelsea', 'PL1', 'NSX A', '', 17, 2900000, 1800000, 'Da bóng'),
('P5', 'Johny Weaving Chelsea', 'PL1', 'NSX A', '', 3, 3050000, 2000000,'Da'),
('P6', 'Ronny Moca Smooth (brown)', 'PL2', 'NSX A', '', 2, 4650000, 4000000,'Da'),
('P7', 'Ronny Moca Smooth (black)', 'PL2', 'NSX A', '', 14, 4050000, 4000000,'Da'),
('P8', 'Ronny Moca Suede (blue)', 'PL2', 'NSX A', '', 19, 3050000, 2900000,'Da lộn'),
('P9', 'Ronny Moca Suede (red)', 'PL2', 'NSX A', '', 15, 3800000, 2800000,'Da lộn'),
('P10', 'Ronny Moca Suede (grey)', 'PL2', 'NSX A', '', 8, 1050000, 900000,'Da lộn'),
('P11', 'Ronny Moca Suede (brown)', 'PL2', 'NSX A', '', 9, 3050000, 3000000,'Da lộn'),
('P12', 'Flip-flop weaving (black)', 'PL3', 'NSX A', '', 10, 800000, 500000,''),
('P13', 'Flip-flop weaving (blue)', 'PL3', 'NSX A', '', 2, 750000, 600000,''),
('P14', 'Flip-flop weaving (brown)', 'PL3', 'NSX A', '', 4, 800000, 750000,''),
('P15', 'Flip-flop weaving (grey)', 'PL3', 'NSX A', '', 20, 500000, 400000,''),
('P16', 'Flip-flop weaving (red)', 'PL3', 'NSX A', '', 15, 950000, 700000,''),
('P17', 'Lokky Taiga Belt 3.4cm Simple', 'PL4', 'NSX A', '', 15, 850000, 700000,'Da'),
('P18', 'Lokky Taiga Belt 3.4cm(black)', 'PL4', 'NSX A', '', 15, 1200000, 950000, 'Da'),
('P19', 'Lokky Taiga Belt 3.4cm', 'PL4', 'NSX A', '', 8, 1450000, 1000000,'Da'),
('P20', 'Nokky Classique Belt 3.4cm', 'PL4', 'NSX A', '', 9, 1500000, 1000000,'Da'),
('P21', 'Nokky Croco Belt 2.8cm Simple', 'PL4', 'NSX A', '', 4, 1350000, 1250000,'Da'),
('P22', 'Anchy Blanc Bi-Fold Simple', 'PL4', 'NSX A', '', 7, 4500000, 3000000,'Da'),
('P23', 'Anchy Grained Bi-Fold Button', 'PL4', 'NSX A', '', 19, 499000, 350000, 'Da'),
('P24', 'Anchy Grained Bi-Fold Simple', 'PL4', 'NSX A', '', 25, 399500, 280000,'Da'),
('P25', 'Grained Name Card Holder', 'PL4', 'NSX A', '', 10, 1200000, 1000000,'Da'),
('P26', 'Metal Bi-folds', 'PL4', 'NSX A', '', 23, 450000, 300000, 'Da')

/*Dữ liệu size của sản phẩm*/
DELETE FROM PRODUCT_SIZE
SELECT * FROM PRODUCT_SIZE ORDER BY productID

DECLARE @i INT = 1
DECLARE @quantity INT = 1;
DECLARE @minSize INT
DECLARE @maxSize INT
SET @minSize = 35
SET @maxSize = 46
DECLARE @productID VARCHAR(10)

DECLARE productCursor CURSOR FOR 
SELECT TOP 16 P.productID
FROM PRODUCT P
WHERE SUBSTRING(P.productID, 2, LEN(P.productID) - 1) <= 16

OPEN productCursor

FETCH NEXT FROM productCursor INTO @productID

WHILE @@FETCH_STATUS = 0
BEGIN
    WHILE (@minSize <= @maxSize)
    BEGIN
        INSERT INTO PRODUCT_SIZE (productSizeID, productID, productSize)
        VALUES ('PS' + CONVERT(VARCHAR(5), @quantity), @productID, @minSize)
        SET @minSize = @minSize + 1
        SET @quantity = @quantity + 1
    END
    SET @minSize = 35
    FETCH NEXT FROM productCursor INTO @productID
END

CLOSE productCursor
DEALLOCATE productCursor


/*Dữ liệu màu của sản phẩm*/
INSERT INTO PRODUCT_COLOR VALUES
('PC1', 'P1', 'Đen'),
('PC2', 'P1', 'Nâu'),
('PC3', 'P2', 'Đen'),
('PC4', 'P2', 'Nâu'),
('PC5', 'P3', 'Đen'),
('PC6', 'P3', 'Nâu'),
('PC7', 'P4', 'Đen'),
('PC8', 'P4', 'Nâu'),
('PC9', 'P5', 'Đen'),
('PC10', 'P5', 'Nâu'),
('PC11', 'P6', 'Nâu'),
('PC12', 'P7', 'Đen'),
('PC13', 'P8', 'Xanh dương'),
('PC14', 'P9', 'Đỏ'),
('PC15', 'P10', 'Xám'),
('PC16', 'P11', 'Nâu'),
('PC17', 'P12', 'Đen'),
('PC18', 'P13', 'Xanh dương'),
('PC19', 'P14', 'Nâu'),
('PC20', 'P15', 'Xám'),
('PC21', 'P16', 'Đỏ'),
('PC22', 'P17', 'Đen'),
('PC23', 'P17', 'Navy'),
('PC24', 'P18', 'Đen'),
('PC25', 'P18', 'Navy'),
('PC26', 'P19', 'Đen'),
('PC27', 'P19', 'Navy'),
('PC28', 'P20', 'Đen'),
('PC29', 'P20', 'Navy'),
('PC30', 'P21', 'Đen'),
('PC31', 'P21', 'Navy'),
('PC32', 'P22', 'Nâu'),
('PC33', 'P22', 'Xanh dương'),
('PC34', 'P22', 'Xám'),
('PC35', 'P23', 'Xám'),
('PC36', 'P24', 'Xanh lá'),
('PC37', 'P24', 'Cam'),
('PC38', 'P24', 'Be'),
('PC39', 'P24', 'Tím'),
('PC40', 'P25', 'Đen'),
('PC41', 'P25', 'Trắng'),
('PC42', 'P25', 'Đỏ'),
('PC43', 'P25', 'Hồng'),
('PC44', 'P26', 'Đen'),
('PC45', 'P26', 'Xanh lá'),
('PC46', 'P26', 'Xanh dương')






/*Dữ liệu hình ảnh của sản phẩm*/
SELECT * FROM PRODUCT_IMAGE ORDER BY productID
DELETE FROM PRODUCT_IMAGE

DECLARE @productID VARCHAR(10)
DECLARE @productLineName VARCHAR(50)
DECLARE @productName VARCHAR(50)
DECLARE @isMainImage BIT
DECLARE @stt INT = 1


DECLARE productCursor CURSOR FOR 
SELECT P.productID, PL.productLineName, P.productName
FROM PRODUCT P
INNER JOIN PRODUCT_LINE PL ON P.productLineID = PL.productLineID

OPEN productCursor

FETCH NEXT FROM productCursor INTO @productID, @productLineName, @productName

WHILE @@FETCH_STATUS = 0
BEGIN
    SET @isMainImage = 0
    DECLARE @n INT = 1
	DECLARE @m INT = 1
	DECLARE @productImageURL VARCHAR(100)
	
	PRINT '@productName: ' + @productName + ', @productLineName: ' + @productLineName
	WHILE @n <= 5
	BEGIN
		SET @productImageURL = './Image/' + @productLineName + '/' + @productName + CONVERT(VARCHAR(5), @n) + '.webp'
		PRINT '@stt: ' + CONVERT(VARCHAR(5), @stt)
		IF(@n = 1)
		BEGIN 
			SET @isMainImage = 1
		END
		ELSE 
		BEGIN 
			SET @isMainImage = 0
		END
		INSERT INTO PRODUCT_IMAGE (productImageID, productID, productImageURL, isMainImage)
		VALUES ('PI' + CONVERT(VARCHAR(5), @stt), @productID, @productImageURL, @isMainImage)
		SET @n = @n + 1
		SET @stt = @stt + 1
	END

    FETCH NEXT FROM productCursor INTO @productID, @productLineName, @productName
END

CLOSE productCursor
DEALLOCATE productCursor


/*Dữ liệu của customer*/
INSERT INTO CUSTOMER VALUES
('C1', 'Nguyễn Văn A', '123@gmail.com', 'ANguyen', '123456', '0899308989', '273 An Dương Vương Phường 5 Quận 5', '', 'TP Hồ Chí Minh', 'Việt Nam', 0),
('C2', 'Nguyễn Văn B', '109@gmail.com', 'BNguyen', 'q321098', '0903123450', '123 Nguyễn Văn Trỗi Phường 1 Quận 1', '', 'TP Hồ Chí Minh', 'Việt Nam', 0)

/*Dữ liệu của hóa đơn*/
INSERT INTO ORDERS VALUES
('O1', '2023-05-02', '', 'Chưa giao hàng', '', 'C1', '273 An Dương Vương Phường 5 Quận 5'),
('O2', '2023-04-25', '2023-05-01', 'Đã giao hàng', '', 'C2', '123 Nguyễn Văn Trỗi Phường 1 Quận 1')


/*Dữ liệu của chi tiết hóa đơn*/
INSERT INTO ORDER_DETAIL VALUES
('OD1', 'O1', 'P1', 1, 3050000, 1),
('OD2', 'O1', 'P2', 2, 2050000, 2),
('OD3', 'O2', 'P1', 2, 3050000, 1)

/*Dữ liệu của payment*/
INSERT INTO PAYMENT VALUES
('C1', 1, '', (3050000 + 2050000*2)),
('C2', 2, '2023-05-01', (3050000 * 2))



