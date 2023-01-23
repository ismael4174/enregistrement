<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enregistrement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Css -->
    <link href="<?php echo e(asset('asset/style.css')); ?>" rel="stylesheet">
</head>
<body>
<h1>Liste d'Enregistrement</h1>

<table class="table caption-top table-dark form">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom participant</th>
      <th scope="col">Prénom participant</th>
      <th scope="col">Numéro participant</th>
      <th scope="col">Adresse participant</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participants): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <tr>
      <th scope="row"><?php echo e($participants->id); ?></th>
      <td><?php echo e($participants->nom_participant); ?></td>
      <td><?php echo e($participants->prenom_participant); ?></td>
      <td><?php echo e($participants->numero_participant); ?></td>
      <td><?php echo e($participants->mail_participant); ?></td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<center><button type="button" class="btn btn-primary"><a href="<?php echo e(url('/')); ?>" target="_blank" style="color: antiquewhite">Faire un enregistrement</a></button></center>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
<footer>

</footer>
</html>
<?php /**PATH C:\wamp64\www\enregistrement\resources\views/liste.blade.php ENDPATH**/ ?>