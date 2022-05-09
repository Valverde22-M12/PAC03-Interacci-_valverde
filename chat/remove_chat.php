<?php

//remove_chat.php

include('database_connection.php');
require("abstract.databoundobject.php");
require("class.chat_message.php");

if(isset($_POST["chat_message_id"]))
{
	// $query = "
	// UPDATE chat_message 
	// SET status = '2' 
	// WHERE chat_message_id = '".$_POST["chat_message_id"]."'
	// ";

	// $statement = $connect->prepare($query);

	// $statement->execute();
	$message = new ChatMessage($connect, $_POST["chat_message_id"]);
	$message->setStatus("2");
	$message->Update_chat();
}

?>