<?php
echo "<center><h1> Liste des Entreprise </h1></center>";
require("connection.php");

	$req="select * from entreprise;";
		$result=mysql_query($req);
		echo"<table class=\"table table-hover table-striped\"";
		echo "<tr><th>codeEntreprise</th> <th>Nom</th> <th>raisonSocial</th><th>Adresse</th><th>email</th><th>siteweb</th><th>telephone</th><th>fax</th><th>numContact</th></tr>";
		$i = 0;
	while($colon= mysql_fetch_array($result))
		{
		if ($i % 2 == 0)
					echo"<tr class=\"warning\">";
				
			else
					echo"<tr>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[0]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[1]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[2]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[3]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[4]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[5]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[6]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[7]</a></td>";
			echo"<td><a href =\"$colon[0]\" class=\"modifEntreprise\">$colon[8]</a></td>"; 
			echo" </tr>";
			$i++;
		}
		echo"</table>";

?>

 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modifier Entreprise</h3>
  </div>
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>