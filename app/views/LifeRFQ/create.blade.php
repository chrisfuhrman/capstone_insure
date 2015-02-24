@extends('layouts.master')

@section('content')
<style>
	
.btn-gender input[type="radio"], .btn-smoke input[type="radio"] {
    display: none; 
}

</style>

				<form name="startform" action="/cgi-bin/cqsl.cgi" method="POST">

<div class="quote-section">
	<div class="container">
		<div class="col-lg-10 col-sm-11">
			<div class="row">

				<h2 id="quote-header" class="quote-header no-padding-bottom-header">
					<i class="fa fa-check-circle-o white"></i>Price Comparison Tool
				</h2>
				<div class="col-sm-5 no-padding-left-header">
					<h4 id="sub-headline no-padding-left-header">
					We only ask the bare minimum information in order to provide
					 you with the most accurate estimates possible!
					</h4>
				</div>
				<div class="clear-fix"></div>


<!-- uncomment the UserLocation line if you want to use a different directory for 
your *.HTM files.  The *.HTM files will be in the COMPLIFE\USER\USER2 directory -->
<!-- <input type="hidden" name="UserLocation" value="USER2"> -->


<!-- Select a Template File For Your Results

Use only one of the following template values for your results.  

If you want to see an example of what the result templates look like, please visit: http://www.compulife.net/website/1

IMPORTANT - Template names must be ALL CAPITAL LETTERS.

Your Template Value Choices Are:

TEMPLATE.HTM
TEMPLATE_REQUEST_AP.HTM
TEMPLATE_LOGO.HTM
TEMPLATE_LOGO_0.HTM
TEMPLATE_LOGO_1.HTM
TEMPLATE_LOGO_2.HTM
TEMPLATE_MORE_INFO.HTM
-->

				<input type="hidden" name="TEMPLATEFILE" value="INSUREJOYTEMPLATE.HTM">
<!-- Select a Health Template File For Your Results

