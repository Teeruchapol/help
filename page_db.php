<?php
    session_start();
    include('server.php');

    $errors = array();
    // print_r($_POST);
    if(isset($_POST['page_db.php'])){
        $datestart = mysqli_real_escape_string($conn, $_POST['datestart']);
        $dateend = mysqli_real_escape_string( $conn,$_POST['dateend']);  
        $detail = mysqli_real_escape_string($conn, $_POST['detail']);  
        
      
        // ensure that both fields are filled in
        
        
        // check if user exists        
        $user_check_query = "SELECT * FROM booking WHERE Room='$room' AND Time1='$row' ";         
        $query = mysqli_query($conn ,$user_check_query);  
        $result = mysqli_fetch_assoc($query);              
        if ($result) {                          
            if ($result["Room"] === $room) {                  
                array_push($errors, "Room กับเวลานี้โดนจองไปแล้ว");
            }
            if ($result["Time1"] === $email) {                  
                array_push($errors, "Room กับเวลานี้โดนจองไปแล้ว");
            }                      
        }
        if (count($errors) == 0){
        
            $sql = "INSERT INTO booking (USER, Room, Date, Time1, Time2, Detail) VALUES ('$username', '$prefix', '$first_name', '$last_name', '$gender', '$email', '$password', '$phone', '$location', '$postcode', '$jobs', '$bd')";
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