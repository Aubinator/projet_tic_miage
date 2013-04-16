<html>

		<form method="post" action="">
			<table border="1" align="center">
				
				<tr>
					<td>Attribut de la tache</td>
					<td> <input  type="text" size="30" name="nomtache"/></td>
				</tr>
				<tr>
					<td>date de debut</td>
					<td> <input type = "date" size="30" name="dateDebut"/></td>
				</tr>
				<tr>
					<td>Date de fin</td>
					<td> <input type = "date" size="30" name="dateFin"/></td>
				</tr>
             
                <td>Nom du projet</td>
                    <td>
                    <?php
					require("connection.php");
					$req= "select * from projet";
					
					?>
                   
                     <select name="numProjet" size="1">
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
                	<td>INTREGRATION</td>
					<td><input type="submit" value="Valider"/>
					<input type="reset" value="Annuler"/> </td>
				</tr>
			</table>	
		</form>
		<?php

if (!empty($_POST['nomtache']) && !empty($_POST['dateDebut']) && !empty($_POST['dateFin']) && !empty($_POST['numProjet'])){
	require('connection.php');
	$nomtache=$_POST['nomtache'];
	$dateDebut=$_POST['dateDebut'];
	$dateFin=$_POST['dateFin'];
	$numProjet=$_POST['numProjet'];

	$insert="insert into tache(nomtache,dateDebut,dateFin,codeProjet) values ('$nomtache','$dateDebut','$dateFin','$numProjet');";

	$exec=mysql_query($insert);
	if($exec)
	{
		echo "insertion r&Eacute;ussie";
	}
	else if(!$exec)
	{
		echo "Insertion réussie, mais rappelons tout de même qu'il ya déjà d'autres taches pour ce projet";
		//echo" pas ok".mysql_error();
	}
	else{
		echo" pas ok".mysql_error();
	}
}
?>
		</body>
</html>