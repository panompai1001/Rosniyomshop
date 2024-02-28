<?php include 'condb.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myshop</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="/js/bootstrap.bundle.min.js" ></script>

</head>
<body>
<div class="container">
<div class="row">
  <?php
$sql="SELECT * FROM product ORDER BY pro_id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){  
  ?>
     <div class="col-sm-3">
     <img src="img/<?=$row['image']?>" width="80px" height="100px" > <br>
     ID: <?=$row['pro_id']?> <br>
     <?=$row['pro_name']?> <br>
     ราคา <?=$row['price']?> บาท <br>
    </div> 
  <?php
}
mysqli_close($conn);
?>
 
  </div>
</div>
</body>
</html>