<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Detail Nilai Pelamar</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item"><a href="#">Detail Nilai Pelamar</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div id="notifikasi">
          <?php if($this->session->flashdata('msg')):?>
            <div class="alert alert-primary">
              <?php  echo $this->session->flashdata('msg')?>
            </div>
          <?php endif ;?>
          <?php if($this->session->flashdata('msg_update')):?>
            <div class="alert alert-primary">
              <?php  echo $this->session->flashdata('msg_update')?>
            </div>
          <?php endif ;?>
          <?php if($this->session->flashdata('msg_hapus')):?>
            <div class="alert alert-danger">
              <?php  echo $this->session->flashdata('msg_hapus')?>
            </div>
          <?php endif ;?>
        </div> 
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <tbody>
                <?php
                $modal = 0;
                foreach ($cfit as $key) { 
                 $id_pelamar = $key['id_pelamar']; 
                 $lowongan = $key['id_lowongan'];
                 $nmLowongan = $this->db->query("SELECT * FROM tb_lowongan");
                 $namaPer = $this->db->query("SELECT * FROM tb_perusahaan");
                 foreach ($nmLowongan->result() as $key_per) {
                  $idLowong = $key_per->id_lowongan;
                  $idPerus = $key_per->id_perusahaan;
                  if ($idLowong==$key['id_lowongan']) {
                    $namaJabatan = $key_per->nama_jabatan;
                    foreach ($namaPer->result() as $keyNama) {
                      if ($idPerus==$keyNama->id_perusahaan) {
                        $nmPerusahaan =  $keyNama->nama_perusahaan;
                      }
                    } 
                  }
                }
                
                $dataDiri = $this->db->query("SELECT * FROM tb_data_diri") ;
                foreach ($dataDiri->result() as $key_diri) {
                  if ($id_pelamar == $key_diri->id_pelamar) {
                    $nama_pelamar = $key_diri->nama_pelamar;
                    $tgl_lhr = $key_diri->tanggal_lahir;

                     $from = new DateTime($tgl_lhr);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;
                  }


                }

                $cekHolland = $this->db->query("SELECT * FROM tb_data_jawaban_holland WHERE id_pelamar = $id_pelamar");
                foreach ($cekHolland->result() as $key_holland) {
                  $nilai_r = $key_holland->nilai_r;
                  $nilai_i = $key_holland->nilai_i;
                  $nilai_a = $key_holland->nilai_a;
                  $nilai_s = $key_holland->nilai_s;
                  $nilai_e = $key_holland->nilai_e;
                  $nilai_k = $key_holland->nilai_k;
                }

              $cekIst = $this->db->query("SELECT * FROM tb_data_jawaban_ist WHERE id_pelamar = $id_pelamar") ;
                foreach ($cekIst->result() as $key_ist) {
                    $id_pelamar_ist = $key_ist->id_pelamar;
                    $id_lowongan_ist = $key_ist->id_lowongan;
                  }


                ?>
               <!--  
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Nilai</h4>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo  base_url('Administrator/Data_nilai/update_nilai/'.$key['id_nilai']) ?>" method="post">
                          <div class="form-group">
                            <input type="hidden" name="id_nilai" value="<?php echo $key['id_nilai'] ?>">
                            <label class="control-label">Nilai Wawancara</label>
                            <input class="form-control" type="text" name="nilai_wawancara" value="<?php echo $key['nilai_wawancara'] ?>">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Nilai FGD</label>
                            <input class="form-control" type="text" name="nilai_fgd" value="<?php echo $key['nilai_fgd'] ?>">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <input type="submit" value="Update Nilai" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
                Modal 2
                <div class="modal fade" id="myModal2" role="dialog">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Kepribadian</h4>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('Administrator/Data_nilai/update_deskripsi/'.$key['id_nilai']) ?>" method="post">
                          <div class="form-group">
                            <input type="hidden" name="id_nilai" value="<?php echo $key['id_nilai'] ?>">
                            <label class="control-label">Gambaran Kepribadian</label>
                            <textarea class="form-control" name="gambaran_kepribadian"><?php echo $key['gambaran_kepribadian'] ?></textarea>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Kesimpulan</label>
                            <input class="form-control" type="text" name="kesimpulan" value="<?php echo $key['kesimpulan'] ?>">
                          </div>                          
                        </div>
                        <div class="modal-footer">
                          <input type="submit" value="Update Deskripsi" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>  -->

                <p>Nama Pelamar : <b><?php  echo $nama_pelamar ?></b></p>
                <input type="hidden" name="umur" id="umur" value="<?=$umur;?>">
                <p>Posisi Jabatan / Lowongan : <b><?php  echo $namaJabatan ?></b></p>
                <p>Perusahaan : <b><?php  echo $nmPerusahaan ?></b></p>
                <tr >
                  <th width="150">Nilai CFIT</th>
                  <td><?php echo $key['nilai_cfit'] ?></td>
                </tr>
                <tr >
                  <th width="150">IQ</th>
                  <td><?php echo $key['iq'] ?></td>
                </tr>
                <tr >
                  <th width="150">Kategori</th>
                  <td><?php echo $key['kategori'] ?></td>
                </tr>
                <tr>
                  <th>Nilai Holland :</th>
                  <td></td>
                </tr>
                <tr>
                  <th style="text-align: right">R</th>
                  <td><?php echo $nilai_r ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">I</th>
                  <td><?php echo $nilai_i ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">A</th>
                  <td><?php echo $nilai_a ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">S</th>
                  <td><?php echo $nilai_s ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">E</th>
                  <td><?php echo $nilai_e ?></td>
                </tr>
                <tr>
                  <th style="text-align: right">K</th>
                  <td><?php echo $nilai_k ?></td>
                </tr>
                <tr>
                  <th>Nilai Papikostik :</th>
                  <td></td>
                </tr>
                <tr>
                  <th style="text-align: right;">G</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='G' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">L</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='L' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">I</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='I' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">T</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='T' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">V</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='V' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">S</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='S' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">R</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='R' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">D</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='D' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">C</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='C' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">E</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='E' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">N</th>
                  <td>
                    <?php
                     $n = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='N' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $n->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">A</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='A' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">P</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='P' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">X</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='X' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">B</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='B' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">O</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='O' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">Z</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='Z' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">K</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='K' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">F</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='F' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr>
                  <th style="text-align: right;">W</th>
                  <td>
                    <?php
                    $nilai = $this->db->query("SELECT count(jawaban) AS jumlah FROM tb_data_jawaban_papi WHERE jawaban='W' AND id_lowongan = $lowongan AND id_pelamar=$id_pelamar");
                    $result = $nilai->result_array();
                    echo $result[0]['jumlah'];
                    ?>
                  </td>
                </tr>
                <tr >
                  <th width="150">IQ</th>
                  <td></td>
                </tr>
                <tr >
                  <th width="150">Kategori</th>
                  <td></td>
                </tr>
                <tr>
                  <th>Nilai Ist :</th>
                  <td></td>
                </tr>
              <style>
                table, th, td {
                  border: 1px solid black;
                }
                th, td {
                  padding: 10px;
                }
                </style>
                <body>
                <table>
                  <tr>
                    <th>Subtes</th>
                    <th>RS</th>
                    <th>SS</th>
                  </tr>
                  <tr>
                    <td>SE</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=1 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_se=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_se' value='".$nilai_se."'><span>".$nilai_se."</span>";                 

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_se==0){
                      echo '<td>68</td>';
                      }
                      //benar 1
                      else if($nilai_se==1){
                      echo '<td>71</td>';
                      }
                      //benar 2
                      else if($nilai_se==2){
                      echo '<td>74</td>';
                      }
                      //benar 3
                      else if($nilai_se==3){
                      echo '<td>76</td>';
                      }
                      //benar 4
                      else if($nilai_se==4){
                      echo '<td>79</td>';
                      }
                      //benar 5
                      else if($nilai_se==5){
                      echo '<td>82</td>';
                      }
                      //benar 6
                      else if($nilai_se==6){
                      echo '<td>85</td>';
                      }
                      //benar 7
                      else if($nilai_se==7){
                      echo '<td>88</td>';
                      }
                      //benar 8
                      else if($nilai_se==8){
                      echo '<td>91</td>';
                      }
                      //benar 9
                      else if($nilai_se==9){
                      echo '<td>94</td>';
                      }
                      //benar 10
                      else if($nilai_se==10){
                      echo '<td>97</td>';
                      }
                      //benar 11
                      else if($nilai_se==11){
                      echo '<td>100</td>';
                      }
                      //benar 12
                      else if($nilai_se==12){
                      echo '<td>103</td>';
                      }
                      //benar 13
                      else if($nilai_se==13){
                      echo '<td>106</td>';
                      }
                      //benar 14
                      else if($nilai_se==14){
                      echo '<td>109</td>';
                      }
                      //benar 15
                      else if($nilai_se==15){
                      echo '<td>112</td>';
                      }
                      //benar 16
                      else if($nilai_se==16){
                      echo '<td>115</td>';
                      }
                      //benar 17
                      else if($nilai_se==17){
                      echo '<td>118</td>';
                      }
                      //benar 18
                      else if($nilai_se==18){
                      echo '<td>121</td>';
                      }
                      //benar 19
                      else if($nilai_se==19){
                      echo '<td>124</td>';
                      }
                      //benar 20
                      else if($nilai_se==20){
                      echo '<td>126</td>';
                      }


                    }

                    else if($umur>=26 AND $umur<=30){
                      //benar 0
                      if($nilai_se==0){
                      echo '<td>66</td>';
                      }
                      //benar 1
                      else if($nilai_se==1){
                      echo '<td>69</td>';
                      }
                      //benar 2
                      else if($nilai_se==2){
                      echo '<td>72</td>';
                      }
                      //benar 3
                      else if($nilai_se==3){
                      echo '<td>75</td>';
                      }
                      //benar 4
                      else if($nilai_se==4){
                      echo '<td>78</td>';
                      }
                      //benar 5
                      else if($nilai_se==5){
                      echo '<td>81</td>';
                      }
                      //benar 6
                      else if($nilai_se==6){
                      echo '<td>84</td>';
                      }
                      //benar 7
                      else if($nilai_se==7){
                      echo '<td>87</td>';
                      }
                      //benar 8
                      else if($nilai_se==8){
                      echo '<td>90</td>';
                      }
                      //benar 9
                      else if($nilai_se==9){
                      echo '<td>93</td>';
                      }
                      //benar 10
                      else if($nilai_se==10){
                      echo '<td>96</td>';
                      }
                      //benar 11
                      else if($nilai_se==11){
                      echo '<td>99</td>';
                      }
                      //benar 12
                      else if($nilai_se==12){
                      echo '<td>102</td>';
                      }
                      //benar 13
                      else if($nilai_se==13){
                      echo '<td>105</td>';
                      }
                      //benar 14
                      else if($nilai_se==14){
                      echo '<td>108</td>';
                      }
                      //benar 15
                      else if($nilai_se==15){
                      echo '<td>112</td>';
                      }
                      //benar 16
                      else if($nilai_se==16){
                      echo '<td>115</td>';
                      }
                      //benar 17
                      else if($nilai_se==17){
                      echo '<td>118</td>';
                      }
                      //benar 18
                      else if($nilai_se==18){
                      echo '<td>121</td>';
                      }
                      //benar 19
                      else if($nilai_se==19){
                      echo '<td>124</td>';
                      }
                      //benar 20
                      else if($nilai_se==20){
                      echo '<td>127</td>';
                      }
                    }
                  ?></td>
                  </tr>
                  <tr>
                    <td>WA</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=2 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_wa=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_wa' value='".$nilai_wa."'><span>".$nilai_wa."</span>";                 

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_wa==0){
                      echo '<td>63</td>';
                      }
                      //benar 1
                      else if($nilai_wa==1){
                      echo '<td>66</td>';
                      }
                      //benar 2
                      else if($nilai_wa==2){
                      echo '<td>70</td>';
                      }
                      //benar 3
                      else if($nilai_wa==3){
                      echo '<td>74</td>';
                      }
                      //benar 4
                      else if($nilai_wa==4){
                      echo '<td>77</td>';
                      }
                      //benar 5
                      else if($nilai_wa==5){
                      echo '<td>81</td>';
                      }
                      //benar 6
                      else if($nilai_wa==6){
                      echo '<td>84</td>';
                      }
                      //benar 7
                      else if($nilai_wa==7){
                      echo '<td>88</td>';
                      }
                      //benar 8
                      else if($nilai_wa==8){
                      echo '<td>91</td>';
                      }
                      //benar 9
                      else if($nilai_wa==9){
                      echo '<td>95</td>';
                      }
                      //benar 10
                      else if($nilai_wa==10){
                      echo '<td>99</td>';
                      }
                      //benar 11
                      else if($nilai_wa==11){
                      echo '<td>102</td>';
                      }
                      //benar 12
                      else if($nilai_wa==12){
                      echo '<td>106</td>';
                      }
                      //benar 13
                      else if($nilai_wa==13){
                      echo '<td>109</td>';
                      }
                      //benar 14
                      else if($nilai_wa==14){
                      echo '<td>113</td>';
                      }
                      //benar 15
                      else if($nilai_wa==15){
                      echo '<td>116</td>';
                      }
                      //benar 16
                      else if($nilai_wa==16){
                      echo '<td>120</td>';
                      }
                      //benar 17
                      else if($nilai_wa==17){
                      echo '<td>124</td>';
                      }
                      //benar 18
                      else if($nilai_wa==18){
                      echo '<td>127</td>';
                      }
                      //benar 19
                      else if($nilai_wa==19){
                      echo '<td>131</td>';
                      }
                      //benar 20
                      else if($nilai_wa==20){
                      echo '<td>134</td>';
                      }


                    }

                    else if($umur>=26 AND $umur<=30){
                      //benar 0
                      if($nilai_wa==0){
                      echo '<td>66</td>';
                      }
                      //benar 1
                      else if($nilai_wa==1){
                      echo '<td>69</td>';
                      }
                      //benar 2
                      else if($nilai_wa==2){
                      echo '<td>73</td>';
                      }
                      //benar 3
                      else if($nilai_se==3){
                      echo '<td>76</td>';
                      }
                      //benar 4
                      else if($nilai_wa==4){
                      echo '<td>79</td>';
                      }
                      //benar 5
                      else if($nilai_wa==5){
                      echo '<td>83</td>';
                      }
                      //benar 6
                      else if($nilai_wa==6){
                      echo '<td>86</td>';
                      }
                      //benar 7
                      else if($nilai_wa==7){
                      echo '<td>89</td>';
                      }
                      //benar 8
                      else if($nilai_wa==8){
                      echo '<td>93</td>';
                      }
                      //benar 9
                      else if($nilai_wa==9){
                      echo '<td>96</td>';
                      }
                      //benar 10
                      else if($nilai_wa==10){
                      echo '<td>99</td>';
                      }
                      //benar 11
                      else if($nilai_wa==11){
                      echo '<td>103</td>';
                      }
                      //benar 12
                      else if($nilai_wa==12){
                      echo '<td>106</td>';
                      }
                      //benar 13
                      else if($nilai_wa==13){
                      echo '<td>109</td>';
                      }
                      //benar 14
                      else if($nilai_wa==14){
                      echo '<td>113</td>';
                      }
                      //benar 15
                      else if($nilai_wa==15){
                      echo '<td>116</td>';
                      }
                      //benar 16
                      else if($nilai_wa==16){
                      echo '<td>119</td>';
                      }
                      //benar 17
                      else if($nilai_wa==17){
                      echo '<td>123</td>';
                      }
                      //benar 18
                      else if($nilai_wa==18){
                      echo '<td>126</td>';
                      }
                      //benar 19
                      else if($nilai_wa==19){
                      echo '<td>129</td>';
                      }
                      //benar 20
                      else if($nilai_wa==20){
                      echo '<td>133</td>';
                      }
                    }
                  ?></td>
                  </tr>
                  <tr>
                    <td>AN</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=3 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_an=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_an' value='".$nilai_an."'><span>".$nilai_an."</span>";                 

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_an==0){
                      echo '<td>76</td>';
                      }
                      //benar 1
                      else if($nilai_an==1){
                      echo '<td>78</td>';
                      }
                      //benar 2
                      else if($nilai_an==2){
                      echo '<td>81</td>';
                      }
                      //benar 3
                      else if($nilai_an==3){
                      echo '<td>83</td>';
                      }
                      //benar 4
                      else if($nilai_an==4){
                      echo '<td>86</td>';
                      }
                      //benar 5
                      else if($nilai_an==5){
                      echo '<td>88</td>';
                      }
                      //benar 6
                      else if($nilai_an==6){
                      echo '<td>91</td>';
                      }
                      //benar 7
                      else if($nilai_an==7){
                      echo '<td>93</td>';
                      }
                      //benar 8
                      else if($nilai_an==8){
                      echo '<td>96</td>';
                      }
                      //benar 9
                      else if($nilai_an==9){
                      echo '<td>98</td>';
                      }
                      //benar 10
                      else if($nilai_an==10){
                      echo '<td>101</td>';
                      }
                      //benar 11
                      else if($nilai_an==11){
                      echo '<td>103</td>';
                      }
                      //benar 12
                      else if($nilai_an==12){
                      echo '<td>106</td>';
                      }
                      //benar 13
                      else if($nilai_an==13){
                      echo '<td>108</td>';
                      }
                      //benar 14
                      else if($nilai_an==14){
                      echo '<td>111</td>';
                      }
                      //benar 15
                      else if($nilai_an==15){
                      echo '<td>113</td>';
                      }
                      //benar 16
                      else if($nilai_an==16){
                      echo '<td>116</td>';
                      }
                      //benar 17
                      else if($nilai_an==17){
                      echo '<td>118</td>';
                      }
                      //benar 18
                      else if($nilai_an==18){
                      echo '<td>121</td>';
                      }
                      //benar 19
                      else if($nilai_an==19){
                      echo '<td>123</td>';
                      }
                      //benar 20
                      else if($nilai_an==20){
                      echo '<td>126</td>';
                      }


                    }

                    else if($umur>=26 AND $umur<=30){
                      //benar 0
                      if($nilai_an==0){
                      echo '<td>78</td>';
                      }
                      //benar 1
                      else if($nilai_an==1){
                      echo '<td>80</td>';
                      }
                      //benar 2
                      else if($nilai_an==2){
                      echo '<td>83</td>';
                      }
                      //benar 3
                      else if($nilai_an==3){
                      echo '<td>85</td>';
                      }
                      //benar 4
                      else if($nilai_an==4){
                      echo '<td>87</td>';
                      }
                      //benar 5
                      else if($nilai_an==5){
                      echo '<td>90</td>';
                      }
                      //benar 6
                      else if($nilai_an==6){
                      echo '<td>92</td>';
                      }
                      //benar 7
                      else if($nilai_an==7){
                      echo '<td>95</td>';
                      }
                      //benar 8
                      else if($nilai_an==8){
                      echo '<td>97</td>';
                      }
                      //benar 9
                      else if($nilai_an==9){
                      echo '<td>99</td>';
                      }
                      //benar 10
                      else if($nilai_an==10){
                      echo '<td>102</td>';
                      }
                      //benar 11
                      else if($nilai_an==11){
                      echo '<td>104</td>';
                      }
                      //benar 12
                      else if($nilai_an==12){
                      echo '<td>106</td>';
                      }
                      //benar 13
                      else if($nilai_an==13){
                      echo '<td>109</td>';
                      }
                      //benar 14
                      else if($nilai_an==14){
                      echo '<td>111</td>';
                      }
                      //benar 15
                      else if($nilai_an==15){
                      echo '<td>114</td>';
                      }
                      //benar 16
                      else if($nilai_an==16){
                      echo '<td>116</td>';
                      }
                      //benar 17
                      else if($nilai_an==17){
                      echo '<td>118</td>';
                      }
                      //benar 18
                      else if($nilai_an==18){
                      echo '<td>121</td>';
                      }
                      //benar 19
                      else if($nilai_an==19){
                      echo '<td>123</td>';
                      }
                      //benar 20
                      else if($nilai_an==20){
                      echo '<td>125</td>';
                      }
                    }
                  ?></td>
                  </tr>
                  <tr>
                    <td>GE</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=4 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_ge=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_ge' value='".$nilai_ge."'><span>".$nilai_ge."</span>";

                     //UMUR 21 - 25
                     if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_ge==0){
                      echo '<td>69</td>';
                      }
                      //benar 1
                      else if($nilai_ge==1){
                      echo '<td>72</td>';
                      }
                      //benar 2
                      else if($nilai_ge==2){
                        echo '<td>75</td>';
                      }
                      //benar 3
                      else if($nilai_ge==3){
                        echo '<td>78</td>';
                      }
                      //benar 4
                      else if($nilai_ge==4){
                        echo '<td>81</td>';
                      }
                      //benar 5
                      else if($nilai_ge==5){
                        echo '<td>83</td>';
                      }
                      //benar 6
                      else if($nilai_ge==6){
                        echo '<td>86</td>';
                      }
                      //benar 7
                      else if($nilai_ge==7){
                        echo '<td>89</td>';
                      }
                      //benar 8
                      else if($nilai_ge==8){
                        echo '<td>92</td>';
                      }
                      //benar 9
                      else if($nilai_ge==9){
                        echo '<td>94</td>';
                      }
                      //benar 10
                      else if($nilai_ge==10){
                        echo '<td>97</td>';
                      }
                      //benar 11
                      else if($nilai_ge==11){
                        echo '<td>100</td>';
                      }
                      //benar 12
                      else if($nilai_ge==12){
                        echo '<td>103</td>';
                      }
                      //benar 13
                      else if($nilai_ge==13){
                        echo '<td>106</td>';
                      }
                      //benar 14
                      else if($nilai_ge==14){
                        echo '<td>108</td>';
                      }
                      //benar 15
                      else if($nilai_ge==15){
                        echo '<td>111</td>';
                      }
                      //benar 16
                      else if($nilai_ge==16){
                        echo '<td>114</td>';
                      }
                      //benar 17
                      else if($nilai_ge==17){
                        echo '<td>117</td>';
                      }
                      //benar 18
                      else if($nilai_ge==18){
                        echo '<td>119</td>';
                      }
                      //benar 19
                      else if($nilai_ge==19){
                        echo '<td>122</td>';
                      }
                      //benar 20
                      else if($nilai_ge==20){
                        echo '<td>125</td>';
                      }


                    }

                    //UMUR 26 - 30
                    else if($umur>=26 AND $umur<=30){
                      //benar 0
                      if($nilai_ge==0){
                      echo '<td>69</td>';
                      }
                      //benar 1
                      else if($nilai_ge==1){
                      echo '<td>71</td>';
                      }
                      //benar 2
                      else if($nilai_ge==2){
                        echo '<td>74</td>';
                      }
                      //benar 3
                      else if($nilai_ge==3){
                        echo '<td>77</td>';
                      }
                      //benar 4
                      else if($nilai_ge==4){
                        echo '<td>80</td>';
                      }
                      //benar 5
                      else if($nilai_ge==5){
                        echo '<td>83</td>';
                      }
                      //benar 6
                      else if($nilai_ge==6){
                        echo '<td>85</td>';
                      }
                      //benar 7
                      else if($nilai_ge==7){
                        echo '<td>88</td>';
                      }
                      //benar 8
                      else if($nilai_ge==8){
                        echo '<td>91</td>';
                      }
                      //benar 9
                      else if($nilai_ge==9){
                        echo '<td>94</td>';
                      }
                      //benar 10
                      else if($nilai_ge==10){
                        echo '<td>96</td>';
                      }
                      //benar 11
                      else if($nilai_ge==11){
                        echo '<td>99</td>';
                      }
                      //benar 12
                      else if($nilai_ge==12){
                        echo '<td>102</td>';
                      }
                      //benar 13
                      else if($nilai_ge==13){
                        echo '<td>105</td>';
                      }
                      //benar 14
                      else if($nilai_ge==14){
                        echo '<td>108</td>';
                      }
                      //benar 15
                      else if($nilai_ge==15){
                        echo '<td>110</td>';
                      }
                      //benar 16
                      else if($nilai_ge==16){
                        echo '<td>113</td>';
                      }
                      //benar 17
                      else if($nilai_ge==17){
                        echo '<td>116</td>';
                      }
                      //benar 18
                      else if($nilai_ge==18){
                        echo '<td>119</td>';
                      }
                      //benar 19
                      else if($nilai_ge==19){
                        echo '<td>121</td>';
                      }
                      //benar 20
                      else if($nilai_ge==20){
                        echo '<td>124</td>';
                      }
                    }
                    ?></td>
                  </tr>
                  <tr>
                    <td>RA</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=5 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_ra=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_ra' value='".$nilai_ra."'><span>".$nilai_ra."</span>";

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_ra==0){
                      echo '<td>74</td>';
                      }
                      //benar 1
                      else if($nilai_ra==1){
                      echo '<td>77</td>';
                      }
                      //benar 2
                      else if($nilai_ra==2){
                        echo '<td>79</td>';
                      }
                      //benar 3
                      else if($nilai_ra==3){
                        echo '<td>82</td>';
                      }
                      //benar 4
                      else if($nilai_ra==4){
                        echo '<td>85</td>';
                      }
                      //benar 5
                      else if($nilai_ra==5){
                        echo '<td>88</td>';
                      }
                      //benar 6
                      else if($nilai_ra==6){
                        echo '<td>91</td>';
                      }
                      //benar 7
                      else if($nilai_ra==7){
                        echo '<td>94</td>';
                      }
                      //benar 8
                      else if($nilai_ra==8){
                        echo '<td>97</td>';
                      }
                      //benar 9
                      else if($nilai_ra==9){
                        echo '<td>99</td>';
                      }
                      //benar 10
                      else if($nilai_ra==10){
                        echo '<td>102</td>';
                      }
                      //benar 11
                      else if($nilai_ra==11){
                        echo '<td>105</td>';
                      }
                      //benar 12
                      else if($nilai_ra==12){
                        echo '<td>108</td>';
                      }
                      //benar 13
                      else if($nilai_ra==13){
                        echo '<td>111</td>';
                      }
                      //benar 14
                      else if($nilai_ra==14){
                        echo '<td>114</td>';
                      }
                      //benar 15
                      else if($nilai_ra==15){
                        echo '<td>117</td>';
                      }
                      //benar 16
                      else if($nilai_ra==16){
                        echo '<td>119</td>';
                      }
                      //benar 17
                      else if($nilai_ra==17){
                        echo '<td>122</td>';
                      }
                      //benar 18
                      else if($nilai_ra==18){
                        echo '<td>125</td>';
                      }
                      //benar 19
                      else if($nilai_ra==19){
                        echo '<td>128</td>';
                      }
                      //benar 20
                      else if($nilai_ra==20){
                        echo '<td>131</td>';
                      }
                    }

                    else if($umur>=26 AND $umur<=30){
                    //benar 0
                    if($nilai_ra==0){
                      echo '<td>74</td>';
                      }
                      //benar 1
                      else if($nilai_ra==1){
                      echo '<td>77</td>';
                      }
                      //benar 2
                      else if($nilai_ra==2){
                        echo '<td>79</td>';
                      }
                      //benar 3
                      else if($nilai_ra==3){
                        echo '<td>82</td>';
                      }
                      //benar 4
                      else if($nilai_ra==4){
                        echo '<td>85</td>';
                      }
                      //benar 5
                      else if($nilai_ra==5){
                        echo '<td>88</td>';
                      }
                      //benar 6
                      else if($nilai_ra==6){
                        echo '<td>91</td>';
                      }
                      //benar 7
                      else if($nilai_ra==7){
                        echo '<td>94</td>';
                      }
                      //benar 8
                      else if($nilai_ra==8){
                        echo '<td>97</td>';
                      }
                      //benar 9
                      else if($nilai_ra==9){
                        echo '<td>99</td>';
                      }
                      //benar 10
                      else if($nilai_ra==10){
                        echo '<td>102</td>';
                      }
                      //benar 11
                      else if($nilai_ra==11){
                        echo '<td>105</td>';
                      }
                      //benar 12
                      else if($nilai_ra==12){
                        echo '<td>108</td>';
                      }
                      //benar 13
                      else if($nilai_ra==13){
                        echo '<td>111</td>';
                      }
                      //benar 14
                      else if($nilai_ra==14){
                        echo '<td>114</td>';
                      }
                      //benar 15
                      else if($nilai_ra==15){
                        echo '<td>117</td>';
                      }
                      //benar 16
                      else if($nilai_ra==16){
                        echo '<td>119</td>';
                      }
                      //benar 17
                      else if($nilai_ra==17){
                        echo '<td>122</td>';
                      }
                      //benar 18
                      else if($nilai_ra==18){
                        echo '<td>125</td>';
                      }
                      //benar 19
                      else if($nilai_ra==19){
                        echo '<td>128</td>';
                      }
                      //benar 20
                      else if($nilai_ra==20){
                        echo '<td>131</td>';
                      }
                    }
                    ?></td>
                  </tr>
                  <tr>
                    <td>ZR</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=6 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_zr=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_zr' value='".$nilai_zr."'><span>".$nilai_zr."</span>";

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_zr==0){
                      echo '<td>77</td>';
                      }
                      //benar 1
                      else if($nilai_zr==1){
                      echo '<td>80</td>';
                      }
                      //benar 2
                      else if($nilai_zr==2){
                        echo '<td>82</td>';
                      }
                      //benar 3
                      else if($nilai_zr==3){
                        echo '<td>84</td>';
                      }
                      //benar 4
                      else if($nilai_zr==4){
                        echo '<td>87</td>';
                      }
                      //benar 5
                      else if($nilai_zr==5){
                        echo '<td>89</td>';
                      }
                      //benar 6
                      else if($nilai_zr==6){
                        echo '<td>91</td>';
                      }
                      //benar 7
                      else if($nilai_zr==7){
                        echo '<td>94</td>';
                      }
                      //benar 8
                      else if($nilai_zr==8){
                        echo '<td>96</td>';
                      }
                      //benar 9
                      else if($nilai_zr==9){
                        echo '<td>99</td>';
                      }
                      //benar 10
                      else if($nilai_zr==10){
                        echo '<td>101</td>';
                      }
                      //benar 11
                      else if($nilai_zr==11){
                        echo '<td>103</td>';
                      }
                      //benar 12
                      else if($nilai_zr==12){
                        echo '<td>106</td>';
                      }
                      //benar 13
                      else if($nilai_zr==13){
                        echo '<td>108</td>';
                      }
                      //benar 14
                      else if($nilai_zr==14){
                        echo '<td>110</td>';
                      }
                      //benar 15
                      else if($nilai_zr==15){
                        echo '<td>113</td>';
                      }
                      //benar 16
                      else if($nilai_zr==16){
                        echo '<td>115</td>';
                      }
                      //benar 17
                      else if($nilai_zr==17){
                        echo '<td>118</td>';
                      }
                      //benar 18
                      else if($nilai_zr==18){
                        echo '<td>120</td>';
                      }
                      //benar 19
                      else if($nilai_zr==19){
                        echo '<td>122</td>';
                      }
                      //benar 20
                      else if($nilai_zr==20){
                        echo '<td>125</td>';
                      }
                    }

                    else if($umur>=26 AND $umur<=30){
                    //benar 0
                    if($nilai_zr==0){
                      echo '<td>79</td>';
                      }
                      //benar 1
                      else if($nilai_zr==1){
                      echo '<td>81</td>';
                      }
                      //benar 2
                      else if($nilai_zr==2){
                        echo '<td>83</td>';
                      }
                      //benar 3
                      else if($nilai_zr==3){
                        echo '<td>86</td>';
                      }
                      //benar 4
                      else if($nilai_zr==4){
                        echo '<td>88</td>';
                      }
                      //benar 5
                      else if($nilai_zr==5){
                        echo '<td>90</td>';
                      }
                      //benar 6
                      else if($nilai_zr==6){
                        echo '<td>93</td>';
                      }
                      //benar 7
                      else if($nilai_zr==7){
                        echo '<td>95</td>';
                      }
                      //benar 8
                      else if($nilai_zr==8){
                        echo '<td>97</td>';
                      }
                      //benar 9
                      else if($nilai_zr==9){
                        echo '<td>100</td>';
                      }
                      //benar 10
                      else if($nilai_zr==10){
                        echo '<td>102</td>';
                      }
                      //benar 11
                      else if($nilai_zr==11){
                        echo '<td>104</td>';
                      }
                      //benar 12
                      else if($nilai_zr==12){
                        echo '<td>107</td>';
                      }
                      //benar 13
                      else if($nilai_zr==13){
                        echo '<td>109</td>';
                      }
                      //benar 14
                      else if($nilai_zr==14){
                        echo '<td>111</td>';
                      }
                      //benar 15
                      else if($nilai_zr==15){
                        echo '<td>113</td>';
                      }
                      //benar 16
                      else if($nilai_zr==16){
                        echo '<td>116</td>';
                      }
                      //benar 17
                      else if($nilai_zr==17){
                        echo '<td>118</td>';
                      }
                      //benar 18
                      else if($nilai_zr==18){
                        echo '<td>120</td>';
                      }
                      //benar 19
                      else if($nilai_zr==19){
                        echo '<td>123</td>';
                      }
                      //benar 20
                      else if($nilai_zr==20){
                        echo '<td>125</td>';
                      }
                    }
                    ?></td>
                  </tr>
                  <tr>
                    <td>FA</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=7 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_fa=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_fa' value='".$nilai_fa."'><span>".$nilai_fa."</span>";

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_fa==0){
                      echo '<td>70</td>';
                      }
                      //benar 1
                      else if($nilai_fa==1){
                      echo '<td>73</td>';
                      }
                      //benar 2
                      else if($nilai_fa==2){
                        echo '<td>76</td>';
                      }
                      //benar 3
                      else if($nilai_fa==3){
                        echo '<td>79</td>';
                      }
                      //benar 4
                      else if($nilai_fa==4){
                        echo '<td>81</td>';
                      }
                      //benar 5
                      else if($nilai_fa==5){
                        echo '<td>84</td>';
                      }
                      //benar 6
                      else if($nilai_fa==6){
                        echo '<td>87</td>';
                      }
                      //benar 7
                      else if($nilai_fa==7){
                        echo '<td>90</td>';
                      }
                      //benar 8
                      else if($nilai_fa==8){
                        echo '<td>93</td>';
                      }
                      //benar 9
                      else if($nilai_fa==9){
                        echo '<td>96</td>';
                      }
                      //benar 10
                      else if($nilai_fa==10){
                        echo '<td>99</td>';
                      }
                      //benar 11
                      else if($nilai_fa==11){
                        echo '<td>101</td>';
                      }
                      //benar 12
                      else if($nilai_fa==12){
                        echo '<td>104</td>';
                      }
                      //benar 13
                      else if($nilai_fa==13){
                        echo '<td>107</td>';
                      }
                      //benar 14
                      else if($nilai_fa==14){
                        echo '<td>110</td>';
                      }
                      //benar 15
                      else if($nilai_fa==15){
                        echo '<td>113</td>';
                      }
                      //benar 16
                      else if($nilai_fa==16){
                        echo '<td>116</td>';
                      }
                      //benar 17
                      else if($nilai_fa==17){
                        echo '<td>119</td>';
                      }
                      //benar 18
                      else if($nilai_fa==18){
                        echo '<td>121</td>';
                      }
                      //benar 19
                      else if($nilai_fa==19){
                        echo '<td>124</td>';
                      }
                      //benar 20
                      else if($nilai_fa==20){
                        echo '<td>127</td>';
                      }
                    }

                    else if($umur>=26 AND $umur<=30){
                     //benar 0
                     if($nilai_fa==0){
                      echo '<td>71</td>';
                      }
                      //benar 1
                      else if($nilai_fa==1){
                      echo '<td>73</td>';
                      }
                      //benar 2
                      else if($nilai_fa==2){
                        echo '<td>76</td>';
                      }
                      //benar 3
                      else if($nilai_fa==3){
                        echo '<td>79</td>';
                      }
                      //benar 4
                      else if($nilai_fa==4){
                        echo '<td>82</td>';
                      }
                      //benar 5
                      else if($nilai_fa==5){
                        echo '<td>85</td>';
                      }
                      //benar 6
                      else if($nilai_fa==6){
                        echo '<td>88</td>';
                      }
                      //benar 7
                      else if($nilai_fa==7){
                        echo '<td>91</td>';
                      }
                      //benar 8
                      else if($nilai_fa==8){
                        echo '<td>93</td>';
                      }
                      //benar 9
                      else if($nilai_fa==9){
                        echo '<td>96</td>';
                      }
                      //benar 10
                      else if($nilai_fa==10){
                        echo '<td>99</td>';
                      }
                      //benar 11
                      else if($nilai_fa==11){
                        echo '<td>102</td>';
                      }
                      //benar 12
                      else if($nilai_fa==12){
                        echo '<td>105</td>';
                      }
                      //benar 13
                      else if($nilai_fa==13){
                        echo '<td>108</td>';
                      }
                      //benar 14
                      else if($nilai_fa==14){
                        echo '<td>111</td>';
                      }
                      //benar 15
                      else if($nilai_fa==15){
                        echo '<td>113</td>';
                      }
                      //benar 16
                      else if($nilai_fa==16){
                        echo '<td>116</td>';
                      }
                      //benar 17
                      else if($nilai_fa==17){
                        echo '<td>119</td>';
                      }
                      //benar 18
                      else if($nilai_fa==18){
                        echo '<td>122</td>';
                      }
                      //benar 19
                      else if($nilai_fa==19){
                        echo '<td>125</td>';
                      }
                      //benar 20
                      else if($nilai_fa==20){
                        echo '<td>128</td>';
                      }
                    }
                    ?></td>
                  </tr>
                  <tr>
                    <td>WU</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=8 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_wu=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_wu' value='".$nilai_wu."'><span>".$nilai_wu."</span>";

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_wu==0){
                      echo '<td>72</td>';
                      }
                      //benar 1
                      else if($nilai_wu==1){
                      echo '<td>75</td>';
                      }
                      //benar 2
                      else if($nilai_wu==2){
                        echo '<td>77</td>';
                      }
                      //benar 3
                      else if($nilai_wu==3){
                        echo '<td>80</td>';
                      }
                      //benar 4
                      else if($nilai_wu==4){
                        echo '<td>83</td>';
                      }
                      //benar 5
                      else if($nilai_wu==5){
                        echo '<td>86</td>';
                      }
                      //benar 6
                      else if($nilai_wu==6){
                        echo '<td>89</td>';
                      }
                      //benar 7
                      else if($nilai_wu==7){
                        echo '<td>92</td>';
                      }
                      //benar 8
                      else if($nilai_wu==8){
                        echo '<td>95</td>';
                      }
                      //benar 9
                      else if($nilai_wu==9){
                        echo '<td>97</td>';
                      }
                      //benar 10
                      else if($nilai_wu==10){
                        echo '<td>100</td>';
                      }
                      //benar 11
                      else if($nilai_wu==11){
                        echo '<td>103</td>';
                      }
                      //benar 12
                      else if($nilai_wu==12){
                        echo '<td>106</td>';
                      }
                      //benar 13
                      else if($nilai_wu==13){
                        echo '<td>109</td>';
                      }
                      //benar 14
                      else if($nilai_wu==14){
                        echo '<td>112</td>';
                      }
                      //benar 15
                      else if($nilai_wu==15){
                        echo '<td>115</td>';
                      }
                      //benar 16
                      else if($nilai_wu==16){
                        echo '<td>117</td>';
                      }
                      //benar 17
                      else if($nilai_wu==17){
                        echo '<td>120</td>';
                      }
                      //benar 18
                      else if($nilai_wu==18){
                        echo '<td>123</td>';
                      }
                      //benar 19
                      else if($nilai_wu==19){
                        echo '<td>126</td>';
                      }
                      //benar 20
                      else if($nilai_wu==20){
                        echo '<td>129</td>';
                      }
                    }

                    else if($umur>=26 AND $umur<=30){
                     //benar 0
                     if($nilai_wu==0){
                      echo '<td>72</td>';
                      }
                      //benar 1
                      else if($nilai_wu==1){
                      echo '<td>75</td>';
                      }
                      //benar 2
                      else if($nilai_wu==2){
                        echo '<td>78</td>';
                      }
                      //benar 3
                      else if($nilai_wu==3){
                        echo '<td>81</td>';
                      }
                      //benar 4
                      else if($nilai_wu==4){
                        echo '<td>84</td>';
                      }
                      //benar 5
                      else if($nilai_wu==5){
                        echo '<td>87</td>';
                      }
                      //benar 6
                      else if($nilai_wu==6){
                        echo '<td>90</td>';
                      }
                      //benar 7
                      else if($nilai_wu==7){
                        echo '<td>93</td>';
                      }
                      //benar 8
                      else if($nilai_wu==8){
                        echo '<td>96</td>';
                      }
                      //benar 9
                      else if($nilai_wu==9){
                        echo '<td>99</td>';
                      }
                      //benar 10
                      else if($nilai_wu==10){
                        echo '<td>101</td>';
                      }
                      //benar 11
                      else if($nilai_wu==11){
                        echo '<td>104</td>';
                      }
                      //benar 12
                      else if($nilai_wu==12){
                        echo '<td>107</td>';
                      }
                      //benar 13
                      else if($nilai_wu==13){
                        echo '<td>110</td>';
                      }
                      //benar 14
                      else if($nilai_wu==14){
                        echo '<td>113</td>';
                      }
                      //benar 15
                      else if($nilai_wu==15){
                        echo '<td>116</td>';
                      }
                      //benar 16
                      else if($nilai_wu==16){
                        echo '<td>119</td>';
                      }
                      //benar 17
                      else if($nilai_wu==17){
                        echo '<td>122</td>';
                      }
                      //benar 18
                      else if($nilai_wu==18){
                        echo '<td>125</td>';
                      }
                      //benar 19
                      else if($nilai_wu==19){
                        echo '<td>128</td>';
                      }
                      //benar 20
                      else if($nilai_wu==20){
                        echo '<td>131</td>';
                      }
                    }
                    ?></td>
                  </tr>
                  <tr>
                    <td>ME</td>
                    <td><?php
                    $nilai = $this->db->query("SELECT count(tb_data_jawaban_ist.nilai) AS jumlah,tb_data_diri.tanggal_lahir as tgl_lhr FROM tb_data_jawaban_ist INNER JOIN tb_data_diri ON tb_data_jawaban_ist.id_pelamar=tb_data_diri.id_pelamar WHERE tb_data_jawaban_ist.subtes=9 AND tb_data_jawaban_ist.nilai=1 AND tb_data_jawaban_ist.id_lowongan = $id_lowongan_ist AND tb_data_jawaban_ist.id_pelamar=$id_pelamar_ist");
                    $result = $nilai->result_array();
                    $nilai_me=$result[0]['jumlah'];

                    $from = new DateTime($result[0]['tgl_lhr']);
                    $to   = new DateTime('today');
                    $umur = $from->diff($to)->y;


                    echo "<input type='hidden' id='nilai_me' value='".$nilai_me."'><span>".$nilai_me."</span>";

                    //UMUR 21 - 25
                    if($umur>=21 AND $umur<=25){
                      //benar 0
                      if($nilai_me==0){
                      echo '<td>75</td>';
                      }
                      //benar 1
                      else if($nilai_me==1){
                      echo '<td>77</td>';
                      }
                      //benar 2
                      else if($nilai_me==2){
                        echo '<td>80</td>';
                      }
                      //benar 3
                      else if($nilai_me==3){
                        echo '<td>82</td>';
                      }
                      //benar 4
                      else if($nilai_me==4){
                        echo '<td>84</td>';
                      }
                      //benar 5
                      else if($nilai_me==5){
                        echo '<td>87</td>';
                      }
                      //benar 6
                      else if($nilai_me==6){
                        echo '<td>89</td>';
                      }
                      //benar 7
                      else if($nilai_me==7){
                        echo '<td>91</td>';
                      }
                      //benar 8
                      else if($nilai_me==8){
                        echo '<td>94</td>';
                      }
                      //benar 9
                      else if($nilai_me==9){
                        echo '<td>96</td>';
                      }
                      //benar 10
                      else if($nilai_me==10){
                        echo '<td>98</td>';
                      }
                      //benar 11
                      else if($nilai_me==11){
                        echo '<td>101</td>';
                      }
                      //benar 12
                      else if($nilai_me==12){
                        echo '<td>103</td>';
                      }
                      //benar 13
                      else if($nilai_me==13){
                        echo '<td>105</td>';
                      }
                      //benar 14
                      else if($nilai_me==14){
                        echo '<td>108</td>';
                      }
                      //benar 15
                      else if($nilai_me==15){
                        echo '<td>110</td>';
                      }
                      //benar 16
                      else if($nilai_me==16){
                        echo '<td>112</td>';
                      }
                      //benar 17
                      else if($nilai_me==17){
                        echo '<td>115</td>';
                      }
                      //benar 18
                      else if($nilai_me==18){
                        echo '<td>117</td>';
                      }
                      //benar 19
                      else if($nilai_me==19){
                        echo '<td>119</td>';
                      }
                      //benar 20
                      else if($nilai_me==20){
                        echo '<td>122</td>';
                      }
                    }

                    else if($umur>=26 AND $umur<=30){
                     //benar 0
                     if($nilai_me==0){
                      echo '<td>77</td>';
                      }
                      //benar 1
                      else if($nilai_me==1){
                      echo '<td>80</td>';
                      }
                      //benar 2
                      else if($nilai_me==2){
                        echo '<td>82</td>';
                      }
                      //benar 3
                      else if($nilai_me==3){
                        echo '<td>84</td>';
                      }
                      //benar 4
                      else if($nilai_me==4){
                        echo '<td>86</td>';
                      }
                      //benar 5
                      else if($nilai_me==5){
                        echo '<td>89</td>';
                      }
                      //benar 6
                      else if($nilai_me==6){
                        echo '<td>91</td>';
                      }
                      //benar 7
                      else if($nilai_me==7){
                        echo '<td>93</td>';
                      }
                      //benar 8
                      else if($nilai_me==8){
                        echo '<td>95</td>';
                      }
                      //benar 9
                      else if($nilai_me==9){
                        echo '<td>98</td>';
                      }
                      //benar 10
                      else if($nilai_me==10){
                        echo '<td>100</td>';
                      }
                      //benar 11
                      else if($nilai_me==11){
                        echo '<td>102</td>';
                      }
                      //benar 12
                      else if($nilai_me==12){
                        echo '<td>105</td>';
                      }
                      //benar 13
                      else if($nilai_me==13){
                        echo '<td>107</td>';
                      }
                      //benar 14
                      else if($nilai_me==14){
                        echo '<td>109</td>';
                      }
                      //benar 15
                      else if($nilai_me==15){
                        echo '<td>111</td>';
                      }
                      //benar 16
                      else if($nilai_me==16){
                        echo '<td>114</td>';
                      }
                      //benar 17
                      else if($nilai_me==17){
                        echo '<td>116</td>';
                      }
                      //benar 18
                      else if($nilai_me==18){
                        echo '<td>118</td>';
                      }
                      //benar 19
                      else if($nilai_me==19){
                        echo '<td>120</td>';
                      }
                      //benar 20
                      else if($nilai_me==20){
                        echo '<td>123</td>';
                      }
                    }
                    ?></td>
                  </tr>
                  <tr>
                    <td>GESAMT</td>
                    <td><span id="rs_gesamt"></span></td>
                    <td><span id="ss_gesamt"></span></td>
                  </tr>
                </table>

                </body>
                <?php $modal++;  }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<script>
