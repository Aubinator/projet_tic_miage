
<h1><center> Ajout Developpeur</h1></center>

		<form method="post" action="">
			<table align="center">
				
				<tr>
					<td>matricule</td>
					<td> <input  type="text" required  name="matricule"/></td>
				</tr>
				<tr>
					<td>nom</td>
					<td> <input type = "text" required name="nom"/></td>
				</tr>
				<tr>
					<td>Prenom</td>
					<td> <input type = "text" required name="prenom"/></td>
				</tr>
                <tr>
					<td>Adresse</td>
					<td> <input type = "text" required name="adresse"/></td>
				</tr>
				<td>Nationalit&eacute;</td>
					<td> <input   type = "text" required  name="nationalite"/></td>
				</tr>
                <td>Date Naissance</td>
					<td> <input type="date" required  name="datenaissance" /></td>
				</tr>
                <td>Specialit&eacute;</td>
					<td> <input   type = "text" required  name="specialite"/></td>
				</tr>
                <td>Dernier diplome</td>
					<td> <input type = "text" required  name="dernier_diplome"/></td>
				</tr>
                <td>Date d'embauche</td>
					<td> <input type="date" required name="date_embauche"/></td>
				</tr>
				<tr><td></td>
					<td ><center><div class="controls"> 
  						<input type="submit" class="btn">  </input> 
  						<input type="reset" class="btn">  </input> 
					  
				   </div> </td></center>
				</tr>
			</table>	
		</form>
        <?php

if (!empty($_POST['matricule']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['nationalite']) && !empty($_POST['datenaissance']) && !empty($_POST['specialite']) && !empty($_POST['dernier_diplome']) && !empty($_POST['date_embauche'])){
	/*entrer ici le code*/
	require('connection.php');
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$nationalite=$_POST['nationalite'];
$datenaissance=$_POST['datenaissance'];
$specialite=$_POST['specialite'];
$dernier_diplome=$_POST['dernier_diplome'];
$date_embauche=$_POST['date_embauche'];
$insert="insert into `developpeur`(`matricule`,`nom`,`prenom`,`adresse`,`nationalite`,`datenaissance`,`specialite`,`dernier_diplome`,`date_embauche`)
values('$matricule','$nom','$prenom','$adresse','$nationalite','$datenaissance','$specialite','$dernier_diplome','$date_embauche');";

$exec=mysql_query($insert);
	
	if($exec)
	{
		echo "insertion réussie";
	}
	
	else{
		echo" pas ok".mysql_error();
	}
}
?>