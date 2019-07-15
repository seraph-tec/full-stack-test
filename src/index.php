<?php
require_once("includes/config.php"); //CONEXÃO COM A BASE DE DADOS
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title>Teste Front End - Seraph</title>
    <!-- <title><?php //echo utf8_encode($rowscamp['lpc_campanha']); ?> | <?php //echo $rowsun['lpun_university']; ?></title> -->
    <meta name="description" content="Teste Front End - Seraph"/>
    <meta name="keywords" content="Teste Front End - Seraph"/>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="distribution" content="global"/>
    <meta name="rating" content="General"/>
    <meta name="language" content="pt-br"/>
    <meta name="url" content=""/>
    <meta name="doc-class" content="completed"/>
    <meta name="doc-rights" content="public"/>
    <meta name="autor" content="Braulio Mateus"/>
    <meta name="company" content="Seraph">
    <meta name="revisit-after" content="1"/>
    <link rel='canonical' href=''/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/lpbootstrap.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,700i" rel="stylesheet">

    <!-- Carrousel -->
    <!------ Carousel ---------->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Medias -->
    <link href="css/media-geral.css" rel="stylesheet">
    <link href="css/media-xsss.css" rel="stylesheet">
    <link href="css/media-xss.css" rel="stylesheet">
    <link href="css/media-xs.css" rel="stylesheet">
    <link href="css/media-sm.css" rel="stylesheet">
    <link href="css/media-md.css" rel="stylesheet">
    <link href="css/media-mdd.css" rel="stylesheet">
    <link href="css/media-lg.css" rel="stylesheet">
    <link href="css/media-xl.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

        <header class="header">
            <div class="container">         
                <nav class="header_menu menu-nav">
                    <div class="row">
                        <div class="col-lg-3" style="display: inline-block; cursor: pointer; float: left;">
                            <a href="#">
                                <img class="logo" src="img/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-9" style="max-width: 100%">
                            <ul>
                                <li><a href="#">Home </a></li>
                                <li><a href="#">Menu-1</a></li>
                                <li><a href="#">Menu-2</a></li>
                                <li><a href="#">Menu-3</a></li>
                                <li><a style="color: #ffd227" data-toggle="modal" data-target="#contact" id="inscreva" href="">Contato </a></li>
                            </ul>
                        </div>  
                    </div>  
                </nav>
            </div>
        </header>

        <!-- Contact -->
        <div class="contactform modal fade" id="contact" tabindex="-1" role="dialog" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-xs-center">
                    <form id="contact" action="">
                      <fieldset class="form-group" >
                        <input type="text" class="form-control form-control-danger form-control-success" id="name" name="nome" placeholder="Nome" required="">
                      </fieldset>

                      <fieldset class="form-group" id="emailresult2">
                        <input type="email" class="form-control form-control-danger form-control-success" id="email" name="email" placeholder="Email" required="">
                      </fieldset>

                      <fieldset class="form-group" id="telefoneresult2">
                        <input type="text" class="form-control form-control-danger form-control-success" id="telefone" name="telefone" placeholder="Telefone" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <textarea class="form-control form-control-danger form-control-success" id="cidade" rows="1" name="cidade" placeholder="Cidade"></textarea>
                      </fieldset>

                      <fieldset class="form-group">
                        <textarea class="form-control form-control-danger form-control-success" id="rua" rows="1" name="rua" placeholder="Rua"></textarea>
                      </fieldset>
  
                      <div class="modal-footer">
                        <button type="submit" id="submit" value="submit" class="btn btn-primary" disaled>Enviar</button>
                      </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    <!-- TOPO -->

    <!-- Creates the bootstrap modal where the image will appear -->
    <div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Image preview</h4>
          </div>
          <div class="modal-body">
            <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

