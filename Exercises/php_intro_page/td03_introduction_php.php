<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD03</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>
  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LO07 TD03</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
              <li class="nav-item"><a class="nav-link" href="">Exercice 4</a></li>
              <li class="nav-item"><a class="nav-link" href="">Exercice 5</a></li>
              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.php.net/docs.php" target="_blank">Documentation officiel</a></li>
                  <li><a class="dropdown-item" href="https://devdocs.io/php/" target="_blank">Dev docs</a></li>
                  <li><a class="dropdown-item" href="https://www.phpdoc.org/" target="_blank">phpDocumentor</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Introduction à PHP</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div id='exercice1' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : réparation et validation</h5>

          <div class='mx-lg-3'> 

            <?php
                echo("Bonjour à tous");
            ?>

          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div id='exercice2' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : variables PHP</h6>
            <div class='mx-lg-3'> 
                <?php
                    $nom = "Nassar";
                    $prenom = "Hanna";
                    $age = 23;
                    $ingenieur = TRUE;
                    echo '
                        <ul class="list-group">
                            <li class="list-group-item bg-primary">Nom = '.$nom.'</li>
                            <li class="list-group-item">Prénom = '.$prenom.'</li>
                            <li class="list-group-item" aria-current="true">Age = '.$age.'</li>
                            <li class="list-group-item bg-success">Ingénieur = '.$ingenieur.'</li>
                        </ul>';
                 
                ?>
            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div id='exercice3' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : tableaux PHP</h6>
            <div class='mx-lg-3'> 
                <h6 class="text-danger">print_r</h6>
                <pre>
                    <?php
                    $tabCapitales = array("Vienne","Sofia","Nicosie","Copenhague","Helsinki",
                    "Vilnius","Bratislava","Ljubljana","Riga","Paris");
                    $tabCapitales[] = "Varsovie";
                    unset($tabCapitales[4]);
                    print_r($tabCapitales);
                    ?>
                </pre>
                <hr/>
                <h6 class="text-danger">foreach</h6>
                <pre>
                    <?php
                        echo '<ul class="list-group">';
                    	foreach ($tabCapitales as $cap){
                            echo '<li class="list-group-item">'.$cap.'</li>';
                        }
                        echo '</ul>';
                    ?>
                </pre>
                <hr/>
                <h6 class="text-danger">implode()</h6>
                <?php
                    echo '<ul class="list-group">';
                    echo '<li class="list-group-item bg-success text-light">'.implode("; ", $tabCapitales).'</li>';
                    echo '</ul>';
                ?>
                <hr/>
                <h6 class="text-danger">Accès aux données</h6>
                <?php
                    sort($tabCapitales);
                    echo '<ul class="list-group">';
                    echo '<li class="list-group-item bg-success text-light">Nombres d\'éléments ='.count($tabCapitales).'</li>';
                    echo '<li class="list-group-item bg-danger text-light">Tableau trié: '.implode("; ",$tabCapitales).'</li>';
                    echo '</ul>';
                ?>
            </div>      
        </div>
      </div>

    

    <!-- ================================================================================================================ -->
      <!-- ===== Exercice 4 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div id='exercice4' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 4</h6>
            <div class='mx-lg-3'> 
                <pre>
                    <?php
                        $hashCapitales = array(
                            "Bulgarie" => "Sofia",
                            "Chypre" => "Nicosie",
                            "Estonie" => "Tallinn",
                            "Lettonie" => "Riga",
                            "Lituanie" => "Vilnius",
                            "Roumanie" => "Bucarest"
                        );
                        // estonie ?
                        echo '<h6 class="text-danger">Estonie ?</h6>';
                        echo '<ul class="list-group">';
                        echo '<li class="list-group-item bg-success text-light">'.$hashCapitales['Estonie'].'</li>';
                        echo '</ul>';
                        $hashCapitales['Estonie'] = 'Narva';
                        echo '<hr/>';
                        // bilan d'un ajout
                        echo '<h6 class="text-danger">Bilan d\'un ajout</h6>';
                        echo '<ul class="list-group">';
                        echo '<li class="list-group-item bg-success text-light">'.$hashCapitales['Estonie'].'</li>';
                        echo '</ul><hr/>';
                        // print_r
                        echo '<h6 class="text-danger">print_r</h6>';
                        print_r($hashCapitales);
                        echo '<hr/>';
                        // foreach
                        echo '<h6 class="text-danger">foreach</h6>';
                        echo '<ul class="list-group">';
                        foreach ($hashCapitales as $country => $capital){
                            echo '<li class="list-group-item bg-success text-light">'.$country.' ==> '.$capital.'</li>';
                        }
                        echo '</ul>';
                        echo '<hr/>';
                        // Accès aux données
                        echo '<h6 class="text-danger">Accès aux données</h6>';
                        function get_key($i, $hash_table){
                            $array_of_keys = array_keys($hash_table);
                            return $array_of_keys[$i];
                        }
                        function get_value($i, $hash_table){
                            $array_of_keys = array_keys($hash_table);
                            return $hash_table[$array_of_keys[$i]];
                        }
                        echo '<div class="p-3 mb-2 bg-light">';
                        // Liste des clés
                        echo '<p>Liste des clés = </p>';
                        $i = 0;
                        echo "Array\r\n(\r\n";
                        for ($i; $i < 6; $i++){
                            echo "\t[".$i.'] => '.get_key($i,$hashCapitales)."\r\n";
                        }
                        echo ")";
                        // Liste des valeurs
                        echo '<p>Liste des valeurs = </p>';
                        $i = 0;
                        echo "Array\r\n(\r\n";
                        for ($i; $i < 6; $i++){
                            echo "\t[".$i.'] => '.get_value($i,$hashCapitales)."\r\n";
                        }
                        echo ")";
                        echo '</div>'
                    ?>
                </pre>
            </div>
        </div>
      </div>
    
      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 5 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div id='exercice5' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 5</h6>
            <div class='mx-lg-3'> 
                <?php
                    function badge($label, $compteur){
                        $button = '<button type="button" class="btn btn-primary">'.$label.' <span class="badge text-danger font-weight-bold">'.$compteur."</span></button>\t";
                        return $button;
                    }
                    echo '<p class="text-danger">Accès aux données </p>';
                    foreach($tabCapitales as $capital){
                        echo badge($capital, strlen($capital));
                    }
                 
                ?>
            </div>
        </div>
      </div>
    </div>                
    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Hanna rédigée le 12/03/23</small>
    <p/><hr/><p/>
  </body>
</html>