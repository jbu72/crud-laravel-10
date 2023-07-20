<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">

        <div class="row">

            <div class="col s12">

                <h1>Modifier UN ETUDIANT - LARAVEL 10</h1>
                <hr>
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
                
                <form action="/update/traitement" method="POST" class="form-group">
                    @csrf

                    <input type="text" name="id" style="display:none;" value="{{ $etudiants->id }}">

                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
                    </div>

                    <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
                    </div>

                    <div class="form-group">
                        <label for="Classe">Classe</label>
                        <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button>
                    <br><br>

                    <a href="/etudiant" class="btn btn-danger"> Revenir à la liste des étudiants</a>
                </form>
            </div>
    
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>