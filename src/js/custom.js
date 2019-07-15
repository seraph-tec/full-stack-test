    jQuery(function ($) {
        $("#cpf").mask("999.999.999-99");
        $("#fixo").mask("(99)9999-9999?9");
        $("#celular").mask("(99)9999-9999?9");
        $("#telefone").mask("(99)9999-9999?9");
    });

    $("#btn-euquero-a, #btn-euquero-b").click(function () {
        $("#form-box").show();
    });

    $(".btn-close").click(function () {
        $("#form-box").hide();
    });
    $("#aguarde").hide();

    $('form').submit(function (e) {
        var form = $(this);

        $.ajax({
            url: "formulario.php",
            type: "POST",
            data: $(form).serializeArray(),
            async: true,
            beforeSend: function (html){
                $('#submit').attr("class", "btn btn-warning");
                $('#submit').html("ENVIANDO...");
                $('#inscreva2').html("ENVIANDO...");
            },
            success: function (html) {
            setTimeout(function(){ 
                $('#submit').attr("class", "btn btn-success");
                $('#submit').html("ENVIADO COM SUCESSO");
                $('#inscreva2').html("ENVIADO!");
                // window.location.href = "https://dowbis.com.br/servicos-industrias/obrigado.php";

            }, 1000);
            }
            
        });
        return false;
    });




// GRID IMAGENS
$(document).ready(function() {
   $.ajax( {
       url: 'https://jsonplaceholder.typicode.com/photos',
       dataType: 'json',
       async: true, 
       success: function(data) {
        console.log(data[0]);
        var img = '',
            // title = '';
            response = '';

        for (var i = 0; i < 50; i++) {

       
        if (i == 0 ) {
        response += '<div class="carousel-item col-md-3 active">\
                        <div class="panel panel-default">\
                            <div class="panel-thumbnail">\
                                <a href="'+data[i].url+'" title="'+data[i].title+'" class="thumb">\
                                <div class="hover-image">\
                                    <img class="img-fluid mx-auto d-block" src="'+data[i].thumbnailUrl+'" alt="'+data[i].title+'">\
                                    <span class="texto">'+data[i].title+'</span>\
                                </div>\
                                </a>\
                            </div>\
                        </div>\
                    </div>';

        } else {
        response += '<div class="carousel-item col-md-3">\
                        <div class="panel panel-default">\
                            <div class="panel-thumbnail">\
                                <a href="'+data[i].url+'" title="'+data[i].title+'" class="thumb">\
                                <div class="hover-image">\
                                    <img class="img-fluid mx-auto d-block" src="'+data[i].thumbnailUrl+'" alt="'+data[i].title+'">\
                                    <span class="texto">'+data[i].title+'</span>\
                                </div>\
                                </a>\
                            </div>\
                        </div>\
                    </div>';
        }  
  
        }

        $('.carousel-inner').append(response);
       }
   });
});








// JS REFLEXO
$(document).ready(function(){
    setInterval(function(){
        $(".reflexo").animate({
            left:510,
            opacity: 0.7
        }, 4900);
        setTimeout(function(){
            $(".reflexo").css({left:-520,opacity:0.7});
        },5000);
    },7000);
});

// JS REFLEXO
$(document).ready(function(){
    setInterval(function(){
        $(".reflexo2").animate({
            left:480,
            opacity: 0.4
        }, 600);
        setTimeout(function(){
            $(".reflexo2").css({left:-50,opacity:0});
        },500);

    },2000);
});

/* EFEITO MOBILE FORMULÁRIO */
$(".efeito").hide();
$("#btn-formulario-a,#btn-euquero-a").click(function () {
    $("#form-box").show();
    $(".efeito").show();
});



$(".btn-close").click(function () {
    $("#form-box").hide();
    $(".efeito").hide();

    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 1000);
});

$("#eft").click(function () {
    $("#form-box").hide();
    $(".efeito").hide();
});

