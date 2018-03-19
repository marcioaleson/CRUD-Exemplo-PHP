<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <nav class="nav nav-pills flex-column flex-sm-row">
      <a class="flex-sm-fill text-sm-center nav-link active" href="<?=base_url('home')?>">Home</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="<?=base_url('cadastro')?>">Cadastrar</a>
    </nav>
       <ul class="list-group">
          <?php foreach ($bebidas as $item): ?>
              <li class="list-group-item"><?=$item->ID." ".$item->NOME_DA_BEBIDA. " ". $item->PRECO." ".$item->MARCA?> <a href="<?=base_url('editar/selecionar_bebidas/'.$item->ID)?>" type="button" name="button" class="btn btn-primary">Editar</a> <a href="<?=base_url('deletar/selecionar_bebidas/'.$item->ID)?>" type="button" name="button" class="btn btn-primary">Deletar</a> </li>
          <?php endforeach  ?>
      </ul>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
