<?php

/**
 * Définition de MyClass
 */
class MyClass
{
    /**
     *PUBLIC C'est l'accès par défaut de PHP si l'on ne précise aucune visibilité. 
     *Tous les propriétés et méthodes qui sont déclarés sans l'un de ces trois mots-clés 
     *sera considéré automatiquement par l'interprêteur comme publique.
     *Le mot-clé public indique que les propriétés et méthodes d'un objet 
     * seront accessibles depuis n'importe où dans le programme principal 
     * ou bien dans les classes mères héritées ou classes filles dérivées.
     */


    public $public = 'Public';

    /** 
     *PROTECTED ne vont être accessibles que depuis l’intérieur de la classe qui les a définies
     *ainsi que depuis les classes qui en héritent ou la classe parente. 
     */
    protected $protected = 'Protected';

    /** 
     *PRIVATE  permet de déclarer des propriétés et des méthodes qui ne seront visibles et accessibles
     *directement que depuis l'intérieur même de la classe. 
     *C'est à dire qu'il devient impossible de lire ou d'écrire la valeur d'une propriétés privé directement 
     */
    private $private = 'Private';

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}
