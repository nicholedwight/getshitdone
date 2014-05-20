$(document).ready(function(){
  $('html').addClass('js');

  $('#new_category').addClass('hidden');
  $(".icon-plus3").on( "click", function() {
    $('#new_category').toggleClass('hidden');
  });
});
