$(document).ready(function(){
	$.ajax({
		url: "data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push("Crop : " + data[i].Crop);
				score.push(data[i].Harvest);
			}

			var chartdata = {
				labels: player,
				datasets : [
			{
				label : "Harvest",
				data: score,
				backgroundColor : [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57"
                    
                ],
                borderColor : [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46"
                    
                ],
                
			}
		]
			};

			



			var options = {
		title : {
			display : true,
			position : "top",
			text : "Harvest according to Varieties",
			fontSize : 18,
			fontColor : "#111"
		},
		legend : {
			display : true,
			position : "bottom"
		}
	};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'pie',
				data: chartdata,
				options : options
			});
		},
		error: function(data) {
			//console.log(data);
		}
	});
});