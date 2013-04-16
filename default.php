<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>
<?php
echo "<h1>BIENVENUE DANS</h1>";
?>
<body>
<img  src="img/pmanager.jpg"/>
</body>
</html>
<?php
echo "<p><b>Logiciel de gestion de projets</b></p>";

require("connection.php");
	
	$req1="select count(*) from projet;";
		$result1=mysql_query($req1);
		$colon1= mysql_fetch_array($result1);
		
		$req2="select count(matricule) from developpeur;";
	$result2=mysql_query($req2);
		$colon2= mysql_fetch_array($result2);
		
		$req3="select count(*) from tache;";
		
		$result3=mysql_query($req3);
		$colon3= mysql_fetch_array($result3);
		
		
		$req4="select count(*) from logiciel;";
		
		$result4=mysql_query($req4);
		$colon4= mysql_fetch_array($result4);
		
		$req5="select count(*) from entreprise;";
		
		$result5=mysql_query($req5);
		$colon5= mysql_fetch_array($result5);
echo "<p>Nous travaillions sur $colon1[0] projets, avec $colon2[0] d&eacute;veloppeurs     repartis dans $colon3[0] taches. </p>";
echo "<p>Nous utilisons actuellement $colon4[0] logiciels. </p>";
echo "<p>Il y'a $colon5[0] entreprises qui nous font d&eacute;j&agrave; confiance !!</p>";
echo "<p>________________________________________________________</p>";
echo "<p>R&eacute;alisation : Belly Ndiaye &amp; Kientega Landry</p>";
echo "<p>&copy; Tout droits r&eacute;serv&eacute;s</p>";


?>