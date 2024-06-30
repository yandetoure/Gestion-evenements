<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un événement</title>
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
                <h1>Ajouter un événement</h1>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>

                    <div class="mb-3">
                        <label for="lieu" class="form-label">Lieu</label>
                        <textarea class="form-control" id="lieu" name="lieu" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="date_evenement" class="form-label">Date de l'événement</label>
                        <input type="date" class="form-control" id="date_evenement" name="date_evenement">
                    </div>

                    <div class="mb-3">
                        <label for="heure_debut" class="form-label">Heure de début</label>
                        <input type="time" class="form-control" id="heure_debut" name="heure_debut">
                    </div>

                    <div class="mb-3">
                        <label for="heure_fin" class="form-label">Heure de fin</label>
                        <input type="time" class="form-control" id="heure_fin" name="heure_fin">
                    </div>

                    <div class="mb-3">
                        <label for="date_cloture_inscription" class="form-label">Date de clôture des inscriptions</label>
                        <input type="date" class="form-control" id="date_cloture_inscription" name="date_cloture_inscription">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" class="form-control" id="image" name="image" accept="image/*" required>
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

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Ajouter un événement</button>
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
