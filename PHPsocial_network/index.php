<?php include "inc/header.php"?>

<h1>Welcome!</h1>

<?php
    if (isset($_SESSION['email'])) {
        echo "your email is " . $_SESSION['email'];
    } else {
        echo "please log in";
    }
?>

<?php include "inc/footer.php";