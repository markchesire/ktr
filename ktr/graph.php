<!DOCTYPE HTML>
<html>
<head>
	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer",
			{
				
				

				data: [
				{
					type: "bar",

					dataPoints: [
					
					{ x: 10, y: 7, label:"D-" },
					{ x: 20, y: 4, label:"D" },
					{ x: 30, y: 5, label:"D+" },
					{ x: 40, y: 70, label:"C-" },
					{ x: 50, y: 50, label:"C" },
					{ x: 60, y: 60, label:"C+" },
					{ x: 70, y: 20, label:"B-" },
					{ x: 80, y: 30, label:"B" },
					{ x: 90, y: 35, label:"B+" },
					{ x: 100, y: 40, label:"A-" },
					{ x: 110, y: 30, label:"A" }

					]
				}
				]
			});

			chart.render();
		}
	</script>
	<script src="canvas/canvasjs.min.js"></script>
	
</head>
<body>
	<div id="chartContainer" style="height: 400px; width: 500px;">
	</div>
</body>
</html>