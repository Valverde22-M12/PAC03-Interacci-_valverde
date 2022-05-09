<?php

//update_last_activity.php

include('database_connection.php');
require("abstract.databoundobject.php");
require("class.login_details.php");

session_start();

// $query = "
// UPDATE login_details 
// SET last_activity = now() 
// WHERE login_details_id = '".$_SESSION["login_details_id"]."'
// ";

// $statement = $connect->prepare($query);

// $statement->execute();

$id = $_SESSION["login_details_id"];
$objLoginDetails = new LoginDetails($connect, $id);
$objLoginDetails->setLastActivity(now());
$objLoginDetails->Save();


?>

