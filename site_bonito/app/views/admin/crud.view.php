<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    <title>Administrativo</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../../public/css/admin.css">

</head>
<body>

<div class="container">
    
    <table class="table table-dark table-responsive{-sm|-md|-lg|-xl} tabelinha">
      <?php require 'modal/modal-create.php' ?>
      <button type="button" id="add" class="btn btn-secondary btn-lg btn-block botao" data-toggle="modal" data-target="#modal-create">Adicionar usuário</button>
      <thead>
         <tr>
            <th scope="col" id="td">Nº</th>
            <th scope="col" id="td">Nome</th>
            <th scope="col">Ações</th>
        </tr>
      </thead>
        <tbody>
      <?php foreach ($usuarios as $function) : ?>
      <?php require 'modal/modal-view.php' ?>
      <?php require 'modal/modal-delete.php' ?>
      <?php require 'modal/modal-edit.php' ?>

          <tr>
            <th scope="row" id="td"><?=$function->id?></th>
            <td id="td"><?=$function->nome?></td>
            <td id="tdbutton"><button class="btn btn-outline-primary  botaozinho" data-toggle="modal" data-target="#modal-view-<?=$function->id?>" id="usubutton" type="submit"> <i class="far fa-eye iconebotao"></i></button><button class="btn btn-outline-success  botaozinho" data-toggle="modal" data-target="#modal-edit-<?=$function->id?>" id="editbutton"><i class="far fa-edit iconebotao"></i></button><button type="button" id="excluibutton" class="btn btn-outline-danger  botaozinho" data-toggle="modal" data-target="#modal-delete-<?=$function->id?>"><i class="far fa-trash-alt iconebotao"></i></button></td>
          </tr>
      <?php endforeach; ?>
    </table>
</div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>