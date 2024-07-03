<!-- resources/views/bien/details.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Détails événement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .card-body {
      display: flex;
      
    }
    .card-text{
      width: 550px;
      font-size: 14px;
      text-align: justify;
      font-weight: 500;
    }
    .description{
      margin-left: 80px;
    }
    .card-img-top{
      height: 300px;
      width: 500px;
    }
    .btn-reserve {
      background-color: #fff;
      color: #068632;
      border: 2px solid #068632;
      border-radius: 10px;
      padding: 10px 20px;
      cursor: pointer;
      width: 560px;
      height: 50px;
      margin-top: 30px;
      transition: background-color 0.3s ease;
    }
    .btn-reserve:hover {
      background-color: #068632;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="card">
    <p class="card-text"><small class="text-muted">Catégorie :{{ $evenement->categorie }}</small></p>
    <h5 class="card-title">{{ $evenement->nom }}</h5>

      <p class="card-place"><small class="text-muted">Nombre de places libres : {{ $evenement->nombre_places }}</small></p>
      <div class="card-body">
            <img src="{{ $evenement->image }}" class="card-img-top" alt="{{ $evenement->image }}">
        <!-- <p class="card-text"><small class="text-muted">{{ $evenement->created_at}}</small></p> -->
         <div class="description">
         <p class="card-text">Description : {{  $evenement->description }}</p>
         <a href="{{ route('reservations.create', $evenement->id) }}" class="btn btn-reserve">Réserver ma place</a>

         </div>
      </div>

    </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
