
<script type="text/javascript" >
var valider=function () { 
	$('#result').empty();
	$('#result').load('Fichiers/update.php',{
		codeEntreprise : $('input[name="codeEntreprise"]').val(), 
		cat : "ent",
		nom: $('input[name="nom"]').val(),
		raisonSocial : $('input[name="raisonSocial"]').val(),
		adresse : $('input[name="adresse"]').val(),
		email : $('input[name="email"]').val(),
		siteweb :  $('input[name="siteweb"]').val(),
		telephone :  $('input[name="telephone"]').val(),
		fax : $('input[name="fax"]').val(),
		numContact : $('select[name="numContact"]').val(),
		 });
	return false; 
};
</script>
<?php
$id = $_POST['id'];
	require('connection.php');
	$req="select * from entreprise where codeEntreprise = '$id';";
	$result=mysql_query($req);
	$colon= mysql_fetch_array($result);

?>
		
		<form method="post" action="" onsubmit="javascript:return valider();">
			<table  align="center">
				
				<tr>
					<td>code Entreprise</td>
					<td> <input  type="text" size="30" name="codeEntreprise" readonly value= <?php echo "$colon[0]"; ?>></td>
				</tr>
				<tr>
					<td>nom</td>
					<td> <input type = "text" size="30" name="nom" value= <?php echo "$colon[1]"; ?>></td>
				</tr>
				<tr>
					<td>Raison social</td>
					<td> <input type = "text" size="30" name="raisonSocial" value= <?php echo "$colon[2]"; ?>></td>
				</tr>
                <tr>
					<td>Adresse</td>
					<td> <input type = "text" size="30" name="adresse" value= <?php echo "$colon[3]"; ?>></td>
				</tr>
				<td>email</td>
					<td> <input   type = "text"  size="30" name="email" value= <?php echo "$colon[4]"; ?>></td>
				</tr>
                <td>Site web</td>
					<td> <input type="text"  size="30" name="siteweb" value= <?php echo "$colon[5]"; ?> value= <?php echo "$colon[0]"; ?>></td>
				</tr>
                <td>Telephone</td>
					<td> <input   type = "text"  size="30" name="telephone" value= <?php echo "$colon[6]"; ?>></td>
				</tr>
                <td>Fax</td>
					<td> <input type = "text" size="30" name="fax" value= <?php echo "$colon[7]"; ?>></td>
				</tr>
                <td>Numero de contacte de :</td>
					<!--<td> <input type="number" size="30" name="numContact"/></td>-->
                    <td>
                    <?php
					require("connection.php");
					$req= "select * from contact";
					
					?>
                   
                     <select name="numContact" size="1">
                        <?php
    							
    							$res=mysql_query($req);
								while($ligne=mysql_fetch_array($res))
								{
									echo "<option  value=$ligne[0]>$ligne[1]</option>";
								}
						?>
  						</select> </td>
				</tr>
				<tr><td></td>
					<td><input type="submit" class="btn"> </input> 
  						<input type="reset" class="btn">  </input>  </td>
				</tr>
			</table>	
		</form>
         <?php

if (!empty($_POST['codeEntreprise']) && !empty($_POST['nom']) && !empty($_POST['raisonSocial']) && !empty($_POST['adresse']) && !empty($_POST['email']) && !empty($_POST['siteweb']) && !empty($_POST['telephone']) && !empty($_POST['fax'])  ){
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
$insert="insert into `entreprise`(`codeEntreprise`,`nom`,`raisonSociale`,`adresse`,`email`,`siteweb`,`telephone`,`fax`,`numContact`)
values('$codeEntreprise','$nom','$raisonSocial','$adresse','$email','$siteweb','$telephone','$fax','$numContact');";

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
?>

<div id="result"></div>