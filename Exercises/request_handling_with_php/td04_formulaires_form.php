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
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="exercice3">Exercice 3</a></li>

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
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Introduction à PHP</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title" style="font-weight: 700">Formulaire de login et méthode GET</h5>

          <div class='mx-lg-3'> 

          <form method="GET" action="lo07_analyse_formulaire1.php">
            <div class="form-group">
                <label for="InputEmail1" style="font-weight: 500">login</label>
                <input type="username" class="form-control" id="InputEmail1" name="fname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" style="font-weight: 500">Entrez votre mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <button type="submit" class="btn btn-success" style="margin-top: 10px">Submit</button>
            <button type="submit" class="btn btn-danger" style="margin-left: 5px; margin-top: 10px">Reset</button>
          </form>

          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Formulaire de login et méthode POST</h6>
            <div class='mx-lg-3'> 

            <form method="POST" action="td04_e2_action_post.php">
            <div class="form-group">
                <label for="InputEmail1" style="font-weight: 500">login</label>
                <input type="username" class="form-control" id="InputEmail1" name="fname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" style="font-weight: 500">Entrez votre mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
            </div>
            <button type="submit" class="btn btn-success" style="margin-top: 10px">Submit</button>
            <button type="submit" class="btn btn-danger" style="margin-left: 5px; margin-top: 10px">Reset</button>
          </form>       

            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : Sondage UT</h6>
            <div class='mx-lg-3'> 

            <form method="POST" action="lo07_analyse_formulaire1.php">
            <div class="form-group">
                <label for="InputEmail1" style="font-weight: 600">Nom</label>
                <input type="username" required class="form-control" id="InputEmail1" name="nom">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" style="font-weight: 600">Prénom</label>
                <input type="password" required class="form-control" id="exampleInputPassword1" name="prenom">
            </div>
            <p style="margin-top: 20px; font-weight: 600">Sélectionnez votre genre</p>
            <div class="form-check form-check-inline">
                <input class="form-check-input" required type="radio" name="genre" id="inlineRadio1" value="Homme">
                <label class="form-check-label" for="inlineRadio1">Homme</label>
                </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" required type="radio" name="genre" id="inlineRadio2" value="Femme">
                <label class="form-check-label" for="inlineRadio2">Femme</label>
            </div>
            <p style="margin-top: 20px; font-weight: 600">Sélectionnez votre status</p>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" value="Etudiant" class="btn-check" name="status" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">Etudiant</label>

                <input type="radio" value="Doctorant" class="btn-check" name="status" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Doctorant</label>

                <input type="radio" value="Administratif" class="btn-check" name="status" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">Administratif</label>

                <input type="radio" value="Enseignant" class="btn-check" name="status" id="btnradio4" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio4">Enseignant</label>
            </div>
            <div class="form-group " style="margin-top: 20px">
                <label for="exampleFormControlSelect" style="font-weight: 600">Sélectionnez un véhicule</label>
                <select name="car" required class="form-select" multiple aria-label="multiple select example" style="margin-top: 5px; height: 230px; overflow-y:hidden" id="exampleFormControlSelect">
                <option disabled class="text-dark" style="font-weight: 700">Renault</option>
                <option style="padding-left: 20px">Twingo</option>
                <option style="padding-left: 20px">Clio</option>
                <option style="padding-left: 20px">Captur</option>
                <option style="padding-left: 20px">Espace</option>
                <option disabled class="text-dark" style="font-weight: 700">Tesla</option>
                <option style="padding-left: 20px">Modèle S</option>
                <option style="padding-left: 20px">Modèle 3</option>
                <option style="padding-left: 20px">Modèle X</option>
                <option style="padding-left: 20px">Modèle Y</option>
                </select>
            </div>
            <div class="form-group" style="margin-top: 20px">
                <label for="exampleFormControlSelect2" style="font-weight: 600">Sélectionnez vos UT (plusieurs choix)</label>
                <select required name="ut[]" class="form-select" style="margin-top: 5px; overflow-y:hidden; height: 150px" multiple aria-label="multiple select example" id="exampleFormControlSelect2">
                <option>UTBM</option>
                <option>UTC</option>
                <option>UTT</option>
                <option>UTSEUS</option>
                <option>UTM (Martinique)</option>
                <option>UTG (Guyane)</option>
                </select>
            </div>
            <div class="form-check" style="margin-top: 10px">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="news">
                <label class="form-check-label" for="exampleCheck1" style="font-weight: 600">Je souhaite recevoir la news letter</label>
            </div>
            <div class="form-check" >
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rembourse">
                <label class="form-check-label" for="exampleCheck1" style="font-weight: 600">Je souhaite recevoir le remboursement du déplacement</label>
            </div>
            <button type="submit" class="btn btn-success" style="margin-top: 10px">Submit</button>
            <button type="submit" class="btn btn-danger" style="margin-left: 5px; margin-top: 10px">Reset</button>
           </form> 

            </div>      
        </div>
      </div>

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Hanna rédigée le 13/03/23</small>
    <p/><hr/><p/>
  </body>
</html>