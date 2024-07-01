<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="form-container">
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

                <form action="event.update" method="POST" class="form-group" enctype="multipart/form-data"> 
                @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $evenement->nom }}">
                    </div>

                    <div class="mb-3">
                        <label for="lieu" class="form-label">Lieu</label>
                        <textarea class="form-control" id="lieu" name="lieu" rows="3">{{ $evenement->lieu }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="date_evenement" class="form-label">Date de l'événement</label>
                        <input type="date" class="form-control" id="date_evenement" name="date_evenement" value="{{ $evenement->date_evenement }}">
                    </div>

                    <div class="mb-3">
                        <label for="heure_debut" class="form-label">Heure de début</label>
                        <input type="time" class="form-control" id="heure_debut" name="heure_debut" value="{{ $evenement->heure_debut }}">
                    </div>

                    <div class="mb-3">
                        <label for="heure_fin" class="form-label">Heure de fin</label>
                        <input type="time" class="form-control" id="heure_fin" name="heure_fin" value="{{ $evenement->heure_fin }}">
                    </div>

                    <div class="mb-3">
                        <label for="date_cloture_inscription" class="form-label">Date de clôture des inscriptions</label>
                        <input type="date" class="form-control" id="date_cloture_inscription" name="date_cloture_inscription" value="{{ $evenement->date_cloture_inscription }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $evenement->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $evenement->image }}" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="statut" class="form-label">Catégorie</label>
                        <select class="form-select" id="statut" name="statut">
                            <option value="Art" {{ $evenement->statut == 'Art' ? 'selected' : '' }}>Art</option>
                            <option value="Technologie" {{ $evenement->statut == 'Technologie' ? 'selected' : '' }}>Technologie</option>
                            <option value="Sport" {{ $evenement->statut == 'Sport' ? 'selected' : '' }}>Sport</option>
                            <option value="Santé" {{ $evenement->statut == 'Santé' ? 'selected' : '' }}>Santé</option>
                            <option value="Éducation" {{ $evenement->statut == 'Éducation' ? 'selected' : '' }}>Éducation</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Mettre à jour l'événement</button>
                    </div>
                </form>

                <div class="mt-3 text-center">
                    <a href="{{ route('events.index') }}" class="btn btn-danger">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
