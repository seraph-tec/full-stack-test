<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FullStackTestController extends Controller
{
    /**
     * Home Page do projeto
     */
    public function show() {
       return view('content');
    }

    public function store(Request $request) {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C",
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST, 1,
            CURLOPT_ENCODING => "",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($request->all()),
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                "Accept: application/json",
                "Content-Type: application/x-www-form-urlencoded",
                "Access-Control-Allow-Origin: http://localhost",
                "Access-Control-Allow-Origin: POST",
                "Access-Control-Allow-Origin: Content-Type",
            ),
        ]);

        $curlResponse = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            $response = "cURL Error #:" . $err;
        }

        if($curlResponse) {
            $response = 'Cadastrado com sucesso!';
        }

        return response()->json(['mensagem' => $response]);
    }
}
