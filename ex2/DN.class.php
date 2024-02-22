<?php 
/*
Exercice 2:
1. Une classe DateNaissance avec trois attributs, jour, mois, année et une méthode toString() 
qui convertit la date de naissance en chaine de caractères 
*/
class DateNaissance {
    public $jour;
    public $mois;
    public $annee;

    public function __construct($jour, $mois, $annee) {
        $this->jour = $jour;
        $this->mois = $mois;
        $this->annee = $annee;
    }

    public function __toString() {
        return $this->jour.''.$this->mois.''.$this->annee;
    }
}

?>