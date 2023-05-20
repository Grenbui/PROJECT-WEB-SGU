USE POURHOMME_MANAGEMENT
GO

/*Lệnh xóa tất cả các giá trị trong bảng*/
DELETE FROM PRODUCT_LINE
DELETE FROM PRODUCT
DELETE FROM CUSTOMER

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
SELECT * FROM CART
SELECT * FROM CART_ITEMS

SELECT DISTINCT ci.cartItemID, p.productName, ci.quantity, buyPrice, productName FROM CART_ITEMS ci JOIN PRODUCT p ON ci.productID = p.productID WHERE ci.cartID IN (SELECT cartID FROM CART WHERE customerID = :customerID
 SELECT DISTINCT ci.cartItemID, p.productName, ci.quantity, p.buyPrice, p.productName, pi.productImageURL, pi.isMainImage
                                    FROM CART_ITEMS ci
                                    JOIN PRODUCT p ON ci.productID = p.productID
                                    JOIN PRODUCT_IMAGE pi ON p.productID = pi.productID
                                    WHERE ci.cartID IN (SELECT cartID FROM CART ) AND isMainImage = 1
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
('P22', 'Anchy Blanc Bi-Fold Simple', 'PL5', 'NSX A', '', 7, 4500000, 3000000,'Da'),
('P23', 'Anchy Grained Bi-Fold Button', 'PL5', 'NSX A', '', 19, 499000, 350000, 'Da'),
('P24', 'Anchy Grained Bi-Fold Simple', 'PL5', 'NSX A', '', 25, 399500, 280000,'Da'),
('P25', 'Grained Name Card Holder', 'PL5', 'NSX A', '', 10, 1200000, 1000000,'Da'),
('P26', 'Metal Bi-folds', 'PL5', 'NSX A', '', 23, 450000, 300000, 'Da')

INSERT INTO PRODUCT_IMAGE VALUES
('PI1', 'P1', './Image/boots/Johny Classique Chelsea1', 1),
('PI2','P1', './Image/boots/Johny Classique Chelsea2', 0),
('PI3','P1', './Image/boots/Johny Classique Chelsea3', 0),
('PI4','P1', './Image/boots/Johny Classique Chelsea4', 0),
('PI5','P1', './Image/boots/Johny Classique Chelsea5', 0),
('PI6', 'P2', './Image/boots/Johny Pointed Brogue Chelsea1', 1),
('PI7', 'P2', './Image/boots/Johny Pointed Brogue Chelsea2', 0),
('PI8', 'P2', './Image/boots/Johny Pointed Brogue Chelsea3', 0),
('PI9', 'P2', './Image/boots/Johny Pointed Brogue Chelsea4', 0),
('PI10', 'P2', './Image/boots/Johny Pointed Brogue Chelsea5', 0),
('PI11', 'P3', './Image/boots/Johny Pointed Chelsea1', 1),
('PI12', 'P3', './Image/boots/Johny Pointed Chelsea2', 0),
('PI13', 'P3', './Image/boots/Johny Pointed Chelsea3', 0),
('PI14', 'P3', './Image/boots/Johny Pointed Chelsea4', 0),
('PI15', 'P3', './Image/boots/Johny Pointed Chelsea5', 0),
('PI16', 'P4', './Image/boots/Johny Pointed Patent Chelsea1', 1),
('PI17', 'P4', './Image/boots/Johny Pointed Patent Chelsea2', 0),
('PI18', 'P4', './Image/boots/Johny Pointed Patent Chelsea3', 0),
('PI19', 'P4', './Image/boots/Johny Pointed Patent Chelsea4', 0),
('PI20', 'P4', './Image/boots/Johny Pointed Patent Chelsea5', 0),
('PI21', 'P5', './Image/boots/Johny Weaving Chelsea1', 1),
('PI22', 'P5', './Image/boots/Johny Weaving Chelsea1', 0),
('PI23', 'P5', './Image/boots/Johny Weaving Chelsea1', 0),
('PI24', 'P5', './Image/boots/Johny Weaving Chelsea1', 0),
('PI25', 'P5', './Image/boots/Johny Weaving Chelsea1', 0),
('PI26', 'P6', './Image/Mosscasins/Ronny Moca Smooth (brown)1', 1),
('PI27', 'P6', './Image/Mosscasins/Ronny Moca Smooth (brown)2', 0),
('PI28', 'P6', './Image/Mosscasins/Ronny Moca Smooth (brown)3', 0),
('PI29', 'P6', './Image/Mosscasins/Ronny Moca Smooth (brown)4', 0),
('PI30', 'P6', './Image/Mosscasins/Ronny Moca Smooth (brown)5', 0),
('PI31', 'P7', './Image/Mosscasins/Ronny Moca Smooth (black)1', 1),
('PI32', 'P7', './Image/Mosscasins/Ronny Moca Smooth (black)2', 0),
('PI33', 'P7', './Image/Mosscasins/Ronny Moca Smooth (black)3', 0),
('PI34', 'P7', './Image/Mosscasins/Ronny Moca Smooth (black)4', 0),
('PI35', 'P7', './Image/Mosscasins/Ronny Moca Smooth (black)5', 0),
('PI36', 'P8', './Image/Mosscasins/Ronny Moca Suede (blue)1', 1),
('PI37', 'P8', './Image/Mosscasins/Ronny Moca Suede (blue)2', 0),
('PI38', 'P8', './Image/Mosscasins/Ronny Moca Suede (blue)3', 0),
('PI39', 'P8', './Image/Mosscasins/Ronny Moca Suede (blue)4', 0),
('PI40', 'P8', './Image/Mosscasins/Ronny Moca Suede (blue)5', 0),
('PI41', 'P9', './Image/Mosscasins/Ronny Moca Suede (red)1', 1),
('PI42', 'P9', './Image/Mosscasins/Ronny Moca Suede (red)2', 0),
('PI43', 'P9', './Image/Mosscasins/Ronny Moca Suede (red)3', 0),
('PI44', 'P9', './Image/Mosscasins/Ronny Moca Suede (red)4', 0),
('PI45', 'P9', './Image/Mosscasins/Ronny Moca Suede (red)5', 0),
('PI46', 'P10', './Image/Mosscasins/Ronny Moca Suede (grey)1', 1),
('PI47', 'P10', './Image/Mosscasins/Ronny Moca Suede (grey)2', 0),
('PI48', 'P10', './Image/Mosscasins/Ronny Moca Suede (grey)3', 0),
('PI49', 'P10', './Image/Mosscasins/Ronny Moca Suede (grey)4', 0),
('PI50', 'P10', './Image/Mosscasins/Ronny Moca Suede (grey)5', 0),
('PI51', 'P11', './Image/Mosscasins/Ronny Moca Suede (brown)1', 1),
('PI52', 'P11', './Image/Mosscasins/Ronny Moca Suede (brown)2', 0),
('PI53', 'P11', './Image/Mosscasins/Ronny Moca Suede (brown)3', 0),
('PI54', 'P11', './Image/Mosscasins/Ronny Moca Suede (brown)4', 0),
('PI55', 'P11', './Image/Mosscasins/Ronny Moca Suede (brown)5', 0),
('PI56', 'P12', './Image/Flip-flop/Flip-flop weaving (black)1', 1),
('PI57', 'P12', './Image/Flip-flop/Flip-flop weaving (black)2', 0),
('PI58', 'P12', './Image/Flip-flop/Flip-flop weaving (black)3', 0),
('PI59', 'P12', './Image/Flip-flop/Flip-flop weaving (black)4', 0),
('PI60', 'P12', './Image/Flip-flop/Flip-flop weaving (black)5', 0),
('PI61', 'P13', './Image/Flip-flop/Flip-flop weaving (blue)1', 1),
('PI62', 'P13', './Image/Flip-flop/Flip-flop weaving (blue)2', 0),
('PI63', 'P13', './Image/Flip-flop/Flip-flop weaving (blue)3', 0),
('PI64', 'P13', './Image/Flip-flop/Flip-flop weaving (blue)4', 0),
('PI65', 'P13', './Image/Flip-flop/Flip-flop weaving (blue)5', 0),
('PI66', 'P14', './Image/Flip-flop/Flip-flop weaving (brown)1', 1),
('PI67', 'P14', './Image/Flip-flop/Flip-flop weaving (brown)2', 0),
('PI68', 'P14', './Image/Flip-flop/Flip-flop weaving (brown)3', 0),
('PI69', 'P14', './Image/Flip-flop/Flip-flop weaving (brown)4', 0),
('PI70', 'P14', './Image/Flip-flop/Flip-flop weaving (brown)5', 0),
('PI71', 'P15', './Image/Flip-flop/Flip-flop weaving (grey)1', 1),
('PI72', 'P15', './Image/Flip-flop/Flip-flop weaving (grey)2', 0),
('PI73', 'P15', './Image/Flip-flop/Flip-flop weaving (grey)3', 0),
('PI74', 'P15', './Image/Flip-flop/Flip-flop weaving (grey)4', 0),
('PI75', 'P15', './Image/Flip-flop/Flip-flop weaving (grey)5', 0),
('PI76', 'P16', './Image/Flip-flop/Flip-flop weaving (red)1', 1),
('PI77', 'P16', './Image/Flip-flop/Flip-flop weaving (red)2', 0),
('PI78', 'P16', './Image/Flip-flop/Flip-flop weaving (red)3', 0),
('PI79', 'P16', './Image/Flip-flop/Flip-flop weaving (red)4', 0),
('PI80', 'P16', './Image/Flip-flop/Flip-flop weaving (red)5', 0),
('PI81', 'P17', './Image/Belt/Lokky Taiga Belt 3.4cm Simple1', 1),
('PI82', 'P17', './Image/Belt/Lokky Taiga Belt 3.4cm Simple2', 0),
('PI83', 'P17', './Image/Belt/Lokky Taiga Belt 3.4cm Simple3', 0),
('PI84', 'P17', './Image/Belt/Lokky Taiga Belt 3.4cm Simple4', 0),
('PI85', 'P17', './Image/Belt/Lokky Taiga Belt 3.4cm Simple5', 0),
('PI86', 'P18', './Image/Belt/Lokky Taiga Belt 3.4cm(black)1', 1),
('PI87', 'P18', './Image/FBelt/Lokky Taiga Belt 3.4cm(black)2', 0),
('PI88', 'P18', './Image/Belt/Lokky Taiga Belt 3.4cm(black)3', 0),
('PI89', 'P18', './Image/Belt/Lokky Taiga Belt 3.4cm(black)4', 0),
('PI90', 'P18', './Image/Belt/Lokky Taiga Belt 3.4cm(black)5', 0),
('PI91', 'P19', './Image/Belt/Lokky Taiga Belt 3.4cm1', 1),
('PI92', 'P19', './Image/Belt/Lokky Taiga Belt 3.4cm2', 0),
('PI93', 'P19', './Image/Belt/Lokky Taiga Belt 3.4cm3', 0),
('PI94', 'P19', './Image/Belt/Lokky Taiga Belt 3.4cm4', 0),
('PI95', 'P19', './Image/Belt/Lokky Taiga Belt 3.4cm5', 0),
('PI96', 'P20', './Image/Belt/Nokky Classique Belt 3.4cm1', 1),
('PI97', 'P20', './Image/Belt/Nokky Classique Belt 3.4cm2', 0),
('PI98', 'P20', './Image/Belt/Nokky Classique Belt 3.4cm3', 0),
('PI99', 'P20', './Image/Belt/Nokky Classique Belt 3.4cm4', 0),
('PI100', 'P21', './Image/Belt/Nokky Classique Belt 3.4cm4', 0),
('PI101', 'P21', './Image/Belt/Nokky Croco Belt 2.8cm Simple1', 1),
('PI102', 'P21', './Image/Belt/Nokky Croco Belt 2.8cm Simple2', 0),
('PI103', 'P21', './Image/Belt/Nokky Croco Belt 2.8cm Simple3', 0),
('PI104', 'P21', './Image/Belt/Nokky Croco Belt 2.8cm Simple4', 0),
('PI105', 'P21', './Image/Belt/Nokky Croco Belt 2.8cm Simple5', 0),
('PI106', 'P22', './Image/Wallet/Anchy Blanc Bi-Fold Simple1', 1),
('PI107', 'P22', './Image/Wallet/Anchy Blanc Bi-Fold Simple2', 0),
('PI108', 'P22', './Image/Wallet/Anchy Blanc Bi-Fold Simple3', 0),
('PI109', 'P22', './Image/Wallet/Anchy Blanc Bi-Fold Simple4', 0),
('PI110', 'P22', './Image/Wallet/Anchy Blanc Bi-Fold Simple5', 0),
('PI111', 'P23', './Image/Wallet/Anchy Grained Bi-Fold Button1', 1),
('PI112', 'P23', './Image/Wallet/Anchy Grained Bi-Fold Button2', 0),
('PI113', 'P23', './Image/Wallet/Anchy Grained Bi-Fold Button3', 0),
('PI114', 'P23', './Image/Wallet/Anchy Grained Bi-Fold Button4', 0),
('PI115', 'P23', './Image/Wallet/Anchy Grained Bi-Fold Button5', 0),
('PI116', 'P24', './Image/Wallet/Anchy Grained Bi-Fold Simple1', 1),
('PI117', 'P24', './Image/Wallet/Anchy Grained Bi-Fold Simple2', 0),
('PI118', 'P24', './Image/Wallet/Anchy Grained Bi-Fold Simple3', 0),
('PI119', 'P24', './Image/Wallet/Anchy Grained Bi-Fold Simple4', 0),
('PI120', 'P24', './Image/Wallet/Anchy Grained Bi-Fold Simple5', 0),
('PI121', 'P25', './Image/Wallet/Grained Name Card Holder1', 1),
('PI122', 'P25', './Image/Wallet/Grained Name Card Holder2', 0),
('PI123', 'P25', './Image/Wallet/Grained Name Card Holder3', 0),
('PI124', 'P25', './Image/Wallet/Grained Name Card Holder4', 0),
('PI125', 'P25', './Image/Wallet/Grained Name Card Holder5', 0),
('PI126', 'P26', './Image/Wallet/Metal Bi-folds1', 1),
('PI127', 'P26', './Image/Wallet/Metal Bi-folds2', 0),
('PI128', 'P26', './Image/Wallet/Metal Bi-folds3', 0),
('PI129', 'P26', './Image/Wallet/Metal Bi-folds4', 0),
('PI130', 'P26', './Image/Wallet/Metal Bi-folds5', 0)

INSERT INTO PRODUCT_SIZE VALUES 
('PS1', 'P1', 35),
('PS2', 'P1', 36),
('PS3', 'P1', 37),
('PS4', 'P1', 38),
('PS5', 'P1', 39),
('PS6', 'P1', 40),
('PS7', 'P1', 41),
('PS8', 'P1', 42),
('PS9', 'P1', 43),
('PS10', 'P1', 44),
('PS11', 'P1', 45),
('PS12', 'P1', 46),
('PS13', 'P2', 35),
('PS14', 'P2', 36),
('PS15', 'P2', 37),
('PS16', 'P2', 38),
('PS17', 'P2', 39),
('PS18', 'P2', 40),
('PS19', 'P2', 41),
('PS20', 'P2', 42),
('PS21', 'P2', 43),
('PS22', 'P2', 44),
('PS23', 'P2', 45),
('PS24', 'P2', 46),
('PS25', 'P3', 35),
('PS26', 'P3', 36),
('PS27', 'P3', 37),
('PS28', 'P3', 38),
('PS29', 'P3', 39),
('PS30', 'P3', 40),
('PS31', 'P3', 41),
('PS32', 'P3', 42),
('PS33', 'P3', 43),
('PS34', 'P3', 44),
('PS35', 'P3', 45),
('PS36', 'P3', 46),
('PS37', 'P4', 35),
('PS38', 'P4', 36),
('PS39', 'P4', 37),
('PS40', 'P4', 38),
('PS41', 'P4', 39),
('PS42', 'P4', 40),
('PS43', 'P4', 41),
('PS44', 'P4', 42),
('PS45', 'P4', 43),
('PS46', 'P4', 44),
('PS47', 'P4', 45),
('PS48', 'P4', 46),
('PS49', 'P5', 35),
('PS50', 'P5', 36),
('PS51', 'P5', 37),
('PS52', 'P5', 38),
('PS53', 'P5', 39),
('PS54', 'P5', 40),
('PS55', 'P5', 41),
('PS56', 'P5', 42),
('PS57', 'P5', 43),
('PS58', 'P5', 44),
('PS59', 'P5', 45),
('PS60', 'P5', 46),
('PS61', 'P6', 35),
('PS62', 'P6', 36),
('PS63', 'P6', 37),
('PS64', 'P6', 38),
('PS65', 'P6', 39),
('PS66', 'P6', 40),
('PS67', 'P6', 41),
('PS68', 'P6', 42),
('PS69', 'P6', 43),
('PS70', 'P6', 44),
('PS71', 'P6', 45),
('PS72', 'P6', 46),
('PS73', 'P7', 35),
('PS74', 'P7', 36),
('PS75', 'P7', 37),
('PS76', 'P7', 38),
('PS77', 'P7', 39),
('PS78', 'P7', 40),
('PS79', 'P7', 41),
('PS80', 'P7', 42),
('PS81', 'P7', 43),
('PS82', 'P7', 44),
('PS83', 'P7', 45),
('PS84', 'P7', 46),
('PS85', 'P8', 35),
('PS86', 'P8', 36),
('PS87', 'P8', 37),
('PS88', 'P8', 38),
('PS89', 'P8', 39),
('PS90', 'P8', 40),
('PS91', 'P8', 41),
('PS92', 'P8', 42),
('PS93', 'P8', 43),
('PS94', 'P8', 44),
('PS95', 'P8', 45),
('PS96', 'P8', 46),
('PS97', 'P9', 35),
('PS98', 'P9', 36),
('PS99', 'P9', 37),
('PS100', 'P9', 38),
('PS101', 'P9', 39),
('PS102', 'P9', 40),
('PS103', 'P9', 41),
('PS104', 'P9', 42),
('PS105', 'P9', 43),
('PS106', 'P9', 44),
('PS107', 'P9', 45),
('PS108', 'P9', 46),
('PS109', 'P10', 35),
('PS110', 'P10', 36),
('PS111', 'P10', 37),
('PS112', 'P10', 38),
('PS113', 'P10', 39),
('PS114', 'P10', 40),
('PS115', 'P10', 41),
('PS116', 'P10', 42),
('PS117', 'P10', 43),
('PS118', 'P10', 44),
('PS119', 'P10', 45),
('PS120', 'P10', 46),
('PS121', 'P11', 35),
('PS122', 'P11', 36),
('PS123', 'P11', 37),
('PS124', 'P11', 38),
('PS125', 'P11', 39),
('PS126', 'P11', 40),
('PS127', 'P11', 41),
('PS128', 'P11', 42),
('PS129', 'P11', 43),
('PS130', 'P11', 44),
('PS131', 'P11', 45),
('PS132', 'P11', 46),
('PS133', 'P12', 35),
('PS134', 'P12', 36),
('PS135', 'P12', 37),
('PS136', 'P12', 38),
('PS137', 'P12', 39),
('PS138', 'P12', 40),
('PS139', 'P12', 41),
('PS140', 'P12', 42),
('PS141', 'P12', 43),
('PS142', 'P12', 44),
('PS143', 'P12', 45),
('PS144', 'P12', 46),
('PS145', 'P13', 35),
('PS146', 'P13', 36),
('PS147', 'P13', 37),
('PS148', 'P13', 38),
('PS149', 'P13', 39),
('PS150', 'P13', 40),
('PS151', 'P13', 41),
('PS152', 'P13', 42),
('PS153', 'P13', 43),
('PS154', 'P13', 44),
('PS155', 'P13', 45),
('PS156', 'P13', 46),
('PS157', 'P14', 35),
('PS158', 'P14', 36),
('PS159', 'P14', 37),
('PS160', 'P14', 38),
('PS161', 'P14', 39),
('PS162', 'P14', 40),
('PS163', 'P14', 41),
('PS164', 'P14', 42),
('PS165', 'P14', 43),
('PS166', 'P14', 44),
('PS167', 'P14', 45),
('PS168', 'P14', 46),
('PS169', 'P15', 35),
('PS170', 'P15', 36),
('PS171', 'P15', 37),
('PS172', 'P15', 38),
('PS173', 'P15', 39),
('PS174', 'P15', 40),
('PS175', 'P15', 41),
('PS176', 'P15', 42),
('PS177', 'P15', 43),
('PS178', 'P15', 44),
('PS179', 'P15', 45),
('PS180', 'P15', 46),
('PS181', 'P16', 35),
('PS182', 'P16', 36),
('PS183', 'P16', 37),
('PS184', 'P16', 38),
('PS185', 'P16', 39),
('PS186', 'P16', 40),
('PS187', 'P16', 41),
('PS188', 'P16', 42),
('PS189', 'P16', 43),
('PS190', 'P16', 44),
('PS191', 'P16', 45),
('PS192', 'P16', 46)




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

SELECT PRODUCT.productName, PRODUCT.buyPrice, PRODUCT.productDescription, PRODUCT_COLOR.productColor,
PRODUCT.quantityInStock, PRODUCT_LINE.productLineName
FROM PRODUCT, PRODUCT_COLOR, PRODUCT_LINE



SELECT DISTINCT PRODUCT_COLOR.productColor FROM PRODUCT_COLOR WHERE productID = 'P1'




