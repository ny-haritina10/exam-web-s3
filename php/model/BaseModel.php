<?php
    require_once("Database.php");

    class BaseModel {
        public static function get_all($table) {
            $query = "SELECT * FROM $table";
            return Database::fetch($query);
        }
    }
?>