<?php 
require_once 'personne.php';
// Classe Électeur dérivée de la classe Personne
class Électeur extends Persone {
    private $bureau_de_vote;
    private $vote = false;

    // Constructeur
    public function __construct($nom, $prénom, $bureau_de_vote) {
        parent::__construct($nom, $prénom);
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = false;
    }

    // Méthode pour enregistrer si l'électeur a voté
    public function avoter() {
        $this->vote = true;
    }

    // Méthode pour afficher les coordonnées complètes de l'électeur
    public function setCoord() {
        echo "Nom: {$this->nom}\nPrénom: {$this->prénom}\nBureau de vote: {$this->bureau_de_vote}\n";
    }
}
// Création d'un électeur
$électeur = new Électeur("Smith", "Alice", "Bureau 1");
$électeur->setCoord();

// Électeur vote
$électeur->avoter();
?>