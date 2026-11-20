<?php
class Personne {
    public function __construct(
        private string $nom,
        private string $prenom,
        private string $dateNaissance
    ) {
        
    }

    private function getAge(): int {
        $n = new DateTime($this->dateNaissance);
        return $n->diff(new DateTime())->y;
    }

    public function __toString(): string {
        return $this->prenom . " " . $this->nom . " (" . $this->getAge() . " ans)";
    }
}

$p = new Personne("Hachimi", "Sara", "2000-05-14");
echo $p . PHP_EOL;