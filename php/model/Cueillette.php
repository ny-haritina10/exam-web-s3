<?php
    require_once("Database.php");
    require_once("BaseModel.php");

    class Cueillette extends BaseModel {
        // ATTRIBUTES
        private $date_cueillette;
        private $id_cueilleur;
        private $id_parcelle;
        private $poids_cueillette;

        // CONSTRUCTOR
        public function __construct($date_cueillette, $id_cueilleur, $id_parcelle, $poids) {
            $this->date_cueillette = $date_cueillette;
            $this->id_cueilleur = $id_cueilleur;
            $this->id_parcelle = $id_parcelle;
            $this->poids_cueillette = $poids;
        }

        // INSERT 
        public function insert() {
            $query = "INSERT INTO Cueillette (date_cueillette, id_cueilleur, id_parcelle, poids_cueillette) VALUES ('%s', %s, %s, %s)";
            $query = sprintf($query, $this->getDateCueillette(), $this->getIdCueilleur(), $this->getIdParcelle(), $this->getPoidsCueillette());
            
            Database::execute($query);      // Use Database static method to execute the query
        }

        // DELETE
        public static function delete($id) {
            $query = "DELETE FROM Cueillette WHERE id = $id";
            Database::execute($query); 
        }

        // UPDATE 
        public static function update($cueillette, $id) {
            $query = "UPDATE Cueillette SET date_cueillette = '%s', id_cueilleur = %d, id_parcelle = %d WHERE id = %d";

            $query = sprintf($query, $cueillette->getDateCueillette(), $cueillette->getIdCueilleur(), $cueillette->getIdParcelle(), $id);

            Database::execute($query); 
        }

        // GET BY ID
        public static function get_by_id($id) {
            $query = "SELECT * FROM Cueillette WHERE id = $id";
            $result = Database::fetch($query);

            if ($result) {
                $cueillette = new Cueillette($result[0]['date_cueillette'], $result[0]['id_cueilleur'], $result[0]['id_parcelle']);
                return $cueillette;
            } else {
                return null;
            }
        }
        
        // REGENERATION
        public static function regeneration_mois($moisListe) {
            // Vérifier si la liste des mois est vide
            if (empty($moisListe)) {
                echo "La liste des mois est vide.";
                return;
            }

            // Tableau de correspondance des noms de mois à leurs numéros de mois MySQL
            $moisMapping = [
                'Janvier' => '01',
                'Février' => '02',
                'Mars' => '03',
                'Avril' => '04',
                'Mai' => '05',
                'Juin' => '06',
                'Juillet' => '07',
                'Août' => '08',
                'Septembre' => '09',
                'Octobre' => '10',
                'Novembre' => '11',
                'Décembre' => '12'
            ];

            // Préparer la clause WHERE de la requête SQL en utilisant les numéros de mois
            $moisConditions = [];
            foreach ($moisListe as $mois) {
                if (isset($moisMapping[$mois])) {
                    $moisConditions[] = "MONTH(date_cueillette) = '{$moisMapping[$mois]}'";
                }
            }
            $whereClause = implode(' OR ', $moisConditions);

            // Construire la requête SQL
            $query = "DELETE FROM Cueillette WHERE $whereClause";

            // Exécuter la requête SQL
            Database::execute($query);    
        }



        // GETTERS AND SETTERS
        public function getDateCueillette() 
        { return $this->date_cueillette; }

        public function getIdCueilleur() 
        { return $this->id_cueilleur; }

        public function getIdParcelle() 
        { return $this->id_parcelle; }

        public function getPoidsCueillette() 
        { return $this->poids_cueillette; }

        public function setDateCueillette($date_cueillette) 
        { $this->date_cueillette = $date_cueillette; }

        public function setIdCueilleur($id_cueilleur) 
        { $this->id_cueilleur = $id_cueilleur; }

        public function setIdParcelle($id_parcelle) 
        { $this->id_parcelle = $id_parcelle; }

        public function setPoidsCueillette($p) 
        { $this->poids_cueillette = $p; }
    }
?>