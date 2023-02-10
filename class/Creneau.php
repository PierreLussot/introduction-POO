<?php
//declaration de la class
class Creneau
{
    // proprieté de lobjet
    public $debut;
    public $fin;

    public function __construct(int $debut, int $fin)
    {
        //$this->debut recupere l'instance (la proprieter) public $debut 
        //et vaudra le parametre de la (fontion)methode $debut;
        $this->debut = $debut;
        $this->fin = $fin;
    }
    public function toHTML(): string
    {
        return "de <strong>{$this->debut}</strong> a <strong>{$this->fin}</strong>";
    }

    public function inclusHeure(int $heure): bool
    {
        return $heure >= $this->debut &&  $heure <= $this->fin;
    }

    public function intersect(Creneau $creneau): bool
    {
        return  $this->inclusHeure($creneau->debut)  ||
            $this->inclusHeure($creneau->fin) ||
            ($this->debut > $creneau->debut && $this->fin < $creneau->fin);
    }
}
