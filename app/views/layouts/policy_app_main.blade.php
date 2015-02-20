
@include('partials.app-header')
<link rel="stylesheet" href="/assets/css/style.css"> 

<style type="text/css">

.navbar-life-app {
	padding-left: 205px;
}

</style>

@include('partials.main_navbar')

<ol class="breadcrumb breadcrumb-no-pad">
  <li><a href="#" class="active-breadcrumb">Proposed Insured</a></li>
  <li><a href="#">Employment</a></li>
  <li><a href="#">Usage</a></li>
  <li><a href="#">Options</a></li>
  <li><a href="#">Errors</a></li>
  <li><a href="#">Issues</a></li>
  <li><a href="#">License</a></li>
  <li><a href="#">Authors</a></li>
  <li><a href="#">Colophon</a></li>
</ol>

<!-- progress bar -->
<!-- <div class="progress col-sm-12">
	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	<span class="sr-only">40% Complete (success)</span>
	</div>
</div> -->
<!-- end progress bar -->


<div id="test-this">
	<nav class="scroll-nav col-md-2 pull-left" id="test-this" role="navigation">
		<div class="scroll-nav__wrapper"><span class="scroll-nav__heading">Application ID:</span>
		<ol class="scroll-nav__list">
		<li class="scroll-nav__item description active in-view">
			<a href="#scrollNav-1" class="scroll-nav__link">Proposed Insured</a>
		</li>
		<li class="scroll-nav__item features in-view">
			<a href="#scrollNav-2" class="scroll-nav__link">Employment</a>
			</li>
		<li class="scroll-nav__item usage">
		<a href="#scrollNav-3" class="scroll-nav__link">Usage</a>
		</li>
		<li class="scroll-nav__item options">
			<a href="#scrollNav-4" class="scroll-nav__link">Options</a>
		</li>
		<li class="scroll-nav__item errors">
			<a href="#scrollNav-5" class="scroll-nav__link">Errors</a>
		</li>
		<li class="scroll-nav__item issues"><a href="#scrollNav-6" class="scroll-nav__link">Issues</a></li>
		<li class="scroll-nav__item license">
			<a href="#scrollNav-7" class="scroll-nav__link">License</a>
		</li><li class="scroll-nav__item authors">
		<a href="#scrollNav-8" class="scroll-nav__link">Authors</a></li><li class="scroll-nav__item colophon"><a href="#scrollNav-9" class="scroll-nav__link">Colophon</a></li>
		</ol>
		</div>
	</nav>
	<!-- </div> -->

	<!--content that changes -->
	<div class="col-md-8 pull-right " id="right-section">

		<div class="section-heading">
			<h2>Proposed Insured Information</h2>
		</div>

		<div class="clipboard-container">
			<div class="inner-clipboard">
				@yield('content')
			</div>
			
		</div>


	</div>

	


	<div class="clear-fix">
		@include('partials.footer')
	</div>

</div>

<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>





	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/jquery.chosen.min.js"></script>
	<script src="assets/js/jquery.cleditor.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.min.js"></script>
	<script src="assets/js/jquery.hotkeys.min.js"></script>
	<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	

	<script src="/assets/js/stickUp.min.js"></script>
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/ui-sliders-progress.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->

	<style type="text/css">
		.emp_extra{
			display: none;
		}
	</style>

	<script src="assets/js/custom-xcharts.js"></script>

	

	<script>

		$(document).ready(function() {

			$('#address-confirm-yes').children().attr('checked', true);


              jQuery(function($) {              
                  $('.breadcrumb').stickUp();
              }); 

              // jQuery(function($) {              
              //     $('.clipboard-container').stickUp();
              //  });

			$('.tobacco_extra').hide();
			$('.citizen_extra').hide();
			$('#verify-address-block').hide();
			$('.emp_extra').show();

			function empVal () {

				var value = $( "#emp_status" ).val();
				if (value == 'default'){

					$('.emp_extra').slideDown(900);

				} else {

					$('.emp_extra').slideUp(900);

				}

			}
			$( "select" ).change( empVal );


			$( "#citizen" ).on('click', function(){
					var value = $(this).prop( 'checked' );
				
				if (value == true){

					$('.citizen_extra').slideDown(900);

				} else {

					$('.citizen_extra').slideUp(900);

				}

				});
	
		
				$( "#tobacco" ).on('click', function(){
					var value = $(this).prop( 'checked' );
				
				if (value == true){

					$('.tobacco_extra').slideDown(900);

				} else {

					$('.tobacco_extra').slideUp(900);

				}

				});		
				
			// $( "#verify-address" ).on('click', function(){
			// 	var value = $('input:radio[name=correct_address]:checked').val();
			// 	console.log('test');
			// 	if (value == 'Yes'){

			// 		$('#verify-address-block').slideDown(900);

			// 	} else {

			// 		$('#verify-address-block').slideUp(900);

			// 	}
			// });

			// $('.btn-toggle').click(function() {

			//     $(this).find('.btn').toggleClass('active');  
			    
			//     if ($(this).find('.btn-primary').size()>0) {
			//     	$(this).find('.btn').toggleClass('btn-primary');
			//     }
			//     if ($(this).find('.btn-danger').size()>0) {
			//     	$(this).find('.btn').toggleClass('btn-danger');
			//     }
			//     if ($(this).find('.btn-success').size()>0) {
			//     	$(this).find('.btn').toggleClass('btn-success');
			//     }
			//     if ($(this).find('.btn-info').size()>0) {
			//     	$(this).find('.btn').toggleClass('btn-info');
			//     }
			    
			//     $(this).find('.btn').toggleClass('btn-default');
			       
			// });

			// 

			 $('#address-confirm-yes').click(function() {
					$('#address-confirm-yes').children().attr('checked', true);
					$('#address-confirm-no').children().attr('checked', false);
				});

			 $('#address-confirm-no').click(function() {

					$('#address-confirm-no').children().attr('checked', true);					
					$('#address-confirm-yes').children().attr('checked', false);
				});

			$('.btn-verify-address').click(function() {

				var idName = $(this).attr('id');
				var id = $('#'+idName);
				var classNames = id.attr('class');


				var isHilighted = (classNames.search('btn-info') != -1) ? true : false;

				// $(innerInputs).attr('checked', false);


				
				
				

			
				
				var otherBtn = (idName == 'address-confirm-no') ? $('#address-confirm-yes') : $('#address-confirm-no');

				if(!isHilighted) {

					id.removeClass('btn-default').addClass('btn-info');
					otherBtn.addClass('btn-default').removeClass('btn-info');

				}
			});	

			$( "#verify-address" ).on('click', function(){
				var value = $('input:radio[name=verify-address]:checked').val();

				console.log(value);
				if (value == 'no'){

					$('#verify-address-block').slideDown(900);

				} else {

					$('#verify-address-block').slideUp(900);

				}
			});	

		});

	</script>

</body>
</html>