var nilaise = document.getElementById("nilai_se").value;
var nilai_se = parseInt(nilaise, 10);
var nilaiwa = document.getElementById("nilai_wa").value;
var nilai_wa = parseInt(nilaiwa, 10);
var nilaian = document.getElementById("nilai_an").value;
var nilai_an = parseInt(nilaian, 10);
var nilaige = document.getElementById("nilai_ge").value;
var nilai_ge = parseInt(nilaige, 10);
var nilaira = document.getElementById("nilai_ra").value;
var nilai_ra = parseInt(nilaira, 10);
var nilaizr = document.getElementById("nilai_zr").value;
var nilai_zr = parseInt(nilaizr, 10);
var nilaifa = document.getElementById("nilai_fa").value;
var nilai_fa = parseInt(nilaifa, 10);
var nilaiwu = document.getElementById("nilai_wu").value;
var nilai_wu = parseInt(nilaiwu, 10);
var nilaime = document.getElementById("nilai_me").value;
var nilai_me = parseInt(nilaime, 10);
var rs = nilai_se+nilai_wa+nilai_an+nilai_ge+nilai_ra+nilai_zr+nilai_fa+nilai_wu+nilai_me;
var ss = parseInt(rs, 10);

var umur = document.getElementById("umur").value;
var umure = parseInt(umur, 10);

