	<script src="<?php  echo base_url('assets3/js/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/bootstrap.min.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/chart.min.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/chart-data.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/easypiechart.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/easypiechart-data.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/bootstrap-datepicker.js') ?>"></script>
	<script src="<?php  echo base_url('assets3/js/custom.js') ?>"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});
		};
	</script>

	<script type="text/javascript">
		$('#notifikasi').delay(3000).slideUp('slow');

	</script>
	
</body>
</html>