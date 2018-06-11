
<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
</head>
<body>
<input id="city"></input>
<button id= "getWeatherForecast">Get Weather</button>
<div id="showWeatherForecast"></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$("#getWeatherForecast").click(function(){
			var city = $("#city").val();
			var key = 'f4f21d1515bf54e36a01fa854fe850d8';

			$.ajax({
				url: 'http://api.openweathermap.org/data/2.5/weather',
				dataType: 'json',
				type: 'GET',
				data: {q:city, appid:key, units:'metric'},

				success: function(data){
					var wf = '';
					$.each(data.weather,function(index,val){
						wf +='<p><b>' + data.name + "</b><img src= http://openweathermap.org/img/w/"+ val.icon +".png></p>"+ data.main.temp + '&deg;C'+ ' | ' + val.main +  ", " + val.description ;
					});
					$("#showWeatherForecast").html(wf);
				}

			});
		});
	});
</script>	
</html>