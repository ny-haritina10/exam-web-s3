<?php
    require_once("Database.php");
    require_once("BaseModel.php");
    
    class Tea extends BaseModel {
        // ATTRIBUTES
        private $nom_variete;
        private $occupation;
        private $rendement;
        private $prix_vente; // Nouvel attribut
    
        // CONSTRUCTOR
        public function __construct($nom_variete, $occupation, $rendement, $prix_vente) {
            $this->nom_variete = $nom_variete;
            $this->occupation = $occupation;
            $this->rendement = $rendement;
            $this->prix_vente = $prix_vente; 
        }
    
        // INSERT 
        public function insert() {
            $query = "INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('%s', %d, %f, %f)"; 
            $query = sprintf($query, $this->get_nom_variete(), $this->get_occupation(), $this->get_rendement(), $this->get_prix_vente()); // Mettre à jour la substitution de valeurs
            
            Database::execute($query); // Exécuter la requête
        }

    
        // DELETE
        public static function delete($id) {
            $query = " DELETE FROM Tea WHERE id = $id ";
            Database::execute($query); 
        }
    
        // UPDATE 
        public static function update($tea, $id) {
            $query = " UPDATE Tea SET nom_variete = '%s', occupation = %d, rendement = %f, prix_de_vente = %f WHERE id = %d "; // Mettre à jour la requête
    
            $query = sprintf($query, $tea->get_nom_variete(), $tea->get_occupation(), $tea->get_rendement(), $tea->get_prix_vente(), $id); // Mettre à jour la substitution de valeurs
    
            Database::execute($query); 
        }
    
        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM Tea WHERE id = $id";
            $result = Database::fetch($query);
    
            if ($result) {
                $tea = new Tea($result[0]['nom_variete'], $result[0]['occupation'], $result[0]['rendement'], $result[0]['prix_de_vente']); // Ajouter le prix de vente lors de la création de l'objet Tea
                return $tea;
            } else {
                return null;
            }
        }
    
        // GETTERS AND SETTERS
        public function get_nom_variete() { return $this->nom_variete; }
    
        public function get_occupation() { return $this->occupation; }
    
        public function get_rendement() { return $this->rendement; }
    
        public function get_prix_vente() { return $this->prix_vente; } // Getter pour le prix de vente
    
        public function setNomVariete($nom_variete) { $this->nom_variete = $nom_variete; }
    
        public function set_occupation($occupation) { $this->occupation = $occupation; }
    
        public function set_rendement($rendement) { $this->rendement = $rendement; }
    
        public function set_prix_vente($prix_vente) { $this->prix_vente = $prix_vente; } // Setter pour le prix de vente
    }    
?>