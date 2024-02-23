<?php 
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM customer WHERE id =$id";
$result =mysqli_query($conn,$sql);
if($result){
    header("location: customer.php?msg=Record deleted successfully");

} else{
    echo"Failed:" . mysqli_error($conn);
}

?>