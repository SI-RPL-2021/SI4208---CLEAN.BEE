@extends('layouts.admin2')

@section('main-content')

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Frekuensi Penggunaan Jasa CleanBee 2021"
		},
		legend: {
			maxWidth: 350,
			itemWidth: 120
		},
		data: [
		{
			type: "pie",
			showInLegend: true,
			legendText: "{indexLabel}",
			dataPoints: [
				{ y: 3, indexLabel: "Cuci Selimut" },
				{ y: 4, indexLabel: "Cuci Pakaian" },
				{ y: 2, indexLabel: "Cuci Sepatu" },

			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>
<!-- 
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Products Sold by CleanBee. in 2021"
	},
	axisX:{
		title: "Hari",
		minimum: 0,
		maximum: 2
	},
	axisY:{
		title:"Sales",
        // minimum: 0,
		// maximum: 100
	},
	toolTip:{
		shared: true
	},
	data: [{
		type: "stackedArea100",
		name: "Cuci Selimut",
		showInLegend: "true",
		dataPoints: [
			{ y: 3, label: "Rabu" },
			{ y: 1, label: "Kamis" },
			{ y: 0, label: "Jumat" },
		]
	},
	{
		type: "stackedArea100",
		name: "Cuci Sepatu",
		showInLegend: "true",
		dataPoints: [
			{ y: 2 , label: "Rabu" },
			{ y: 3, label: "Kamis" },
			{ y: 1, label: "Jumat" },
	
		]
	},
	{
		type: "stackedArea100",
		name: "Cuci Pakaian",
		showInLegend: "true",
		dataPoints: [
            { y: 3 , label: "Rabu" },
			{ y: 4, label: "Kamis" },
			{ y: 2, label: "Jumat" },
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> -->

@endsection