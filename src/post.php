<?php
	include_once 'campos.php';

	if (isset($_POST))
	{
		$dados = array();

		foreach($campos as $chave => $texto)
		{
			$dados[$chave] = $_POST[$chave];
		}

		$dados["leadStatus"] = "open";

		$dados_to_json = array("method" => "createLeads", "params" => array("objects" => array((object)$dados)), "id" => "1");
		$json = json_encode($dados_to_json);
		
		$options = array(
		  'http' => array(
		    'method'  => 'POST',
		    'content' => $json,
		    'header'=>  "Content-Type: application/json\r\n" .
		                "Accept: application/json\r\n"
		    )
		);

		$accId 	= "665FED498F261C26CD5EA2B9FB56CF6D";
		$secKey = "F77777BF6188FFFBC46673EBB789839C";

		$url = "http://api.sharpspring.com/pubapi/v1/?accountID=" . $accId . "&secretKey=" . $secKey;

		$context  = stream_context_create( $options );
		$result = file_get_contents( $url, false, $context );
		$response = json_decode( $result );

	}

	header('Location: /');
	die();
?>
