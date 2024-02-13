<?php
    require_once("Database.php");

    class Client {

        public static function authentification($mail, $mdp) {
            $query = "SELECT email, password FROM Client WHERE email = '%s'";
            $query = sprintf($query, $mail);

            $res = Database::fetch($query);

            // Check if a user with the given name exists
            if (count($res) == 0 || $res == null) 
            { return false; }

            // Verify the entered password against the hashed password in the db
            $password = $res[0]['password'];

            if (($mdp === $password)) 
            { return true; } 

            else 
            { return false; }
        }
    }
?>