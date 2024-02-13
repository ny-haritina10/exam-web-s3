<?php
    require_once("Database.php");
    require_once("BaseModel.php");

    class Parcelle extends BaseModel {
        // ATTRIBUTES
        private $id_tea;
        private $num_parcelle;
        private $surface;

        // CONSTRUCTOR
        public function __construct($id_tea, $num_parcelle, $surface) {
            $this->id_tea = $id_tea;
            $this->num_parcelle = $num_parcelle;
            $this->surface = $surface;
        }

        // INSERT 
        public function insert() {
            $query = "INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (%d, %d, %f)";
            $query = sprintf($query, $this->get_id_tea(), $this->get_num_parcelle(), $this->get_surface());
            
            Database::execute($query);      // Use Database static method to execute the query
        }

        // DELETE
        public static function delete($id) {
            $query = " DELETE FROM Parcelle WHERE id = $id ";
            Database::execute($query); 
        }

        // UPDATE 
        public static function update($parcelle, $id) {
            $query = " UPDATE Parcelle SET id_tea = %d, num_parcelle = %d, surface = %f WHERE id = %d ";

            $query = sprintf($query, $parcelle->get_id_tea(), $parcelle->get_num_parcelle(), $parcelle->get_surface(), $id);

            Database::execute($query); 
        }

        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM Parcelle WHERE id = $id";
            $result = Database::fetch($query);

            if ($result) {
                $parcelle = new Parcelle($result[0]['id_tea'], $result[0]['num_parcelle'], $result[0]['surface']);
                return $parcelle;
            } else {
                return null;
            }
        }

        // GETTERS AND SETTERS
        public function get_id_tea() 
        { return $this->id_tea; }

        public function get_num_parcelle() 
        { return $this->num_parcelle; }

        public function get_surface() 
        { return $this->surface; }

        public function set_id_tea($id_tea) 
        { $this->id_tea = $id_tea; }

        public function set_num_parcelle($num_parcelle) 
        { $this->num_parcelle = $num_parcelle; }

        public function set_surface($surface) 
        { $this->surface = $surface; }
    }
?>