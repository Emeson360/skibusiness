<?php
include_once __DIR__ .'/includes/database.php';


if (isset($_POST['signup'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $reference = filter_var($_POST['reference'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

   
    if (empty($firstname)) {
        $_SESSION['signup'] = "Please enter your first name";
    }
    elseif (empty($lastname)) {
        $_SESSION['signup'] = "Please enter your last name";
    }
    elseif (empty($email)) {
        $_SESSION['signup'] = "Please enter a valid email address";
    }
    elseif (strlen($password) < 6) {
        $_SESSION['signup'] = "Your password must be at least 6 characters long";
    }
    else {
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);  
        
        // check if email already exist in database
        $user_check_query = "SELECT email FROM users WHERE email = '$email'";
        $user_check_result = mysqli_query($con, $user_check_query);
        
        if (mysqli_num_rows($user_check_result) > 0) {
            
            $_SESSION['signup'] = "Email already exist";
        }
        
    }



    if(isset($_SESSION['signup'])) {

        $_SESSION['signup-data'] = $_POST;
        // Redirect to signup page
        header('location: ' . ROOT_URL . 'ski/index.php#signup');
    }
    else {
        // Insert into the database
        $user_insert_query = "INSERT INTO users (firstname, lastname, email, password, reference) VALUE ('$firstname', '$lastname', '$email', '$hashed_password', '$reference')";

        if (mysqli_query($con, $user_insert_query)) {
            $_SESSION['signup-success'] = "Registration successfull, Please Log In!!!";
            // redirect to login page
            header('location: ' . ROOT_URL . 'ski/index.php#signup');
        }
    }
    
}
else {
    header('location: '. ROOT_URL . 'ski/index.php#signup');
    die();
}


?>