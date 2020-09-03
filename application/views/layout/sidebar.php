<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url('assets/faces/twitter/jsa/48.jpg') ?>" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?php echo $this->session->userdata('ses_nama') ?></p>
      <p class="app-sidebar__user-designation"><?php echo $this->session->userdata('ses_idLevel') ?></p>
    </div>
  </div>
  <ul class="app-menu">
    <?php  if ($this->session->userdata('ses_idLevel') == 'Administrator') { ?>
      <li><a class="app-menu__item active" href="<?php echo base_url('Administrator/Welcome') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?php echo base_url('Administrator/Welcome/data_level') ?>"><i class="icon fa fa-circle-o"></i> Level</a></li>
          <li><a class="treeview-item" href="<?php echo base_url('Administrator/Welcome/data_admin') ?>" ><i class="icon fa fa-circle-o"></i> Admin</a></li>
          <li><a class="treeview-item" href="<?php echo base_url('Administrator/Welcome/data_perusahaan') ?>"><i class="icon fa fa-circle-o"></i> Perusahaan</a></li>
          <li><a class="treeview-item" href="<?php echo base_url('Administrator/Welcome/data_psikolog') ?>"><i class="icon fa fa-circle-o"></i> Psikolog</a></li>
        </ul>
      </li>
       <li><a class="app-menu__item" href="<?php echo base_url('Administrator/Data_lowongan') ?>"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Lowongan Kerja</span></a></li>
       <li><a class="app-menu__item" href="<?php echo base_url('Administrator/Data_motlet') ?>"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Motivation Letter </span></a></li>
    <?php } else if ($this->session->userdata('ses_idLevel') == 'Admin Sdm') { ?>
      <li><a class="app-menu__item active" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="<?php echo base_url('Administrator/Welcome/data_level') ?>"><i class="icon fa fa-circle-o"></i> Level</a></li>
      </li>
    <?php } ?>
  </ul>
</aside>
    <!-- end sidebar menu -->