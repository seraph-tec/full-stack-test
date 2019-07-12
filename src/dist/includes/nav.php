<nav class="navbar col navbar-expand-lg navbar-dark bg-dark fixed-top">
    

    <div class="container-fluid">
        <div class="col-md-3 logoWrapper">
            <img src="img/logo.png" alt="">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleTopo" aria-controls="navbarToggleTopo" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse col-md-6 navbar-collapse justify-content-md-center" id="navbarToggleTopo">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#topo">
                        HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carrossel">GALERIA DE FOTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#formulario">FALE CONOSCO</a>
                </li>
                
            </ul>
        </div>
        <div class="col-md-3 collapse navbar-collapse ctaWrapper"><a id="btnTopo" class="btn btn-lg btn-light float-md-right float-lg-right float-xl-right"  data-toggle="modal" data-target="#modalForm" href="#modalForm" role="button">QUERO PARTICIPAR</a></div>
    </div>
    
</nav>
<!-- Modal -->
<div class="modal fade " id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalFormLabel">Cadastre-se definiebas et unum</h5>
        <button id="btn-close-modal" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalFormWrapper" >
        <?php include('_form.php') ?>
      </div>
      
    </div>
  </div>
</div> 