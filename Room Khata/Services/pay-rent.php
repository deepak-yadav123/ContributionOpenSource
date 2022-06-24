<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Khata - Pay</title>
    <link rel="stylesheet" href="services.css?v=<?php echo time(); ?>">
    <style>
        select{
            width:80%;
            font-size: large;
            padding: 0%;
            margin:2%;
        }
    </style>
</head>
<body>
    <div class="container1">
       <br><br><h1 style="color:grey;">Pay Room Rent</h1><br><br>
    </div>
    
    <div class="content">
        <br> <form action="" method="POST" enctype="multipart/form-data">
             <table class="tbl-30">
                <tr>
                    <td><label for="renter_name">Name:</label></td>
                    <td >  
                         <select name="name1" class="select_option">
                                <option > Select </option>
                                <?php
                                        $sql = "SELECT *FROM add_renter";
                                        $res = mysqli_query($conn,$sql);
                                        if($res==true){
                                            $count = mysqli_num_rows($res);
                                            if($count>0){
                                                while($rows=mysqli_fetch_assoc($res)){
                                                    $full_name = $rows['full_name'];
                                                    ?>
                                                       <option> <?php  echo $full_name; ?> </option>
                                                     <?php
                                                }
                                            }
                                        }
                                    ?>
                            </select>
                     </td>
                </tr>

                <tr>
                    <td>Amount :</td>
                    <td><input type="amount" name="amount" id="amount" placeholder="Enter Amount"></td>
                </tr>
                <tr>
                    <td>Date of Payment :</td>
                    <td><input type="date" name="date_current" id="date_current"></td>
                </tr>
                <tr>
                    <td>From Where :</td>
                    <td><input type="date" name="date_from_month" id="date_from_month"></td>
                </tr>

                <tr>
                    <td>To Where :</td>
                    <td><input type="date" name="date_to_month" id="date_to_month" ></td>
                </tr>
                <br>
                   <tr>
                       <td colspan="2">
                         <input type="submit" name ="submit2" value="submit" class="update-btn">
                       </td>
                   </tr>
             </table>
         </form>
    </div><br><br><br><br><br>
</body>
</html>

<?php
   $insert = false;
   if(isset($_POST['submit2'])){
      $name1 = $_POST['name1'];
      $amount = $_POST['amount'];
      $date_current = $_POST['date_current'];
      $date_from_month=$_POST['date_from_month'];
      $date_to_month=$_POST['date_to_month'];

      $sql="INSERT INTO pay_rent SET
      select_name = '$name1',
      amount = '$amount',
      date_current = '$date_current',
      date_from_month = '$date_from_month',
      date_to_month = '$date_to_month'
      ";

      $res = mysqli_query($conn,$sql);
      if($res==true){
         $insert=true;
         $_SESSION['paid-room'] = "<div class='submitMsg'>Paid The Room Rent Successfully</div>";
         header('location:'.SITEURL.'Services/paymentdetails.php');
        }
      else{
        $_SESSION['paid-room'] = "<div class='error'>Error In Payment Processing</div>";
        header('location:'.SITEURL.'Services/paymentdetails.php');
      }

   }

?>
<?php include('footer.php') ;     ?>
