<?php 
/*
Exercice 2:
2. Une classe Personne avec trois attributs, nom, prénom et date de naissance et une méthode 
polymorphe Afficher pour afficher les données de chaque personne. 

*/
class Personne {
    public $nom;
    public $prenom;
    public $date_naissance;

    public function __construct($nom, $prenom, $date_naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
    }

    public function Afficher() {
        echo "Nom: {$this->nom}\nPrénom: {$this->prenom}\nDate de naissance: {$this->date_naissance}\n";
    }
}
$personne = new Personne("Doe", "John", '12/02/2000');
$personne->Afficher();
?>