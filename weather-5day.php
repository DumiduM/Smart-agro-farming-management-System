
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
			var key = '139bbf39686125f27ac3a3054f23b2be';

			$.ajax({
				url: 'http://api.openweathermap.org/data/2.5/forecast',
				dataType: 'json',
				type: 'GET',
				data: {q:city, appid:key, units:'metric'},

				success: function(data){
					var wf = '';
					$.each(data.forecast,function(index,val){
						wf +='<p><b>' + data.name + data.main.temp + '&deg;C'+ ' | ' + val.main +  ", " + val.description ;
					});
					$("#showWeatherForecast").html(wf);
				}

			});
		});
	});
</script>	
</html>