<?php
session_start();
require_once('functions.php');
/**
 * Array de estados para validar o select de estado
 */
$estadosBrasileiros = array('AL','AC','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO');
$camposFormulario = array(
    'firstname' => "Nome",
    'lastname' => "Sobrenome",
    'email' => "E-mail",
    'phone' => "Telefone Celular",
    'cep' => "CEP",
    'cidade' => "Cidade",
    'rua' => "Rua",
    'complemento' => "Complemento",
    'uf' => "Estado"
);

$errosValidacao = array();

if(isset($_POST['user'])):

    $lead = $_POST['user'];
    foreach($camposFormulario as $k => $v):
        $valor = filter_var($lead[$k]);

        if( empty($valor) )
            array_push($errosValidacao , "O campo <strong>" . $v . "</strong> deve ser preenchido");        
        if($k == "email" && !filter_var($lead[$k], FILTER_VALIDATE_EMAIL) )
            array_push($errosValidacao , "Você precisa colocar um email válido: exemplo@gmail.com");
        if($k == 'uf' && !in_array( $valor , $estadosBrasileiros) )
            array_push($errosValidacao , "Você precisa colocar um Estado válido");

        if(!empty($valor))
            $_SESSION['user'][$k] = $valor;
    endforeach;

endif; // isset post user

$retornoAjax = "";
/**
 * A função enviaSharpspring (functions.php) retorna FALSE se der qualquer erro no servidor ou no cURL, 
 * senão retorna o codigo 200 para sucesso, 301 para já existente ou outro erro possível desconhecido se for outro código.
 */
if( count($errosValidacao) == 0 ){
    if( $retornoAPI = enviaSharpspring() ){
        if($retornoAPI == 200){
            $retornoAjax = "Formulário enviado com sucesso!";
        }elseif($retornoAPI == 301){
            $retornoAjax = "Esse e-mail já está cadastrado";
        }else{
            $retornoAjax = "Houve um erro ao enviar o formulário. Por favor, tente novamente mais tarde.";
        }
    }
}else{
    $retornoAjax = implode("<br>",  $errosValidacao);
}

$classeAlert = ($retornoAPI == 200)? "success" : "danger";
echo '<div class="alert alert-'.$classeAlert.'" role="alert">'.$retornoAjax.'</div>';