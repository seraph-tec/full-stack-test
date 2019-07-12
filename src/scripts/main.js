$(document).ready(function () {	 

	ResTopo();
	displayCarousel();

	$('.cep').mask('00000-000');
	$('.celphone').mask('(00) 00000-0000');

	function limpa_formulário_cep() {
		// Limpa valores do formulário de cep.
		$("#rua").val("");
		//$("#bairro").val("");
		$("#cidade").val("");
		//$("#uf").val("");
		//$("#ibge").val("");
	}
	
	//Quando o campo cep perde o foco.
	$("#cep").blur(function() {

		//Nova variável "cep" somente com dígitos.
		var cep = $(this).val().replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if(validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				$("#rua").val("...");
				//$("#bairro").val("...");
				$("#cidade").val("...");
				//$("#uf").val("...");
				//$("#ibge").val("...");

				//Consulta o webservice viacep.com.br/
				$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

					if (!("erro" in dados)) {
						//Atualiza os campos com os valores da consulta.
						$("#rua").val(dados.logradouro);
						$//("#bairro").val(dados.bairro);
						$("#cidade").val(dados.localidade);						
						$("#uf").val(dados.uf);
						//$("#ibge").val(dados.ibge);
					} //end if.
					else {
						//CEP pesquisado não foi encontrado.
						limpa_formulário_cep();
						alert("CEP não encontrado.");
					}
				});
			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}
	});

	$(".leadForm").on('submit',function(f){
		f.preventDefault();
		enviaLeadForm($(this));

	});

});

function displayCarousel(){
	$.ajax({
		url: window.location.href + "/includes/ajax_photos.php",
		cache: false
	})
	.done(function( html ) {
		$( "#photosCarousel" ).html( html );
	});
}

function enviaLeadForm(f){
	$(".btnEnviaForm").text('AGUARDE...')
	$.ajax({
		method: "POST",
		url: window.location.href + "/includes/ajax_form.php",
		data: $(f).serialize()
	})
	.done(function( msg ) {
		$(".retornoAjax").hide();
		$(".retornoAjax").html(msg).show('medium');
		$(".btnEnviaForm").text('CADASTRAR');
	});
	
}

$('a').on("click",function(e){
	e.preventDefault();
});

$('a.nav-link, a.cta-hero').on("click",function(e){
	e.preventDefault();
	var element = $(this).attr('href');
	$([document.documentElement, document.body]).animate({
        scrollTop: ($(element).offset().top) - 70
    }, 1300);
});

$(window).resize(function () {
	ResTopo();
});

function ResTopo(){
	var alturaWindow = $(window).height();
	var alturaHero = $('.jumbotron').height();
	$('.topo').css( 'height' , alturaWindow );
	
	$(".jumbotron").css('margin-top', (alturaWindow/2) - alturaHero + "px" )
}