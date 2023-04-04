<?php

require_once("pessoa.class.php");
$pessoa = new Pessoa();

$pessoa->setNome($_POST['nome']);
$pessoa->setTelefone($_POST['telefone']);
$pessoa->setOrigem($_POST['origem']);
$pessoa->setData($_POST['data']);
$pessoa->setObservacao($_POST['observacao']);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body  class="bg-dark-subtle">
    <div class="container text-center" >
        <div class="row" >
          <div class="col-1 "  >
            &nbsp;  
          </div>
          <div class="col bg-primary " > 
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark" id="menu">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">SISTEMA WEB</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                      <a class="nav-link" href="index2.php">Consultar</a>
                    </div>
                  </div>
                </div>
            </nav>
          </div>

          <div class="col-1" >
            &nbsp;
          </div>
        </div>
        <div class="row" >
            <div class="col-1">
                &nbsp;
            </div >
            <div class=" col bg-white p-4 container md-3 text-start" >   
            <p class="h5 col-lg-6 " style="margin-left: 265px" >Consultar - Contatos Agendados</p>
             <div class="h-50 container col-md-2 col-lg-6 col bg-primary " >
                <div class="row">
                  <div class="col" style="padding-top: 20px" ><b>Nome</b></div>
                  <div class="col" style="padding-top: 20px"><b>Telefone</b></div>
                  <div class="col" style="padding-top: 20px"><b>Origem</b></div>
                  <div class="col" style="padding-top: 20px"><b>Contato</b></div>
                  <div class="col" style="padding-top: 20px"><b>Observação</b></div>
                  <div class="col" style="padding-top: 20px"><b>Ação</b></div>
                </div>
                </div>
              <div class="h-25 container text-center col-md-2 col-lg-6 col bg-white">
                <div class="row">
                  <div class="col"><?php echo $pessoa ->getNome();?></div>
                  <div class="col"><?php echo $pessoa ->getTelefone();?></div>
                  <div class="col"><?php echo $pessoa ->getOrigem();?></div>
                  <div class="col"><?php echo $pessoa ->getData();?></div>
                  <div class="col"><?php echo $pessoa ->getObservacao();?></div>
                  <div class="col">Ação</div>
                </div>
              </div>  
            </div>
            <div class="col-1">
                &nbsp;
            </div>
          </div>
      </div>
</body>
</html>