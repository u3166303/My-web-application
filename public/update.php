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
	
    // include the config file that we created before
    require "../config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Create the SQL 
        $sql = "SELECT * FROM works";
        
        // THIRD: Prepare the SQL
        $statement = $connection->prepare($sql);
        $statement->execute();
        
        // FOURTH: Put it into a $result object that we can access in the page
        $result = $statement->fetchAll();
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
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


<!-- This is a loop, which will loop through each result in the array -->
<?php foreach($result as $row) { ?>

<p>
    ID:
    <?php echo $row["id"]; ?><br> Make:
    <?php echo $row['make']; ?><br> Model:
    <?php echo $row['model']; ?><br> Color:
    <?php echo $row['color']; ?><br> Location:
    <?php echo $row['location']; ?><br>  
    <a href='update-work.php?id=<?php echo $row['id']; ?>'>Edit</a>
</p>

<hr>
<?php }; //close the foreach
?>





<?php include "templates/footer.php"; ?>