<?php 

// Login Function 
function login($email, $password){
    session_start();
    include('db_config.php');
    include('alerts.php');
    $search_user = "SELECT * FROM `room_user` WHERE `user_email` = '$email'";
    $query = $conn->query($search_user);
    $count = mysqli_num_rows($query);
    if($count == 1){
        $enc_password = md5($password);
        foreach($query as $i){
            $password = $i['user_password'];
            $name = $i['user_name'];
        }
        if($password == $enc_password){
            $_SESSION['user'] = $email;
            $_SESSION['name'] = $name;
            echo "<script type='text/javascript'>";
            echo "window.location.href = 'profile.php';";
            echo "</script>";
        }
        else{
            $alert = new PHPAlert();
            $alert->warn("Incorrect Password");
        }
    }
    else{
        $alert = new PHPAlert();
        $alert->info("No User Found");
    }
}

// Registration Function 
function register($name, $email, $password){
    include('db_config.php');
    include('alerts.php');
    $search_user = "SELECT * FROM `room_user` WHERE `user_email` = '$email'";
    $query = $conn->query($search_user);
    $count = mysqli_num_rows($query);
    if($count >= 1){
        $alert = new PHPAlert();
        $alert->info("Email Already Used");
    }
    else{
        $enc_password = md5($password);
        $insert_user = "INSERT INTO `room_user`(`user_email`, `user_name`, `user_password`) VALUES ('$email', '$name', '$enc_password')";
        $query = $conn->query($insert_user);
        if($query){
            $alert = new PHPAlert();
            $alert->success("User Registration Successfull");
        }
        else{
            $alert = new PHPAlert();
            $alert->warn("User Not Created");
        }
    }
}

function get_dues($user){
    include('db_config.php');
    $search_dues = "SELECT * FROM `room_dues` WHERE `due_user` = '$user'";
    $query = $conn->query($search_dues);
    if($query){
        foreach($query as $i){ ?>
          <tr>
            <th scope="row"><?php echo $i['due_id']; ?></th>
            <td><?php echo $_SESSION['name']; ?></td>
            <td><?php echo $i['due_pending']; ?></td>
            <td><?php echo $i['due_rent']; ?></td>
            <td><?php echo $i['due_ele_unit']; ?></td>
            <td><?php echo $i['due_ele_bill']; ?></td>
            <td><?php echo $i['due_from']; ?></td>
            <td><?php echo $i['due_till']; ?></td>
          </tr>
            <!-- $due_id = $i['due_id'];
            $due_ele_unit = $i['due_ele_unit'];
            $due_ele_bill = $i['due_ele_bill'];
            $due_rent = $i['due_rent'];
            $due_from = $i['due_from'];
            $due_till = $i['$due_till'];
            $due_pending = $i['due_pending'];
            $due_notice = $i['due_notice']; -->
        <?php }
    }
    // else{
    //     $due_id = 'Not Found'
    //     $due_ele_unit = 'Not Found';
    //     $due_ele_bill = 'Not Found';
    //     $due_rent = 'Not Found';
    //     $due_from = 'Not Found';
    //     $due_till = 'Not Found';
    //     $due_pending = 'Not Found'
    //     $due_notice = 'Not Found';
    // }
}

?>