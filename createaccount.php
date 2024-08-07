<?php

include 'create.php';

if(isset($_POST['submit'])){

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `destination` WHERE email = '$email' AND userName = '$userName' AND password = '$password'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        $message[] = 'User already exists';
    }else{
        if($password != $cpassword){
            $message[] = 'Confirm password not matched!';
        }else{
            $insert = mysqli_query($conn, "INSERT INTO 'destination'(firstName, lastName, mobile, email, userName, password)
            VALUES('$firstName', '$lastName',  '$mobile', '$email', '$userName', '$password')") or die('query failed');

            if($insert){
            
                header('location:login.php');
            }else{
                $message[] = 'Registration Failed!';
            }
        }    
    }

}

?>
