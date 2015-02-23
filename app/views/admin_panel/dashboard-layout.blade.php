<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>InsureJoy Admin Panel</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.min.css" rel="stylesheet">
	<link href="assets/css/retina.min.css" rel="stylesheet">
	<!-- end: CSS -->
	<link rel="stylesheet" href="assets/css/chris-css.css">
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<script src="assets/css/ie6-8.css"></script>
		
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
	<!-- end: Favicon and Touch Icons -->	
		
</head>

<body>

	<!-- start: Header -->
	<header class="navbar">
		<div class="container">
		<div class="nav-bar-main">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>		
				<a class="navbar-brand col-lg-2 col-sm-1 col-xs-12" href="/admin"><span>InsureJoy</span></a>
			<!-- start: Header Menu -->
			<div class="nav-no-collapse header-nav">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="/admin#">
							<i class="fa fa-warning"></i>
						</a>
						<ul class="dropdown-menu notifications">
							<li class="dropdown-menu-title">
								<span>You have 11 notifications</span>
							</li>	
                        	<li>
                                <a href="/admin#">
									<span class="icon blue"><i class="fa fa-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">1 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon green"><i class="fa fa-comment"></i></span>
									<span class="message">New comment</span>
									<span class="time">7 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon green"><i class="fa fa-comment"></i></span>
									<span class="message">New comment</span>
									<span class="time">8 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon green"><i class="fa fa-comment"></i></span>
									<span class="message">New comment</span>
									<span class="time">16 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon blue"><i class="fa fa-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">36 min</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon yellow"><i class="fa fa-shopping-cart"></i></span>
									<span class="message">2 items sold</span>
									<span class="time">1 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="/admin#">
									<span class="icon red"><i class="fa fa-user"></i></span>
									<span class="message">User deleted account</span>
									<span class="time">2 hour</span> 
                                </a>
                            </li>
							<li class="warning">
                                <a href="/admin#">
									<span class="icon red"><i class="fa fa-shopping-cart"></i></span>
									<span class="message">Transaction was canceled</span>
									<span class="time">6 hour</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon green"><i class="fa fa-comment"></i></span>
									<span class="message">New comment</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="icon blue"><i class="fa fa-user"></i></span>
									<span class="message">New user registration</span>
									<span class="time">yesterday</span> 
                                </a>
                            </li>
                            <li class="dropdown-menu-sub-footer">
                        		<a>View all notifications</a>
							</li>	
						</ul>
					</li>
					<!-- start: Notifications Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="/admin#">
							<i class="fa fa-tasks"></i>
						</a>
						<ul class="dropdown-menu tasks">
							<li>
								<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                        	</li>
							<li>
                                <a href="/admin#">
									<span class="header">
										<span class="title">iOS Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressBlue">80</div> 
                                </a>
                            </li>
                            <li>
                                <a href="/admin#">
									<span class="header">
										<span class="title">Android Development</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressYellow">47</div> 
                                </a>
                            </li>
                            <li>
                                <a href="/admin#">
									<span class="header">
										<span class="title">Django Project For Google</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressRed">32</div> 
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="header">
										<span class="title">SEO for new sites</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressGreen">63</div> 
                                </a>
                            </li>
                            <li>
                                <a href="/admin#">
									<span class="header">
										<span class="title">New blog posts</span>
										<span class="percent"></span>
									</span>
                                    <div class="taskProgress progressSlim progressPink">80</div> 
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all tasks</a>
							</li>	
						</ul>
					</li>
					<!-- end: Notifications Dropdown -->
					<!-- start: Message Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="/admin#">
							<i class="fa fa-envelope"></i>
						</a>
						<ul class="dropdown-menu messages">
							<li>
								<span class="dropdown-menu-title">You have 9 messages</span>
							</li>	
                        	<li>
                                <a href="/admin#">
									<span class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Łukasz Holeczek
									     </span>
										<span class="time">
									    	6 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="/admin#">
									<span class="avatar"><img src="assets/img/avatar2.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Megan Abott
									     </span>
										<span class="time">
									    	56 min
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="/admin#">
									<span class="avatar"><img src="assets/img/avatar3.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Kate Ross
									     </span>
										<span class="time">
									    	3 hours
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                                <a href="/admin#">
									<span class="avatar"><img src="assets/img/avatar4.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Julie Blank
									     </span>
										<span class="time">
									    	yesterday
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href="/admin#">
									<span class="avatar"><img src="assets/img/avatar5.jpg" alt="Avatar"></span>
									<span class="header">
										<span class="from">
									    	Jane Sanders
									     </span>
										<span class="time">
									    	Jul 25, 2012
									    </span>
									</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
							<li>
                        		<a class="dropdown-menu-sub-footer">View all messages</a>
							</li>	
						</ul>
					</li>
					<!-- end: Message Dropdown -->
					<li>
						<a class="btn" href="/admin#">
							<i class="fa fa-wrench"></i>
						</a>
					</li>
					<!-- start: User Dropdown -->
					<li id="admin-dropdown" class="dropdown">
						<a class="btn account dropdown-toggle" data-toggle="dropdown" href="/admin#">
							<!-- <div class="avatar"><img src="assets/img/avatar.jpg" alt="Avatar"></div> -->
							<div class="user">
								<span class="hello">Welcome!</span>
								<span class="name">{{{ $admin->first_name }}}</span>
							</div>
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-menu-title">
								
							</li>
							<li><a href="/admin#"><i class="fa fa-user"></i> Profile</a></li>
							<li><a href="/admin#"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="/admin#"><i class="fa fa-envelope"></i> Messages</a></li>
							<li><a href="login.html"><i class="fa fa-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
		</div>
		</div>	
	</header>
	<!-- end: Header -->
	
		<div class="container">
		<div class="row">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="col-lg-2 col-sm-1">
				
				<input type="text" class="search hidden-sm" placeholder="..." />
				
				<div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="/admin"><i class="fa fa-bar-chart-o"></i><span class="hidden-sm"> Dashboard</span></a></li>
						<!-- Marketing Section -->	
						<li>
							<a class="dropmenu" href="/admin#"><i class="fa fa-eye"></i><span class="hidden-sm">Marketing</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="admin#3"><i class="fa fa-circle"></i><span class="hidden-sm">Section 1</span></a></li>
								<li><a class="submenu" href="admin#2"><i class="fa fa-circle"></i><span class="hidden-sm">Section 2</span></a></li>
								<li><a class="submenu" href="admin#1"><i class="fa fa-circle"></i><span class="hidden-sm">Section 3</span></a></li>
							</ul>
						</li>
						<!-- Support Section -->
						<li>
							<a class="dropmenu" href="/admin#"><i class="fa fa-ticket"></i><span class="hidden-sm">Support</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="admin#33"><i class="fa fa-circle"></i><span class="hidden-sm">Review</span></a></li>
								<li><a class="submenu" href="admin#5"><i class="fa fa-circle"></i><span class="hidden-sm">Pending</span></a></li>
								<li><a class="submenu" href="admin#6"><i class="fa fa-circle"></i><span class="hidden-sm">Section 3</span></a></li>
							</ul>
						</li>
						<!--  -->
				{{-- 		<li>
							<a class="dropmenu" href="/admin#"><i class="fa fa-folder-o"></i><span class="hidden-sm">Another Section</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="page-infrastructure.html"><i class="fa fa-hdd-o"></i><span class="hidden-sm"> Infrastructure</span></a></li>
								<li><a class="submenu" href="page-inbox.html"><i class="fa fa-circle"></i><span class="hidden-sm"> Inbox</span></a></li>
								<li><a class="submenu" href="page-todo.html"><i class="fa fa-circle"></i><span class="hidden-sm"> ToDo & Timeline</span></a></li>
								<!-- Profile Page - Cooming Soone
								<li><a class="submenu" href="page-profile.html"><i class="fa fa-male"></i><span class="hidden-sm"> User Profile</span></a></li>
								-->
							</ul>	
						</li> --}}
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11">
			
				@include('admin_panel.small-boxes')

				@include('admin_panel.charts')

				@include('admin_panel.draft-apps')

				@include('admin_panel.in-process-apps')



				
			</div><!--/row-->	
					
				
		</div><!--/row-->		
		</div><!--/container-->
	
		
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>Here settings can be configured...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
	<div class="clearfix"></div>
	
	<footer>
		
		<div class="row">
			
			<div class="col-sm-7 text-right">
					&copy; 2015 InsureJoy, Inc.
			</div><!--/.col-->	
			
		</div><!--/.row-->	

	</footer>
		
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
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/js/excanvas.min.js"></script><![endif]-->
	<script src="assets/js/jquery.flot.min.js"></script>
	<script src="assets/js/jquery.flot.pie.min.js"></script>
	<script src="assets/js/jquery.flot.stack.min.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>
	<script src="assets/js/jquery.flot.time.min.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>

	<!-- table scripts -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	<script src="assets/js/pages/index.js"></script>
	<script src="assets/js/pages/table.js"></script>

	<script src="assets/js/pages/charts-xcharts.js"></script> 
	<script src="assets/js/xcharts.min.js"></script>

	<script src="assets/js/d3.min.js"></script>
	<!-- end: JavaScript-->
	<script>

		var tt = document.createElement('div'),
		  leftOffset = -(~~$('html').css('padding-left').replace('px', '') + ~~$('body').css('margin-left').replace('px', '')),
		  topOffset = -32;
		tt.className = 'ex-tooltip';
		document.body.appendChild(tt);

		var data = {
		  "xScale": "time",
		  "yScale": "linear",
		  "main": [
		    {
		      "className": ".pizza",
		      "data": [
		        {
		          "x": "2014-01-01",
		          "y": {{{ $revenueJan }}}
		        },
		        {
		          "x": "2014-02-01",
		          "y": {{{ $revenueFeb }}}
		        },
		        {
		          "x": "2014-03-01",
		          "y": {{{ $revenueMar }}}
		        },
		        {
		          "x": "2014-04-01",
		          "y": {{{ $revenueApr }}}
		        },
		        {
		          "x": "2014-05-01",
		          "y": {{{ $revenueMay }}}
		        },
		        {
		          "x": "2014-06-01",
		          "y": {{{ $revenueJun }}}
		        },
		        {
		          "x": "2014-07-01",
		          "y": {{{ $revenueJul }}}
		        },
		        {
		          "x": "2014-08-01",
		          "y": {{{ $revenueAug }}}
		        },
		        {
		          "x": "2014-09-01",
		          "y": {{{ $revenueSep }}}
		        },
		        {
		          "x": "2014-10-01",
		          "y": {{{ $revenueOct }}}
		        },
		        {
		          "x": "2014-11-01",
		          "y": {{{ $revenueNov }}}
		        },
		        {
		          "x": "2014-12-01",
		          "y": {{{ $revenueDec }}}
		        },
		        {
		          "x": "2015-01-01",
		          "y": {{{$revenueJan }}}
		        },
		        {
		          "x": "2015-02-01",
		          "y": {{{ $revenueFeb }}}
		        }
		      ]
		    }
		  ]
		};

		var opts = {
			"dataFormatX": function (x) { return d3.time.format('%Y-%m-%d').parse(x); },
			"tickFormatX": function (x) { return d3.time.format('%b-%y')(x); },
			"mouseover": function (d, i) {
			var pos = $(this).offset();
			$(tt).text(d3.time.format('%b-%y')(d.x) + ': ' + d.y)
			  .css({top: topOffset + pos.top, left: pos.left + leftOffset})
			  .show();
			},
			"mouseout": function (x) {
			$(tt).hide();
			}
		};

		var myChart = new xChart('line-dotted', data, '#myChart', opts);


	</script>
	
</body>
</html>