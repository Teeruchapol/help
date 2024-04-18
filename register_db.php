<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['register_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string( $conn,$_POST['email']);  
        $password = mysqli_real_escape_string($conn, $_POST['password']);  
        $phone = mysqli_real_escape_string($conn, $_POST['phone']); 
        $frist_Name = mysqli_real_escape_string($conn, $_POST['frist_Name']);   
        $last_Name = mysqli_real_escape_string($conn, $_POST['last_Name']);  
        $bd = mysqli_real_escape_string($conn, $_POST['bd']);
        // $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
        // $gender= mysqli_real_escape_string($conn, $_POST['gender']);
        $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);   
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $jobs = mysqli_real_escape_string($conn, $_POST['jobs']);         
        
        // ensure that both fields are filled in
        if (empty($username)) {  
            array_push($errors, "กรุณาตั้งชื่อ");  
        } 
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {    
            array_push($errors, "กรุณาระบุ Email");    
        } 
        if ($password == "") {    
            array_push($errors, "กรุณาตั้งรหัสผ่าน");        
        } elseif (strlen($password) < 6) {        
            array_push($errors, "รหัสผ่านต้องมีอย่างน้อย 6 ตัวหรือมากกว่า");      
        }          
        if (!$phone) {            
            array_push($errors,"กรุณาระบุเบอร์โทร!");                  
        }
        if (empty($frist_Name)) {  
            array_push($errors, "โปรดระบุชื่อจริง");  
        }
        if (empty($last_Name)) {  
            array_push($errors, "โปรดระบุนามสกุล");  
        }
        if (empty($bd)) {  
            array_push($errors, "โปรดระบุวันเกิดของคุณ");  
        } 
        if (empty($prefix)) {
            array_push($errors, "โปรดเลือกคำนำหน้า");
        }
        if (empty($gender)) {
            array_push($errors, "โปรดระบุเพศ");
        }
        if (empty($postcode)) {
            array_push($errors, "โปรดระบุรหัสไปรษณีย์");
        }
        if (empty($location)) {
            array_push($errors, "โปรดระบุที่อยู่");
        }
        if (empty($jobs)) {
            array_push($errors, "โปรดระบุอาชีพ");
        }
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

            $sql = "INSERT INTO user (username	, prefix, first_Name, last_Name, gender, email, password, tel, local, postcode, job, Bday) VALUES ('$username', '$prefix', '$frist_Name', '$last_Name', '$gender', '$email', '$password', '$phone', '$location', '$postcode', '$jobs', '$bd',)";
            mysqli_query($conn, $sql);
            
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณได้เข้าสู่ระบบแล้ว";
            header('location: index.php');

        }else { 
            array_push($errors, "มีบัญชี้อยู่แล้ว");
            $_SESSION['error'] = "มีบัญชี้อยู่แล้ว";
            header("location: register.php");
        }
           
    }

    ?>