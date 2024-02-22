<?php
/*
Exercice 3:
Créez une classe abstraite représentant une personne. Elle déclare les propriétés nom et prénom 
et un constructeur. Créez une classe client dérivée de la classe personne en y ajoutant la propriété 
adresse et une méthode setCoord() qui affiche les coordonnées complètes de la personne. Créez 
une classe électeur dérivée de la même classe abstraite, et ajoutez-y deux propriétés 
bureau_de_vote et vote, ainsi qu’une méthode avoter(), qui enregistre si une personne a voté 
dans la propriété vote.
*/

// Classe abstraite représentant une personne
abstract class persone {
    protected $nom;
    protected $prénom;

    // Constructeur
    public function __construct($nom, $prénom) {
        $this->nom = $nom;
        $this->prénom = $prénom;
    }

    // Méthode abstraite pour afficher les coordonnées complètes de la personne
    abstract public function setCoord();
}
?>
