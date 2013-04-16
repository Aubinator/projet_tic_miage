

<html>

	<head>
	</head>

	<body>
   
   <!--$,$,$,$,$,$,$,$,$-->
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
				<tr><td>Recherche logiciel utilis&eacute;(s)</td>
					<td><input type="submit" value="Afficher"/>
					<input type="reset" value="Annuler"/> </td>
				</tr>
			</table>	
		</form>
        
        </form>
         <?php

if (!empty($_POST['nomProjet'])){
	/*entrer ici le code*/
	require("connection.php");
	$nomProjet=$_POST['nomProjet'];
	$req="call process_logiciels_for_projet('$nomProjet');";
		$result=mysql_query($req);
		echo"<table border =1>";
		echo "<tr><th>logiciel(s) du projet </th></tr>";
	if($result)
	{
	while($colon= mysql_fetch_array($result))
		{
		echo"<tr>";
			echo"<td>$colon[0]</td>";
			
			echo" </tr>";
		}
		echo"</table>";
	}
	else{
		echo" pas ok".mysql_error();
	}
}
?>
		</body>
</html>