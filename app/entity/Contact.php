<?php
 namespace App\entity;
 
 class Contact {
    private $prenom;
    private $nom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
     }

    public function sayMyName() {
        return $this->prenom." ".$this->nom;
    } 

 }