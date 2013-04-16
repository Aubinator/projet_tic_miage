<?php
echo "<center><h1> Liste des Developpeurs </h1></center>";
require("connection.php");
	$req="select * from developpeur;";
		$result=mysql_query($req);
		echo"<table class=\" table table-hover table-striped\">";
		echo "<tr><th>Matricule</th> <th>Nom</th> <th>Prenom</th><th>Adresse</th><th>Nationalite</th><th>Date de naissance</th><th>specialite</th><th>dernier diplome</th><th>date d'embauche</th></tr>";
		$i = 0;
	while($colon= mysql_fetch_array($result))
		{
		if ($i % 2 == 0)
					echo"<tr class=\"warning\">";
				
			else
					echo"<tr>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[0]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[1]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[2]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[3]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[4]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[5]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[6]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[7]</td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifDev\">$colon[8]</td>"; 
			echo" </tr>";
			$i++;
		}
		echo"</table>";

?>

 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modifier Developpeur</h3>
  </div>
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>