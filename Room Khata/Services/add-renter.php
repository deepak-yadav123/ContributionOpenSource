<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
       function goto(){
          window.location.href ='http://localhost/Room%20Khata/Services/managerenters.php';
       }
    </script>
</head>
<body>
    <div class="container">
       <br><br><h1 style="color:grey;">Add Renters</h1><br><br>
    </div>
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
                    
                   <tr>
                     <td>Address:</td>
                     <td>
                         <textarea name="address" id="address" cols="30" rows="10"></textarea> 
                     </td>   
                   </tr>
                   
                   <tr>
                     <td>Upload Adhard Card:</td>
                     <td><input type="file" name="adhar_card" id="adhar_card"> </td>   
                   </tr>

                    <br>
                   <tr>
                       <td colspan="2">
                         <input type="submit" name ="submit" id="submit" value="submit" class="update-btn">
                         <!-- <a href="http://localhost/Room%20Khata/Services/managerenters.php" class="update-btn" name ="submit" id="submit" value="submit">Submit</a> -->
                       </td>
                   </tr>
               </table>
               
           </form>
    </div>
</body>
</html>



<?php
  $insert = false;
  
    if(isset($_POST['submit'])){ 
        
      $full_name = $_POST['full_name'];
      $mobile_no = $_POST['mobile_no'];
      $joining_date = $_POST['joining_date'];
      $address = $_POST['address'];
      // Taking Uploaded Adhar Card Into Data Base
      if(isset($_FILES['adhar_card']['name'])){
        $image_name = $_FILES['adhar_card']['name'];
        // $ext = end(explode('.',$image_name));
        $tmp = explode('.', $image_name);
        $ext = end($tmp);
        $image_name = "Adhar_Card_".rand(000,999).'.'.$ext;

        $source_path = $_FILES['adhar_card']['tmp_name'];
        $destination_path = "../Adhar_Card/".$image_name;
        $upload=move_uploaded_file($source_path,$destination_path);
        if($upload==false){
            $_SESSION['upload'] ="<div class='error'>Failed To upload Adhar Card.</div>";
            header('location:'.SITEURL.'Services/add-renter.php');
            die();
        }
      }
      else{
          $image_name="";
      }
      // Took Adhar Card Here above 
     
      $sql ="INSERT INTO add_renter SET
             full_name = '$full_name',
             mobile_no = '$mobile_no',
             joining_date = '$joining_date',
             address = '$address',
             adhar_card = '$image_name'
      ";
      
      $res = mysqli_query($conn,$sql);
      if($res==true){
        $insert = true;
        $_SESSION['add_renter'] = "<div class='submitMsg''>Renter Added Succesfully</div>";
        // Problem is there in redirevting **********....
        header('location:'.SITEURL.'Services/managerenters.php');
        echo "<p class='submitMsg'>Thanks Renter Added Go Back!</p>";
      }
      else {
        $_SESSION['add_renter'] = "<div class='error''>Error in Adding Renter</div>";        
        header('location:'.SITEURL.'Services/add-renter.php');
      }


  }



?>
<?php include('footer.php') ;     ?>