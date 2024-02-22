<?php
/*
Objectifs Pédagogique :
• Maîtriser les bases du langage PHP.
• Maîtriser les concepts de base de l'implémentation Objet.
• Concevoir une application web : entités et cinématique.
• Assurer la Persistance en Session.
*/
/*
Exercice 1:
1. Créer une classe nommée CompteBancaire qui représente un compte bancaire, ayant pour 
attributs : numeroCompte, nom et solde. 
2. Créer un constructeur ayant comme paramètres : numeroCompte, nom et solde. 
3. Créer une méthode Versement() qui gère les versements. 
4. Créer une méthode Retrait() qui gère les retraits. 
5. Créer une méthode toString() permettant d’afficher les détails sur le compte 
6. Instancier un objet et tester les méthodes définies. 
*/
class CompteBancaire {
    public $numeroCompte;
    public $nom;
    public $solde;

    public function __construct($numeroCompte, $nom, $solde) {
        $this->numeroCompte = $numeroCompte;
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function Versement($montant) {
        $this->solde += $montant;
    }

    public function Retrait($montant) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
            echo "\nRetrait de $montant effectué. Nouveau solde : {$this->solde}";
        } else {
            echo "Solde insuffisant.\n";
        }
    }

    public function __toString() {
        return "\n$this->numeroCompte - $this->nom - $this->solde";
    }
}

$compte1 = new CompteBancaire("123456789", "John Doe", 1000);

echo $compte1;

$compte1->Versement(500);

$compte1->Retrait(200);

echo $compte1;
?>
