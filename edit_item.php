<?php 
  include "db_conn.php";
  $id = $_GET['id'];

  if (isset($_POST['submit'])) {
    $item_code = $_POST['item_code'];
    $item_category = $_POST['item_category'];
    $item_subcategory =$_POST['item_subcategory'];
    $item_name = $_POST['item_name'];
    $quantity= $_POST['quantity'];
    $unit_price=$_POST['unit_price'];

    $sql ="UPDATE `item` SET `item_code`='$item_code',`item_category`='$item_category]',`item_subcategory`='$item_subcategory',`item_name`='$item_name',`quantity`='$quantity',`unit_price`='$unit_price' WHERE id=$id"; 
  
    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location:item.php?msg=Data Updated successfully");
    }else{
        echo "Failed:" . mysqli_error($conn);
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit item</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<body style="background-color: #F2EFE5">
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">LOGO</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="customer.php">Customer</a></li>
      <li class="active"><a href="item.php">Item</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Reports<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="invoice_report.php">Invoice report</a></li>
          <li><a href="invoice_item.php"> Invoice item report </a></li>
          <li><a href="item_report.php">Item report </a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> 

<div class="container">
    <div class="text-center mb-4">
        <h3>Edit Item Information</h3>
        <p class="text-muted"> Click update after changing any information</p>
    </div>

    <?php 
    $sql ="SELECT * FROM item WHERE id = $id LIMIT 1 ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    ?>



    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min: width 300px; background-color:#E3E1D9; padding:10px; border-radius: 10px;">
            <div class="col">
                <label class="form-label">Item Code:</label>
                <input type="text" class="form-control" name="item_code" value="<?php echo $row['item_code']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Item Category:</label>
                <input type="text" class="form-control" name="item_category"  value="<?php echo $row['item_category']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Item Subcategory:</label>
                <input type="text" class="form-control" name="item_subcategory"  value="<?php echo $row['item_subcategory']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Item Name:</label>
                <input type="text" class="form-control" name="item_name"  value="<?php echo $row['item_name']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Quantity:</label>
                <input type="text" class="form-control" name="quantity"  value="<?php echo $row['quantity']?>">
            </div>
            <br>
            <div class="col">
                <label class="form-label">Unit Price:</label>
                <input type="text" class="form-control" name="unit_price"  value="<?php echo $row['unit_price']?>">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success" name="submit" >Update</button>
                <a href="item.php" class="btn btn-danger">Cancle</a>
            </div>
            
    
       </form>
    </div>
    

</div>


<!-- Bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>