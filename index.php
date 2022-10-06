<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rent Calculater</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="RentCal.js"></script>
</head>
  <body>
  <h1 class="text-danger text-center mb-4" style="margin-top: 50px;">Rent Calculater</h1>
    <div class="container d-flex" style="margin-top: 50px;">
		
		<div class="w-50 border border-1 p-5 bg-success rounded-4 text-warning">
		<h3 class="text-center text-warning">FILL DETAILS</h3>
			<form action="">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Tenant</label>
				<input type="text" class="form-control" id="name" placeholder="Your Name">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Monthly Rent</label>
				<input type="number" class="form-control" id="mrent" placeholder="Monthly Rent">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Days in First Month</label>
				<input type="number" class="form-control" id="dim" placeholder="days in month">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Rent Start Date</label>
				<input type="date" class="form-control" id="startdate" placeholder="Start Date">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Rent End Date</label>
				<input type="date" class="form-control" id="enddate" placeholder="End Date">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Address</label>
				<input type="text" class="form-control" id="address" placeholder="Address">
			</div>
			<div class="w-100 text-center">
				<button onclick="myFunction()" class="w-25 text-success btn btn-outline-warning btn-warning" type="button">Submit</button>
				<button class="w-25 text-success btn btn-outline-warning btn-warning ms-5" type="reset">Reset</button>
			</div>
			</form>
		</div>
		
		<div class="w-50 border border-1 p-5 bg-success rounded-4 text-warning">
			<h3 class="text-center text-warning">RESULT</h3>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Tenant</label>
				<input disabled type="text" class="fw-bold form-control" id="name1" >
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Total rent Start to End</label>
				<input disabled type="text" class="fw-bold form-control" id="trent" >
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Rent per day</label>
				<input disabled type="number" class="fw-bold form-control" id="rpd" >
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Rent per Year</label>
				<input disabled type="number" class="fw-bold form-control" id="rpy">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Rent Start Date</label>
				<input type="text" class="fw-bold form-control" id="sdate" disabled>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label fw-bold">Rent End Date</label>
				<input type="text" class="fw-bold form-control" id="edate" disabled>
			</div>
			<div class="mb-3">
				<h6 class="form-label  fw-bold">Note <sup class="text-danger" >*</sup> : Total rent may varry due to days variation in month</h6>
				
			</div>
			
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>