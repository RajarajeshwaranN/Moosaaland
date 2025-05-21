      $(document).ready(function() {
         
         $("#owl-example").owlCarousel({
          
          items : 3,
          navigation: true,
           navigationText: [
             "<i class='fa fa-chevron-left fa-3x' aria-hidden='true'></i>",
             "<i class='fa fa-chevron-right fa-3x' aria-hidden='true'></i>"
             ],
         
         });
         
         
         });

         jQuery(document).ready(function($) {
         
         $('#myCarousel').carousel({
             interval: 5000
         });
         
         $('#carousel-text').html($('#slide-content-0').html());
         
         //Handles the carousel thumbnails
         $('[id^=carousel-selector-]').click( function(){
             var id_selector = $(this).attr("id");
             var id = id_selector.substr(id_selector.length -1);
             var id = parseInt(id);
             $('#myCarousel').carousel(id);
         });
         
         
         // When the carousel slides, auto update the text
         $('#myCarousel').on('slid.bs.carousel', function (e) {
              var id = $('.item.active').data('slide-number');
             $('#carousel-text').html($('#slide-content-'+id).html());
         });
         });