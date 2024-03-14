<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>report</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <?php include 'menu1.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 ">

            <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
<div class="alert alert-primary h4 text-center mb-4 mt-4" role="alert">
เพิ่มข้อมูลสินค้า
</div>

<form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">
    <label>ชื่อสินค้า</label>
    <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า..." required> <dr>
    <label>ประเภทสินค้า</label>
  <select class="form-select" name="typeID">
  <option selected>Open this select menu</option>
<?php
$sql ="SELECT * FROM type ORDER BY type_name" ;
$hand=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($hand)){
?>
  <option value="<?=$row['type_id']?>"> <?=$row['type_name']?></option>
  <?php
 } 
 mysqli_close($conn);
 ?>

</select>   

<label>ราคา</label>
    <input type="number" name="price" class="form-control" placeholder="ราคา..." required> <br>
    <label>จำนวน</label>
    <input type="number" name="num" class="form-control" placeholder="จำนวน..." required> <br>
    <label>รูปภาพ</label>
    <input type="file" name="file1"  required> <br> <br> 

    <button type="submit" class="btn btn-primary">ยืนยัน</button>
    <input class="btn btn-danger" type="reset" value="ยกเลิก">
    
</form>
            </div>

        </div>

    </div>
    
</body>

 
    </div>
    </div>
    </main>
    <?php include 'footer.php'; ?>



    </div>
    </div>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

