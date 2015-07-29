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
				<p>Water Bills are payable within the first fifteen (15) days after each monthly reading upon issuance of a Billing Notice. A corresponding surcharge  will be imposed on overdue bills  after the 15th day. Any partial payment is to be credited to arrears first with any remaining balance credited to the current billing.</p>
			</div>
			<div class='spacer2'></div>

			<div class='row'>
				<div class="col-md-4">
					<div>
						<h4>Who May Avail of the Service?</h4>
					</div>
					<div>
						<h5>All concessionaires of Talugtug Water District</h5>
					</div>
					<div>
						<div class='spacer1'></div>
						<h4>Duration:</h4>
	   					<h5>3 minutes</h5>

					</div>
				</div>
				<div class="col-md-4">
					<div>
						<h4>Availability of the Service:</h4>
					</div>
					<h5>MONDAY to FRIDAY</h5>
					<h5>8:00 a.m. to 5:00 p.m.</h5>
					<h5>With No Noontime Break</h5>
				</div>
				<div class="col-md-4">
					<div>
						<h4>What are the Requirements?</h4>
					</div>
					<h5>Billing Notice</h5>
					<h5>Cash/Check payment</h5>

				</div>
			</div>

			<div class='row'>
				<div class='spacer1'></div>

				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading"><h4>How to Avail of the Service?</h4></div>

				  <!-- Table -->
				  <table class="table">
				    <tr>
				    	<th class='this-to-center'>Step</th>
				    	<th class='this-to-center'>Client</th>
				    	<th class='this-to-center'>Service Provider</th>
				    	<th class='this-to-center'>Duration (under normal circumstances)</th>
				    	<th class='this-to-center'>In-Charge</th>
				    	<th class='this-to-center'>Fees</th>
				    	<th class='this-to-center'>Form</th>
				    </tr>
				    <tr>
				    	<td class='this-to-center'>
				    		1
				    	</td>
				    	<td>
				    		Hand over Billing Notice or fill-up Account Information Sheet 
				    	</td>
				    	<td>
				    		Accept payment and issue corresponding Official Receipt
				    	</td>
				    	<td class='this-to-center'>
				    		3 minutes
				    	</td>
				    	<td>
				    		Billing & Collection Clerk/ Cashier
				    	</td>
				    	<td>
				    		Aggregate amount indicated on the Water Bill
				    	</td>
				    	<td>
				    		Billing Notice
				    	</td>
				    </tr>
				  </table>
				</div>				
			</div>

	  </div>



	</div>


@stop