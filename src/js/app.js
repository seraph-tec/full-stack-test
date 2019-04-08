$(document).ready(function() {
    $('.owl-carousel').owlCarousel();

});

var $owl = $('.owl-carousel');

$owl.owlCarousel({
          loop:true,
          items: 1,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:false
}); 

$.ajax({
  url: 'json/data.json',
  dataType: 'json',
  success: function(data) {
    var content = '';
    var alt = "pic123";
    for (i in data.owl) {
            content += "<div class='item'><img src=\"" +data.owl[i].img+ "\" alt=\"" +alt+ "\"></div>";
        }

    $owl.trigger('insertContent.owl',content);
    //$owl.append(content); This stacks the images above eachother, not affected by the carousel settings
  }
});