Hint: It will match your Template File name with an "H" in front of the value -->
				<input type="hidden" name="HTEMPLATEFILE" value="HTEMPLATE.HTM">


				<!-- Name -->
				<div class="form-group">
					<label class="control-label" for="first name">First Name</label>
					<div class="controls">
						<div class="input-group col-sm-5">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="first_name" class="form-control">
						</div>
					</div>
				</div>		
				<!-- State -->
				<div class="form-group">
					<label class="control-label" for="duration">State</label>
					<div class="controls">
						<div class="input-group col-sm-5">
							<span class="input-group-addon"><i class="fa fa-home"></i></span>
							<select name="State" class="form-control selectpicker input-tag">
								<option value="1">Alabama</option>
								<option value="2">Alaska</option>
								<option value="3">Arizona</option>
								<option value="4">Arkansas</option>
								<option value="5">California</option>
								<option value="6">Colorado</option>
								<option value="7">Connecticut</option>
								<option value="8">Delaware</option>
								<option value="9">Dist.Columbia</option>
								<option value="10">Florida</option>
								<option value="11">Georgia</option>
								<option value="12">Hawaii</option>
								<option value="13">Idaho</option>
								<option value="14">Illinois</option>
								<option value="15">Indiana</option>
								<option value="16">Iowa</option>
								<option value="17">Kansas</option>
								<option value="18">Kentucky</option>
								<option value="19">Louisiana</option>
								<option value="20">Maine</option>
								<option value="21">Maryland</option>
								<option value="22">Massachusetts</option>
								<option value="23">Michigan</option>
								<option value="24">Minnesota</option>
								<option value="25">Mississippi</option>
								<option value="26">Missouri</option>
								<option value="27">Montana</option>
								<option value="28">Nebraska</option>
								<option value="29">Nevada</option>
								<option value="30">New Hampshire</option>
								<option value="31">New Jersey</option>
								<option value="32">New Mexico</option>
								<option value="52">NY Non-Bus</option>
								<option value="33">NY Business</option>
								<option value="34">North Carolina</option>
								<option value="35">North Dakota</option>
								<option value="36">Ohio</option>
								<option value="37">Oklahoma</option>
								<option value="38">Oregon</option>
								<option value="39">Pennsylvania</option>
								<option value="40">Rhode Island</option>
								<option value="41">South Carolina</option>
								<option value="42">South Dakota</option>
								<option value="43">Tennessee</option>
								<option selected value="44">Texas</option>
								<option value="45">Utah</option>
								<option value="46">Vermont</option>
								<option value="47">Virginia</option>
								<option value="48">Washington</option>
								<option value="49">West Virginia</option>
								<option value="50">Wisconsin</option>
								<option value="51">Wyoming</option>
								<option value="53">Guam</option>
								<option value="54">Puerto Rico</option>
								<option value="55">Virgin Islands</option>
								<option value="56">Amer. Samoa</option>
							</select>
						</div>
					</div>
				</div>
				<!-- DOB -->
				<div class="form-group">
					<label class="control-label" for="date of birth">DOB: <span class="lastN"></span></label>
					<div class="controls">
						<div class="input-group col-sm-5">
							<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
							<select name="BirthMonth" class="form-control selectpicker input-tag">
								<option disabled selected>Month</option>
								<option value="1">January</option>
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option selected value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>			
							<span class="input-group-addon"></span>
							<select name="Birthday" class="form-control selectpicker input-tag">
								<option disabled selected>Day</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option selected>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
							<span class="input-group-addon"></span>
							<select name="BirthYear" class="form-control selectpicker input-tag">
								<option disabled selected>Year</option>
								<option>1934</option>
								<option>1935</option>
								<option>1936</option>
								<option>1937</option>
								<option>1938</option>
								<option>1939</option>
								<option>1940</option>
								<option>1941</option>
								<option>1942</option>
								<option>1943</option>
								<option>1944</option>
								<option>1945</option>
								<option>1946</option>
								<option>1947</option>
								<option>1948</option>
								<option>1949</option>
								<option>1950</option>
								<option>1951</option>
								<option>1952</option>
								<option>1953</option>
								<option>1954</option>
								<option>1955</option>
								<option>1956</option>
								<option>1957</option>
								<option>1958</option>
								<option>1959</option>
								<option>1960</option>
								<option>1961</option>
								<option>1962</option>
								<option>1963</option>
								<option>1964</option>
								<option>1965</option>
								<option>1966</option>
								<option>1967</option>
								<option>1968</option>
								<option>1969</option>
								<option>1970</option>
								<option>1971</option>
								<option>1972</option>
								<option>1973</option>
								<option>1974</option>
								<option>1975</option>
								<option>1976</option>
								<option>1977</option>
								<option>1978</option>
								<option>1979</option>
								<option>1980</option>
								<option>1981</option>
								<option>1982</option>
								<option>1983</option>
								<option>1984</option>
								<option>1985</option>
								<option selected>1986</option>
								<option>1987</option>
								<option>1988</option>
								<option>1989</option>
								<option>1990</option>
								<option>1991</option>
								<option>1992</option>
								<option>1993</option>
								<option>1994</option>
								<option>1995</option>
								<option>1996</option>
								<option>1997</option>
								<option>1998</option>
								<option>1999</option>
								<option>2000</option>
								<option>2001</option>
								<option>2002</option>
								<option>2003</option>
								<option>2004</option>
								<option>2005</option>
								<option>2006</option>
								<option>2007</option>
								<option>2008</option>
								<option>2009</option>
								<option>2010</option>
								<option>2011</option>
								<option>2012</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
							</select>
						</div>
					</div>
				</div>	
				<!-- Gender -->
				<div class="form-group">
					<label class="control-label" for="gender">Gender</label>
					<div class="controls" id="btn-gender">
						<div class="input-group col-sm-4 input-group-2">
						<label id="gender-male" class="btn-gender btn-spec btn btn-mini btn-default" for="">
							<input type="radio" name="Sex" value="M">Male
						</label>
						<label id="gender-female" class="btn-gender btn btn-mini btn-info" for="">
							<input type="radio" name="Sex" value="F">Female
						</label>
						</div>
					</div>
				</div>
				<!-- Smoking Status -->
				<div class="form-group">
					<label class="control-label" for="smoking status">Smoking Status</label>
					<div class="controls">
						<div class="input-group col-sm-4 input-group-2">
						<label id="smoke-yes" class="btn-smoke btn btn-mini btn-default" data-swap="inactive" for="">
							Yes<input type="radio" name="Smoker" value="Y">
						</label>
						<label id="smoke-no" class="btn-spec btn-smoke btn btn-mini btn-info" data-swap="active" for="">
							No<input type="radio" name="Smoker" value="N" checked>
						</label>
						</div>
					</div>
				</div>
				<!-- Health Classification -->
				<div class="form-group">
					<label class="control-label" for="duration">Health Class:</label>
					<div class="controls">
						<div class="input-group col-sm-5">
							<span class="input-group-addon"><i class="fa fa-heartbeat"></i></span>
							<select name="Health" class="form-control selectpicker input-tag">
								<option selected value="PP">Preferred Plus</option>
								<option value="P">Preferred</option>
								<option value="RP">Regular Plus</option>
								<option value="R">Regular</option>
							</select>
						</div>
					</div>
				</div>
				<!-- Coverge Amount -->
				<div class="form-group">
					<label class="control-label" for="coverage amount">Coverage Amount</label>
					<div class="controls">
					<div class="input-group col-sm-5">
						<span class="input-group-addon"><i class="fa fa-usd"></i></span>
						<select name="FaceAmount" class="form-control selectpicker  input-tag">	
							<option value="10000">$10,000</option>
							<option value="25000">$25,000</option>
							<option value="50000">$50,000</option>
							<option value="50000">$50,000</option>
							<option value="75000">$75,000</option>
							<option value="100000">$100,000</option>
							<option value="125000">$125,000</option>
							<option value="150000">$150,000</option>
							<option value="175000">$175,000</option>
							<option value="200000">$200,000</option>
							<option value="225000">$225,000</option>
							<option value="250000">$250,000</option>
							<option value="300000">$300,000</option>
							<option value="350000">$350,000</option>
							<option value="400000">$400,000</option>
							<option value="450000">$450,000</option>
							<option value="500000">$500,000</option>
							<option value="550000">$550,000</option>
							<option value="600000">$600,000</option>
							<option value="650000">$650,000</option>
							<option value="700000">$700,000</option>
							<option value="750000">$750,000</option>
							<option value="800000">$800,000</option>
							<option value="900000">$900,000</option>
							<option selected value="1000000">$1,000,000</option>
							<option value="1100000">$1,100,000</option>
							<option value="1250000">$1,250,000</option>
							<option value="1500000">$1,500,000</option>
							<option value="1750000">$1,750,000</option>
							<option value="2000000">$2,000,000</option>
							<option value="2500000">$2,500,000</option>
							<option value="3000000">$3,000,000</option>
							<option value="4000000">$4,000,000</option>
							<option value="5000000">$5,000,000</option>
							<option value="6000000">$6,000,000</option>
							<option value="7000000">$7,000,000</option>
							<option value="8000000">$8,000,000</option>
							<option value="9000000">$9,000,000</option>
							<option value="10000000">$10,000,000</option>
						</select>
					</div>
					</div>
				</div>
				<!-- Length of Coverage -->
				<div class="form-group">
					<label class="control-label" for="duration">Length of Coverage</label>
					<div class="controls">
						<div class="input-group col-sm-5">
							<span class="input-group-addon"><i class="fa fa-tachometer"></i></span>
							<select name="NewCategory" class="form-control selectpicker input-tag">
								<option value="1">1 Year Level Term</option>
								<option value="2">5 Year Level Term</option>
								<option value="3">10 Year Level Term</option>
								<option value="4">15 Year Level Term</option>
								<option SELECTED value="5">20 Year Level Term</option>
								<option value="6">25 Year Level Term</option>
								<option selected value="7">30 Year Level Term</option>
								<option value="9">35 Year Level Term</option>
								<option value="0">40 Year Level Term</option>
								<option value="T">To Age 65 Level</option>
								<option value="U">To Age 70 Level</option>
								<option value="V">To Age 75 Level</option>
								<option value="A">To Age 80 Level</option>
								<option value="B">To Age 85 Level</option>
								<option value="C">To Age 90 Level</option>
								<option value="D">To Age 95 Level</option>
								<option value="E">To Age 100 Level</option>
								<option value="G">To Age 105 Level</option>
								<option value="H">To Age 110 Level</option>
								<option value="F">Other Term</option>
								<option value="Z:357">10, 20, 30 Year Term</option>
								<option value="Z:123456790TUVABCDEGH#10">All Level Term Products</option>
								<option value="I">10 Year Return of Premium</option>
								<option value="J">15 Year Return of Premium</option>
								<option value="K">20 Year Return of Premium</option>
								<option value="L">25 Year Return of Premium</option>
								<option value="M">30 Year Return of Premium</option>
								<option value="W">To age 65 Return of Premium</option>
								<option value="X">To age 70 Return of Premium</option>
								<option value="Y">To age 75 Return of Premium</option>
								<option value="N">Other Return of Premium</option>
								<option value="Z:JKM">15, 20, 30 Year with ROP</option>
								<option value="Z:IJKLMWXYN#10">All Return of Premium Products</option>
								<option value="8">To Age 121 Level  (No Lapse U/L)</option>
								<option value="P">To Age 121 Level - Pay to 100</option>
								<option value="Q">To Age 121 Level - Pay to 65</option>
								<option value="R">To Age 121 Level - 20 Pay</option>
								<option value="S">To Age 121 Level - 10 Pay</option>
								<option value="O">To Age 121 Level - Single Pay</option>
								<option value="Z:8PQRSO#10">All To Age 121 Level Products</option>
							</select>
						</div>
					</div>
				</div>


