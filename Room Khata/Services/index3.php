<?php
   include('../config/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Khata - Services</title>
    <link rel="stylesheet" href="services.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="menu">
        <div class="wrapper">
            <ul>
               <li><a href="managerenters.php">Manage Renters</a></li>
               <li><a href="paymentdetails.php">Payment Details</a></li>
               <li>
                   <a href="light-bill.php">Light Bill Details</a>
                   
                </li>
               <li><a href="about-renter.php">About Renters</a></li>
               <li><a href="pay-rent.php">Pay Rent</a></li>
               <li><a href="pay-bill.php">Pay Bill</a></li>
               <li><a href="baki-money.php">Baki Money</a></li>
               <li><a href="../Main-Content/user_home.php">Logout Service</a></li>
            </ul>
        </div>
     </div>
     
</body>
</html>
