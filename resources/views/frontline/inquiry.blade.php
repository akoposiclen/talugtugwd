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
				<p class='indent'>Concessionaires may reconnect their services upon payment of Reconnection fee and/or when all existing obligations are settled, if any. For temporarily disconnected accounts, reconnection is free of charge provided the duration shall not exceed three (3) months.</p>				
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
									<h5>All concessionaires of Talugtug Water Dist. with disconnected services</h5>
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
						   			
									<h5>Billing Notice</h5>
									<h5>Statement of Account</h5>
									<h5>Cash/Check payment</h5>

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
									<h5>1 hour</h5>									
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
				    		Request for temporary reconnection
				    	</td>
				    	<td>
				    		<p class='indent'>Note down applicant’s name & address and verify against records if client has no outstanding accounts with the District, otherwise, require client to settle the existing obligations.</p>
				    	</td>
				    	<td class='this-to-center'>
				    		3 minutes <br />
				    	</td>
				    	<td class='this-to-center'>
				    		Billing & Collection Clerk/ Cashier
				    	</td>
				    	<td class='this-to-center'>
				    		Aggregate amount indicated on the Statement of Account or Water Bill, if any
				    	</td>
				    	<td class='this-to-center'>
				    		<br /><br />
				    		Service Request Form
				    	</td>
				    </tr>
				    <tr>
				    	<td class='this-to-center'>
				    		2
				    	</td>
				    	<td>
				    		Pay reconnection fee and settle outstanding accounts, if any 
				    	</td>
				    	<td>				    		
    						<p class='indent'>Accept payment and issue corresponding OR.</p>
   							<p class='indent'>Prepare Reconnection Job Order & forward to:</p>
   							<p class='indent'><b>a</b>. GM for approval </p>
   							<p class='indent'><b>b</b>. Maintenance man for execution</p>   							
				    	</td>
				    	<td class='this-to-center'>
				    		2 minutes<br />
				    		<br />
				    		<br />
				    		<br />
				    		<br />
				    		<p>3 minutes</p>
				    		<p>52 minutes</p>
				    	</td>
				    	<td class='this-to-center'>
				    		<br />
				    		<p>Billing & Collection Clerk/ Cashier</p>
				    		<br />
				    		<p>Maintenance Man</p>
				    	</td>
				    	<td class='this-to-center'>    <br /> 		
				    		Aggregate amount indicated on the Statement of Account or Water Bill, if any
				    	</td>
				    	<td class='this-to-center'>
				    		<br /><br />
				    		Reconnection Job order
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