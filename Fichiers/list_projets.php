
<?php
require("connection.php");
echo "<center><h1> Liste des Projets </h1></center>";
/*insert into `projet`(`codeProjet`,`nomProjet`,`dateEnregistrement`,`dateDebut`,`dateFin`,`montantPrevu`,`matriculeChef`,`codeEntreprise`)*/
	$req="select * from projet;";
		$result=mysql_query($req);
		echo"<table class=\"table table-hover table-striped\">";
		echo "<tr><th>CodeProjet</th> <th>NomProjet</th><th>DateEnregistrement</th><th>DateDebut</th><th>DateFin</th><th>MontantPrevu</th><th>MatriculeChef</th><th>CodeEntreprise</th></tr>";
		$i = 0;
	while($colon= mysql_fetch_array($result))
		{
			if ($i % 2 == 0)
					echo"<tr class=\"warning\">";
				
			else
					echo"<tr>";
				
			
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[0]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[1]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[2]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[3]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[4]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[5]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[6]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifProjet\">$colon[7]</a></td>";
			echo" </tr>";
			$i++;	

		}
		echo"</table>";

?>

 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modifier Projet</h3>
  </div>
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>