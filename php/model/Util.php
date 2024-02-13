<?php
    class Util {
        public static check_number_value($number) {
            if ($number < 0)
            { return false; }

            return true;
        }

        public static check_string_value($str) {
            if (!isset($str)) 
            { return false; }

            return true;
        }
    }
?>