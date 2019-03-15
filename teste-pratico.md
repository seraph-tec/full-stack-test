# Teste Prático

1. Na pasta [src](/src/), crie uma Landing Page integrada com a nossa API, seguindo as melhores práticas de programação, SEO e organização de código.

![wireframe](https://blog.lidery.org.br/wp-content/uploads/2019/03/Wireframe2.jpg)


2. Buscar os dados do endpoint, seguindo os Resources:
img

3. Construa um formulário para gerar leads e enviar email.

4. Para gerar leads, utilize o endereço para fazer um post em nossa API e a nossa estrutura de dados:

URL para post: "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C"

````{
  "method":"updateLeads",
  "params":{
     "objects":[
        {
           "id": "640189955075",
           "ownerID":"313440981",
           "leadStatus":"open",
           "firstName": "Teste Seraph",
           "lastName":"Last",
           "country":"BR",
           "street":"Rua das Gaivotas - 586",
           "city":"Belo Horizaonte",
           "emailAddress": "teste@seraph.com.br",
           "state":"MG",
           "zipcode":"31744145",
           "mobilePhoneNumber":"31999998888",
           "data_nascimento_5c004f2edecc8":"04\/06\/1983",
           "sexo_5c004f624fba4":"M",
           "celular_3166903299":"31999998888",
           "consultor_id_5c0051c608068":"47",
           "status_id_5c0051d79863d":"8",
           "tipo_pessoa_5c0050127ab96":"F",
           "cpf_cnpj_5c004f9849e9b":"39470434226",
           "placa_5c00510363b6c":"HPN-9625",
           "importado_3166922755":"N",
           "marca_5c0050ea6062c":"59",
           "modelo_5c0050f619767":"4690",
           "ano_combustivel_5c0050c10a69e":"2017-1",
           "preco_5c00510cac415":"R$ 46.902,00",
           "zero_km_5c00517dcc33b":"N",
           "transmissao_5c00516034a52":"Mec",
           "id_5c0051cebbc88":"361",
           "lead_id_5beed0ff1e9f2":"361"
        }
     ]
  },
  "id":"1"
}

`````
