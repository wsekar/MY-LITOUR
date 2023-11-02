<div class="container-fluid">
    <?php
    date_default_timezone_set("Asia/Jakarta");
    $b = time();
    $hour = date("G", $b);
    if ($hour >= 0 && $hour <= 11) {
        echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'><b>Hallo, ";
        echo $this->session->userdata('nama_admin');
        echo "<br>";
        echo "Selamat Pagi <i class='far fa-smile-beam text-info'></i></h4>
    <p>Selamat Datang di Halaman Admin MY LITOUR</b></p>
    <hr>
    </div>";
    } elseif ($hour >= 12 && $hour <= 14) {
        echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'><b>Hallo, ";
        echo $this->session->userdata('nama_admin');
        echo "<br>";
        echo "Selamat Siang <i class='far fa-smile-beam text-info'></i></h4>
    <p>Selamat Datang di Halaman Admin MY LITOUR</b></p>
    <hr>
    </div>";
    } elseif ($hour >= 15 && $hour <= 17) {
        echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'><b>Hallo, ";
        echo $this->session->userdata('nama_admin');
        echo "<br>";
        echo "Selamat Sore <i class='far fa-smile-beam text-info'></i></h4>
    <p>Selamat Datang di Halaman Admin MY LITOUR</b></p>
    <hr>
    </div>";
    } elseif ($hour >= 17 && $hour <= 18) {
        echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'><b>Hallo, ";
        echo $this->session->userdata('nama_admin');
        echo "<br>";
        echo "Selamat Petang <i class='far fa-smile-beam text-info'></i></h4>
    <p>Selamat Datang di Halaman Admin MY LITOUR</b></p>
    <hr>
    </div>";
    } elseif ($hour >= 19 && $hour <= 23) {
        echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'><b>Hallo, ";
        echo $this->session->userdata('nama_admin');
        echo "<br>";
        echo "Selamat Malam <i class='far fa-smile-beam text-info'></i></h4>
    <p>Selamat Datang di Halaman Admin MY LITOUR</b></p>
    <hr>
    </div>";
    }
    ?>

    <!-- Content Row -->
    <div class="row">
        <!-- Manual Book Section -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Buku Manual Admin</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <i class="fas fa-4x fa-book-reader text-success"></i>
                    </div>
                    <p class="mt-4 text-justify" style="font-weight: 500;">Buku petunjuk (user manual book) pengelolaan
                        data-data master Sistem MY LITOUR.</p>
                    <a href="<?php echo base_url('assets/bukupanduan/User Manual Book My Litour.pdf') ?>"
                        class="btn btn-primary"><i class="fas fa-download"></i> Download</a>
                </div>
            </div>
        </div>
        <!-- End Manual Book Section -->
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Jumlah Admin -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jumlah_admin ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Potensi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Potensi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jumlah_potensi ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-street-view fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Kategori -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Jumlah Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jumlah_kategori ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list-ul fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Wilayah -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Jumlah Wilayah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $jumlah_wilayah ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistik Pengunjung Section -->
    <div class="col-xl-14">
        <div class="card shadow mb-1">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <div class="row justify-content-between" style="margin-left:5px; margin-right:5px;">
                    <h6 class="m-0 font-weight-bold text-primary" style="display:flex; align-self:center;">Statistik
                        Pengunjung Website</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="<?= site_url('dashboard/cetak') ?>"
                                class="btn btn-warning btn-icon-split btn-sm visible-xs-block " title="Cetak Laporan"
                                target="_blank">
                                <span class="icon text-white">
                                    <i class="fas fa-print"></i>
                                </span>
                                <span class="text">&nbsp;Cetak</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form id="mainform" name="mainform" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="small-box bg-gradient-success text-white">
                                        <div class="font-weight-bold inner">
                                            <h3>
                                                <?= ribuan($hari_ini); ?>
                                            </h3>
                                            <p>Hari Ini</p>
                                        </div>
                                        <div class="icon">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                        <a href="<?= site_url('dashboard/detail/1') ?>" class="small-box-footer">Detail
                                            <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="small-box bg-gradient-primary text-white">
                                        <div class="font-weight-bold inner">
                                            <h3>
                                                <?= ribuan($kemarin); ?></sup>
                                            </h3>
                                            <p>Kemarin</p>
                                        </div>
                                        <div class="icon">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                        <a href="<?= site_url('dashboard/detail/2') ?>" class="small-box-footer">Detail
                                            <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="small-box bg-gradient-info text-white">
                                        <div class="font-weight-bold inner">
                                            <h3>
                                                <?= ribuan($minggu_ini); ?>
                                            </h3>
                                            <p>Minggu Ini</p>
                                        </div>
                                        <div class="icon">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                        <a href="<?= site_url('dashboard/detail/3') ?>" class="small-box-footer">Detail
                                            <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="small-box bg-gradient-secondary text-white">
                                        <div class="font-weight-bold inner">
                                            <h3>
                                                <?= ribuan($bulan_ini); ?>
                                            </h3>
                                            <p>Bulan Ini</p>
                                        </div>
                                        <div class="icon">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                        <a href="<?= site_url('dashboard/detail/4') ?>" class="small-box-footer">Detail
                                            <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="small-box bg-gradient-warning text-white">
                                        <div class="font-weight-bold inner">
                                            <h3>
                                                <?= ribuan($tahun_ini); ?>
                                            </h3>
                                            <p>Tahun Ini</p>
                                        </div>
                                        <div class="icon">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                        <a href="<?= site_url('dashboard/detail/5') ?>" class="small-box-footer">Detail
                                            <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4">
                                    <div class="small-box bg-gradient-danger text-white">
                                        <div class="font-weight-bold inner">
                                            <h3>
                                                <?= ribuan($jumlah); ?>
                                            </h3>
                                            <p>Jumlah</p>
                                        </div>
                                        <div class="icon">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                        <a href="<?= site_url('dashboard/detail/') ?>" class="small-box-footer">Detail
                                            <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="box-header">
                                    <hr>
                                    <h4 class="text-center"><strong>Statistik Pengunjung Website
                                            <?= $main['judul'] ?><strong></h4>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="box box-info">
                                                    <!-- Ini Grafik -->
                                                    <br>
                                                    <div id="chart"
                                                        style="min-width: 310px; height: 400px; margin: 0 auto"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Tabel Data -->
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-bordered table-striped table-hover nowrap">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th width='5%'>No</th>
                                                                <th>
                                                                    <?= $main['lblx'] ?>
                                                                </th>
                                                                <th>Pengunjung (Orang)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no = 1; ?>
                                                            <?php foreach ($main['dashboard'] as $data): ?>
                                                                <tr class="text-center" style="font-weight: 500;">
                                                                    <td>
                                                                        <?= $no++; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= ($main['lblx'] == 'Bulan') ? getBulan($data['tanggal']) . ' ' . date('Y') : tgl_indo2($data['tanggal']); ?>
                                                                    </td>
                                                                    <td>
                                                                        <?= ribuan($data['jumlah']); ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                        <tfoot class="bg-gray disabled color-palette">
                                                            <tr>
                                                                <th colspan="2" class="text-center">Total</th>
                                                                <th class="text-center">
                                                                    <?= ribuan($main['total']); ?>
                                                                </th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </br>


    <!-- Pengaturan Grafik (Graph) Data Statistik-->
    <!-- Highcharts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/highcharts/exporting.js"></script>
    <script src="<?= base_url() ?>assets/js/highcharts/highcharts-more.js"></script>

    <script type="text/javascript">
        var chart;
        $(document).ready(function () {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart',
                    defaultSeriesType: 'column'
                },
                title: {
                    text: ''
                },
                xAxis: {
                    title: {
                        text: '<?= ucwords($main['lblx']) ?>'
                    },
                    categories: [
                        <?php foreach ($main['dashboard'] as $data): ?>['<?= ($main['lblx'] == 'Bulan') ? getBulan($data['tanggal']) . ' ' . date('Y') : tgl_indo2($data['tanggal']); ?>', ],
                        <?php endforeach; ?>
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Pengunjung (Orang)'
                    }
                },
                legend: {
                    layout: 'vertical',
                    enabled: false
                },
                plotOptions: {
                    series: {
                        colorByPoint: true
                    },
                    column: {
                        pointPadding: 0,
                        borderWidth: 0
                    }
                },
                series: [{
                    shadow: 1,
                    border: 1,
                    data: [
                        <?php foreach ($main['dashboard'] as $data): ?>['<?= ($main['lblx'] == 'Bulan') ? getBulan($data['tanggal']) . ' ' . date('Y') : tgl_indo2($data['tanggal']); ?>', <?= $data['jumlah'] ?>],
                        <?php endforeach; ?>
                    ]
                }]
            });
        });
    </script>
    <!-- End Statistik Pengunjung Section -->


</div>
</div>

<br>