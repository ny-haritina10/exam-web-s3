<?php
    require_once("Database.php");
    require_once("BaseModel.php");

    class CategorieDepense extends BaseModel {
        // ATTRIBUTES
        private $type_depense;

        // CONSTRUCTOR
        public function __construct($type_depense) {
            $this->type_depense = $type_depense;
        }

        // INSERT 
        public function insert() {
            $query = "INSERT INTO CategorieDepense (type_depense) VALUES ('%s')";
            $query = sprintf($query, $this->getTypeDepense());
            
            Database::execute($query);      // Use Database static method to execute the query
        }

        // DELETE
        public static function delete($id) {
            $query = "DELETE FROM CategorieDepense WHERE id = $id";
            Database::execute($query); 
        }

        // UPDATE 
        public static function update($categorieDepense, $id) {
            $query = "UPDATE CategorieDepense SET type_depense = '%s' WHERE id = %d";

            $query = sprintf($query, $categorieDepense->getTypeDepense(), $id);

            Database::execute($query); 
        }

        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM CategorieDepense WHERE id = $id";
            $result = Database::fetch($query);

            if ($result) {
                $categorieDepense = new CategorieDepense($result[0]['type_depense']);
                return $categorieDepense;
            } else {
                return null;
            }
        }

        // GETTERS AND SETTERS
        public function getTypeDepense() 
        { return $this->type_depense; }

        public function setTypeDepense($type_depense) 
        { $this->type_depense = $type_depense; }
    }
?>