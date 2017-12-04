<!DOCTYPE html>
<html>
<head>
	<title>City Current Weather</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="weather.js"></script>
</head>
<body>
<br>
<div class="jumbotron" style="background-color: #0066cc">
	<h1 class="text-center" style="color: white">City Current Weather</h1>
</div>
<div class="container">
	<div class="row text-center">
		<h3 class="text-primary" style="margin-bottom: 30px">Enter City Name</h3>
		<span id="error" class="bg-danger"></span>
	</div>
	<div class="row form-grup form-inline text-center" style="margin-bottom: 30px">
		<input id="city" type="text" name="city" class="form-control" placeholder="City Name">
		<button id="findCity" class="btn btn-primary" ">GO FOR WEATHER</button>
	</div>
	<div id="show" class="jumbotron col-xs-8 col-xs-offset-2"></div>

</div>

</body>
</html>