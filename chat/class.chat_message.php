<?php
    class ChatMessage extends DataBoundObject{
        protected $ID;
        protected $ToUserId;
        protected $FromUserId;
        protected $ChatMessage;
        protected $Timestamp;
        protected $Status;


        protected function DefineTableName() {
                return("chat_message");
        }

        protected function DefineRelationMap() {
                return(array(
                        "chat_message_id" => "ID",
                        "to_user_id" => "ToUserId",
                        "from_user_id" => "FromUserId",
                        "chat_message" => "ChatMessage",
                        "timestamp " => "Timestamp",
                        "status" => "Status"
                    ));
        }        
    }

?>