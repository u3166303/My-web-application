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
    // include the config file that we created last week
    require "../config.php";
    require "common.php";
    // run when submit button is clicked
    if (isset($_POST['submit'])) {
        try {
            $connection = new PDO($dsn, $username, $password, $options);  
            
            //grab elements from form and set as varaible
            $work =[
              "id"         => $_POST['id'],
             
             "make" => $_POST['make'], 
            "model" => $_POST['model'],
            "color" => $_POST['color'],
            "location" => $_POST['location'], 
              "date"   => $_POST['date'],
            ];
              
            
            // create SQL statement
            $sql = "UPDATE `works` 
                    SET id = :id, 
                        make = :make, 
                        model = :model, 
                        color = :color, 
                        location = :location, 
                        date = :date 
                    WHERE id = :id";
            //prepare sql statement
            $statement = $connection->prepare($sql);
            
            //execute sql statement
            $statement->execute($work);
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
    // GET data from DB
    //simple if/else statement to check if the id is available
    if (isset($_GET['id'])) {
        //yes the id exists 
        
        try {
            // standard db connection
            $connection = new PDO($dsn, $username, $password, $options);
            
            // set if as variable
            $id = $_GET['id'];
            
            //select statement to get the right data
            $sql = "SELECT * FROM works WHERE id = :id";
            
            // prepare the connection
            $statement = $connection->prepare($sql);
            
            //bind the id to the PDO id
            $statement->bindValue(':id', $id);
            
            // now execute the statement
            $statement->execute();
            
            // attach the sql statement to the new work variable so we can access it in the form
            $work = $statement->fetch(PDO::FETCH_ASSOC);
            
        } catch(PDOExcpetion $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    } else {
        // no id, show error
        echo "No id - something went wrong";
        //exit;
    };
?>


 <nav>
                <ul>
                    <li><a href="welcome.php">Welcome</a></li>
                    <li><a href="create.php">Create</a></li>
<li><a href="read.php">Find</a></li>
<li><a href="update.php">Edit</a></li>
<li><a href="delete.php">Delete</a></li>
                </ul>
            </nav>
<link rel="stylesheet" href="../assets/css/styles.css">    
<h2>Edit your favourite car</h2>


<form method="post">
    
    <label for="id">ID</label>
    <input type="text" name="id" id="id" value="<?php echo escape($work['id']); ?>" >
    
      <label for="make">Make</label>
    <input type="text" name="make" id="make" value="<?php echo escape($work['artistname']); ?>">

    <label for="model">Model</label>
    <input type="text" name="model" id="model" value="<?php echo escape($work['worktitle']); ?>">

    <label for="color">Color</label>
    <input type="text" name="color" id="color" value="<?php echo escape($work['workdate']); ?>">

     <label for="location">Location</label>
    <input type="text" name="location" id="location" value="<?php echo escape($work['worktype']); ?>">
    
    <label for="date">Work Date</label>
    <input type="text" name="date" id="date" value="<?php echo escape($work['date']); ?>">

    <input type="submit" name="submit" value="Save">

</form>
<?php if (isset($_POST['submit']) && $statement) : ?>
	<h3>Work successfully updated.</h3>
<?php endif; ?>




<?php include "templates/footer.php"; ?>