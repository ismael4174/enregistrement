<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enregistrement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Css -->
    <link href="{{asset('asset/style.css')}}" rel="stylesheet">
</head>
<body>
<h1>Enregistrement</h1>
@if(Session::has('message'))
<div class="alert alert-success">
{{Session::get('message')}}
</div>
@endif
@if(Session::has('messages'))
<div class="alert alert-danger">
{{Session::get('messages')}}
</div>
@endif
  <form class="form" method="post" enctype="multipart/form-data">
    @csrf
                      
  <div class="form-group">
    <label>Nom participant <input id="name" name="nom_participant" type="text" placeholder="Entrer votre nom ..." required></label>
  </div>

  <div class="form-group">
    <label>Prénom participant <input id="last_name"name="prenom_participant" type="text" placeholder="Entrer vos prénoms ..." required></label>
  </div>  

  <div class="form-group">
    <label>Numéro de téléphone <input id="number" name="numero_participant" type="text" placeholder="225 ..." min="10" max="13"></label>
   </div>   
   
   <div class="form-group">
    <label>Adresse mail <input id="mail" name="mail_participant" type="email" placeholder="adresse@xxx.com"></label>
   </div>

<div class="form-group">
    <button id="submit" type="submit" >S'enregistrer</button>
</div>
<button type="button" class="btn btn-primary" style="text-align: center;"><a href="{{url('/liste')}}" target="_blank" style="color: antiquewhite">Voir la liste d'enregistrement</a></button>
  </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
<footer>

</footer>
</html>
