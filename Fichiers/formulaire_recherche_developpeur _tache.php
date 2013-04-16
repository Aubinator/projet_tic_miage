

		<form method="post" action="">
			<table border="1" align="center">
				
				<tr>
					<td>Entrer nom du projet</td>
					<!--<td> <input  type="text" size="30" name="momProjet"/></td>-->
                    <td>
                    <?php
					require("connection.php");
					$req= "select * from projet";
					
					?>
                   
                     <select name="nomProjet" size="1">
                        <?php
    							
    							$res=mysql_query($req);
								while($ligne=mysql_fetch_array($res))
								{
									echo "<option  value=$ligne[1]>$ligne[1]</option>";
								}
						?>
  						</select> </td>
				</tr>
				<tr><td>Recherche des d&eacute;veloppeurs</td>
					<td><input type="submit" value="Afficher"/>
					<input type="reset" value="Annuler"/> </td>
				</tr>
			</table>	
		</form>
         <?php

if (!empty($_POST['nomProjet'])){
	/*entrer ici le code*/
	require("connection.php");
$nomProjet=$_POST['nomProjet'];
$req="call deloppeur_tache('$nomProjet')";
		$result=mysql_query($req);
		echo"<table border =1>";
		echo "<tr><th>Matricule</th> <th>Nom</th> <th>Prenom</th><th>Adresse
</th><th>Nationalite</th><th>Date de naissance</th><th>specialite</th>
<th>dernier diplome</th><th>date d'embauche</th><th>Numero de tache</th><th>Nom de la tache particip&eacute;e</th></tr>";
	if($result)
	{
	while($colon= mysql_fetch_array($result))
		{
		echo"<tr>";
			echo"<td>$colon[0]</td>";
			echo"<td>$colon[1]</td>";
			echo"<td>$colon[2]</td>";
			echo"<td>$colon[3]</td>";
			echo"<td>$colon[4]</td>";
			echo"<td>$colon[5]</td>";
			echo"<td>$colon[6]</td>";
			echo"<td>$colon[7]</td>";
			echo"<td>$colon[8]</td>"; 
			echo"<td>$colon[9]</td>"; 
			echo"<td>$colon[10]</td>";
			echo" </tr>";
		}
		echo"</table>";
	}
	else{
		echo" pas ok".mysql_error();
	}
}
?>