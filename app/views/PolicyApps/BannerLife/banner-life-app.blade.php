@extends('layouts.master-app')


@section('content')
<div class="col-md-11 pull-left">

	@include('PolicyApps.app-head')
	@include('PolicyApps.BannerLife.sec_a')
	
</div>
@stop




@section('bottom-script')
		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="assets/js/jquery-2.1.0.min.js"></script>

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

	<script>

		$(document).ready(function() {
			$('.tobacco_extra').hide();
			$('.citizen_extra').hide();
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

			$('.btn-toggle').click(function() {

			    $(this).find('.btn').toggleClass('active');  
			    
			    if ($(this).find('.btn-primary').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-primary');
			    }
			    if ($(this).find('.btn-danger').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-danger');
			    }
			    if ($(this).find('.btn-success').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-success');
			    }
			    if ($(this).find('.btn-info').size()>0) {
			    	$(this).find('.btn').toggleClass('btn-info');
			    }
			    
			    $(this).find('.btn').toggleClass('btn-default');
			       
			});

		});

	</script>



@stop

