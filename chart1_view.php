<html><head><title>Chart JS</title>
<script src="<?php echo base_url('assets/jquery/Chart.min.js')?>"></script>
</head>
<body>
<div class="chart-container" style="position: relative;">
<canvas id="grafikBatang"></canvas>
</div>
<script>
var ctx = document.getElementById("grafikBatang").getContext('2d');
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"]
		datasets: [{
			label: '# JUMLAH PENGUNJUNG SEMINGGU TERAKHIR',
			data: [120, 190, 30, 50, 20, 30, 100],
			backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
				'rgba(255, 206, 86, 0.2)',
				'green',
				'yellow',
				'blue',
				'red'
			],
			borderColor: 'black',
			borderWidht: 2
		}]
	},
	options: {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero:true
				}
			}]
		}
	}
});
</script>
</body>
</html>