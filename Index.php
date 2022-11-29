<h1> Banque </h1>
    <p> 
Sur un compte bancaire, on doit pouvoir :
Créditer le compte de X euros <br>
Débiter le compte de X euros <br>
Effectuer un virement d'un compte à l'autre. <br>
On doit pouvoir : <br>
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci. <br>
Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte <br>

<h2> Resultat </h2>

<?php

 spl_autoload_register(function ($class_name) {

 require_once $class_name . '.php';
 });

 $titulaire1 = new Titulaire ("Dubois","Thomas", "05.06.1994","Bordeaux");
 $titulaire2= new Titulaire ("Dutronc","Alain", "28.02.1976","Lyon");


$courant1= new CB ("courant", 2000, "€", $titulaire1);
$PEL1= new CB ("PEL",200,"pesos", $titulaire1);
$courant2= new CB ("PEL",650,"$", $titulaire2);
$PEL2= new CB ("PEL",70,"yuan",$titulaire2);


echo $titulaire1->getInfos();
echo $titulaire2->getInfos();

echo "----------------------------------------<br>";
$courant1->crediter(50);
$courant2->crediter(20);
echo $titulaire1->getInfos();
echo $titulaire2->getInfos();


echo "----------------------------------------<br>";
$PEL1-> debiter (35);
$PEL2-> debiter (57);
echo $titulaire1->getInfos();
echo $titulaire2->getInfos();

echo "----------------------------------------<br>";
$courant1->virer(1000,  $courant2);
echo $titulaire1->getInfos();
echo $titulaire2->getInfos();

