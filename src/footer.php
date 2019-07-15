<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Envia sua dúvida!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="modal.php" method="post">
          <div class="form-group">
            <label for="name" class="col-form-label">Seu nome:</label>
            <input type="text" class="form-control" id="name" placeholder="Ex: João" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Seu email:</label>
            <input type="email" class="form-control" id="email" placeholder="Ex: joão@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="message" class="col-form-label" required>Mensagem:</label>
            <textarea class="form-control" id="message"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>        
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
 <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Bruno Freitas 2019
    </div>
  </footer>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>  
<script src="js/owl.carousel.min.js"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
</script>
</body>

</html>




