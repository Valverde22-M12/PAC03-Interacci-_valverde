<?php

//update_is_type_status.php

include('database_connection.php');
require("abstract.databoundobject.php");
require("class.login_details.php");

session_start();

$query = "
UPDATE login_details 
SET is_type = '".$_POST["is_type"]."' 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

// $id = $_SESSION["login_details_id"];
// $objLoginDetails = new LoginDetails($connect, $id);
// $objLoginDetails->setIsType($_POST["is_type"]);
// $objLoginDetails->Save();

?>