<?php

/**
 * declaration de la class
 */
class Visiteur
{
    /** 
     *  proprieté de lobjet
     */
    private $prenom;
    public $nom;


    /**
     * par convention à chaque fois que l'on va mettre à jour une propriété on 
     * nomme la méthode par set (définir)
     */
    public function set_prenom($nouveau_prenom)
    {
        $this->prenom = $nouveau_prenom;
    }

    public function set_nom($nouveau_nom)
    {
        $this->nom = $nouveau_nom;
    }

    /**
     * par convention on à chaque fois que l'on va lire la propriété 
     * on nomme la méthode par get (obtenir)
     */
    public function get_prenom()
    {
        return  $this->prenom;
    }
}
