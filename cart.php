<?php
session_start();
include 'condb.php';
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'menu.php'?>
<br><br>
    <div class="container">
        <form id="form1" method="POST" action="insert_cart.php">
            <div class="row">
                <div class="col-md-10">

<div class="alert alert-success h4" role="alert">
  การสั่งซื้อสินค้า
</div>
<table class = "table table-hover">
    <tr>
        <th>ลำดับที่</th>
        <th>ชื่อสินค้า</th>
        <th>ราคา</th>
        <th>จำนวน</th>
        <th>ราคารวม</th>
        <th>เพิ่ม - ลด</th>
        <th>ลบ</th>

    </tr>
    <?php
    $Total =0;
    $sumPrice = 0;
    $m = 1;
    for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){
        if(($_SESSION["strProductID"][$i]) !="") {
        $sql1="select * from product where pro_id = '". $_SESSION["strProductID"][$i]."'" ;
        $result1 = mysqli_query($conn, $sql1);
        $row_pro = mysqli_fetch_array($result1);

        $_SESSION["price"] = $row_pro['price'];
        $Total = $_SESSION["strQty"][$i];
        $sum = $Total * $row_pro['price'];
        $sumPrice = $sumPrice + $sum ;
        $_SESSION["sum_price"] = $sumPrice;

        
    ?>
    <tr> 
        <td><?=$m?></td>
        <td>
            <img src="img/<?=$row_pro['image']?>"width="80" height="100" class="border">
        <?=$row_pro['pro_name']?>
        </td>
        <td><?=$row_pro['price']?></td>
        <td><?=$_SESSION["strQty"][$i]?></td>
        <td><?=$sum?></td>
        <td>
            <a href="order.php?id=<?=$row_pro['pro_id']?>" class="btn btn-outline-primary">+</a>
            <?php if($_SESSION["strQty"][$i] >1){ ?>
            <a href="order_del.php?id=<?=$row_pro['pro_id']?>" class="btn btn-outline-primary">-</a>
            <?php } ?>
        </td>
        <td><a href="pro_delete.php?Line=<?=$i?>"><img src="img/delete.png" width="30"></a></td>
    </tr>
    <?php
    $m=$m+1;
    }
    }
    ?>
    <tr>
        <td class="text-end" colspan="4">รวมเป็นเงิน</td>
        <td class="text-center"><?=$sumPrice?></td>
        <td >บาท</td>
    </tr>
</table>
<div style = "text-align:right">
<a href="show_product.php"> <button type="button" class="btn btn-outline-secondary">เลือกสินค้า</button> </a> |
<button type="submit" class="btn btn-outline-primary">ยืนยันการสั่งซื้อ</button>
</div>
   </div>
   <br>
   <div class="row">
    <div class="col-md-4">
    <div class="alert alert-success" h4 role="alert">
  ข้อมูลจัดส่งสินค้า
</div>
ชื่อ-นามสกุล:
<input type="text" name="cus_name" class="form-control" required placeholder="ชื่อ-นามสกุล"><br>
โต๊ะ:
<textarea class="form-control " required placeholder="โต๊ะ" name="cus_add" rows="3"></textarea><br>
เบอร์โทรศัพท์:
<input type="number" name="cus_tel" class="form-control " required placeholder="เบอร์โทรศัพท์..."><br>
<br><br><br>
    </div>
  </div>
   </form>
   
    </div>
    </div>
</body>

</html>