<section class="container-fluid" style="padding: 0;">
    <!-- PARTE 1 -->
    <div class="row full" style="padding-top: 90px; margin: 0">

        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-md-0 col-mdd-auto col-lg-3 col-xl-1"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-12 col-lg-12 col-xl-10 box-2" style="text-align: center;">


            <div class='shadow container-fluid' >
                <h2 style="padding: 40px 0 0 0; color: #464646">Lorem Ipsum</h2>
                <span style="color: #58595b; font-weight: 100;">Lorem Ipsum is simply dummy text of the printing and typesetting industry<br> Lorem Ipsum has been the industry's <strong>standard dummy<br>text ever.</strong> when an unknown printer took a galley of type and scrambled it to make a type specimen book <strong>it<br> has survived</strong> but also the leap into electronic typesetting.</span>

                <button type="button" data-toggle="modal" data-target="#contact" class="btn btn-hover d-block mx-auto btn-glass-hover" aria-pressed="true" style="background-color: #fab523 ;color: #404040; position: relative;    bottom: -6%; border-radius: 30px; cursor: pointer; width: 370px; height: 56px; top: 20px;  background-image: linear-gradient(#ffd227, #d5991d); border: 3px solid #8f5d04">
                <div class="reflexo" style="left: 99.7537px; opacity: 0.421867;"></div>
                <p style="font-size: 1.5em; font-weight: bold; letter-spacing: 0.1px; color: #404040" id="inscreva">CONTATO</p>
                </button>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-0 col-mdd-auto col-lg-3 col-xl-1"></div>
    </div>

    <div class="row" style="margin: 0">
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-2"></div>
            <div class="col-xs-12 col-sm-12 col-mdd-12 col-lg-12 col-xl-8 box-2">
                <div class='shado container-fluid' style="text-align: center;" >

                    <h2 style="padding: 35px 0 35px 0; color: #464646">Lorem Ipsum is simply<br>printing and typesetting!</h2>
                        <div class="container" >
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                </div>

                                <a class="carousel-control-prev .d-none .d-sm-block control-navs-previous" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="seta-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded .d-none .d-sm-block control-navs-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="seta-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    <div style="padding: 20px 0"></div>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-mdd-auto col-lg-3 col-xl-2"></div>
    </div>


    <div class="row" style="margin: 0">
        <!-- ESPAÇO ESQUERDO SOBRA -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-1 col-lg-12 col-xl-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-mdd-5 col-lg-12 col-xl-4" style="text-align: center;">
                <div style="padding: 38px 0">
                    <h2 style="color: #464646">Lorem Ipsum<br>is simply dummy</h2>
                    <p style="color: #464646" id="lay">Lorem Ipsum is simply dummy text <strong>of the printing<br>and typesetting industry</strong> lorem Ipsum has been<br> the industry's standarddummy text ever since the 1500s <br><strong>when</strong> an unknown printer took a galley of type and scrambled.<br> It has survived not only five centuries<br> but also the leap into electronic typesetting <strong>remaining essentially unchanged.</strong>It was popularised in the 1960s.<br><br><strong>the release of Letraset sheets containing<br> Lorem Ipsum passages.</strong> and more recently with desktop publishing softwarelike Aldus PageMaker<br>  including versions.</p>
                </div>
                 <!-- <img src="img/pdf/conteudo_c.png" class="img-fluid ml-50 conteudo-c d-block mx-auto" alt=""> -->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-mdd-5 col-lg-12 col-xl-4" style="text-align: center;">

                <div style="padding: 38px 0">
                    <!-- FORM HERE -->
                    <!-- FORMULÁRIO -->
                    <div class="box-footer" id="form-bo2x">
                        <button class="btn btn-warning btn-sm btn-close"><i class="fa fa-close fa-fw"></i></button>
                        <p class="text-uppercase"><br></p>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome:" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail:" id="myEmail" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="telefone" id="telefone"   class="form-control" placeholder="Digite seu Telefone:" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="cidade" class="form-control" placeholder="Cidade" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="rua" class="form-control" placeholder="Rua" required>
                            </div>

                            <div class="form-group">
                                <button  class="btn btn-hover d-block mx-auto btn-glass-hover" aria-pressed="true" style="background-color: #fab523 ;color: #404040; position: relative; bottom: -6%; border-radius: 30px; cursor: pointer; width: 180px; height: 45px; top: 20px;  background-image: linear-gradient(#ffd227, #d5991d); border: 3px solid #8f5d04">
                                <div class="reflexo" style="left: -51.7537px; opacity: 0.421867;"></div>
                                <p style="font-size: 1.0em; font-weight: bold;  color: #404040" id="inscreva2">ENVIAR</p>
                                </button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-mdd-1 col-lg-3 col-xl-2"></div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-content">
        </div>
        <div class="footer-about">
        </div>
    </footer>
</section>

<script src="js/jquery.maskedinput.js"></script>
<script src="js/custom.js"></script>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> 

</body>
</html>