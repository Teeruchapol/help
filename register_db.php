<?php
    session_start();
    include('server.php');

    $errors = array();
    // print_r($_POST);
    if(isset($_POST['register_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string( $conn,$_POST['email']);  
        $password = mysqli_real_escape_string($conn, $_POST['password']);  
        $phone = mysqli_real_escape_string($conn, $_POST['phone']); 
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);   
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);  
        $bd = mysqli_real_escape_string($conn, $_POST['bd']);
        $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
        $gender= mysqli_real_escape_string($conn, $_POST['gender']);
        $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);   
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $jobs = mysqli_real_escape_string($conn, $_POST['jobs']);     
       
        // ensure that both fields are filled in
        
        
        // check if user exists        
        $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' ";         
        $query = mysqli_query($conn ,$user_check_query);  
        $result = mysqli_fetch_assoc($query);              
        if ($result) {                          
            if ($result["username"] === $username) {                  
                array_push($errors, "Username นี้มีไปแล้ว");
            }
            if ($result["email"] === $email) {                  
                array_push($errors, "Email นี้ใช้ไปแล้ว");
            }                      
        }
        if (count($errors) == 0){
            $password = md5($password);

            $sql = "INSERT INTO user (username, prefix, frist_Name, last_Name, gender, email, password, tel, local, postcode, job, Bday) VALUES ('$username', '$prefix', '$first_name', '$last_name', '$gender', '$email', '$password', '$phone', '$location', '$postcode', '$jobs', '$bd')";
            mysqli_query($conn, $sql);
            
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณได้เข้าสู่ระบบแล้ว";
            header('location: index.php');

        }else { 
            array_push($errors, "มีบัญชี้อยู่แล้ว");
            $_SESSION['error'] ="มีบัญชี้อยู่แล้ว";
            header("location: register.php");
        }
           
    }

    ?>