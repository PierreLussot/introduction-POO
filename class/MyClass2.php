<?php

/**
 * Définition de MyClass2
 */
include_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . "MyClass.php");
/**
 * Pour l'héritage, on crée une nouvelle class puis on extends 
 * la class que l'on veut prendre les propriétés et les méthodes.
 */
class MyClass2 extends MyClass
{
    // On peut redéclarer les propriétés publics ou protégés, mais pas ceux privés
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        //echo $this->private;
    }
}
