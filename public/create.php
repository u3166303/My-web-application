<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php 
// this code will only execute after the submit button is clicked
if (isset($_POST['submit'])) {
	
    // include the config file that we created before
    require "../config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Get the contents of the form and store it in an array
        $new_work = array( 
            "make" => $_POST['make'], 
            "model" => $_POST['model'],
            "color" => $_POST['color'],
            "location" => $_POST['location'], 
        );
        
        // THIRD: Turn the array into a SQL statement
        $sql = "INSERT INTO works (make, model, color, location) VALUES (:make, :model, :color, :location)";        
        
        // FOURTH: Now write the SQL to the database
        $statement = $connection->prepare($sql);
        $statement->execute($new_work);
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
}
?>

 
<link rel="stylesheet" href="../assets/css/styles.css">    
 <nav>
                <ul>
<li><a href="welcome.php">Welcome</a></li>
<li><a href="create.php">Create</a></li>
<li><a href="read.php">Find</a></li>
<li><a href="update.php">Edit</a></li>
<li><a href="delete.php">Delete</a></li>
                </ul>
            </nav>



<h2>Add your favourite car</h2>

<!--form to collect data for each artwork-->

<form method="post">
    <label for="make">Make</label>
    <input type="text" name="make" id="make">

    <label for="model">Model</label>
    <input type="text" name="model" id="model">

    <label for="color">Color</label>
    <input type="text" name="color" id="color">

    <label for="location">Location</label>
    <input type="text" name="location" id="location">

    <input type="submit" name="submit" value="Submit">

</form>

<?php if (isset($_POST['submit']) && $statement) { ?>
<h3>You are a genius!<br />Work successfully added!</h3>
<?php } ?>

<?php include "templates/footer.php"; ?>
