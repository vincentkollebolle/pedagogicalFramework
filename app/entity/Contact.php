<?php

class Contact {
    private $id_contact;
    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;

    public function __construct($id_contact, $nom, $prenom, $adresse, $cp, $ville) {
        $this->id_contact = $id_contact;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
    }

    public function getIdContact() {
		return $this->nom;
    }
    
	public function getNom() {
		return $this->nom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getAdresse() {
		return $this->adresse;
	}

	public function setAdresse($adresse) {
		$this->adresse = $adresse;
	}

	public function getCp() {
		return $this->$cp;
	}

	public function setCp($cp) {
		$this->$cp = $cp;
	}

	public function getVille() {
		return $this->$ville;
	}

	public function setVille($ville) {
		$this->$ville = $ville;
    }
    
    public function nameAndForname(){
        return $this->prenom." ".$this->nom;
    }
}