<?php
$file = file_get_contents('https://jsonplaceholder.typicode.com/photos'); //Busca o JSON
$dados = json_decode($file, true); //Decode do JSON
$i = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //Se o metodo for igual a POST faça
    
$nums = implode('', range(0, 9));  //Caracteres aceitos para gerar o numero

$numeros = $nums;
$ownerID = '';
$len = 9; //quantidade de caracteres
for($i = 0; $i < $len; $i++) {
    $ownerID .= $numeros[rand(0, strlen($numeros) - 1)]; //Cria um número aleatório com a quantidade de caracteres definido na variável len
}
    
//Variaveis recebem os dados do formulário
    
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$logradouro = isset($_POST['logradouro']) ? $_POST['logradouro'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$pais = isset($_POST['pais']) ? $_POST['pais'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';

/*Verifica se algum campo está vazio. 
  Há uma validação javascript nos campos e os mesmos não podem ficar vazios, porém caso algum usuário inspecione o código
  e altere esse elemento, essa validação por parte do servidor garante que os dados só serão enviados caso os campos sejam 
  preenchidos, evitando também alguns ataques.*/
if (empty($nome) || empty($sobrenome)|| empty($cidade)|| empty($logradouro)|| empty($estado)|| empty($pais)|| empty($email)|| empty($celular)){
    header('Location: index.php?dados-em-branco#formulario');
}    
    
//Inicio da API
$method = 'createLeads';
$params = array(
    'objects' => array(
        array( //Array com os valores que serão inseridos na API
            'ownerID' => $ownerID,
            'leadStatus' => 'open',
            'firstName' => $nome,
            'lastName' => $sobrenome,
            'country' => $pais,
            'street' => $logradouro,
            'city' => $cidade,
            'emailAddress' => $email,
            'state' => $estado,
            'phoneNumber' => $celular,
        )
    )
);
$requestID = session_id();
$accountID = '665FED498F261C26CD5EA2B9FB56CF6D'; //ID API
$secretKey = 'F77777BF6188FFFBC46673EBB789839C'; //Secret API
$data = array(
    'method' => $method,
    'params' => $params,
    'id' => $requestID,
);

$queryString = http_build_query(array('accountID' => $accountID, 'secretKey' => $secretKey));
$url = "http://api.sharpspring.com/pubapi/v1/?$queryString";

$data = json_encode($data);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data),
));

$result = curl_exec($ch);
curl_close($ch);

//Resultado de conexão com a API    
//echo $result;    

