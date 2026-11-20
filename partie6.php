<?php
class Animal {
    public function manger(): void {
        echo "Je mange." . PHP_EOL;
    }
}
class Chat extends Animal {
    public function miauler(): void {
        echo "Miaou." . PHP_EOL;
    }
}

class Personne {
    public function __construct(protected string $nom) {}
    public function presentation(): string {
        return "Je suis " . $this->nom;
    }
    protected function getAge(): int { return 25; } 
}

class Etudiant extends Personne {
    public function __construct(string $nom, private string $filiere, private string $cne = "CNE000") {
        parent::__construct($nom);
    }
    public function presentation(): string {
        return parent::presentation() . ", étudiant en " . $this->filiere;
    }
    public function getCne(): string { return $this->cne; }
    public function __toString(): string {
        return parent::presentation() . ", CNE : " . $this->cne;
    }
}

$e = new Etudiant("Ahmed", "Informatique");
echo $e->presentation() . PHP_EOL;

// 6.3
class Base {
    final public function afficher(): void { echo "Méthode finale" . PHP_EOL; }
}
final class Outil {
    public const VERSION = "1.0";
}
class Produit {
    public function __construct(public readonly string $reference) {}
}
$p = new Produit("REF-001");
echo $p->reference . PHP_EOL;


$etudiants = [];
$etudiants[] = new Etudiant("Hachimi", "Informatique", "CNE1");
$etudiants[] = new Etudiant("Alaoui", "Mathématiques", "CNE2");
$etudiants[] = new Etudiant("Bennani", "Physique", "CNE3");
$etudiants[] = new Etudiant("Cherkaoui", "Chimie", "CNE4");
$etudiants[] = new Etudiant("Daoudi", "Biologie", "CNE5");
foreach ($etudiants as $etudiant) {
    echo $etudiant . PHP_EOL;
}