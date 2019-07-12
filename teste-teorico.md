# Teste Teórico

**SEO**

1. O que é o redirecionamento 301? Dê um exemplo.

> RESPOSTA: É um redirecionamento permanente. Serve para indicar que o endereço acessado foi modificado. No caso do SEO, é importante para que Bots continuem indexando determinada página da mesma forma, mas com outro endereço, sem perder os resultados de busca (Page rank, etc), além de evitar redundâncias de URL com e sem WWW e evitar conteúdo duplicado. Exemplo em .htaccess: 'redirect 301 /noticias/ http://www.novoendereco.com.br/noticias' 

2. O que é um link No-Follow?

> RESPOSTA: Um atributo usado na tag `<a>` (rel='nofollow') para que os Bots não sigam os links.

3. O que é uma meta canonical e qual é a melhor a utilização dela?

> RESPOSTA: É uma meta de `<link>` (rel='canonical') indicando o endereço definitivo de uma página. Isso é feito principalmente para evitar conteúdo duplicado, pois uma mesma página ou arquivo HTML poderia ser acessado de várias URLs (com e sem www, ou usando /index.php, por exemplo). Então essa meta indica aos Bots o endereço certo para indexação.


**CSS**

4. Por quê é importante não fazer seletores por tags html?

> RESPOSTA: Basicamente para não restringir o CSS às tags do HTML. É melhor criar classes e atribuir às tags. Assim, elas podem ser reutilizadas em outras tags se necessário, e caso o HTML seja modificado por algum motivo, os estilos não são perdidos nem precisam ser reescritos (obs: em alguns casos podem precisar de ajustes por se comportarem diferente, ex: uma `<li>` e uma `<div>` tem algumas características diferentes de renderização, mas de toda forma haverá muito menos trabalho e mais organização nesses ajustes).

5. Quais práticas/recursos devem ser usados para criar sites responsivo?

> RESPOSTA: Acredito que principalmente usar media queries para as quebras de layout e ajustar no CSS essas formas de apresentação dependendo de cada janela. Assim o layout fica fluido e o código não precisa ser escrito mais de uma vez (que seria o caso de fazer um outro site somente para o mobile e renderizar identificando o dispositivo, prática que era feita antigamente). Frameworks como Twitter Bootstrap ajudam muito no desenvolvimento de sites responsivos por já terem essas media queries definidas e tratadas no CSS inicial.


**JS**

6. Qual recurso do javascript é mais recomendado para tratar processamentos assíncronos? Justifique.

> RESPOSTA: AJAX. Usando o xmlHttpRequest é possível fazer transações de dados enquanto o usuário continua usando a página, sem necessidade de recarregamento. É possível tratar seus diferentes estados para obter respostas em tempo real, e o recurso inclui formas diferentes de tratar as respostas, como callbacks e os mais recentes (obs: recentes no javascript nativo) Promises e funções Async.

7. Quais os recursos mais recomendados para incluir ícones em um site? Justifique.

> RESPOSTA: FontAwesome, Bootstrap Glyphicons, Google Icons, Dashicons. Basicamente é utilizar recursos em que os ícones sejam como fontes, podendo alterar seu tamanhos, cor, etc, de forma simples via CSS, em vez de usar uma imagem (esses ícones geralmente são usados com a tag `<i>`). No caso de necessidade/obrigatoriedade de imagem mais detalhada, podemos utilizar arquivos .SVG que também possibilitam formas de apresentação mais flexíveis do que outros tipos de imagem em geral.
