$(document).ready(function(){
  $('html').addClass('js');

  $('#new_category').addClass('hidden');
  $("#new-cat-button").on( "click", function() {
    $('#new_category').toggleClass('hidden');
  });
});
