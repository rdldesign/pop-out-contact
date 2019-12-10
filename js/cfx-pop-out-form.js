(function($) {


  $(document).ready(function($) {

  
    $("a.cfx-pop-out-form-button").on('click', function(e){
      e.preventDefault();
      $(".cfx-pop-out-form").removeClass('hidden');
      $("a.cfx-pop-out-form-close").hide();
      $( ".cfx-pop-out-form .wpcf7-form" ).prepend( '<a class="cfx-pop-out-form-close" href="#">Close</a>' );

      $("a.cfx-pop-out-form-close").on('click', function(e){
        e.preventDefault();
        $(".cfx-pop-out-form").addClass('hidden');
      });
    });


  });



})(jQuery);
