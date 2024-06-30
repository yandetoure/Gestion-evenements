<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <h1>Modifier un événement</h1>

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul>
                @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach                                                                                                                                                                                                                                                                                                               
            </ul>

            <form action="/event/update" method="POST" class="form-group" enctype="multipart/form-data"> 
                @csrf

                <input type="text" name="id" style="display: none;"  value="{{ $evenement->id }}">





    <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $evenement->nom }}">
          </div>

          <div class="mb-3">
            <label for="lieu" class="form-label">Lieu</label>
            <textarea class="form-control" id="lieu" name="lieu" rows="3" value="{{ $evenement->lieu }}"></textarea>
          </div>

          <div class="mb-3">
            <label for="date_evenement" class="form-label">Date de l'événement</label>
            <input type="date" class="form-control" id="date_evenement" name="date_evenement" rows="3" value="{{ $evenement->date_evenement }}"></input>
          </div>

          <div class="mb-3">
            <label for="heure_debut" class="form-label">Heure de début</label>
            <input type="time" class="form-control" id="heure_debut" name="heure_debut" rows="3" value="{{ $evenement->heure_debut }}"></input>
          </div>

          <div class="mb-3">
            <label for="heure_fin" class="form-label">Heure de fin</label>
            <input type="time" class="form-control" id="heure_fin" name="heure_fin" rows="3" value="{{ $evenement->heure_fin }}"></input>
          </div>
          
          <div class="mb-3">
            <label for="date_cloture_inscription" class="form-label">Date de cloture des inscriptions</label>
            <textarea class="form-control" id="date_cloture_inscription" name="date_cloture_inscription" rows="3" value="{{ $evenement->date_cloture_inscription }}"></textarea>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" value="{{ $evenement->description }}"></textarea>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" accept="image/*" required>
          </div>
        </div>

          <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie ?</label>
            <select class="form-select" id="statut" name="statut">
              <option value="Art">Art</option>
              <option value="Technologie">Technologie</option>
              <option value="Sport">Sport</option>
              <option value="Santé">Santé</option>
              <option value="Éducation">Éducation</option>
              <option value="Technologie">Technologie</option>
            </select>
          </div>


                <div class="mb-3">
                    <label for="image" class="form-label">Veuillez entrer l'URL de l'image</label>
                    <input class="form-control" type="text" id="image" name="image" value="{{ $bien->image }}">
                </div>
                <label for="statut">Le bien est-il occupé ?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statut" id="oui" value="1" {{ $bien->statut ? 'checked' : '' }}>
                    <label class="form-check-label" for="Sport">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statut" id="non" value="0" {{ !$bien->statut ? 'checked' : '' }}>
                    <label class="form-check-label" for="non">
                        Non
                    </label>
                </div>
                          
                <br><br>
                <button type="submit" class="btn btn-primary">modifier</button>
                <br><br>
                <a href="/index" class="btn btn-danger">Retour</a>
            </form>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </div>
    </div>
</div>
</body>
</html>
