<?php
    require_once("Database.php");
    require_once("BaseModel.php");

    class Cueilleur extends BaseModel {
        // ATTRIBUTES
        private $nom;
        private $genre;
        private $date_naissance;
        private $poids_min_journalier; 
        private $bonus; // Nouvel attribut ajouté
        private $malus; // Nouvel attribut ajouté

        // CONSTRUCTOR
        public function __construct($nom, $genre, $date_naissance, $poids_min_journalier, $bonus, $malus) {
            $this->nom = $nom;
            $this->genre = $genre;
            $this->date_naissance = $date_naissance;
            $this->poids_min_journalier = $poids_min_journalier; 
            $this->bonus = $bonus; // Initialisation de l'attribut
            $this->malus = $malus; // Initialisation de l'attribut
        }

        // INSERT 
        public function insert() {
            $query = "INSERT INTO Cueilleur (nom, genre, date_naissance, poids_min_journalier, bonus, malus) VALUES ('%s', '%s', '%s', %f, %d, %d)";
            $query = sprintf($query, $this->getNom(), $this->getGenre(), $this->getDateNaissance(), $this->getPoidsMinJournalier(), $this->getBonus(), $this->getMalus());
            
            Database::execute($query);      // Utilisation de la méthode statique de la classe Database pour exécuter la requête
        }

        // DELETE
        public static function delete($id) {
            $query = "DELETE FROM Cueilleur WHERE id = $id";
            Database::execute($query); 
        }

        // UPDATE 
        public static function update($cueilleur, $id) {
            $query = "UPDATE Cueilleur SET nom = '%s', genre = '%s', date_naissance = '%s', poids_min_journalier = %f, bonus = %d, malus = %d WHERE id = %d";

            $query = sprintf($query, $cueilleur->getNom(), $cueilleur->getGenre(), $cueilleur->getDateNaissance(), $cueilleur->getPoidsMinJournalier(), $cueilleur->getBonus(), $cueilleur->getMalus(), $id);

            Database::execute($query); 
        }

        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM Cueilleur WHERE id = $id";
            $result = Database::fetch($query);

            if ($result) {
                $cueilleur = new Cueilleur($result[0]['nom'], $result[0]['genre'], $result[0]['date_naissance'], $result[0]['poids_min_journalier'], $result[0]['bonus'], $result[0]['malus']);
                return $cueilleur;
            } else {
                return null;
            }
        }

        // GETTERS AND SETTERS
        public function getNom() 
        { return $this->nom; }

        public function getGenre() 
        { return $this->genre; }

        public function getDateNaissance() 
        { return $this->date_naissance; }

        public function getPoidsMinJournalier() 
        { return $this->poids_min_journalier; } 

        public function getBonus() 
        { return $this->bonus; } // Getter ajouté

        public function getMalus() 
        { return $this->malus; } // Getter ajouté

        public function setNom($nom) 
        { $this->nom = $nom; }

        public function setGenre($genre) 
        { $this->genre = $genre; }

        public function setDateNaissance($date_naissance) 
        { $this->date_naissance = $date_naissance; }

        public function setPoidsMinJournalier($poids_min_journalier) 
        { $this->poids_min_journalier = $poids_min_journalier; } 

        public function setBonus($bonus) 
        { $this->bonus = $bonus; } // Setter ajouté

        public function setMalus($malus) 
        { $this->malus = $malus; } // Setter ajouté
    }
?>