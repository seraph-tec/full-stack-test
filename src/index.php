<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Teste Prático</title>
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <div class="container">
          <a href="index.html" class="navbar-brand">
            <img src="img/logo.png" width="142" alt="imagem da logo">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Teste 1</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Teste 2</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Teste 3</a>
              </li>
              <li class="nav-item">
                <button class="btn btn-outline-light ml-4" data-toggle="modal" data-target="#modal-formulario">Formulário</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Primeiro bloco -->
    <section id="home">
      <div class="container full-height">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h1 class="display-4">Full Stack Test</h1>
              <h2> Seraph Tech</h2>
              <p>Informações do formulário
                <a href="#formulario" class="btn btn-outline-light">
                  <i class="far fa-edit fa-lg"></i>
                </a>
              </p>
            </div>
          </div>
          <div class="col-md-6 d-none d-md-block">
            <img src="img/homem.png" alt="imagem de um homem pensando">
          </div>
        </div>
      </div>
    </section>

    <!-- Segundo bloco -->
    <section class="caixa">
      <div class="container">
        <div>
          <h2 class="display-4">Imagens</h2>
        </div>
        <div class="row">
          <div class="col-sm-8 m-auto">
            <div class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php
                  $obj = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/photos'));            
                  $i=0;
                  foreach ( $obj as $e ){
                    if($i==0){ ?>
                      <div class="carousel-item active">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="<?php $e->url ?><br>" alt="Imagens arquivo json">
                          <div class="card-body">
                            <p class="card-text"><?php echo "$e->title<br>"; ?></p>
                          </div>
                        </div>
                        <?php $i++; ?>
                      </div>  
                    <?php
                    }
                    else{ ?>
                      <div class="carousel-item">
                        <div class="card">
                          <img class="card-img-top img-fluid" src="<?php $e->url ?><br>" alt="Imagens arquivo json">
                          <div class="card-body">
                            <p class="card-text"><?php echo "$e->title<br>"; ?></p>
                          </div>
                        </div>
                        <?php $i++; ?>
                      </div>
                    <?php  
                    }   
                  } ?>                   
              </div>
            </div>   
          </div>
        </div>
      </div>
    </section>

    <!-- Terceiro bloco -->
    <section class="caixa" id="formulario">
      <div class="container">
        <div class="row">
          <div class="col-md-8 d-flex">
            <div class="align-self-center">
              <h2 class="display-4">Informações do Formulário</h2>
              <p>Informações sobre o formulário...</p>
              <button class="btn btn-primary ml-4" data-toggle="modal" data-target="#modal-formulario">Clique para responder</button>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/img3.png" class="img-fluid">
          </div> 
        </div>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 align-self-center">
            <h4>Juliana Cristina Reis Gomes</h4>            
          </div>
          <div class="col-md-4">
            <h5>Full Stack Test</h5>
            <h6>Seraph Tech</h6>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal Formulário -->
    <div class="modal fade" id="modal-formulario">
      <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">Formulário de Identificação</h4>
                  <button type="button" class="close" data-dismiss="modal"><span>×</span></button> 
               </div>
               <div class="modal-body">
                  <form id="form" method="post" action="form.php">
                    <fieldset>
                      <input type="hidden" id="ownerID" name="ownerID" value="313450362">

                      <input type="hidden" id="leadStatus" name="leadStatus" value="open"> 

                      <div class="form-group">
                        <label for="firstName">Nome:</label>
                        <input class="form-control form-control-sm" required="" name="firstName" type="text" />
                      </div>

                      <div class="form-group">
                        <label for="lastName">Sobrenome:</label>
                        <input class="form-control form-control-sm" required="" name="lastName" type="text" />
                      </div>

                      <div class="form-group">
                        <label for="country">País:</label>
                        <input class="form-control form-control-sm" required="" name="country" type="text" />
                      </div>

                      <div class="form-group"> 
                        <label for="street">Endereço:</label>
                        <input class="form-control form-control-sm" required="" name="street" type="text" />
                      </div>

                      <div  class="form-group">
                        <label for="city">Cidade:</label>                        
                        <input class="form-control form-control-sm" required="" name="city" type="text" />
                      </div>

                      <div class="form-group">
                        <label for="emailAddress">Email:</label>
                        <input class="form-control form-control-sm" required="" name="emailAddress" type="email" />
                      </div>

                      <div class="form-group">
                        <label for="state">Estado:</label>                        
                        <input class="form-control form-control-sm" required="" name="state" type="text" />
                      </div>              
                   
                      <div class="form-group">
                        <label for="phoneNumber">Celular:</label>
                        <input class="form-control form-control-sm" required="" name="phoneNumber" type="text" />
                      </div>

                      <input type="submit" id="submit-button" class="btn btn-primary " value="Enviar" />
                    </fieldset>
                  </form>
               </div>
           </div>
       </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

  </body>
</html>