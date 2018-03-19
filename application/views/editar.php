<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Editar</title>
  </head>
  <body>

    <nav class="nav nav-pills flex-column flex-sm-row">
      <a class="flex-sm-fill text-sm-center nav-link" href="<?=base_url('home')?>">Home</a>
      <a class="flex-sm-fill text-sm-center nav-link" href="<?=base_url('cadastro')?>">Cadastrar</a>
    </nav>

    <form class="needs-validation" novalidate action="http://localhost/HelloWorld/editar/editar_bebidas" method="post">
      <div class="form-group">
        <div class="col-md-4 mb-3">
          <input type="hidden" class="form-control" id="validationCustom01" placeholder="Nome da bebida" name="id" required value="<?= $editar[0]->ID?>">
          <div class="valid-feedback">
            Muito Bom!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Nome da bebida</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Nome da bebida" name="nome_da_bebida" required value="<?= $editar[0]->NOME_DA_BEBIDA?>">
          <div class="valid-feedback">
            Muito Bom!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">Preço</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Preço" name="preco" required value="<?= $editar[0]->PRECO?>">
          <div class="valid-feedback">
            Muito Bom!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Marca</label>
          <input type="text" class="form-control" id="validationCustom03" placeholder="Marca" name="marca" required value="<?= $editar[0]->MARCA?>">
          <div class="valid-feedback">
            Muito Bom!
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Editar</button>
    </form>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
