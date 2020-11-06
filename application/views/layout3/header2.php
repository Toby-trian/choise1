<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Choise-Dasbor</title>
	<link href="<?php  echo base_url('assets3/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php  echo base_url('assets3/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php  echo base_url('assets3/css/datepicker3.css') ?>" rel="stylesheet">
	<link href="<?php  echo base_url('assets3/css/styles.css') ?>" rel="stylesheet">
	<link href="<?php  echo base_url('assets3/css/custom.css') ?>" rel="stylesheet">
	<link href="<?php  echo base_url('assets3/css/bie.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
	
	<script type = "text/javascript" >
		history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	<script type="text/javascript">
		 <script type="text/javascript">
        $(document).ready(function() {
              /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
              */
              var detik = 30;
              var menit = 10;
              var jam   = 0;
              
             /**
               * Membuat function hitung() sebagai Penghitungan Waktu
             */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                    * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
               /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
               if(menit < 10 && jam == 0){
                     var peringatan = 'style="color:red"';
               };
 
               /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
               $('#time').html(
                      '<h1 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h1><hr>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
 
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
 
                    /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
 
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                        if(jam < 0) {                                                                 
                            clearInterval();  
                        } 
                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
      }); 
      // ]]>
	</script>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	

</head>