<?php

Class Titulaire {
    private $_nom;
    private $_prenom;
    private $_ddn;
    private $_ville;
    private $_listcb;

    public function __construct($nom,$prenom,$ddn,$ville){
        $this->_nom= $nom;
        $this->_prenom= $prenom;
        $this->_ddn = $ddn;
        $this->_ville = $ville;
        $this->_listcb = [];
    }
    public function __addCompte($compte){
        $this-> _listcb[]= $compte;
    }
    function getInfosComptes(){
        $informationComptes="";
        foreach ($this->_listcb as $compte){
            $informationComptes .= $informationComptes.$compte->getLibelle().  " la somme de" .$compte-> getSolde()." ".$compte->getDevise()."<br>";
        }
        return $informationComptes;
    }
    public function getInfos(){
        return $this->_nom ." ". $this->_prenom . " née le " . $this->_ddn . " à " . $this ->_ville . " a sur ". $this->getInfosComptes();
    }

    public function addCompte($compte){
        $this->_listcb [] = $compte;
    }

    // public function __toString()
    // {
    //     var_dump($this);
    //     return $this->_prenom . " " . $this->_nom;
    // }



}