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
  <?php include 'menu.php'?>
<div class="container">
<div class="row">
  <?php
$sql="SELECT * FROM product ORDER BY pro_id";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){  
  ?>
     <div class="col-sm-3">
      <div class="text-center">
     <img src="img/<?=$row['image']?>" width="200px" height="250px" class="mt-5 p-2 my-2 border"> <br>
     ID: <?=$row['pro_id']?> <br>
     <h5 class="text-success"><?=$row['pro_name']?> </h5>
     ราคา <b class="text-danger"><?=$row['price']?></b> บาท <br>
     <a  class="btn btn-outline-success mt-2" href="order.php?id=<?=$row['pro_id']?>">Add cart</a>
     </div>
     
     
    </div> 

  <?php
}
mysqli_close($conn);
?>
 
  </div>
</div>
</body>
</html>