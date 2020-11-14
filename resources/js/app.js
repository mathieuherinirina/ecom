require('./bootstrap');

$( document ).ready(function() {
  alert( "ready!" );
});

$('#ddlCategorie .dropdown-item').on('click', function(e) {
  // $('.txtCategory').val($(this).attr('data-id'));
  e.preventDefault();
  alert($(this).attr('data-id'));
});

