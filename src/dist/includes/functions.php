<?php

function enviaSharpspring(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{"method":"createLeads","params":{"objects":[{"ownerID":"313450362","leadStatus":"open","firstName": "'.$_SESSION['user']['firstname'].'","lastName":"'.$_SESSION['user']['lastname'].'","country":"BR","street":"'.$_SESSION['user']['rua'].' - '.$_SESSION['user']['complemento'].'","city":"'.$_SESSION['user']['cidade'].'","emailAddress": "'.$_SESSION['user']['email'].'","state":"'.$_SESSION['user']['uf'].'","mobilePhoneNumber":"'.intval($_SESSION['user']['phone']).'"}]},"id":"ec9c8960-4ae0-4bb2-9b80-971c940cc45c"}',
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "SERAPH-Token: 591db8bf-b8cc-4f0a-8e9c-464a451332ab",
        "cache-control: no-cache"
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return false;
    } else {
        $retornoAPI = json_decode($response , true);
        $msg = ($retornoAPI['result']['creates'][0]['success'])? 200 : intval( $retornoAPI['result']['creates'][0]['error']['code'] );
        return $msg;
    }
}

/*
function enviaSharpspring(){
    $request = new HttpRequest();
	$request->setUrl('http://api.sharpspring.com/pubapi/v1/');
	$request->setMethod(HTTP_METH_POST);

	$request->setQueryData(array(
	  'accountID' => '665FED498F261C26CD5EA2B9FB56CF6D',
	  'secretKey' => 'F77777BF6188FFFBC46673EBB789839C'
	));

	$request->setHeaders(array(
	  'SERAPH-Token' => '8a637d3c-eeb3-4cbd-bf3c-e87c155cc471',
	  'cache-control' => 'no-cache',
	  'Content-Type' => 'application/json'
	));

	$request->setBody('{
		"method":"createLeads",
		"params":{
	    	"objects":[
		        {
		        	"ownerID":"313450362",
		        	"leadStatus":"open",
		        	"firstName": "'.$_SESSION['user']['firstname'].'",
		        	"lastName":"'.$_SESSION['user']['lastname'].'",
		        	"country":"BR",
		        	"street":"'.$_SESSION['user']['rua'].' - '.$_SESSION['user']['complemento'].'",
		        	"city":"'.$_SESSION['user']['cidade'].'",
		        	"emailAddress": "'.$_SESSION['user']['email'].'",
		        	"state":"'.$_SESSION['user']['uf'].'",
		        	"mobilePhoneNumber":"'.intval($_SESSION['user']['phone']).'"
		        }
	    	]
		},
	  "id":"'. session_id() .'"
	}');

	try {
	  $response = $request->send();

	  return $response->getBody();
	} catch (HttpException $ex) {
	  return $ex;
	}
}
*/