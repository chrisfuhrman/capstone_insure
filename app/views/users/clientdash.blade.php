@extends('layouts.master')

@section('content')

<!-- sidebar -->		

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="white" id="home-btn" href="#">
                    Home
                </a>
            </li>
            <li>
                <a class="white" id="app-updates-btn" href="#"><button class="btn btn-primary" type="button">
		  			Application Updates <span class="badge">2</span>
							</button>
				</a>
            </li>
            <li>
                <a class="white" id="in-process-btn" href="#">In-Process Application</a>
            </li>
            <li>
                <a class="white" id="complete-btn" href="#">Completed Application Overview</a>
            </li>
            <li>
                <a class="white" id="request-btn" href="#">Request Edit of Application</a>
            </li>
            <li>
                <a class="white" id="to-do-btn" href="#"><button class="btn btn-primary" type="button">
		  			Items To-Do <span class="badge">3</span>
							</button>
				</a>
            </li>
            <li>
                <a class="white" id="account-btn" href="#">Account Settings</a>
            </li>
            <li>
                <a class="white" href="{{{ action('ExtrasController@showContact') }}}">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="container-client">
						<div class="container">
							<! -- section 01 -->
							<div id="section-01">
								<h1 class="white"> Welcome {{{ $user->first_name }}}! </h1>
			                        <p class="white">This is your personal dashboard. Select items from the sidebar to view any and all applications submitted or in-process.</p>
			                        <div class="row">
			                        	<div class="col-md-4 col-md-offset-1">
				                        	<div class="panel panel-info">
												<div class="panel-heading">
												    <h3 class="panel-title">Current Coverage</h3>
												</div>
												<div class="panel-body">

													@foreach($user->policies as $policy)
														<? setlocale(LC_MONETARY, 'en_US'); ?>
												    	<p class="text-center">{{{ money_format('$%i', $policy->coverage_amount) }}} {{{ $policy->coverage_duration }}}yr.</p>
												    	<p class="text-center">Term Policy</p>
												    	<p class="text-center">Expires on: 02/22/25</p>

													@endforeach
												    
												</div>
											</div>
										</div>
			                        	<div class="col-md-4 col-md-offset-1">
				                        	<div class="panel panel-warning">
												<div class="panel-heading">
												    <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Needs Attention</h3>
												</div>
												<div class="panel-body">
												    <a class="text-center" href="{{{ action('PolicyAppController@showLifeAppBL') }}}">Saved Application</a>
												</div>
											</div>
										</div>
			                        </div>
			                        <div class="row">
										<div class="col-md-4 col-md-offset-4">
											<a class="btn btn-success btn-lg new-quote-btn" href="#">Get Another Quote</a>
										</div>
				                    </div>
			                </div>
		                    <! -- end section 01 -->

		                    <! -- section 02 -->
		                    <div class="hide-this" id="section-02">
								<h1 class="white"><i class="fa fa-tasks"></i> Application Updates</h1>
								<h2><p class="white">You have <strong>2</strong> new updates:</p></h2>
								<ul class="white">
									<li><h3>Your application was submitted on February 14th, 2015</h3></li>
									<li><h3>Your application is currently: IN PROCESS</h3></li>
								</ul>
							</div>
							<! -- end section 02 -->

							<! -- section 03 -->
		                    <div class="hide-this" id="section-03">
								<h1 class="white"><i class="fa fa-spinner fa-spin"></i> In-Process Application</h1>
								<p class="white">Your application started processing on: <strong>02/15/15</strong></p>
								<div class="progress progress-blue">
									<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
									    <span class="sr-only">25% Complete</span>
									</div>
								</div>
							</div>
							<! -- end section 03 -->

							<! -- section 04 -->
		                    <div class="hide-this" id="section-04">
								<h1 class="white"><i class="fa fa-check"></i> Completed Application Overview</h1>
								<a class="btn btn-success" href="{{{ action('PolicyAppController@showLifeAppBL') }}}">View Your Completed Application</a>
							</div>
							<! -- end section 04 -->

							<! -- section 05 -->
		                    <div class="hide-this" id="section-05">
		                    	<div class="row">
		                    		<div class="col-md-12">
										<h1 class="white"><i class="fa fa-exchange"></i> Request Edit of Application</h1>
										<div class="col-md-4">
											<form>
											  <div class="form-horizontal">
											    <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
											  </div>
											 	<textarea class="form-control" rows="2" placeholder="Type your requested changes here."></textarea>
											  <button type="submit" class="btn btn-default">Send Request</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<! -- end section 05 -->

							<! -- section 06 -->
		                    <div class="hide-this" id="section-06">
								<h1 class="white"><i class="fa fa-pencil-square-o"></i> Items To-Do</h1>
								<div class="row">
									<div class="col-md-6">
										<table class="table table-bordered table-bg table-hover">
											<tr>
												<td><h4><i class="fa fa-user-md"></i> Contact Your Doctor for Medical History</h4></td>
												<td>
													<h4>
														<a href="#">
															<i class="fa fa-square-o"></i>
														</a>
													</h4>
												</td>
											</tr>
											<tr>
												<td><h4><i class="fa fa-heart"></i> Bloodwork</h4></td>
												<td>
													<h4>
														<a href="#">
															<i class="fa fa-square-o"></i>
														</a>
													</h4>
												</td>
											</tr>
											<tr>
												<td><h4><i class="fa fa-heartbeat"></i> Blood Pressure</h4></td>
												<td>
													<h4>
														<a href="#">
															<i class="fa fa-square-o"></i>
														</a>
													</h4>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<! -- end section 06 -->

							<! -- section 07 -->
		                    <div class="hide-this" id="section-07">
								<h1 class="white"><i class="fa fa-cogs"></i> Account Settings</h1>
							</div>
							<! -- end section 07 -->


		                </div>
		            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>



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


	});





	</script>




@stop