document.getElementById("rs_gesamt").innerHTML = rs;

if(umure>=21 && umure<=25){
  if(ss>=1 && ss<=10){
     document.getElementById("ss_gesamt").innerHTML = "67";
  }
  else if(ss>=11 && ss<=20){
     document.getElementById("ss_gesamt").innerHTML = "70";
  }
  else if(ss>=21 && ss<=30){
     document.getElementById("ss_gesamt").innerHTML = "74";
  }
  else if(ss>=31 && ss<=40){
     document.getElementById("ss_gesamt").innerHTML = "78";
  }
  else if(ss>=41 && ss<=50){
     document.getElementById("ss_gesamt").innerHTML = "82";
  }
  else if(ss>=51 && ss<=60){
     document.getElementById("ss_gesamt").innerHTML = "86";
  }
  else if(ss>=61 && ss<=70){
     document.getElementById("ss_gesamt").innerHTML = "90";
  }
  else if(ss>=71 && ss<=80){
     document.getElementById("ss_gesamt").innerHTML = "93";
  }
  else if(ss>=81 && ss<=90){
     document.getElementById("ss_gesamt").innerHTML = "97";
  }
  else if(ss>=91 && ss<=100){
     document.getElementById("ss_gesamt").innerHTML = "101";
  }
  else if(ss>=101 && ss<=110){
     document.getElementById("ss_gesamt").innerHTML = "105";
  }
  else if(ss>=111 && ss<=120){
     document.getElementById("ss_gesamt").innerHTML = "109";
  }
  else if(ss>=121 && ss<=130){
     document.getElementById("ss_gesamt").innerHTML = "113";
  }
  else if(ss>=131 && ss<=140){
     document.getElementById("ss_gesamt").innerHTML = "117";
  }
  else if(ss>=141 && ss<=150){
     document.getElementById("ss_gesamt").innerHTML = "120";
  }
  else if(ss>=151 && ss<=160){
     document.getElementById("ss_gesamt").innerHTML = "124";
  }
  else if(ss>=161 && ss<=170){
     document.getElementById("ss_gesamt").innerHTML = "128";
  }
  else if(ss>=171 && ss<=180){
     document.getElementById("ss_gesamt").innerHTML = "132";
  }
}

