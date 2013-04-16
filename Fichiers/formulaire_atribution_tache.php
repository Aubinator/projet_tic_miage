
   
 
		<form method="post" action="">
			<table border="1" align="center">
				
				<tr>
					<td>choix du developpeur</td>
                    <td>
                    <?php
					require("connection.php");
					$req= "select * from developpeur";
					
					?>
                   
                     <select name="matricule" size="1">
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
					<td>choisir tache du projet</td>
                    <td>
                     <?php
					require("connection.php");
					$req= "select * from tache";
					
					?>
                
                     <select name="numtache" size="1">
                        <?php
								
								
								/*$resa=mysql_query($reqa);*/
								$res=mysql_query($req);
									while($ligne=mysql_fetch_array($res))
										{
											
											echo "<option  value=$ligne[0]>$ligne[1] $ligne[4]</option>";
											
										}
							
						?>
  						</select> </td>
				</tr>
				<tr><td>Attribution</td>
					<td><input type="submit" value="Valider"/>
					<input type="reset" value="Annuler"/> </td>
				</tr>
			</table>	
		</form>
         <?php

if (!empty($_POST['matricule']) && !empty($_POST['numtache']))
{
	require('connection.php');
$matricule=$_POST['matricule'];
$numtache=$_POST['numtache'];
$insert="insert into `participation_tache`(`matricule`,`numtache`) values ('$matricule','$numtache');";

$exec=mysql_query($insert);
	/*entrer ici le code*/
	if($exec)
	{
		echo "attribution r&eacute;ussie";
	}
	
	else{
		echo" pas ok".mysql_error();
	}
}
?>