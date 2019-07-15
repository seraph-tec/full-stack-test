    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
          <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Mussum Ipsum,</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">cacilds vidis litro abertis. Suco de cevadiss deixa as pessoas mais interessantis. Quem num gosta di mé, boa gentis num é. </h2>
            <a href="#form" class="btn btn-primary js-scroll-trigger">Cadastrar</a>
          </div>
        </div>
    </header>

    <section id="image" class="img-section">
        <div class="container">
            <div class="row">
                <h3 class="text-white text-center mb-5">Imagens</h3>
                <div class="owl-carousel owl-theme">
                <?php foreach ($imgens as $imgem) { ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $imgem['url'] ?>" alt="First slide">
                        <h5 class="text-white"><?php echo $imgem['title']?></h5>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>                    
    </section>

    <section id="about" class="about-section text-center col-lg-6">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Mussum Ipsum, cacilds vidis litro abertis.</h2>
                    <p class="text-white-50">Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Quem num gosta di mim que vai caçá sua turmis!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="input-section col-lg-6 col-sm-12">
        <div class="container mb-1">
            <form action="form.php" method="post" class="form-inline text-white">                
                <div class="form-group col-lg-5">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="firstName" placeholder="Ex: João">
                </div>
                <div class="form-group col-md-5">
                    <label for="last-Name">Sobrenome</label>
                    <input type="text" class="form-control" id="last-Name" name="lastName" placeholder="Ex: Silva">
                </div>
                <div class="form-group col-md-5">
                    <label for="address">Rua</label>
                    <input type="text" class="form-control" id="address" name="street" placeholder="Ex: Av. Afonso Pena">
                </div>
                <div class="form-group col-md-5">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Ex: Belo Horizonte">
                </div>
                <div class="form-group col-md-5">
                    <label for="state">Estado</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Ex: Minas Gerais">
                </div>
                <div class="form-group col-md-5">
                    <label for="country">País</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Ex: Brasil">
                </div>   
                <div class="form-group col-md-5">
                    <label for="emailAddress">E-mail</label>
                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Ex: joaosilva@gmail.com">
                </div>
                <div class="form-group col-md-5">
                    <label for="mobilePhoneNumber">Telefone</label>
                    <input type="tell" class="form-control" id="mobilePhoneNumber" name="mobilePhoneNumber" placeholder="Ex: (31) 99999-9999">
                </div>
                <button type="submit" class="btn btn-primary btn-lg mt-5 mb-5 mx-auto  ">Cadastrar</button>
            </form>
        </div>
    </section>
    <section class="contact-section bg-black row mx-auto col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Localidade</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">Ouro Preto, Belo Horizonte MG</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">
                                <a href="mailto:bruno_freitas@live.com?Subject=Contato%20site" target="_top">bruno_freitas@live.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Contato</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">(31) 99254-7420</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a href="https://www.linkedin.com/in/bruno-freitas-79758a46" class="mx-2" target="_blank"> 
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.facebook.com/brunofreitasmg"  class="mx-2" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://github.com/oBrunoFreitas"  class="mx-2" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </section>

