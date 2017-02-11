$(document).ready(function() {

  

  $('.carousel.carousel-slider').carousel({full_width: true});

   $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
      starting_top: '4%', // Starting top style attribute
      ending_top: '10%', // Ending top style attribute
    }
  );

$('input.autocomplete').autocomplete({
    data: {
      "Proyektor": null,
      "Speaker": null,
      "Kabel VGA": null,
      "Meja": null,
    }
  });

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });


	$(".button-collapse").sideNav();

  $('.parallax').parallax();

  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('.fixed-action-btn.toolbar').openToolbar();
  $('.fixed-action-btn.toolbar').closeToolbar();

  $('#textarea1').val('New Text');
  $('#textarea1').trigger('autoresize');

  $(".button-collapse").sideNav();
  


});
$(document).ready(function() {
    $('select').material_select();
  });



