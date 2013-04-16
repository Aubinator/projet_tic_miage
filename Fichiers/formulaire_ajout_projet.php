
<center>
    <h1>Ajout Projet</h1> <br>
		<form method="post" action="">
			<table  align="center">
				
				
				<tr>
					<td>Code du Projet</td>
					<td> <input type = "text" name="codeProjet"/></td>
				</tr>
				<tr>
					<td>Nom du Projet</td>
					<td> <input type = "text" name="nomProjet"/></td>
				</tr>
                <tr>
					<td>date Enregistrement</td>
					<td> <input type ="Date" name="dateEnregistrement"/></td>
				</tr>
				<td>dateDebut</td>
					<td> <input   type = "date"  name="dateDebut"/></td>
				</tr>
                <td>dateFin</td>
					<td> <input type="date"  name="dateFin" /></td>
				</tr>
                <td>montant Pr&eacute;vu</td>
					<td> <input   type="number" name="montantPrevu"/></td>
				</tr>
                <tr>
                <td> matricule Chef</td>
					<td>
                    <?php
					require("connection.php");
					$req= "select * from developpeur";
					
					?>
                   
                     <select name="matriculeChef" size="1">
                        <?php
    							
    							$res=mysql_query($req);
								while($ligne=mysql_fetch_array($res))
								{
									echo "<option  value=$ligne[0]>$ligne[1] $ligne[2]</option>";
								}
						?>
  						</select> </td>
				</tr>

                <td>code de l'Entreprise </td>
					<!--<td> <input type = "text" name="codeEntreprise"/></td>-->
                    <td>
                    <?php
					require("connection.php");
					$req= "select * from entreprise";
					
					?>
                   
                     <select name="codeEntreprise" size="1">
                        <?php
    							
    							$res=mysql_query($req);
								while($ligne=mysql_fetch_array($res))
								{
									echo "<option  value=$ligne[0]>$ligne[1]</option>";
								}
						?>
  						</select> </td>
				</tr>
                <tr>
                <td></td>
					<td><input type="submit" class="btn">  </input> 
  						<input type="reset" class="btn">  </input> </td>
				</tr>
			</table>	
		</form>
        
         <?php

if (!empty($_POST['codeProjet']) && !empty($_POST['nomProjet']) && !empty($_POST['dateEnregistrement']) && !empty($_POST['dateDebut']) && !empty($_POST['dateFin'])  && !empty($_POST['montantPrevu']) && !empty($_POST['matriculeChef']) && !empty($_POST['codeEntreprise'])){
	require('connection.php');
$codeProjet=$_POST['codeProjet'];
$nomProjet=$_POST['nomProjet'];
$dateEnregistrement=$_POST['dateEnregistrement'];
$dateDebut=$_POST['dateDebut'];
$dateFin=$_POST['dateFin'];
$montantPrevu=$_POST['montantPrevu'];
$matriculeChef=$_POST['matriculeChef'];
$codeEntreprise=$_POST['codeEntreprise'];
$insert="insert into `projet`(`codeProjet`,`nomProjet`,`dateEnregistrement`,`dateDebut`,`dateFin`,`montantPrevu`,`matriculeChef`,`codeEntreprise`)
values('$codeProjet','$nomProjet','$dateEnregistrement','$dateDebut','$dateFin','$montantPrevu','$matriculeChef','$codeEntreprise');";

$exec=mysql_query($insert);
	/*entrer ici le code*/
	if($exec)
	{
		echo "insertion r&eacute;ussie";
	}
	
	else{
		echo" pas ok".mysql_error();
	}
}
?>
	
	</center>
