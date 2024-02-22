<?php 
/*
Exercice 2: 
3. Une classe Employé qui dérive de la classe Personne, avec en plus un attribut Salaire et la 
redéfinition de la méthode Afficher. 
*/
require_once 'Personne.class.php';
class Employe extends Personne {
    public $salaire;

    public function __construct($nom, $prenom, $date_naissance, $salaire) {
        parent::__construct($nom, $prenom, $date_naissance);
        $this->salaire = $salaire;
    }

    public function Afficher() {
        parent::Afficher();
        echo "Salaire: {$this->salaire}\n";
    }
}
$employé = new Employe("Doe", "Jane", '12/11/2005', 50000);
$employé->Afficher();
?>