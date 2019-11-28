<!DOCTYPE HTML>
<html>
<head>
	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
				title: {
					text: "2015/2014"
				},
				data: [{
					type: "column",
					dataPoints: [
					  { x: 14, y: 5 },
					  { x: 15, y: 10 },
					  
					]
				}, {
					type: "column",
					dataPoints: [
					  { x: 14, y: 10 },
					  { x: 15, y: 5 },
					 
					]
				}, {
					type: "column",
					dataPoints: [
					  { x: 14, y: 20 },
					  { x: 15, y: 6 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 10 },
					  { x: 15, y: 8 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 30 },
					  { x: 15, y: 3 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 50 },
					  { x: 15, y: 34 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 45 },
					  { x: 15, y: 80 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 0 },
					  { x: 15, y: 33 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 12 },
					  { x: 15, y: 45 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 6 },
					  { x: 15, y: 13 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 4 },
					  { x: 15, y: 1 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 0 },
					  { x: 15, y: 1 },
					  
					]
				},{
					type: "column",
					dataPoints: [
					  { x: 14, y: 5 },
					  { x: 15, y: 2 },
					  
					]
				}]
			});
			chart.render();
		}
	</script>
	<script src="canvas/canvasjs.min.js"></script>
	
</head>

<body>
	<div id="chartContainer" style="height: 400px; width: 50%;"></div>
</body>

</html>