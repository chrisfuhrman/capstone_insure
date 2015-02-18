@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">

<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11">
			
			
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						
						<div class="box-content">
							
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert">×</button>
								Drag & drop file upload with image preview
							</div>
								  
							<div class="form-group">
								<label class="control-label">File Upload</label>
								<div class="controls">
								  	<div id="dropzone">
										<form action="/fileUpload" class="dropzone">
											{{ Form::token() }}
											<div class="fallback">
												<input name="file" type="file" multiple="" />
											</div>
										</form>
									</div>
								</div>
							</div>	  

						</div>
					</div>
				</div><!--/col-->

			</div><!--/row-->

		
					
			</div>
			<!-- end: Content -->
				
		</div><!--/row-->		
		
	</div><!--/container-->

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
	<script src="assets/js/dropzone.min.js"></script>
	
	<!-- theme scripts -->
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/form-dropzone.js"></script>
	
	<!-- end: JavaScript-->



@stop