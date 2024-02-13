<?php
    require_once("Database.php");
    require_once("BaseModel.php");

    class Depense extends BaseModel {
        // ATTRIBUTES
        private $id_categorie_depense;
        private $date_depense;
        private $montant;

        // CONSTRUCTOR
        public function __construct($id_categorie_depense, $date_depense, $montant) {
            $this->id_categorie_depense = $id_categorie_depense;
            $this->date_depense = $date_depense;
            $this->montant = $montant;
        }

        // INSERT 
        public function insert() {
            $query = "INSERT INTO Depense (id_categorie_depense, date_depense, montant) VALUES (%d, '%s', %f)";
            $query = sprintf($query, $this->getIdCategorieDepense(), $this->getDateDepense(), $this->getMontant());
            
            Database::execute($query);      // Use Database static method to execute the query
        }

        // DELETE
        public static function delete($id) {
            $query = "DELETE FROM Depense WHERE id = $id";
            Database::execute($query); 
        }

        // UPDATE 
        public static function update($depense, $id) {
            $query = "UPDATE Depense SET id_categorie_depense = %d, date_depense = '%s', montant = %f WHERE id = %d";

            $query = sprintf($query, $depense->getIdCategorieDepense(), $depense->getDateDepense(), $depense->getMontant(), $id);

            Database::execute($query); 
        }

        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM Depense WHERE id = $id";
            $result = Database::fetch($query);

            if ($result) {
                $depense = new Depense($result[0]['id_categorie_depense'], $result[0]['date_depense'], $result[0]['montant']);
                return $depense;
            } else {
                return null;
            }
        }

        // GETTERS AND SETTERS
        public function getIdCategorieDepense() 
        { return $this->id_categorie_depense; }

        public function getDateDepense() 
        { return $this->date_depense; }

        public function getMontant() 
        { return $this->montant; }

        public function setIdCategorieDepense($id_categorie_depense) 
        { $this->id_categorie_depense = $id_categorie_depense; }

        public function setDateDepense($date_depense) 
        { $this->date_depense = $date_depense; }

        public function setMontant($montant) 
        { $this->montant = $montant; }
    }
?>