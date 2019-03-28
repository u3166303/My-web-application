<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<link rel="stylesheet" href="../assets/css/styles.css">    
<body>
<?php include "templates/header.php"; ?>


<?php include "welcome.php"; ?>
<?php include "templates/footer.php"; ?>

</body>
