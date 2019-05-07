<?php

class Character
{
    public $arms = 2;
    public $level;
    public $health;
    public $strength;
    public $maxSpeed;

    // Ici, nous rendons le constructeur explicite
    public function __construct($a, $b, $c, $d)
    {
        $this->level = $a;
        $this->health = $b;
        $this->strength = $c;
        $this->maxSpeed = $d;
    }

    // Méthode pour récupérer la propriétés "health"
    public function getHealth()
    {
        return $this->health;
    }

    //Destructeur (exécuté à la fin du script)
    public function __destruct()
    {
        echo "Je suis détruit";
    }

}