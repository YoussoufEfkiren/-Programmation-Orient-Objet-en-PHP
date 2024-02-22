<?php 
/*
Exercice 2:
4. Une classe Chef qui dérive de la classe Employé, avec en plus un attribut Service et la 
redéfinition de la méthode Afficher.
*/
require_once 'Employe.class.php';
class Chef extends Employe {
    public $service;

    public function __construct($nom, $prenom, $date_naissance, $salaire, $service) {
        parent::__construct($nom, $prenom, $date_naissance, $salaire);
        $this->service = $service;
    }

    public function Afficher() {
        parent::Afficher();
        echo "Service: {$this->service}\n";
    }
}
// Instanciation des objets et test des méthodes


$chef = new Chef("Smith", "Alice", '12/03/2015', 70000, "Ressources Humaines");
$chef->Afficher();
?>