
<?php
    include('../config/config.php'); 
    $id = $_GET['id'];
    $sql = "DELETE FROM baki_money WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    if($res == true){
        $_SESSION['paid-money']="<div class='submitMsg'>Paid The Money</div>";
        header('location:'.SITEURL.'Services/baki-money.php');
    }
    else {
        $_SESSION['left-room']="<div class='error'>Error In Paying Money</div>";
        header('location:'.SITEURL.'Services/baki-money.php');
    }
?>