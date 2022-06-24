<!DOCTYPE html>
<html lang="en">
<head>
    <title>Room Khata</title>
    <link rel="stylesheet" href="myreg.css?v=<?php echo time(); ?>">
     <!-- Updation -->
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase-auth.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css" />
    <!-- Updation Ends -->
</head>

<body>

    <div class="main">
        
       <!-- <div class="content">
           
            <div class="form">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="" placeholder="Enter Password Here">
                <button class="btnn">
                    <a href="../Main-Content/user_home.php">Login</a>
                </button>

                <p class="link">Don't have an account<br>
                <a href="singup.php">Register</a> here</a></p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>

            </div>
                </div> 
        </div>
                
        </div> -->
        <h1 style="text-align: center;">.</h1>
        <div class="Auth-Style">
           <h1 style="text-align: center; color:white;">Register To Room Khata</h1><br><br>
           <div id="firebaseui-auth-container"></div>
        </div>
       
         
    </div>
    <!-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->
    <script src="Auth-Js/fireBase.js"></script>
    <script src="Auth-Js/login.js"></script>
</body>
</html>