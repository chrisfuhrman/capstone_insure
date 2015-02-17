@extends('layouts.master')

@section('content')



<!-- sidebar -->		


<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a id="home-btn" href="#">
                    Home
                </a>
            </li>
            <li>
                <a id="app-updates-btn" href="#"><button class="btn btn-primary" type="button">
		  			Application Updates <span class="badge">2</span>
							</button>
				</a>
            </li>
            <li>
                <a id="in-process-btn" href="#">In-Process Application</a>
            </li>
            <li>
                <a id="complete-btn" href="#">Completed Application Overview</a>
            </li>
            <li>
                <a id="request-btn" href="#">Request Edit of Application</a>
            </li>
            <li>
                <a id="to-do-btn" href="#"><button class="btn btn-primary" type="button">
		  			To-Do: <span class="badge">3</span>
							</button>
				</a>
            </li>
            <li>
                <a id="account-btn" href="#">Account</a>
            </li>
            <li>
                <a id="settings-btn" href="#">Settings</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-darker">
						<div class="container">
							<! -- section 01 -->
							<div id="section-01">
								<h1 class="white"> Welcome USER! </h1>
			                        <p>Give the User some information about the sidebar and how it works.</p>
			                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>

			                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
			                </div>
		                    <! -- end section 01 -->

		                    <! -- section 02 -->
		                    <div class="hide-this" id="section-02">
								@include('partials.application_updates.blade.php')
							</div>
							<! -- end section 02 -->

							<! -- section 03 -->
		                    <div class="hide-this" id="section-03">
								@include('partials.in_process_application.blade.php')
							</div>
							<! -- end section 03 -->

							<! -- section 04 -->
		                    <div class="hide-this" id="section-04">
								@include('partials.completed_application_overview.blade.php')
							</div>
							<! -- end section 04 -->

							<! -- section 05 -->
		                    <div class="hide-this" id="section-05">
								@include('partials.request_edit.blade.php')
							</div>
							<! -- end section 05 -->

							<! -- section 06 -->
		                    <div class="hide-this" id="section-06">
								@include('partials.to_do_items.blade.php')
							</div>
							<! -- end section 06 -->

							<! -- section 07 -->
		                    <div class="hide-this" id="section-07">
								@include('partials.client_account.blade.php')
							</div>
							<! -- end section 07 -->

							<! -- section 08 -->
		                    <div class="hide-this" id="section-08">
								@include('partials.client_settings.blade.php')
							</div>
							<! -- end section 08 -->


		                </div>
		            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>


@stop

@section('bottom-script')
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="/assets/js/jquery-2.1.0.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="/assets/js/jquery-1.11.0.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/assets/js/jquery-2.1.0.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	
		
	
	
	<!-- page scripts -->
	<script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/assets/js/jquery.sparkline.min.js"></script>
	<script src="/assets/js/jquery.chosen.min.js"></script>
	<script src="/assets/js/jquery.cleditor.min.js"></script>
	<script src="/assets/js/jquery.autosize.min.js"></script>
	<script src="/assets/js/jquery.placeholder.min.js"></script>
	<script src="/assets/js/jquery.maskedinput.min.js"></script>
	<script src="/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
	<script src="/assets/js/bootstrap-datepicker.min.js"></script>
	<script src="/assets/js/bootstrap-timepicker.min.js"></script>
	<script src="/assets/js/moment.min.js"></script>
	<script src="/assets/js/daterangepicker.min.js"></script>
	<script src="/assets/js/jquery.hotkeys.min.js"></script>
	<script src="/assets/js/bootstrap-wysiwyg.min.js"></script>
	<script src="/assets/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- theme scripts -->
	<script src="/assets/js/custom.min.js"></script>
	<script src="/assets/js/core.min.js"></script>


	
	<!-- inline scripts related to this page -->
	<script src="/assets/js/pages/form-elements.js"></script>
	
	<!-- end: JavaScript-->


	<script>
	 $(document).ready(function () {

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

		$('#home-btn').on('click', function() {
			$(this).hide();
			$('#tier2-btn').show();

			$('#section-01').fadeIn();
			$('#section-02').hide();
			$('#section-03').hide();
			$('#section-04').hide();
			$('#section-05').hide();
			$('#section-06').hide();
			$('#section-07').hide();
			$('#section-08').hide();
		});	
		$('#app-updates-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-02').fadeIn();
			$('#section-01').hide();
			$('#section-03').hide();
			$('#section-04').hide();
			$('#section-05').hide();
			$('#section-06').hide();
			$('#section-07').hide();
			$('#section-08').hide();

		});

		$('#in-process-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-03').fadeIn();
			$('#section-01').hide();
			$('#section-02').hide();
			$('#section-04').hide();
			$('#section-05').hide();
			$('#section-06').hide();
			$('#section-07').hide();
			$('#section-08').hide();

		});

		$('#complete-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-04').fadeIn();
			$('#section-01').hide();
			$('#section-02').hide();
			$('#section-03').hide();
			$('#section-05').hide();
			$('#section-06').hide();
			$('#section-07').hide();
			$('#section-08').hide();

		});

		$('#request-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-05').fadeIn();
			$('#section-01').hide();
			$('#section-02').hide();
			$('#section-03').hide();
			$('#section-04').hide();
			$('#section-06').hide();
			$('#section-07').hide();
			$('#section-08').hide();

		});

		$('#to-do-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-06').fadeIn();
			$('#section-01').hide();
			$('#section-02').hide();
			$('#section-03').hide();
			$('#section-04').hide();
			$('#section-05').hide();
			$('#section-07').hide();
			$('#section-08').hide();

		});

		$('#account-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-07').fadeIn();
			$('#section-01').hide();
			$('#section-02').hide();
			$('#section-03').hide();
			$('#section-04').hide();
			$('#section-05').hide();
			$('#section-06').hide();
			$('#section-08').hide();

		});

		$('#settings-btn').on('click', function() {
			$('#tier2-btn').hide();
			$('#next-btn').show();

			$('#section-08').fadeIn();
			$('#section-01').hide();
			$('#section-02').hide();
			$('#section-03').hide();
			$('#section-04').hide();
			$('#section-05').hide();
			$('#section-06').hide();
			$('#section-07').hide();

		});

	});





	</script>




@stop