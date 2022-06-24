
<?php
    include('../config/config.php'); 
    $id = $_GET['id'];
    $full_name= $_GET['select_name'];
    $full_name = $_GET['full_name'];
    
    $sql = "DELETE FROM add_renter WHERE id = $id";
    $sql1 = "DELETE FROM pay_rent WHERE select_name = $full_name";
    // $sql2 = "DELETE FROM pay_light_bill WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    $res1 = mysqli_query($conn,$sql1);
    // $res2 = mysqli_query($conn,$sql2);
    if($res == true && $res1 == true){
        $_SESSION['left-room']="<div class='error'> Renter Left The Room</div>";
        header('location:'.SITEURL.'Services/managerenters.php');
    }
    else {
        $_SESSION['left-room']="<div class='error'>Error In Leaving Room</div>";
        header('location:'.SITEURL.'Services/managerenters.php');
    }
?>