$resultados = json_decode($result);
$obj = ($resultados->result->creates);

   foreach ($obj as $linha) {
       $resultado = ($linha->success);
        if ($resultado == 'true'){
            header('Location: index.php?formulario-enviado#formulario');
        }
        else{
            header('Location: index.php?formulario-nao-enviado#formulario');
        } 
   }

} // Fim do IF que verifica o método
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Landing Page</title>
        <!-- Inicio CSS -->
        <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Fim CSS -->
        <script src="assets/js/jquery-slim.min.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- Início Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00CED1;" id="inicio">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="180" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">INÍCIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#imagens">IMAGENS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#formulario">FORMULÁRIO</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#footer">FOOTER</a>
                    </li>

                </ul>
            </div>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal">MODAL FORMULÁRIO</button>
        </nav>
        <!-- Fim Navbar -->

        <!-- Inicio Carousel -->

        <div class="main app form" id="inicio">
            <div class="inicio-section">
                <div class="container nopadding">
                    <div class="col-md-12">
                        <div class="inicio-content text-center">
                            <h1>TÍTULO</h1>
                            <p>SUB-TÍTULO </p>
                            <a href="#formulario"><button type="button" class="btn-redondo">FORMULÁRIO</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fim Carousel -->

        <!-- Inicio Carousel Imagens -->
        <div class="container-fluid" id="imagens">
            <br><h1 class="text-center">IMAGENS JSON</h1><br>
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <?php
                    foreach ($dados as $linha) {
                        $titulo = $linha['title']; //Recupera o titulo da imagem
                        $url = $linha['url']; //Recupera a url da imagem
                        ?>
                        <div class="carousel-item col-md-3 <?php
                    if ($i == 1) {
                        echo 'active'; //Primeiro item do carousel
                    }
                        ?>">
                            <img class="img-fluid mx-auto d-block" src="<?= $linha['url'] ?>" alt="<?= $linha['title']; ?>">
                            <p><?= $linha['title']; ?></p>
                        </div>
                        <?php
                        if ($i > 15) { //Finaliza o foreach após 14 resultados
                            break;
                        }$i++;
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left fa-lg text-muted"></i>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                    <i class="fa fa-chevron-right fa-lg text-muted"></i>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div><br>

        <!-- Fim Carousel Imagens -->

        <!-- Inicio Formulario -->
        <div class="container-formulario" id="formulario">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="text-center">TEXTO INFORMATIVO</h1>
                        <p class="text-center">Para saber mais sobre nossos serviços entre em contato.</p>
                        <p class="text-center">Preencha com seus dados ao lado e entraremos em contato!</p>
                    </div>
                    <div class="col-md-6 card-formulario">
                        <form method="POST" action="index.php">
                            <br><h1 class="text-center">FORMULÁRIO API</h1>
                            <?php
                            //Tratamento de excessão
                            if (isset($_GET['formulario-enviado']) && empty($_GET['formulario-enviado'])) {
                                echo '<div class="alert alert-success" role="alert" style="text-align: center;">Dados enviados com sucesso!</div> ';
                            }
                             if (isset($_GET['formulario-nao-enviado']) && empty($_GET['formulario-nao-enviado'])) {
                                echo '<div class="alert alert-danger" role="alert" style="text-align: center;">Dados não enviados, e-mail já está cadastrado.</div> ';
                             }
                            if (isset($_GET['dados-em-branco']) && empty($_GET['dados-em-branco'])) {
                                echo '<div class="alert alert-danger" role="alert" style="text-align: center;">Alguns dados estão em branco, preencha-os para prosseguir.</div> ';
                             }
                            ?>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="primeironome">NOME:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="" placeholder="Insira seu nome" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sobrenome">SOBRENOME:</label>
                                    <input type="text" class="form-control" name="sobrenome" id="sobrenome" aria-describedby="" placeholder="Insira seu sobrenome" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cidade">CIDADE:</label>
                                <input type="text" class="form-control" name="cidade" id="cidade" aria-describedby="" placeholder="Insira sua cidade" required>
                            </div>
                            <div class="form-group">
                                <label for="logradouro">LOGRADOURO:</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro" aria-describedby="" placeholder="Insira seu logradouro" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="logradouro">ESTADO:</label>
                                    <input type="text" class="form-control" name="estado" id="estado" aria-describedby="" placeholder="Insira seu estado" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pais">PAÍS:</label>
                                    <input type="text" class="form-control" name="pais" id="pais" aria-describedby="" placeholder="Insira seu país" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="email">E-MAIL:</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="" placeholder="Insira seu e-mail" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="celular">CELULAR:</label>
                                    <input type="text" class="form-control" name=celular id="celular" aria-describedby="" placeholder="Insira seu celular" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-formulario">ENVIAR</button><br><br>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Fim Formulario -->
        
        <!-- Inicio Footer -->
        <footer class="footer" id="footer">
            <div class="container-footer text-center">   
                <br><span>TODOS OS DIREITOS RESERVADOS. <br>DESENVOLVIDO POR: HUDSON LIBÉRIO LEÃO</span><br>
            </div>
        </footer>
        <!-- Fim Footer -->

        <!-- Inicio Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Preencha seus dados abaixo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" aria-describedby="" placeholder="Insira seu nome" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" aria-describedby="" placeholder="Insira seu e-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Endereço:</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Insira seu endereço" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim Modal -->

        <!-- Inicio JS -->
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <!-- Fim JS -->
    </body>
</html>