else if(umure>=26 && umure<=30){
  if(ss>=1 && ss<=10){
     document.getElementById("ss_gesamt").innerHTML = "67";
  }
  else if(ss>=11 && ss<=20){
     document.getElementById("ss_gesamt").innerHTML = "71";
  }
  else if(ss>=21 && ss<=30){
     document.getElementById("ss_gesamt").innerHTML = "75";
  }
  else if(ss>=31 && ss<=40){
     document.getElementById("ss_gesamt").innerHTML = "79";
  }
  else if(ss>=41 && ss<=50){
     document.getElementById("ss_gesamt").innerHTML = "83";
  }
  else if(ss>=51 && ss<=60){
     document.getElementById("ss_gesamt").innerHTML = "87";
  }
  else if(ss>=61 && ss<=70){
     document.getElementById("ss_gesamt").innerHTML = "90";
  }
  else if(ss>=71 && ss<=80){
     document.getElementById("ss_gesamt").innerHTML = "94";
  }
  else if(ss>=81 && ss<=90){
     document.getElementById("ss_gesamt").innerHTML = "98";
  }
  else if(ss>=91 && ss<=100){
     document.getElementById("ss_gesamt").innerHTML = "102";
  }
  else if(ss>=101 && ss<=110){
     document.getElementById("ss_gesamt").innerHTML = "106";
  }
  else if(ss>=111 && ss<=120){
     document.getElementById("ss_gesamt").innerHTML = "110";
  }
  else if(ss>=121 && ss<=130){
     document.getElementById("ss_gesamt").innerHTML = "113";
  }
  else if(ss>=131 && ss<=140){
     document.getElementById("ss_gesamt").innerHTML = "117";
  }
  else if(ss>=141 && ss<=150){
     document.getElementById("ss_gesamt").innerHTML = "121";
  }
  else if(ss>=151 && ss<=160){
     document.getElementById("ss_gesamt").innerHTML = "125";
  }
  else if(ss>=161 && ss<=170){
     document.getElementById("ss_gesamt").innerHTML = "129";
  }
  else if(ss>=171 && ss<=180){
     document.getElementById("ss_gesamt").innerHTML = "133";
  }
}
</script>

<?php $this->load->view('layout/footer'); ?>