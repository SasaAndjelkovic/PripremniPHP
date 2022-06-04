<?php

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