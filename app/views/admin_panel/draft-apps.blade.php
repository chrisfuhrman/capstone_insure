	<div class="row">		
				<div class="col-lg-12">
					<div class="box">
						<div class="box-header" data-original-title>
							<h2><i class="fa fa-folder-open"></i><span class="break"></span>Draft Apps</h2>
							<div class="box-icon">
								<a href="table.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="table.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="table.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
									<tr>
										<th>Username</th>
										<th>Name</th>
										<th>Date Saved</th>
										<th>Yearly Prem.</th>
										<th>Coverage Amount</th>
										<th>Coverage Duration</th>
										<th>Phone #</th>
										<th>Status</th>
									</tr>
							  </thead>   
								<tbody>

								@foreach ($draftPolicies as $policy)
	               					<tr>
										<td>{{ $policy->user->username }}</td>
										<td>{{ $policy->first_name }}</td>
										<td>{{ $policy->created_at }}</td>
										<td>{{ $policy->yearly_premium }}</td>
										<td>{{ $policy->coverage_amount }}</td>
										<td>{{ $policy->coverage_duration }}</td>
										<td>{{ $policy->home_phone }}</td>
										<td class="center">
											<span class="label label-danger">{{ $policy->policy_status }}</span>
										</td>
									</tr>
          						@endforeach

							  </tbody>
						  </table>            
						</div>
					</div>
				</div><!--/col-->
			
			</div><!--/row-->