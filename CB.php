<?php

Class CB {
    private $_libelle;
    private $_solde;
    private $_devise;
    private $_titulaire;
  

public function __construct ($libelle,$solde,$devise,$titulaire){ 
    $this->_libelle= $libelle;
    $this->_solde= $solde;
    $this->_devise= $devise;
    $this->_titulaire= $titulaire;
    $this->_titulaire->addCompte($this);
}

public function getLibelle(){
    return $this->_libelle;
}

public function getSolde(){
    return $this->_solde;
}

public function getDevise(){
    return $this->_devise;
}

public function getTitulaire(){
    return $this->_titulaire;
} 

public function crediter($somme){
    $this-> _solde+=$somme;
    echo "le compte a été credité de $somme <br>";
    return $somme;
}

public function debiter ($soustrait){
    $this-> _solde-=$soustrait;
    echo "le compte a été debité de $soustrait <br>";
    return $soustrait;
}
public function virer ($virement, $compte){
    $this->debiter($virement);
    $compte->crediter($virement);
}
}
?>