<?php
    $price = $_POST["pprice"];
    $count = $_POST["pcount"];
    $total = $price * $count;
    $vat = $total*0.07;
    $result = "ราคาสินค้าต่อชิ้น : ". $price ."<br>จำนวนที่ซื้อ : " . $count . "<br>ราคารวม : ".$total ."<br>ภาษีมูลค่าเพิ่ม : ". $vat . "<br>ราคาสุทธิ : " . $total+$vat;
?>

้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Result</title>
</head>
<body class="frame">
    <h1><?php echo $result; ?></h1>
</body>
</html>