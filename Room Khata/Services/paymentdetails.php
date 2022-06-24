<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="services.css?v=<?php echo time(); ?>">
    <style>
        select{
            width: 80%;
            padding: 10px 15px;
            border: 1px dashed blue;
            border-radius: 4px;
            background-color: #a29bfe;
        }
        /* CSS for Pay Details*/
        .paydetails {
            justify-content: center;
            text-align: center;
            /*margin-left: 20%;
            color: white; */
        }
    </style>
</head>
<body>
    <div class="container1">
       <br><br><h1 style="color:grey;">Payment Details</h1><br>
    </div>
    <?php
          if(isset($_SESSION['paid-room'])){
            echo $_SESSION['paid-room'];
            unset($_SESSION['paid-room']);
          }
    ?><br>
    <!-- Search Bar -->
    <form action="" method="POST">
    <div class="paydetails">
        <select name="select_name" id="select_name">
            <option value=""> Select </option>
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
    </div><br><br><br>
    <button type="submit" class="btn-pay-deta" name="submit">Submit</button>
   </form>
    <!-- Payment Details From Database -->

    <div class="renter">
        <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Payment Date</th>
                <th>From Month</th>
                <th>To Month</th>
                <th>Paid</th>
                <th>Unpaid</th>
             </tr>
              
             <?php
            if(isset($_POST['submit'])){
                $select_name = $_POST['select_name'];
                $sql = "SELECT *FROM pay_rent WHERE select_name = '$select_name'";
                $res = mysqli_query($conn,$sql);
                if($res==true){
                    $count = mysqli_num_rows($res);
                    if($count>0){
                        $a=1; 
                        // Fixed Rate of Room You can Change it;
                        $fix_amount=2000;
                       while($rows=mysqli_fetch_assoc($res)){
                         $select_name = $rows['select_name'];
                         $date_current=$rows['date_current'];
                         $date_from_month=$rows['date_from_month'];
                         $date_to_month=$rows['date_to_month'];
                         $amount = $rows['amount'];
                         ?>
                              <tr>
                                    <th><?php echo $a++; ?></th>
                                    <th><?php echo $select_name; ?></th>
                                    <th><?php 
                                          $date=date_create($date_current);
                                          echo date_format($date,'d-M-Y');  
                                          ?>
                                    </th>
                                    <th><?php 
                                          $date=date_create($date_from_month);
                                          echo date_format($date,'d-M-Y');  
                                          ?>
                                    </th>
                                    <th><?php 
                                          $date=date_create($date_to_month);
                                          echo date_format($date,'d-M-Y');  
                                          ?>
                                    </th>
                                    <th><?php echo $amount; ?></th>
                                    <th><?php echo $fix_amount-$amount; ?></th>
                                    
                                </tr>

                        <?php
                       }
                    }
                    else{
                        $_SESSION['dnfound']= "<div class='error'>Data Not Found</div>";
                    }
                }
            }
            ?>
      
        </table>
    </div>
    <?php
            if(isset($_SESSION['dnfound'])){
                echo $_SESSION['dnfound'];
                unset($_SESSION['dnfound']);
            }
    ?>
</body>
</html>

<?php include('footer.php') ;     ?>