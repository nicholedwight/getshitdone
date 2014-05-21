$(document).ready(function(){
  $('html').addClass('js');

  $('#new_category').addClass('hidden');
  $(".icon-plus19").on( "click", function() {
    $('#new_category').toggleClass('hidden');
  });

  $('#new_list_item').addClass('hidden');
  $(".add-icon").on( "click", function() {
    $('#new_list_item').toggleClass('hidden');
  });
});
