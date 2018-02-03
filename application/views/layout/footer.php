<main>
<style>
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
</style>
<footer class="page-footer green lighten-1">
  <div class="container">
	<div class="row">
	  <div class="col l6 s12">
		<h5 class="white-text"> Make it Easier Students </h5>
		<!--h5 class="white-text"> The Best Way to Wasting Time is School </h5-->
	  </div>
	  <div class="col l4 offset-l2 s12">
		<h5> <a href="<?php echo base_url('tentangkami');?>"> Tentang Kami </a> </h5>
		<ul>
		  <li class="white-text">&nbsp;Alpha Version 15.7</li>
		</ul>
	  </div>
	</div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    Copyright © 2017 | XII-RPL 2 | Kerja Proyek Kelompok 1
    </div>
  </div>
</footer>
</main>
<!--=======================================================================================-->
                      <!--Materialize JavaScript-->
  <!--script src="https://code.jquery.com/jquery-2.1.1.min.js"></script-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery_311.js');?>"></script>
  <!--script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery_1.12.1_ui_min.js');?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/init.js"></script>
<!--========================================================================================-->

<!--  Scripts-->
  <script type="text/javascript">
$(document).ready(function(){
	$('.materialboxed').materialbox();
	$('#tabs-swipe-demo').tabs({ 'swipeable': true });
	// $('.button-collapse').sideNav({
      // menuWidth: 150, // Default is 300
      // edge: 'right', // Choose the horizontal origin
      // closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      // draggable: true // Choose whether you can drag to open on touch screens
	// });
    $('textarea#textareaslogan').characterCounter();
	$('select').material_select();
    $('.collapsible').collapsible();
	$(".button-collapse").sideNav();
    $('.tooltipped').tooltip({delay: 50});
	$('.modal').modal();
    $('.slider').slider();
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
	});
	//Time Picker:
	$('.timepicker').pickatime({
	default: 'now',
	twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
	donetext: 'OK',
	autoclose: false,
	vibrate: true // vibrate the device when dragging clock hand
	});
	$('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
	});
	//Autocomplete
	$('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
	});

  //Check/Uncheck kAll
  $(function(){
    $("#allsakit").click(function () {
          $('.itemsakit').prop('checked', this.checked);
    });
    $("#allizin").click(function () {
          $('.itemizin').prop('checked', this.checked);
    });
    $("#allalfa").click(function () {
          $('.itemalfa').prop('checked', this.checked);
    });
    $("#allhadir").click(function () {
          $('.itemhadir').prop('checked', this.checked);
    });
  });
});
  </script>

  </body>
</html>
