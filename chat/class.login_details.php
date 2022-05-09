<?php
    class LoginDetails extends DataBoundObject{
        protected $ID;
        protected $UserId;
        protected $LastActivity;
        protected $IsType;



        protected function DefineTableName() {
                return("login_details");
        }

        protected function DefineRelationMap() {
                return(array(
                        "login_details_id" => "ID",
                        "user_id" => "UserId",
                        "last_activity" => "LastActivity",
                        "is_type" => "IsType"
                    ));
        }        
    }

?>