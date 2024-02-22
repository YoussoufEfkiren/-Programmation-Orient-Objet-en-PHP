<?php 
require_once 'personne.php';
// Classe Client dérivée de la classe Personne
class Client extends Persone {
    private $adresse;

    // Constructeur
    public function __construct($nom, $prénom, $adresse) {
        parent::__construct($nom, $prénom);
        $this->adresse = $adresse;
    }

    // Méthode pour afficher les coordonnées complètes du client
    public function setCoord() {
        echo "Nom: {$this->nom}\nPrénom: {$this->prénom}\nAdresse: {$this->adresse}\n";
    }
}

// Création d'un client
$client = new Client("Doe", "John", "123 Rue de Paris");
$client->setCoord();
?>