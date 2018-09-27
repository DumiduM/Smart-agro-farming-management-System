$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "api/data2.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var score = {
				TeamA : [],
				TeamB : []
			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
				if (data[i].Crop == "TeamA") {
					score.TeamA.push(data[i].Harvest);
				}
				else if (data[i].Crop == "TeamB") {
					score.TeamB.push(data[i].Harvest);
				}
			}

			//get canvas
			var ctx = $("#line-chartcanvas");

			var data = {
				labels : ["January", "February", "March", "April", "May","June", "July", "August", "September", "October","November", "December"],
				datasets : [
					{
						label : "TeamA score",
						data : [86,114,106,106,107,111,133,0,783,2478],
						backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "TeamB score",
						data : [282,350,411,502,635,809,947,1402,3700,1267],
						backgroundColor : "green",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					},
					{
						label : "TeamB score",
						data : [],
						backgroundColor : "green",
						borderColor : "lightgreen",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Harvesting through year",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				}
			};

			var chart = new Chart( ctx, {
				type : "line",
				data : data,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});