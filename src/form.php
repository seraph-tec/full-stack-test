<?php

  $dados = array(
            "ownerID" => $_POST['ownerID'],
            "leadStatus" => $_POST['leadStatus'],
            "firstName" => $_POST['firstName'],
            "lastName" => $_POST['lastName'],
            "country" => $_POST['country'],
            "street" => $_POST['street'],
            "city" => $_POST['city'],
            "emailAddress" => $_POST['emailAddress'],
            "state" => $_POST['state'],
            "mobilePhoneNumber" => $_POST['phoneNumber'],
            "id" => '1',
  );

  $dados_string = json_encode($dados);

  $ch = curl_init('http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C');

  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $dados_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    'Content-Type: application/json',

    'Content-Length: ' . strlen($dados_string))

  );

  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
  curl_exec($ch);
  curl_close($ch);

  header('location:index.php');

?>