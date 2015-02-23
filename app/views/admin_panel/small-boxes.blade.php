<div class="row">
	
	<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
		<div class="smallstat box">
			<div class="boxchart-overlay blue">
				<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
			</div>	
			<span class="">Submitted today</span><br>
			<span class="value">{{{ $appsToday }}}</span>
		</div>
	</div><!--/col-->
	
	<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
		<div class="smallstat box">
			<div class="boxchart-overlay green">
				<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
			</div>	
			<span class="">Avg Premium</span><br>
			<span class="value">${{ round($avgPrem, 2) }}</span>
		</div>
	</div><!--/col-->
	
	<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
		<div class="smallstat box">
			<i class="fa fa-download red"></i>
			<span class="">Apps to Review</span><br>
			<span class="value">{{{ $appsToReview }}}</span>
		</div>
	</div><!--/col-->
	
	<div class="col-lg-3 col-sm-6 col-xs-6 col-xxs-12">
		<div class="smallstat box">
			<i class="fa fa-money yellow"></i>
			<span class="">Quotes this month</span><br>
			<span class="value">{{{ $monthlyQuotesProduced }}}</span>
		</div>
	</div><!--/col-->

</div><!--/row-->	