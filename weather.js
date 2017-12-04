$(document).ready(function(){

	$('#findCity').click(function(){

		var city = $('#city').val();

		if(city != ''){

			$.ajax({

				url:'http://api.openweathermap.org/data/2.5/weather?q='+ city +'&APPID=e57a13474b266d60b10a1800ae389b55&units=metric',
				type: "GET",
				dataType: "jsonp",
				success: function(data){

					var widget = show(data);

					$("#show").html(widget);
				}
			});
		}else{

			$('#error').html('Field cannot be empty!');
		}
	});
});

function show(data){

	return  "<h3><strong>Current Weather for</strong>: "+ data.name +", "+ data.sys.country +"</h3>" +
			"<h4><strong><i>Weather</i></strong>: "+ data.weather[0].main +"</h4>" +
			"<h4><strong>Description</strong>: "+ data.weather[0].description +
			"<img src='http://openweathermap.org/img/w/"+ data.weather[0].icon +".png'></h4>" +
			"<h4><strong>Temperature</strong>: "+ data.main.temp +" °C</h4>" +
			"<h4><strong>Pressure</strong>: "+ data.main.pressure +" hPa</h4>" +
			"<h4><strong>Humidity</strong>: "+ data.main.humidity +" %</h4>" +
			"<h4><strong>Wind Speed</strong>: "+ data.wind.speed +" meter/sec</h4>";
}