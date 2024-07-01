<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD IN LARAVEL 11</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
  <div class="row">
    <div class="col">
      <hr>  
      @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <div class="row">
        @foreach($evenements as $evenement)
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{ $evenement->image }}" class="card-img-top" alt="{{ $evenement->nom }}" height="300">
              <div class="card-body">
                <h5 class="card-title">{{ $evenement->nom }}</h5>
                {{-- <p class="card-text">{{ $evenement->description }}</p> --}}
                <p class="card-text"><small class="text-muted">Date de clôture des inscriptions: {{ $evenement->date_cloture_inscription }}</small></p>
                <p class="card-text"><strong>Catégorie:</strong> {{ $evenement->categorie }}</p>
                <a href="{{ route('events.edit', $evenement->id) }}" class="btn btn-info">Modifier</a>
                <form action="{{ route('events.destroy', $evenement->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                <a href="{{ route('events.show', $evenement->id) }}" class="btn btn-primary">Voir les détails</a>
              </div>
              <br>
              <br>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
