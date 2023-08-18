<title>Dashboard User</title>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <?= $this->session->flashdata('info'); ?>
        <div class="row">
            <!-- Column -->
            
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <div class="text-left">
                            <h2 class="font-light m-b-0"><i class="fa fa-map-marker fa-2x pull-right" style="color:green;"></i><b>Lokasi</b></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <div class="text-left">
                        <h2 class="font-light m-b-0"><i class="fa fa-calendar-check-o fa-2x pull-right" style="color:blue;"></i><b>Jadwal</b></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <div class="text-left">
                            <h2 class="font-light m-b-0"><i class="fa fa-clock-o fa-2x pull-right" style="color:red;"></i><b>Antrian</b></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <b>Lokasi :</b> </br>
                        <?php
                        foreach ($jadwal->result() as $row) { ?>
                            <?= $row->lokasi_vaksin; ?>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                        <b>Hari &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>
                        <?php
                        foreach ($tanggal_vaksin->result() as $row) { ?>
                            <?= $row->hari; ?>
                        <?php }
                        ?>
                        </br>
                        <b>Tanggal : </b>
                        <?php
                        foreach ($tanggal_vaksin->result() as $row) { ?>
                            <?= $row->tanggal; ?>
                        <?php }
                        ?>
                        </br>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-block">
                    <center>
                        <span class="fa-stack fa-4x">
                            <!-- The icon that will wrap the number -->
                            <span class="fa fa-square-o fa-stack-2x" style="color:red;"></span>
                            <!-- a strong element with the custom content, in this case a number -->
                            <strong class="fa-stack-1x" style="color:red;">
                            <?php
                            foreach ($jadwal->result() as $row) { ?>
                                <?= $row->no_antrian; ?>
                            <?php }
                            ?>
                            </strong>
                        </span>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->