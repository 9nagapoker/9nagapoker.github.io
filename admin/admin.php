<?php include '../template/header.php'; ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Sistem Rencana Harian Kerja</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="callout callout-info">
          <h4>Haloo <?php echo $_SESSION['username']?>, </h4>
            <p>Selamat datang di Sistem Rencana Harian Kerja.</p>
            <p>Gunakan sistem ini mencatat setiap permasalah yang dihadapi setiap hari.
              <br/>Caranya ..... , lalu .....
              <br/>Update .....
            </p>
          </div>
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include '../template/footer.php'; ?>