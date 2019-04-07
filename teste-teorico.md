# Teste Teórico

**SEO**

1. O que é o redirecionamento 301? Dê um exemplo.

> RESPOSTA: É um redirecionamento utilizado para não perder o conteúdo e tráfego de uma página que sofreu alteração de URL.

<script runat=”server”>
private void Page_Load(object sender, System.EventArgs e)
{
Response.Status = “301 Moved Permanently”;
Response.AddHeader(“Location”,”http://www.seraph.com.br”);
}
</script>

2. O que é um link No-Follow?

> RESPOSTA: Um link que não permite com que softwares de busca e redirecionamento trabalhem.

3. O que é uma meta canonical e qual é a melhor a utilização dela?

> RESPOSTA: Quando temos duas páginas semelhantes.


**CSS**

4. Por quê é importante não fazer seletores por tags html?

> RESPOSTA: Isso deixa o CSS ‘‘preso’’ aos nomes das tags, isso pode causar uma desestruturação do código e manutenções diárias.

5. Quais práticas/recursos devem ser usados para criar sites responsivo?

> RESPOSTA: Utilização de bootstrap respeitando tags de colunas. Ex: col-lg, col-md,col-xs.


**JS**

6. Qual recurso do javascript é mais recomendado para tratar processamentos assíncronos? Justifique.

> RESPOSTA:

7. Quais os recursos mais recomendados para incluir ícones em um site? Justifique.

> RESPOSTA:
