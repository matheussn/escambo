$(document).ready(function() {
  	$('.modal-trigger').leanModal();
    $('#popover').hide();
    $('#btn_popover').click(function(){
      $('#popover').slideToggle();
    });
});