<!-- NOTE: Category works as before with a few enhancements.

If you're not doing multiple categories then you can follow the Category choice 
with :20 to specify that you want the side by side view to show for 20 years

If you are doing a multiple categories view, follow the Z with :123 
where 1,2,3 will be the categories to lookup.  You can choose which ever valid 
categories you wish up to a maximum of 6.  You can further follow that by :20 
to indicate that you want to show results for 20 years in the side by side view

NOTE: The COMPULIFE category system has changed and to find the appropriate letters for your categories you need to use your Compulife Quote Software | Manage 
Product Database | List all Categories there is a tab which will show you html 
code for your categories -->

<!-- <tr> -->
<!-- <td style="text-align:right;" class="gray_cell">&nbsp;<b>Type of Insurance:</b>&nbsp;</td> -->



<!-- example of 10 verse 20 versus 30, with a maximum of 4 results
<option value="Z:357#4">10 versus 20 versus 30</option>
-->

<!-- &nbsp;&nbsp;&nbsp;or use our Income Replacement&nbsp;<input type="submit" name="IncReplace1" value=" Calculator ">  -->
<!-- </td>
</tr> -->

				<input type="hidden" name="ModeUsed" value="M">
<!-- <tr>
<td style="text-align:right;" class="gray_cell"><b>Payment Option:</b>&nbsp;</td>

