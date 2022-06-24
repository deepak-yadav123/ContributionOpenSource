<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Khata - Update</title>
</head>
<body>
    <div class="container">
       <br><br><h1 style="color:grey;">Update Renters</h1><br><br>
    </div>

    <?php
       $id =$_GET['id'];
       $sql = "SELECT *FROM add_renter WHERE id = $id";
       $res = mysqli_query($conn,$sql);
       if($res==true){
            $count = mysqli_num_rows($res);
            if($count==1){
                $rows = mysqli_fetch_assoc($res);
                $full_name = $rows['full_name'];
                $mobile_no = $rows['mobile_no'];
                $joining_date = $rows['joining_date'];
            }
            else {
                echo "Renter Not Found";
                header('location:'.SITEURL.'Services/managerenters.php');
            }
       }



    ?>
    <div class="content">
    <form action="" method="POST" enctype="multipart/form-data">
               <table class="tbl-30"> 
                   <tr>
                     <td>Full Name :</td>
                     <td><input type="text" name="full_name" id="full_name" placeholder="Enter Your Name"> </td>    
                   </tr>

                   <tr>
                     <td>Mobile No :</td>
                     <td><input type="text" name="mobile_no" id="mobile_no" placeholder="Enter Mobile No."> </td>    
                   </tr>

                   <tr>
                     <td>Date of Joining:</td>
                     <td><input type="date" name="joining_date" id="joining_date" placeholder=""> </td>   
                   </tr>
                
                   <br>
                   <tr>
                       <td colspan="2">
                         <input type="submit" name ="submit" id="submit" value="submit" class="update-btn">
                       </td>
                   </tr>
               </table>
               
           </form>
    </div>
</body>
</html>
<?php
   if(isset($_POST['submit'])){
       $full_name = $_POST['full_name'];
       $mobile_no = $_POST['mobile_no'];
       $joining_date = $_POST['joining_date'];
        $sql = "UPDATE add_renter SET full_name ='$full_name',mobile_no='$mobile_no',joining_date='$joining_date' WHERE id='$id'  ";
       $res = mysqli_query($conn,$sql);
       if($res==true){
           $_SESSION['update-renter'] ="<div class='submitMsg'>Renter Updated Successfully</div>";
           header('location:'.SITEURL.'Services/managerenters.php');
       }
       else{
            $_SESSION['update-renter'] ="<div class='error'>Error In Updating Renter</div>";
            header('location:'.SITEURL.'Services/update-renter.php');
       }

   }
?>
<?php include('footer.php') ;     ?>