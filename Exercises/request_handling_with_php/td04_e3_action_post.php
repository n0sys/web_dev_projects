<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
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
          <a class="navbar-brand" href="#">NASSAR Hanna</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="???">Exercice 1</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ajouter vos sites personnels de documentation (>3)</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplac??s par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Formulaire 3 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : formulaire de sondage et m??thode POST</h5>

          <div class='mx-lg-3'> 
            <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>cl??</th>
                            <th>valeur</th>
                        </tr>
                        <tr>
                            <td>1</span></td>
                            <td>nom</td>
                            <td><?php
                            echo $_POST["nom"]
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>pr??nom</td>
                            <td>
                                <?php
                            echo $_POST["prenom"]
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sexe</td>
                            <td>
                                <?php
                            echo $_POST["genre"]
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Status</td>
                            <td>
                                <?php
                            echo $_POST["status"]
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>V??hicule</td>
                            <td>
                                <?php
                            echo $_POST["car"]
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>UT</td>
                            <td>
                                <?php
                                    echo implode(", ",$_POST["ut"])
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Letter</td>
                            <td>
                                <?php
                                    $bool_news = isset($_POST["news"]);
                                    if ($bool_news){
                                        echo 'On';
                                    } else {
                                        echo 'Off';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Remboursement</td>
                            <td>
                            <?php
                                $bool_rembourse = isset($_POST["rembourse"]);
                                if ($bool_rembourse){
                                    echo 'On';
                                } else {
                                    echo 'Off';
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
          </div>
        </div>
      </div>

    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Hanna r??dig??e le 13/03/23</small>
    <p/><hr/><p/>
  </body>
</html>