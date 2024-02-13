<?php
    // MYSQL DATABASE

    class Database {
        private static $host = '172.20.0.167';
        private static $user_name = 'ETU002716';
        private static $password = 'c2JMpbcVkSOs';
        private static $db_name = 'db_p16_ETU002716';

        public function __construct()
        { }

        // GET CONNECTION
        public static function get_connection() {
            $connect = null;
            if ($connect === null) 
            { $connect = mysqli_connect(self::$host, self::$user_name, self::$password, self::$db_name); }

            return $connect;
        }

        // FETCH DATA
        public static function fetch($query) {
            $res = mysqli_query(self::get_connection(), $query);
            $answer = array();  
            
            while($d = mysqli_fetch_assoc($res)) 
            { $answer[] = $d; }

            return $answer;
        }

        // EXECUTE A QUERY
        public static function execute($query) {
            $mysqli = self::get_connection();
            if ($mysqli->connect_error) 
            { die("The connection failed : " . $mysqli->connect_error); }
        
            $result = $mysqli->query($query);
            if (!$result) 
            { die("Error while executing the request : " . $mysqli->error); }   
        }
    }
?>