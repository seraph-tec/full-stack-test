<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.min.css">

    <title>Full Stack Test | SERAPH</title>
  </head>
  <body>
    
    <section class="topo ">

    	<div class="container text-center h-100">

	    	<div class="row">

	    		<div class="col-sm">

	    			<h1>Hello, world!</h1>

	    			
	    			
	    		</div>

	    	</div>

	    </div>

    </section>
    

    



    <?php  

    /*
	Exemplo de sucesso no POST sharpsrping
	{
	    "result": {
	        "creates": [
	            {
	                "success": true,
	                "error": null,
	                "id": 668070311939
	            }
	        ]
	    },
	    "error": [],
	    "id": "5ef3df63-bfd2-466d-ad67-def6b26e1fc8",
	    "callCount": "3",
	    "queryLimit": "5000"
	}

	Exemplo de erro no POST sharpsrping
	{
	    "result": {
	        "creates": [
	            {
	                "success": false,
	                "error": {
	                    "code": 301,
	                    "message": "Entry already exists",
	                    "data": []
	                }
	            }
	        ]
	    },
	    "error": [
	        {
	            "code": 301,
	            "message": "Entry already exists",
	            "data": []
	        }
	    ],
	    "id": "c3ace9e7-b160-4c4f-b9b6-1bf87bd1065f",
	    "callCount": "4",
	    "queryLimit": "5000"
	}
	
    */

    /*
	Envio AJAX JS
	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C",
	  "method": "POST",
	  "headers": {
	    "Content-Type": "application/json",
	    "cache-control": "no-cache",
	    "Postman-Token": "22d01d7c-2452-40b8-b437-fd28ff43ca32"
	  },
	  "processData": false,
	  "data": "{\r\n\t\"method\":\"createLeads\",\r\n\t\"params\":{\r\n    \t\"objects\":[\r\n\t        {\r\n\t        \t\"ownerID\":\"313450362\",\r\n\t        \t\"leadStatus\":\"open\",\r\n\t        \t\"firstName\": \"Fabio\",\r\n\t        \t\"lastName\":\"Bastos\",\r\n\t        \t\"country\":\"BR\",\r\n\t        \t\"street\":\"Rua das Gaivotas - 586\",\r\n\t        \t\"city\":\"Belo Horizaonte\",\r\n\t        \t\"emailAddress\": \"fabiotblima@gmail.com\",\r\n\t        \t\"state\":\"MG\",\r\n\t        \t\"mobilePhoneNumber\":\"31992391585\"\r\n\t        }\r\n    \t]\r\n\t},\r\n  \"id\":\"dc5d0bb7-b65f-4dff-bb56-3739b66405e9\"\r\n}"
	}

	$.ajax(settings).done(function (response) {
	  console.log(response);
	});
    */


	/*
	PHP Http Request

	$request = new HttpRequest();
	$request->setUrl('http://api.sharpspring.com/pubapi/v1/');
	$request->setMethod(HTTP_METH_POST);

	$request->setQueryData(array(
	  'accountID' => '665FED498F261C26CD5EA2B9FB56CF6D',
	  'secretKey' => 'F77777BF6188FFFBC46673EBB789839C'
	));

	$request->setHeaders(array(
	  'Postman-Token' => '8a637d3c-eeb3-4cbd-bf3c-e87c155cc471',
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
		        	"firstName": "Fabio",
		        	"lastName":"Bastos",
		        	"country":"BR",
		        	"street":"Rua das Gaivotas - 586",
		        	"city":"Belo Horizaonte",
		        	"emailAddress": "fabiotblima@gmail.com",
		        	"state":"MG",
		        	"mobilePhoneNumber":"31992391585"
		        }
	    	]
		},
	  "id":"3f4b19f4-a111-46a3-a157-97d782070b5d"
	}');

	try {
	  $response = $request->send();

	  echo $response->getBody();
	} catch (HttpException $ex) {
	  echo $ex;
	}
	*/

    ?>
    
    <script src="js/main.min.js" ></script>
  </body>
</html>