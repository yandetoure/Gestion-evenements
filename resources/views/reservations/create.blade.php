<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Réservation pour {{ $evenement->nom }}</h1>
        <p class="text-center">Date de l'événement : {{ $evenement->date_evenement }}</p>
        <p class="text-center">Lieu : {{ $evenement->lieu }}</p>
        <p class="text-center">Nombre de places restantes : {{ $evenement->nombre_places }}</p>

        <form action="{{ route('reservations.store', $evenement->id) }}" method="POST" class="mt-4">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email}}" required>
                </div>
            </div>
            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="phone">Numéro de téléphone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="7X XXX XX XX">
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Adresse</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Dakar, dieuppeul 1, 2257/C">
                </div> -->
            </div>
            <button type="submit" class="btn btn-primary">Confirmer réservation</button>
            <a href="{{ route('events.index') }}" class="btn btn-danger ml-2">Annuler</a>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
