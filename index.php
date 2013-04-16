<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet" media="screen">

<title>Base de Donnees</title>
</head>

<body>
<div  class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <a class="brand" href="#">Project Manager</a>
    <ul class="nav">
      <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Ajouter</a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="index.php?page=formulaire_ajout_entreprise" tabindex="-1">Entreprise</a></li>
                <li><a href="index.php?page=formulaire_ajout_projet" tabindex="-1">Projet</a></li>
                <li><a href="index.php?page=formulaire_ajout_developpeur" tabindex="-1">Developpeur</a></li>
               
     </ul>
        
      </li>
      <li><a href="index.php?page=">Planifier Tache</a></li>
      <li><a href="index.php?page=">Gerer</a></li>
      
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Liste</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a tabindex="-1" href="index.php?page=list_projets">Projets</a></li>
       <li><a tabindex="-1" href="index.php?page=list_developpeur">Developpeurs</a></li>
        <li><a tabindex="-1" href="index.php?page=list_entreprise">Entreprise</a></li>

     </ul>
      </li>

    </ul>
    <ul class="nav secondary-nav pull-right">
      <li> <form method="post" action="" class="navbar-search">
         <input type="text" class="search-query" placeholder="Tapez Id à modifier" name="nom_champ" required>

      
    </li>
    <li>
      <select name="table" class="lol">
        <option value="Developpeur">Developpeur </option>
        <option value="entreprise">Entreprise </option>
        <option value="projet">Projet </option>
      </select>
    </li>
    <li>
      <input type="submit" class="btn">  </input> 
      <input type="reset" class="btn">  </input> 
    </li>
    </ul>
</form>
  </div>

</div>	
<div id="container">

<div class="row "  id="contenu">
  <div class="offset2 span12 "  ><center>
    <?php
    
        if(!empty($_GET['page'] ))
          {
          $page = $_GET['page'];
             if(file_exists('Fichiers/'.$page.'.php'))
             {
                include('Fichiers/'.$page.'.php');
             }
             else
             {
                include ("default.php");
             }
          }
          else
          {
                include ("default.php");
          }
      ?>
  
</center>
</div>
<script src="js/jquery.js"> </script>
<script src="js/bootstrap.min.js" /> </script>



<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
<script src="js/script.js"> </script>
</body>
</html>
