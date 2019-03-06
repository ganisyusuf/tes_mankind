<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.png">
  <title>
    Djalin | Sistem Inventory
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url();?>/assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url();?>/assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" media="all" type="text/css" href="jquery-ui.css" />
  <link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />
  <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="jquery-ui.min.js"></script>
  <script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
  <script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <!-- <a href="<?php echo base_url();?>javascript:void(0)" class="simple-text logo-mini">
            CT
          </a> -->
          <img src="<?php echo base_url();?>/assets/img/djalin-logo.png" alt="Profile Photo">

          <!-- <a href="<?php echo base_url();?>javascript:void(0)" class="simple-text logo-normal">
            Creative Tim
          </a> -->
        </div>
        <ul class="nav">
          <li>
            <a href="<?php echo site_url(); ?>/Produk">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Input Produk</p>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url(); ?>/Login">
              <i class="tim-icons icon-atom"></i>
              <p>Jenis Produk</p>
            </a>
          </li>
          <li>
              <a href="<?php echo site_url(); ?>/Transaksi_masuk">
              <i class="tim-icons icon-pin"></i>
              <p>Transaksi Masuk</p>
            </a>
          </li>
          <li class="active">
              <a href="<?php echo site_url(); ?>/Transaksi_keluar">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Transaksi Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="<?php echo base_url();?>"javascript:void(0)">Sistem Inventory</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <a href="<?php echo site_url('Login_user/logout');?>">Logout</a>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      
      
      <!-- Tambah Jenis Produk -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
             
              <div class="card-header">
                <h4 class="card-title">Form Entry Produk Keluar ke Gudang</h4>
                <p>Nama Produk</p>
                <form action="<?php echo site_url(); ?>/Transaksi_keluar/tambah_keluar" method=post>

                <?php $data = $this->Transaksi_keluar_m->ambilDataProduk(); ?>
                <select name="kode_produk" id="kode_produk" required >
                      <option value="">--Nama Produk--</option>
                      <?php if($data->num_rows()){
                                foreach ($data->result() as $key):
                      ?>
                      <option value="<?php echo $key->kode_produk;?>">
                        <?php echo $key->nama_produk;?>
                      </option>
                    <?php endforeach; } ?>
                </select>
                <br /><br />
                    <p>Jumlah Produk keluar   :</p>
                    <input type="text" name="qty" size="50" required><br /><br /> 
                     <p>Tanggal Keluar Produk  :</p>
                     <input id="datepicker" width="276" name="tanggal" size="50" required style="
                      background-color: white;"  />
                       <script>
                          $('#datepicker').datepicker();
                      </script>
                    <p>Nomor Bukti Transaksi   :</p>
                    <input type="text" name="id" size="50" required><br /><br /> 
                    <input type="submit" value="Simpan" button type="button" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>
       <!--  </div>
      </div> -->
      
            <!-- End Navbar -->
      <!-- <div class="content">
        <div class="row"> -->
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title">List Produk</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          No
                        </th>
                        <th>
                          Tanggal Keluar Produk
                        </th>
                        <th>
                          Nama Produk 
                        </th>
                        <th>
                          Tipe Produk
                        </th>
                        <th>
                          Jumlah Produk Keluar
                        </th>
                        <th>
                          Stok Terbaru
                        </th>
                        <th>
                          Total Harga
                        </th>
                        <th>
                          No Bukti Transaksi
                        </th>
                          
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                          $no=1;
                            foreach ($keluar->result() as $i) {
                          ?>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $i->tanggal ?></td>
                          <td><?php echo $i->nama_produk?></td>
                          <td><?php echo $i->type_produk?></td>
                          <td><?php echo $i->qty?></td>
                          <td><?php echo $i->stock_new?></td>
                          <td><?php echo $i->total_harga?></td>
                          <td><?php echo $i->id?></td>
                        </tr>
                        <?php
                          }
                          ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="<?php echo base_url();?>javascript:void(0)" target="_blank">Ganis Maulia Yusuf</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="<?php echo base_url();?>https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url();?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url();?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>/assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url();?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
</body>

</html>