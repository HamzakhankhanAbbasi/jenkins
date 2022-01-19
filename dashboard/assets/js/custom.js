// Mobile Menu Js
$('.mobile-toggle').click(function(){
	$('.mobile-wrap').addClass('active');
});
// Mobile Navigation Close Button Js
$('.toogle-close-btn').click(function(){
	$('.mobile-wrap').removeClass('active');
});

$(document).ready(function(){
  $('#examp').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});
$(document).ready(function(){
  $('#reff').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});
$(document).ready(function(){
  $('.payment-type').click(function(){
    $('#payment-modal').hide();
    $('.modal-backdrop').hide();
        //$('#credit-modal').show();
      });
});
// Avtar JS
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#imagePreview').css('background-image', 'url('+e.target.result +')');
      $('#imagePreview').hide();
      $('#imagePreview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});