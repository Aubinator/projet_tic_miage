

<script type="text/javascript" >
var valider=function () { 
	$('#result').empty();
	$('#result').load('Fichiers/update.php',{
		codeProjet : $('input[name="codeProjet"]').val(), 
		cat : "projet",
		nomProjet: $('input[name="nomProjet"]').val(),
		dateEnregistrement : $('input[name="dateEnregistrement"]').val(),
		dateDebut : $('input[name="dateDebut"]').val(),
		dateFin : $('input[name="dateFin"]').val(),
		matriculeChef :  $('select[name="matriculeChef"]').val(),
		montantPrevu :  $('input[name="montantPrevu"]').val(),
		codeEntreprise : $('select[name="codeEntreprise"]').val(),
		 });
	return false; 
};
</script>
<?php
$id = $_POST['id'];
	require('connection.php');
	$req="select * from projet where codeProjet = '$id';";
	$result=mysql_query($req);
	$colon= mysql_fetch_array($result);

?>
<div><center>
    
		<form method="post" action="" onsubmit="javascript:return valider();">
			<table  align="center">
				
				
				<tr>
					<td>Code du Projet</td>
					<td> <input type = "text" name="codeProjet" readonly value= <?php echo "$colon[0]"; ?> ></td>
				</tr>
				<tr>
					<td>Nom du Projet</td>
					<td> <input type = "text" name="nomProjet" value= <?php echo "$colon[1]"; ?> ></td>
				</tr>
                <tr>
					<td>date Enregistrement</td>
					<td> <input  type="text" name="dateEnregistrement" readonly value= <?php echo "$colon[2]"; ?> ></td>
				</tr>
				<td>dateDebut</td>
					<td> <input   type = "date"  name="dateDebut" value= <?php echo "$colon[3]"; ?> ></td>
				</tr>
                <td>dateFin</td>
					<td> <input type="date"  name="dateFin" value= <?php echo "$colon[4]"; ?> ></td>
				</tr>
                <td>montant Pr&eacute;vu</td>
					<td> <input   type="number" name="montantPrevu" value= <?php echo "$colon[5]"; ?> ></td>
				</tr>
                <tr>
                <td> matricule Chef</td>
					<td>
                    <?php
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
					<td><input type="submit" class="btn" >  </input> 
  						<input type="reset" class="btn">  </input> </td>
				</tr>
			</table>	
		</form>
        
       <div id="result"></div>
	
	</center>
</div>
