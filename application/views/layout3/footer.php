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
	
<script type="text/javascript">
$(document).ready(function(){
   $('#save').click(function(){

    var id_pelamar = [];
    var id_soal = [];
    var jawaban_soal = [];
    
    $('#id_pelamar').each(function(){
      id_pelamar.push($(this).text());
    });

    $('#id_soal').each(function(){
      id_soal.push($(this).text());
    });

    $('#jawaban_soal').each(function(){
      jawaban_soal.push($(this).text());
    });

    $.ajax({
      url : "localhost/choise/Pelamar/Lamaran/apply",
      method : "POST",
      data:{id_pelamar:id_pelamar, id_soal:id_soal, jawaban_soal:jawaban_soal},
      success: function(data){
        fetch_item_data();
      }
    });

   });
});
    
   function fetch_item_data(){
    $.ajax({
      url : "<?php echo base_url("Pelamar/Lamaran/lowongantersedia") ?>",
      method : "POST",
    })
   }
 </script>


</body>
</html>