<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baaki Paisa</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>
      <div style="color:grey; text-align: center;">
          <br><h2>Add Baaki Money</h2><br>
      </div>
      <?php
           if(isset($_SESSION['paid-money'])){
            echo $_SESSION['paid-money'];
            unset($_SESSION['paid-money']);
        }
      ?>
      <div class="note">
          <form action="" method="POST" enctype="multipart/form-data" id="form">
              <table class="note-paisa" >
                  <tr>
                      <td>Name :</td>
                      <td>
                            <select name="select-it" id="note-select">
                                <option> Select </option>
                                <?php
                                    $sql = "SELECT *FROM add_renter";
                                    $res = mysqli_query($conn,$sql);
                                    if($res==true){
                                        $count = mysqli_num_rows($res);
                                        if($count>0){
                                            while($rows=mysqli_fetch_assoc($res)){
                                                $full_name = $rows['full_name'];
                                                ?><option> <?php  echo $full_name; ?> </option> <?php
                                            }
                                        }
                                    }
                                ?>
                            </select>
                      </td>
                  </tr>
                    <tr>
                        <td>Baaki Paisa:</td>
                        <td><textarea name="baki_paisa" id="baki_paisa" class="note-baki" cols="40" rows="3"></textarea></td>
                    </tr>
                    <br>
                   <tr>
                       <td colspan="2">
                         <input type="submit" name ="submit_note" value="submit" class="update-btn">
                       </td>
                   </tr>
                    
              </table>
          </form>
      </div>
      <?php
        if(isset($_POST['submit_note'])){
            $full_name=$_POST['select-it'];
            $baki_paisa = $_POST['baki_paisa'];
            $sql = "INSERT INTO baki_money SET
                   full_name = '$full_name',
                   baki_paisa = '$baki_paisa'
            ";
            $res = mysqli_query($conn,$sql);
            if($res==true){
               header('location:'.SITEURL.'Services/baki-money.php');
            }
        }
      ?><br><hr>
    <div>
    <div style="color:grey; text-align: center;">
          <br><h2>Search</h2><br>
      </div>
        <form action="" method="POST">
            <div class="paydetails">
                <select name="select_name" id="select_name" class="droplist">
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
            </div><br><br>
              <button type="submit" class="btn-pay-deta" name="submit6">Submit</button>
        </form>


        <div class="renter">
        <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Baki Paisa</th>
                <th>Delete</th>
             </tr>
              
             <?php
            if(isset($_POST['submit6'])){
                $select_name = $_POST['select_name'];
                $sql = "SELECT *FROM baki_money WHERE full_name = '$select_name'";
                $res = mysqli_query($conn,$sql);
                if($res==true){
                    $count = mysqli_num_rows($res);
                    if($count>0){
                        $a=1; 
                        // Fixed Rate of Room You can Change it;
                        
                       while($rows=mysqli_fetch_assoc($res)){
                         $id = $rows['id'];
                         $full_name = $rows['full_name'];
                         $baki_paisa=$rows['baki_paisa'];
                         ?>
                               <tr>
                                    <th><?php echo $a++; ?></th>
                                    <th><?php echo $full_name; ?></th>
                                    <th><?php echo $baki_paisa; ?></th>
                                    <th>
                                        <a href="<?php  echo SITEURL; ?>Services/baki-money-paid.php?id=<?php echo $id; ?>" class="paid-btn">Paid</a>
                                    </th>
                                    
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
    </div>
</body>
</html>

<?php include('footer.php') ;     ?>




