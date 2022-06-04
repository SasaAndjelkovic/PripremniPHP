<?php

    function clean($string) {
        return htmlentities($string);
    }

    function set_message($message) {
        if(!empty($message)) {
            $_SESSION['message'] = $message;
        } else {
            $message = "";
        }
    }

    function display_message() {
        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }

    function email_exists($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $query = "SELECT id FROM users WHERE email = '$email'";
        $result = query($query);

        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function user_exists($user) {
        $user = filter_var($user, FILTER_SANITIZE_STRING);
        $query = "SELECT id FROM users WHERE username  = '$user'";
        $result = query($query);

        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function validate_user_registration() {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $first_name = clean($_POST['first_name']);
            $last_name = clean($_POST['last_name']);
            $username = clean($_POST['username']);
            $email = clean($_POST['username']);
            $password = clean($_POST['password']);
            $confirm_password = clean($_POST['confirm_password']);

            if(strlen($first_name) < 3) {
                $errors[] = "Your First Name cannot be less then 3 characters!";
            }
            if(strlen($last_name) < 3) {
                $errors[] = "Your Last Name cannot be less then 3 characters!";
            }
            if(strlen($username) < 3) {
                $errors[] = "Your Userame cannot be less then 3 characters!";
            }
            if(strlen($username) > 20) {
                $errors[] = "Your Userame cannot be bigger then 20 characters!";
            }
            if(email_exists($email)) {
                $errors[] = "Sorry that Email is alredy taken!";
            }
            if(user_exists($username)) {
                $errors[] = "Sorry that Username is alredy is taken!";
            }
        }
    }

    function create_user() {
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $first_name = escape($_POST['first_name']);
            $last_name = escape($_POST['last_name']);
            $username = escape($_POST['username']);
            $email = escape($_POST['username']);
            $password = escape($_POST['password']);
            $password = password_hash($password, algo: PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO users(first_name, last_name, username, profile_image, email, password) ";
            $sql .= "VALUES('$first_name', '$last_name', '$username', 'uploads/default.jpg', '$email', '$password')";
    
            confim(query($sql));
            set_message("You have been succesfully registred! Please Log in!");
            display_message();
        }
    }