@extends('layouts.home')

@section('content')
  

<div class="container">
	

    <div class='this-to-center'>
      <h1>{{ $title }}</h1>
      <div class='spacer1'></div>
	</div>      




	<div class="row">

	  <div class="col-md-10 col-md-offset-1">
			

			<div>
				<b>About the Service:</b>
			</div>
			<div>
				<br />
				<p class='indent'>Concessionaires may still avail of other services pertaining to maintenance of the existing service connection such as, but not limited to the following: a. Leak check  b. Dirty Water  c. Taste or Odor   d. Low/High Pressure  e. No Water   f. Stuck/Meter Leak   g.  High consumption  h. Re-read. Cost of materials replaced is chargeable to client if identified defects extends BEYOND the main line and water meter.</p>				
			</div>
			<div class='spacer2'></div>

			<div class="row">
					<div class="col-md-5">

						<div class='row'>
							<div class="panel panel-default">
								<!-- Default panel contents -->
								<div class="panel-heading">
									<h4>Availability of the Service:</h4>
								</div>
						   		<div class='indent'>
									<h5>MONDAY to FRIDAY</h5>
									<h5>8:00 a.m. to 5:00 p.m.</h5>
									<h5>With No Noontime Break</h5>
								</div>
							</div>			

						</div>

						<div class='row'>
							<div class="panel panel-default">
								<!-- Default panel contents -->
								<div class="panel-heading">
									<h4>Who May Avail of the Service?</h4>
								</div>
						   		<div class='indent'>
									<h5>All concessionaires of Talugtug Water Dist.</h5>
								</div>
							</div>			

						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-6">

						<div class='row'>
							<div class="panel panel-default">
								<!-- Default panel contents -->
								<div class="panel-heading">
									<h4>What are the Requirements?</h4>
								</div>
						   		<div class='indent'>
						   			
									<h5>No requirement</h5>

								</div>
							</div>			

						</div>

						<div class='row'>
							<div class="panel panel-default">
								<!-- Default panel contents -->
								<div class="panel-heading">
									<h4>Duration:</h4>
								</div>
						   		<div class='indent'>
									<h5>1 hour – meter leak</h5>									
									<h5>1 day – main line leak</h5>
								</div>
							</div>			

						</div>


					</div>
			</div>
			<div class="spacer1"></div>




			<div class='row'>
				<div class='spacer1'></div>

				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><h4>How to Avail of the Service?</h4></div>

				  <!-- Table -->
				  <div class='table-responsive'>
				  <table class="table">
				    <tr>
				    	<th class='this-to-center'><br />Step</th>
				    	<th class='this-to-center'><br />Client</th>
				    	<th class='this-to-center' width='300px'><br />Service Provider</th>
				    	<th class='this-to-center'>Duration (under normal circumstances)</th>
				    	<th class='this-to-center'><br />In-Charge</th>
				    	<th class='this-to-center'><br />Fees</th>
				    	<th class='this-to-center'><br />Form</th>
				    </tr>
				    <tr>
				    	<td class='this-to-center'>
				    		1
				    	</td>
				    	<td>
				    		Request for MAINTENANCE SERVICES: 
				    		<div class=''>
				    			<h5>- Leak Check</h5>
				    			<h5>- Dirty Water</h5>
				    			<h5>- Taste or Odor</h5>
				    			<h5>- Low/High</h5>
				    		</div>
				    		<br />
				    		Pressure
				    		<div class=''>
				    			<h5>- No Water</h5>
				    			<h5>- Stuck/Meter Leak</h5>
				    			<h5>- High consumption</h5>
				    			<h5>- Re-read</h5>
				    			<h5>- Defective meter</h5>
				    		</div>

				    	</td>
				    	<td>
				    		<p class='indent'>Note down applicant’s name & address and have client fill up Service Request Form (SRF).        Forward approved SRF to Maintenance man for execution/ investigation.</p>
				    	</td>
				    	<td class='this-to-center'>
				    		<h5>3 minutes</h5> <br /> <br />
				    		<h5>1 hour – meter leak</h5><br />
				    		<h5> day – main line leaks</h5><br />
				    	</td>
				    	<td class='this-to-center'>
				    		Billing & Collection Clerk/ Cashier
				    	</td>
				    	<td class='this-to-center'>
				    		Aggregate amount indicated on the Statement of Account or Water Bill, if any
				    	</td>
				    	<td class='this-to-center'>
				    		Service Request Form
				    	</td>
				    </tr>
				    <tr>
				    	<td class='this-to-center'>
				    		2
				    	</td>
				    	<td>
				    		Pay necessary fees for materials replaced, if any 
				    	</td>
				    	<td>				    		
    						<p class='indent'>Accept payment and issue corresponding OR</p>   							
				    	</td>
				    	<td class='this-to-center'>
				    		3 minutes<br />
				    	</td>
				    	<td class='this-to-center'>
				    		<p>Billing & Collection Clerk/ Cashier</p>
				    	</td>
				    	<td class='this-to-center'>    

				    	</td>
				    	<td class='this-to-center'>
				    		
				    	</td>
				    </tr>
				  </table>
				  </div>
				  <div class="panel-footer">
				  	<h4 class='this-to-center'>END OF TRANSACTION</h4>
				  </div>
				</div>				
			</div>			

		</div>

	</div>



</div>


@stop