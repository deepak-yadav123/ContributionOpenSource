<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lightbill.css?v=<?php echo time(); ?>">
    <script>
        function amount(){
            var amou = document.getElementById('curr_reading').value;
            var prev = document.getElementById('prev_reading').value;
            var name = document.getElementById('select_bill');
            // document.getElementById('ans').innerHTML = amou*9;
            var ans = ((parseInt(amou)-parseInt(prev))*9);
            alert("Light Bill Amount Is "+ ans);
            
           
        }
    </script>
</head>
<body>
    <div class="container1">
       <br><br><h1 style="color:grey;">Light Bill Details</h1><br><br>
    </div>
    
         <div class="above_content">
                <div id="calculator">
                    <h1 style="color:grey;">Calculator</h1>     
                    <form action="light-bill.php" method="POST" enctype="multipart/form-data">
                        <table class="">
                                <tr>
                                    <td> <label for="">Name:</label></td>
                                    <td >
                                        <select name="select_bill" id="select_bill">
                                            <option> Select </option>
                                            <?php
                                                $sql = "SELECT *FROM add_renter";
                                                $res = mysqli_query($conn,$sql);
                                                if($res==true){
                                                    $count = mysqli_num_rows($res);
                                                    if($count>0){
                                                        while($rows=mysqli_fetch_assoc($res)){
                                                            $full_name = $rows['full_name'];
                                                            ?><option><?php  echo $full_name; ?></option><?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Current Reading :</td>
                                    <td><input type="text" name="curr_reading" id="curr_reading"></td>
                                </tr>
                                <tr>
                                    <td>Previous Reading :</td>
                                    <td><input type="text" name="prev_reading" id="prev_reading"></td>
                                </tr>
                                <tr>
                                    
                                    <td ><h4 id="ans"></h4></td>
                                </tr>
                                
                                <br>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name ="submit_light_bill" onclick="amount()" class="update-btn">
                                    </td>
                                </tr>
                        </table>
                    </form>
                
            </div>
                 <?php
                        if(isset($_POST['submit_light_bill'])){
                        $full_name = $_POST['select_bill'];
                        $curr_reading = $_POST['curr_reading'];
                        $prev_reading = $_POST['prev_reading'];
                        $ans = ($curr_reading - $prev_reading)*9;
                        $sql="INSERT INTO light_bill SET
                        full_name = '$full_name',
                        curr_reading = '$curr_reading',
                        prev_reading = '$prev_reading'
                            ";
                        $res = mysqli_query($conn,$sql);
                        if($res==true){
                          header('location:'.SITEURL.'Services/light-bill.php');
                        }   
                        }
                 ?>
                
                    </div>
         
                        
      
            
                    
               
 
     
<div class="container1">
       <br><br><h1 style="color:grey;">Light Bill Payment Details</h1><br><br>
</div>
    <!-- Search Bar -->
    <form action="light-bill.php" method="POST">
    <div class="paydetails">
        <select name="select_name" id="select_name" class="urgent_bar">
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
    <button type="submit" class="btn-pay-deta" name="submit3">Submit</button>
   </form>
    <!-- Payment Details From Database -->

    <div class="renter">
        <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Name</th>
                <!-- <th>Payment Date</th> -->
                <th>From Month</th>
                <th>To Month</th>
                <th>Paid</th>
                <!-- <th>Unpaid</th> -->
             </tr>
              
             <?php
            if(isset($_POST['submit3'])){
                $select_name = $_POST['select_name'];
                // $curr_reading = $_POST['curr_reading'];
                // $prev_reading = $_POST['prev_reading'];
                // $sql2 = "SELECT *FROM light_bill WHERE curr_reading = '$curr_reading'";
                $sql = "SELECT *FROM pay_light_bill WHERE full_name = '$select_name'";
                $res = mysqli_query($conn,$sql);
                if($res==true){
                    $count = mysqli_num_rows($res);
                    if($count>0){
                        $a=1; 
                        // Fixed Rate of Room You can Change it;
                      // $fix_amount = $curr_reading - $prev_reading;
                       while($rows=mysqli_fetch_assoc($res)){
                         $full_name = $rows['full_name'];
                        // $date_current=$rows['date_current'];
                         $date_from_month=$rows['date_from_month'];
                         $date_to_month=$rows['date_to_month'];
                         $amount = $rows['amount'];
                         ?>
                              <tr>
                                    <th><?php echo $a++; ?></th>
                                    <th><?php echo $select_name; ?></th>
                                    
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