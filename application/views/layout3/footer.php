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

  <script type="text/javascript">

   var btnUpload = $("#upload_file"),
   btnOuter = $(".button_outer");
   btnUpload.on("change", function(e){
    var ext = btnUpload.val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
      $(".error_msg").text("Format file bukan gambar ...");
    } else {
      $(".error_msg").text("");
      btnOuter.addClass("file_uploading");
      setTimeout(function(){
        btnOuter.addClass("file_uploaded");
      },3000);
      var uploadedFile = URL.createObjectURL(e.target.files[0]);
      setTimeout(function(){
        $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
      },3500);
    }
  });
   $(".file_remove").on("click", function(e){
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
  });
</script>

<script type="text/javascript">
  
   var password = document.getElementById("password")
   , confirm_password = document.getElementById("confirm_password");

   function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Tidak Sama");
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>