<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/styles.css">    
</head>
    
    <body>  

     <h1>Hi,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Let's take a small survey.</h1>
        <h4>What's your favourite car?</h4>
    <div class="page-header">
        
    <li><a href="create.php">Add your favourite car</a></li>
    <li><a href="read.php">Find a car</a></li>
    <li><a href="update.php">Edit your favourite car</a></li>
    <li><a href="delete.php">Delete an artwork</a></li>
           
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>
