<?php
    class Login extends DataBoundObject{
        protected $ID;
        protected $Username;
        protected $Password;

        protected function DefineTableName() {
                return("login");
        }

        protected function DefineRelationMap() {
                return(array(
                        "user_id" => "ID",
                        "username" => "Username",
                        "password" => "Password"
                    ));
        }        
    }

?>