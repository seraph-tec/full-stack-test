<?php
require_once('includes/config.php');
                                                                                  
   $method = 'createLeads';                                          
   $params = array(
              'objects' => array (
                array( 
                  'ownerID'           => '3134503624',
                  'leadStatus'        => 'open',
                  'firstName'         => $_REQUEST['nome'],
                  'country'           => 'BR',
                  'street'            => $_REQUEST['rua'],
                  'city'              => $_REQUEST['cidade'],
                  'emailAddress'      => $_REQUEST['email'],
                  // 'state'             => 'MG',
                  'mobilePhoneNumber' => $_REQUEST['telefone']
                )
              )
            );

   $requestID = session_id();       
   print_r($requestID);                                      
   $data = array(                                                                                
       'method' => $method,                                                                      
       'params' => $params,                                                                      
       'id' => $requestID,                                                                       
   );                                                                                            
   $url = "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C";                                                                                                                    
   $data = json_encode($data);                                                                   
   $ch = curl_init($url);                                                                        
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                              
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                  
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                               
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                   
       'Content-Type: application/json',                                                         
       'Content-Length: ' . strlen($data)                                                        
   ));                                                                                           
                                                                                                 
   $result = curl_exec($ch);   

   print_r($result);

   curl_close($ch);                                                                              
                                                                                                 
   echo $result; 

?>
