

<script type="text/javascript" >
var valider=function () { 
	$('#result').empty();
	$('#result').load('Fichiers/update.php',{
		matricule : $('input[name="matricule"]').val(), 
		cat : "dev",
		nom: $('input[name="nom"]').val(),
		prenom : $('input[name="prenom"]').val(),
		adresse : $('input[name="adresse"]').val(),
		nationalite : $('input[name="nationalite"]').val(),
		datenaissance :  $('select[name="datenaissance"]').val(),
		specialite :  $('input[name="specialite"]').val(),
		dernier_diplome : $('select[name="dernier_diplome"]').val(),
		date_embauche : $('select[name="date_embauche"]').val(),
		 });
	return false; 
};
</script>
<?php
$id = $_POST['id'];
	require('connection.php');
	$req="select * from developpeur where matricule = '$id';";
	$result=mysql_query($req);
	$colon= mysql_fetch_array($result);

?>
<div><center>
    
		<form method="post" action="" onsubmit="javascript:return valider();">
			<table  align="center">
				
				
				<tr>
					<td>Matricule</td>
					<td> <input type = "text" name="matricule" readonly value= <?php echo "$colon[0]"; ?> ></td>
				</tr>
				<tr>
					<td>Nom </td>
					<td> <input type = "text" name="nom" value= <?php echo "$colon[1]"; ?> ></td>
				</tr>
                <tr>
					<td>Prenom</td>
					<td> <input  type="text" name="prenom" value= <?php echo "$colon[2]"; ?> ></td>
				</tr>
                <tr>
				<td>Adresse</td>
					<td> <input   type = "text"  name="adresse" value= <?php echo "$colon[3]"; ?> ></td>
				</tr>
                <tr>
                <td>Nationalite</td>
					<td> <input type="text"  name="nationalite" value= <?php echo "$colon[4]"; ?> ></td>
				</tr>
                <tr>
                <td>Date de naissance</td>
					<td> <input   type="date" name="datenaissance" value= <?php echo "$colon[5]"; ?> ></td>
				</tr>

			<tr>
                <td>Sp&eacute;cialit&eacute;</td>
					<td> <input   type="text" name="specialite" value= <?php echo "$colon[6]"; ?> ></td>
			</tr>
            <tr>
                <td>Dernier diplome</td>
					<td> <input   type="text" name="dernier_diplome" value= <?php echo "$colon[7]"; ?> ></td>
			</tr>

                <tr>
                <td>Date d'embauche</td>
					<td> <input   type="date" name="date_embauche" value= <?php echo "$colon[8]"; ?> ></td>
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
