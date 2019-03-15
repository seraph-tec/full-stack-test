# Teste Prático

1. Na pasta [src](/src/), crie uma Landing Page integrada com a nossa API, seguindo as melhores práticas de programação, SEO e organização de código.

No Wireframe abaixo, está a estrutura desta Landing Page:
* No menu superior, insira uma logo, menu de navegação da página e um CTA que abre um modal com um formulário.
* Primeiro bloco em full-height com título, sub-título e CTA que leva o usuário para o formulário ao final da página.
* Segundo bloco com título e um carrossel de imagens (Ver item dois para saber sobre as imagens).
* Terceiro bloco com informações para o formulário.
* Footer

OBS: Não será avaliado a capacidade do candidato de redigir textos para a página. Desta forma, pode ser utilizado textos "Lorem ipsum".

![wireframe](https://blog.lidery.org.br/wp-content/uploads/2019/03/Wireframe2.jpg)


2. Para buscar as imagem do carrossel, utilize o seguinte [Json](https://jsonplaceholder.typicode.com/photos). Crie "cards" mostrando a informação do Título ("title") e exibindo a imagem ("url").

3. Construa um formulário para gerar leads.

4. Para a geração de leads, utilize o endereço para fazer um post em nossa API. A nossa estrutura de dados é:

URL para post: "http://api.sharpspring.com/pubapi/v1/?accountID=665FED498F261C26CD5EA2B9FB56CF6D&secretKey=F77777BF6188FFFBC46673EBB789839C"

````{
  "method":"createLeads",
  "params":{
     "objects":[
        {
           "ownerID":"313450362",
           "leadStatus":"open",
           "firstName": "Teste Seraph",
           "lastName":"Last",
           "country":"BR",
           "street":"Rua das Gaivotas - 586",
           "city":"Belo Horizaonte",
           "emailAddress": "teste@seraph.com.br",
           "state":"MG",
           "mobilePhoneNumber":"31999998888"
        }
     ]
  },
  "id":"1"
}

`````
