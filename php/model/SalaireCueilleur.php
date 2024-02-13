<?php
    require_once("Database.php");
    require_once("BaseModel.php");

    class SalaireCueilleur extends BaseModel {
        // ATTRIBUTES
        private $id_cueilleur;
        private $salaire;

        // CONSTRUCTOR
        public function __construct($id_cueilleur, $salaire) {
            $this->id_cueilleur = $id_cueilleur;
            $this->salaire = $salaire;
        }

        // INSERT 
        public function insert() {
            $query = "INSERT INTO SalaireCueilleur (id_cueilleur, salaire) VALUES (%d, %f)";
            $query = sprintf($query, $this->getIdCueilleur(), $this->getSalaire());
            
            Database::execute($query);      // Use Database static method to execute the query
        }

        // DELETE
        public static function delete($id) {
            $query = "DELETE FROM SalaireCueilleur WHERE id = $id";
            Database::execute($query); 
        }

        // UPDATE 
        public static function update($salaireCueilleur, $id) {
            $query = "UPDATE SalaireCueilleur SET id_cueilleur = %d, salaire = %f WHERE id = %d";

            $query = sprintf($query, $salaireCueilleur->getIdCueilleur(), $salaireCueilleur->getSalaire(), $id);

            Database::execute($query); 
        }

        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM SalaireCueilleur WHERE id = $id";
            $result = Database::fetch($query);

            if ($result) {
                $salaireCueilleur = new SalaireCueilleur($result[0]['id_cueilleur'], $result[0]['salaire']);
                return $salaireCueilleur;
            } else {
                return null;
            }
        }

        // GETTERS AND SETTERS
        public function getIdCueilleur() 
        { return $this->id_cueilleur; }

        public function getSalaire() 
        { return $this->salaire; }

        public function setIdCueilleur($id_cueilleur) 
        { $this->id_cueilleur = $id_cueilleur; }

        public function setSalaire($salaire) 
        { $this->salaire = $salaire; }
    }
?>