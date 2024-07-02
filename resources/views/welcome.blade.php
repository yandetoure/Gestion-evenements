<!DOCTYPE html>
<<<<<<< HEAD
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            margin: 0px;

        }
        .carousel-item {
            height: 70vh; /* Prendre toute la hauteur de la fenêtre */
        }
        .carousel-item img {
            height: 100%; /* Prendre toute la hauteur de la div parente */
        
        }
        h3{
                color: #1E2172;
                text-align: center;
                font-size: 26px;
                font-weight: 700;
                margin-top: 50px;
                margin-bottom: 60px;
            }
        .apropos{
            display: flex;
            margin-left: 220px;
            margin-right: 100px;

            .text{
            text-align: center;
            width: 500px;
            height: 500px;
            margin-top: 10px;
            font-size: 20px;
            font-weight: 600;
            margin-left: 120px;
            margin-top: 50px;
        }
        }
        .images{
          display: flex;
        }
        .image1{
           width: 240px;
           height: 400px;
           margin: 5px;
           margin-top: 60px;
           border-radius: 10px;
        }
        .image2{
           width: 240px;
           height: 460px;
           margin: 5px;
           border-radius: 10px;
        }
        .image3{
           width: 240px;
           height: 380px;
           margin: 5px;
           margin-top: 60px;
           border-radius: 10px;
        }

    </style>
</head>
<body>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.index') }}">Tous les événements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.create') }}">Créer un événement</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="btn btn-link">Déconnexion</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/1.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/2.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/4.png') }}" class="d-block w-100" alt="Slide 4">
            </div>
        </div>
    </div>

    <section>
    <h3>A propos de nous</h3>
      <div class="apropos">
        <div class="images">
          <div ><img src="{{ asset('images/Rectangle 65.png') }}" alt=""class="image1"> </div>

          <div ><img src="{{ asset('images/Rectangle 66.png') }}" alt=""class="image2">  </div>

          <div><img src="{{ asset('images/Rectangle 67.png') }}" alt=""class="image3">  </div>
        </div>
        <div class="text">
          <p>Notre société vise à rassembler tout ce dont vous avez besoin en un seul endroit.</p>
          <p>Vous souhaitez vous convertir à un nouveau métier ? Vous voulez vous détendre ? Trouver des événements qui vous intéressent, qui sucitent votre curiosité ? Vous êtes au bon endroit.</p>
          <p>Notre société vise à rassembler tout ce dont vous avez besoin en un seul endroit.</p>
          <p>Vous souhaitez vous convertir à un nouveau métier ? Vous voulez vous détendre ? Trouver des événements qui vous intéressent, qui sucitent votre curiosité ? Vous êtes au bon endroit.</p>
        </div>
      </div>
    </section>

    <section>
    <h3>Événements à venir</h3>
        <div class="evenements">
            <div class="card">
                
            </div>
        </div>
    </section>

    <section>
    <h3>Nos Offres</h3>
        <div class="offres">


        <div class="images">
            <div class="images1">

            </div>

            <div class="images2">

            </div>

            <div class="images3">

            </div>

            <div class="text-offres">
                <ul>
                    <li>Découvrez nos offres d'emploi et de stage</li>
                    <li>Recevez des candidatures à votre école</li>
                    <li>Trouvez des formations gratuites et payantes</li>
                    <li>Découvrez nos offres d'emploi et de stage</li>
                </ul>
            </div>
            </div>
        </div>
    </section>






















    <script>
        // Optionnel : Pour s'assurer que le carrousel démarre automatiquement au chargement de la page
        $(document).ready(function(){
            $('#carouselExampleControls').carousel({
                interval: 3000
            });
        });
    </script>
</body>
</html>
