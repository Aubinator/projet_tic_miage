

<html>

	<head>
	</head>

	<body>
   
 
		<form method="post" action="">
			<table border="1" align="center">
				
				<tr>
					<td>choix du projet</td>
                    <td>
                    <?php
					require("connection.php");
					$req= "select * from projet";
					
					?>
                   
                     <select name="codeProjet" size="1">
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
					<td>choisir le logiciel</td>
                    <td>
                     <?php
					require("connection.php");
					$req= "select * from logiciel";
					
					?>
                
                     <select name="numLogiciel" size="1">
                        <?php
								
								
								/*$resa=mysql_query($reqa);*/
								$res=mysql_query($req);
									while($ligne=mysql_fetch_array($res))
										{
											
											echo "<option  value=$ligne[0]>$ligne[1]</option>";
											
										}
							
						?>
  						</select> </td>
				</tr>
				<tr><td>D&eacute;finir</td>
					<td><input type="submit" value="Valider"/>
					<input type="reset" value="Annuler"/> </td>
				</tr>
			</table>	
		</form>
         <?php

if (!empty($_POST['codeProjet']) && !empty($_POST['numLogiciel']))
{
	require('connection.php');
$codeProjet=$_POST['codeProjet'];
$numLogiciel=$_POST['numLogiciel'];
$insert="insert into `projetlogiciel`(`codeProjet`,`numLogiciel`) values ('$codeProjet','$numLogiciel');";

$exec=mysql_query($insert);
	/*entrer ici le code*/
	if($exec)
	{
		echo "Logiciel d&eacute;fini";
	}
	
	else{
		echo" pas ok".mysql_error();
	}
}
?>
		</body>
</html>