<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";
    private string $villeNaissance = "";
    private string $cin = "";

    public function __set(string $name, mixed $value): void {
        if (property_exists($this, $name)) {
            if ($name === 'nom' && (strlen($value) < 2)) {
                throw new InvalidArgumentException("Le nom doit contenir au moins 2 caractères.");
            }
            $this->$name = $value;
        } else {
            echo "Propriété $name inexistante" . PHP_EOL;
        }
    }

    public function __get(string $name): mixed {
        return property_exists($this, $name) ? $this->$name : null;
    }

    public function __isset(string $name): bool {
        return isset($this->$name);
    }

    public function __unset(string $name): void {
        if (property_exists($this, $name)) {
            $this->$name = "";
        }
    }
}

$p = new Personne( 

"Hachimi", "Sara", "2000-05-14", "MARRAKECH", "EE123456"
);
$p->nom = "Hachimi";
echo $p->nom . PHP_EOL;         
var_dump(isset($p->nom));       
unset($p->nom);
var_dump(isset($p->nom));        
$p->telephone = "0600000000";  