<td class="gray_cell">
<select name="ModeUsed" size="1">
<option value="A"> Annual </option>
<option selected value="M"> Monthly </option>
<option value="Q"> Quarterly </option>
<option value="H"> Semi-Annual </option>
</select>
</td>
</tr> -->


<!-- <tr>
<td style="text-align:right;" class="gray_cell"><b>Minimum Life Company Rating:</b>&nbsp;</td>

<td class="gray_cell">
<select name="CompRating">
<option value="1">A++ &nbsp;&nbsp;Superior</option>
<option value="2">A+ &nbsp;&nbsp;&nbsp;&nbsp;Superior</option>
<option value="3">A  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excellent</option>
<option selected value="4">A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excellent</option>
<option value="5">B++ &nbsp;Very Good</option>
<option value="6">B+ &nbsp;&nbsp;&nbsp;&nbsp;Very Good</option>
<option value="7">B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adequate</option>
<option value="8">B- &nbsp;&nbsp;&nbsp;&nbsp;Adequate</option>
<option value="9">C++ &nbsp;Fair</option>
<option value="10">C+ &nbsp;&nbsp;&nbsp;&nbsp;Fair</option>
<option value="11">C &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marginal</option>
<option value="12">C- &nbsp;&nbsp;&nbsp;&nbsp;Marginal</option><option value="13">D &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Very Vulnerable</option><option value="14">E &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Under State Supervision</option><option value="15">F &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Liquidation</option><option value="16">Quote all with Best Rating</option>
</select>
</td>
</tr> -->

				<div class="default_header" id="instant-btn">
					<input type="submit" name="CqsComparison" value="Instant Quote" class="btn btn-info">
				</div>



			</div><!--/row-->		
		</div><!-- end: Content -->
	</div>
</div>
				</form>

@stop()

@section('bottom-script')

<script>

	$('.btn-gender').click({item1: 'gender-male', item2: 'gender-female'}, swapRadio);
	$('.btn-smoke').click({item1: 'smoke-yes', item2: 'smoke-no'}, swapRadio);
	

	$('#btn-gender').click(function() {
		var value = $('input:radio[name=Sex]:checked').val();
		console.log(value);
	});

</script>

	
@stop()

