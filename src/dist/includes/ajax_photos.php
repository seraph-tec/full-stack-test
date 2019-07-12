<?php
$jsonUrl = "https://jsonplaceholder.typicode.com/photos";
$jsonContent = file_get_contents($jsonUrl);
$imagesCarousel = json_decode(file_get_contents($jsonUrl));
?>
<a class="carousel-control-prev" href="#photosCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#photosCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
<!-- Carousel items -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row">
            <?php
            foreach($imagesCarousel as $k => $photo):
            ?>

            <div class="col-md-3 each-photo">                
                <img src="<?php echo $photo->url ?>" alt="" class="img-thumbnail">
                <h4 class="lead"><?php echo $photo->title ?></h4>                
            </div>

            <?php 
            if(($k+1) % 4 == 0 && ($k+1) < count($imagesCarousel) ):
                echo '</div><!--.row-->                
                </div><!--.item-->
                <div class="carousel-item">
                    <div class="row">';
            endif;
            endforeach; 
            ?>
        </div>
        <!--.row-->
    </div>
    <!--.item-->
</div>
<!--.carousel-inner-->