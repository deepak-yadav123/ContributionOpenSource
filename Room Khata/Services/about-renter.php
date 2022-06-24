<?php include('index3.php') ;     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lightbill.css">
</head>
<body>
    <div class="container1">
       <br><br><h1 style="color:grey;">About Renter</h1><br><br>
    </div>
    <div class="select1">
        <div class="selectroom">
            <div class="container1">
                <h1 style="color:grey;">Select For Room Rent</h1><br>
            </div>
            <div class="paydetails">
                <select name="" id="roomrent">
                    <option value="">Select</option>
                    <option value=""> Suman </option>
                    <option value=""> Bind </option>
                    <option value=""> Chandan </option>
                </select>
            </div><br><br><br>
        </div>
        <div class="selectlight">
        <div class="container1">
                <h1 style="color:grey;">Select For Light Bill Rent</h1><br>
            </div>
            <div class="paydetails">
                <select name="" id="roomrent">
                    <option value="">Select</option>
                    <option value=""> Suman </option>
                    <option value=""> Bind </option>
                    <option value=""> Chandan </option>
                </select>
            </div><br><br><br>
        </div>
    </div>

    <div class="renter">
        <table class="tbl-full">
             <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>From Month</th>
                <th>To Month</th>
                <th>Paid</th>
             </tr>
              
             <tr>
                <th>1</th>
                <th>Suman</th>
                <th>20 March 2022</th>
                <th>20 April 2022</th>
                <th>
                   <a href="#" class="paidbtn">Paid  </a>
                </th>
              
             </tr>
             
             <tr>
                <th>2</th>
                <th>Bind</th>
              
                <th>20 September 2022</th>
                <th>20 October 2022</th>
                <th><a href="#" class="unpaidbtn">Unpaid</a></th>
              
                
             </tr>
              
             <tr>
                <th>3</th>
                <th>Chandan</th>
               
                <th>17 May 2022</th>
                <th>17 May 2022</th>
                <th><a href="#" class="paidbtn">Paid</a></th>
                
                
             </tr>

        </table>
      </div>
</body>
</html>
<?php include('footer.php') ;     ?>