<?php

class Voiture {
    public string $couleur;

    
    public function __construct(
        public string $coleur = "Blanche",
        public int $vitesse = 0
    ) {}

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);
$v1->afficher();
$v2->afficher();


class Voiture2 {
    public function __construct(public string $couleur) {
        echo "Voiture {$this->couleur} créée." . PHP_EOL;
    }
    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

$maVoiture = new Voiture2("Blanche");
unset($maVoiture);
echo "Fin du script." . PHP_EOL;


$a = new Voiture2("A");
$b = new Voiture2("B");
echo "Fin du script (avec a et b)." . PHP_EOL;