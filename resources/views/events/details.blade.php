<!-- resources/views/bien/details.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Détails événement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .card-img-left {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-4">
    <div class="card">
      <img src="{{ $evenement->image }}" class="card-img-top" alt="{{ $evenement->image }}">
      <div class="card-body">
        <h5 class="card-title">{{ $evenement->nom }}</h5>
        <p class="card-text"><small class="text-muted">{{ $evenement->created_at}}</small></p>
        <p class="card-text">Description : {{  $evenement->description }}</p>
        <p class="card-text"><small class="text-muted">Catégorie :{{ $evenement->categorie }}</small></p>

        <p class="card-text"><small class="text-muted">Nombre de places libres : {{ $evenement->nombre_places }}</small></p>
      </div>
    </div>
    <a href="{{ route('reservations.create', $evenement->id) }}" class="btn btn-info">Réserver maintenant</a>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
