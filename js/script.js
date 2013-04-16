
$(document).ready(function() {

	$('.dropdown-toggle').dropdown();

	$('.modifProjet').click(function(){
		var t = $(this).attr("href")
		$('.modal-body').load('Fichiers/modif_projet.php',{id : t });
        $('#myModal').modal('show');
        return false;
	});

	$('.modifEntreprise').click(function(){
		var t = $(this).attr("href")
		$('.modal-body').load('Fichiers/modif_Entreprise.php',{id : t });
        $('#myModal').modal('show');
    	return false;
	});
	$('.modifDev').click(function(){
		var t = $(this).attr("href")
		$('.modal-body').load('Fichiers/modifDev.php',{id : t });
        $('#myModal').modal('show');
    	return false;
	});

	


});
