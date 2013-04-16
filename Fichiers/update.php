<?php
$cat = $_POST['cat'];

echo "$cat";
require('connection.php');
/************************************************* PARTIE PROJET ******************************************************************/	
	if ($cat == 'projet'){

		

if (!empty($_POST['codeProjet']) && !empty($_POST['nomProjet']) && !empty($_POST['dateEnregistrement']) && !empty($_POST['dateDebut']) && !empty($_POST['dateFin'])  && !empty($_POST['montantPrevu']) && !empty($_POST['matriculeChef']) && !empty($_POST['codeEntreprise'])){

	$codeProjet=$_POST['codeProjet'];
	$nomProjet=$_POST['nomProjet'];
	$dateEnregistrement=$_POST['dateEnregistrement'];
	$dateDebut=$_POST['dateDebut'];
	$dateFin=$_POST['dateFin'];
	$montantPrevu=$_POST['montantPrevu'];
	$matriculeChef=$_POST['matriculeChef'];
	$codeEntreprise=$_POST['codeEntreprise'];

$insert="update  `projet` set  `nomProjet` = '$nomProjet' , `dateEnregistrement` = '$dateEnregistrement', `dateDebut` = '$dateDebut',`dateFin` = '$dateFin',`montantPrevu` = '$montantPrevu', `matriculeChef` = '$matriculeChef', `codeEntreprise` = '$codeEntreprise' where `codeProjet` = '$codeProjet';";

$exec=mysql_query($insert);
	//entrer ici le code
	if($exec)
	{
		echo "modification r&eacute;ussie";
	}
	
	else{
		echo" pas ok".mysql_error();
	}


}
else
	echo "Tous les champs doivent etre remplis";
}

/************************************************* PARTIE DEV ******************************************************************/
if ($cat == 'dev'){

		

if (!empty($_POST['matricule']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['nationalite']) && !empty($_POST['datenaissance']) && !empty($_POST['specialite']) && !empty($_POST['dernier_diplome']) && !empty($_POST['date_embauche'])){

	$matricule=$_POST['matricule'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$adresse=$_POST['adresse'];
	$nationalite=$_POST['nationalite'];
	$datenaissance=$_POST['datenaissance'];
	$specialite=$_POST['specialite'];
	$dernier_diplome=$_POST['dernier_diplome'];
	$date_embauche=$_POST['date_embauche'];
	
	$insert="update `developpeur` set `matricule` = '$matricule',  `nom` = '$nom',`prenom` = '$prenom',`adresse` = '$adresse', `nationalite` = '$nationalite', `datenaissance` =  '$datenaissance',`specialite` = '$specialite',`dernier_diplome` = '$dernier_diplome', `date_embauche` = '$date_embauche' where `matricule` = '$matricule';";
$exec=mysql_query($insert);
	
	if($exec)
	{
		echo "modification r&eacute;ussie";
	}
	
	else{
		echo" pas ok".mysql_error();
	}


}
else
	echo "Tous les champs doivent etre remplis";
}


/************************************************* PARTIE ENTREPRISE ******************************************************************/
if ($cat == 'ent'){

	/*	$codeEntreprise=$_POST['codeEntreprise'];
$nom=$_POST['nom'];
$raisonSocial=$_POST['raisonSocial'];
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$siteweb=$_POST['siteweb'];
$telephone=$_POST['telephone'];
$fax=$_POST['fax'];
$numContact=$_POST['numContact'];
echo "codeEntreprise '$codeEntreprise' nom '$nom' raisonSocial '$raisonSocial' adresse $adresse email $email siteweb $siteweb telephone $telephone
fax $fax numContact $numContact";
*/
if (!empty($_POST['codeEntreprise']) && !empty($_POST['nom']) && !empty($_POST['raisonSocial']) && !empty($_POST['adresse']) && !empty($_POST['email']) && !empty($_POST['siteweb']) && !empty($_POST['telephone']) && !empty($_POST['fax']) && !empty($_POST['numContact'])  ){
	/*entrer ici le code*/
	require('connection.php');
$codeEntreprise=$_POST['codeEntreprise'];
$nom=$_POST['nom'];
$raisonSocial=$_POST['raisonSocial'];
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$siteweb=$_POST['siteweb'];
$telephone=$_POST['telephone'];
$fax=$_POST['fax'];
$numContact=$_POST['numContact'];
/*echo "codeEntreprise $codeEntreprise nom $nom raisonSocial $raisonSocial adresse $adresse email $email siteweb $siteweb telephone $telephone
fax $fax numContact $numContact";*/
$insert="update  entreprise set nom = '$nom', raisonSociale = '$raisonSocial', adresse = '$adresse', email = '$email' ,siteweb = '$siteweb', telephone = '$telephone', fax = '$fax' ,numContact = '$numContact'  where codeEntreprise = '$codeEntreprise';";

$exec=mysql_query($insert);
	if($exec)
	{
		echo "<div class=\"alert alert-success\">";
		echo "insertion r&eacute;ussie";
		echo "</div>";
	}
	
	else{
		echo "<div class=\"alert alert-error\">";
		echo" pas ok".mysql_error();
		echo "</div>";
	}
}

else
	echo "Tous les champs doivent etre remplis";
}

?>