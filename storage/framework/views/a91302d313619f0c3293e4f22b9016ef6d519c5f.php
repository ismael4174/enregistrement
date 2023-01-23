<!DOCTYPE html>
<head>

    <!-- Css -->
    <link href="<?php echo e(asset('asset/style.css')); ?>" rel="stylesheet">
</head>
<body>
<h1>Enregistrement</h1>

  <form class="form" method="post" enctype="multipart/form-data">
    
  <div class="form-group">
    <label>Nom participant <input id="name" type="text" placeholder="Entrer votre nom ..." required></label>
  </div>

  <div class="form-group">
    <label>Prénom participant <input id="last_name" type="text" placeholder="Entrer vos prénoms ..." required></label>
  </div>  

  <div class="form-group">
    <label>Numéro de téléphone <input id="number" type="text" placeholder="225 ..." min="10" max="13"></label>
   </div>   
   
   <div class="form-group">
    <label>Adresse mail <input id="mail" type="email" placeholder="adresse@xxx.com"></label>
   </div>

<div class="form-group">
    <button id="submit" >Submit</button>
</div>
  </form>
</div>
</body>
<footer>

</footer>
<?php /**PATH C:\wamp64\www\enregistrement\resources\views/welcome.blade.php ENDPATH**/ ?>