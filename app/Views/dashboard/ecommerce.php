<?= $this->extend('layouts/admin') ?>

<?= $this->section('pagestyles') ?>
<!-- START: Page CSS-->
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/chartjs/Chart.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/morris/morris.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/weather-icons/css/pe-icon-set-weather.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/chartjs/Chart.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/starrr/starrr.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/fontawesome/css/all.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/ionicons/css/ionicons.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css'); ?>">
<!-- END: Page CSS-->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- START: Breadcrumbs-->
<div class="row">
    <div class="col-12  align-self-center">
        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
            <div class="w-sm-100 mr-auto">
                <h4 class="mb-0">Dashboard</h4>
                <p>Web Lelang admin panel</p>
            </div>

            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>
<!-- END: Breadcrumbs-->

<!-- START: Card Data-->
<div class="row">
    <div class="col-12 col-sm-6 col-xl-3 mt-3">
        <div class="card">
            <div class="card-body">
                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                    <i class="icon-user icons card-liner-icon mt-2"></i>
                    <div class='card-liner-content'>
                        <h2 class="card-liner-title">224</h2>
                        <h6 class="card-liner-subtitle">Pengunjung Hari Ini</h6>
                    </div>
                </div>
                <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">+5%</span>
                <div id="apex_today_order"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mt-3">
        <div class="card">
            <div class="card-body">
                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                    <i class="icon-user icons card-liner-icon mt-2"></i>
                    <div class='card-liner-content'>
                        <h2 class="card-liner-title">146</h2>
                        <h6 class="card-liner-subtitle">Pendaftar Hari Ini</h6>
                    </div>
                </div>
                <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">+2%</span>
                <div id="apex_today_visitors"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mt-3">
        <div class="card">
            <div class="card-body">
                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                    <i class="icon-basket icons card-liner-icon mt-2"></i>
                    <div class='card-liner-content'>
                        <h2 class="card-liner-title">12</h2>
                        <h6 class="card-liner-subtitle">Peminat Hari Ini</h6>
                    </div>
                </div>
                <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">+8%</span>
                <div id="apex_today_sale"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mt-3">
        <div class="card">
            <div class="card-body">
                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                    <span class="icon icons card-liner-icon mt-2">Rp</span>
                    <div class='card-liner-content'>
                        <h2 class="card-liner-title">3</h2>
                        <h6 class="card-liner-subtitle">Agunan Terjual</h6>
                    </div>
                </div>
                <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">-33%</span>
                <div id="apex_today_profit"></div>
            </div>
        </div>
    </div>
    <!-- area chart -->
    <div class="col-12 col-lg-12  mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"> Pengunjung vs Pendaftar Harian </h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="apex_mixed_chart" class="height-500"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- area chart -->
    <div class="col-12 col-lg-12  mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"> Peminat vs Agunan Terjual Harian</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="apex_mixed_chart2" class="height-500"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wilayah chart -->
    <div class="col-12 col-lg-12  mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"> Pemetaan Peminat Agunan Tertinggi Berdasarkan Wilayah</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="hc_wilayah" class="height-350"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6  mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"> Komposisi Pengunjung Berdasarkan Jenis Agunan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="hc_agunan" class="height-350"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6  mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"> Turunan Alur Penjualan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="hc_funnels" class="height-350"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-12 mt-3">
        <div class="card">
            <div class="card-header  justify-content-between align-items-center">
                <h6 class="card-title">Nominatif Peminat dan Agunan Terjual Hari Ini</h6>
            </div>
            <div class="card-body table-responsive p-0">

                <table class="table  mb-0">
                    <thead>
                        <tr>
                            <th style="text-align:Center">NO</th>
                            <th style="text-align:Center">NAMA MEMBER</th>
                            <th style="text-align:Center">KODE AGUNAN</th>
                            <th style="text-align:Center">JENIS AGUNAN</th>
                            <th style="text-align:Center">LOKASI AGUNAN</th>
                            <th style="text-align:Center">NAMA AO KELOLA</th>
                            <th style="text-align:Center">NILAI TAKSASI</th>
                            <th style="text-align:Center">HARGA PENAWARAN/ JUAL </th>
                            <th style="text-align:Center">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="ng-scope">
                            <td>1</td>
                            <td>BUDI SANTOSO</td>
                            <td>AG-052392</td>
                            <td>Tanah</td>
                            <td>TANGERANG</td>
                            <td>ARISKA DWI PUTRA</td>
                            <td style="text-align:right">709,072,487</td>
                            <td style="text-align:right">696,723,920</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>2</td>
                            <td>ADINDA JAYA CV</td>
                            <td>AG-130750</td>
                            <td>Pabrik</td>
                            <td>SERANG</td>
                            <td>YULISA AVIANTI RAYASA</td>
                            <td style="text-align:right">330,580,0973</td>
                            <td style="text-align:right">329,345,2406</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>3</td>
                            <td>AEP SUHERMAN</td>
                            <td>AG-050167</td>
                            <td>Rumah</td>
                            <td>SURABAYA</td>
                            <td>AHMAD DIPONEGORO</td>
                            <td style="text-align:right">1,199,917,169</td>
                            <td style="text-align:right">1,187,568,602</td>
                            <td style="text-align:center"><span class="badge outline-badge-info">Terjual</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>4</td>
                            <td>AGUS HILMAN</td>
                            <td>AG-058144</td>
                            <td>Pabrik</td>
                            <td>JAKARTA</td>
                            <td>ARIEF SETYAHADI</td>
                            <td style="text-align:right">12,349,455,412</td>
                            <td style="text-align:right">12,337,106,845</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>5</td>
                            <td>AGUS MUHAMAD ZAKARIA</td>
                            <td>AG-039324</td>
                            <td>Tanah</td>
                            <td>SERANG</td>
                            <td>NELSON SAMOSIR</td>
                            <td style="text-align:right">719,866,652</td>
                            <td style="text-align:right">707,518,085</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>6</td>
                            <td>AGUS SAGARA</td>
                            <td>AG-336436</td>
                            <td>Pabrik</td>
                            <td>BEKASI</td>
                            <td>TOPAN NURAHMAN</td>
                            <td style="text-align:right">1,327,157,399</td>
                            <td style="text-align:right">1,314,808,832</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>7</td>
                            <td>AGUS SETIAWAN</td>
                            <td>AG-050477</td>
                            <td>Tanah</td>
                            <td>TANGERANG</td>
                            <td>ADITIA WARMAN</td>
                            <td style="text-align:right">1,004,676,281</td>
                            <td style="text-align:right">992,327,714</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>8</td>
                            <td>AHMAD ROBINI</td>
                            <td>AG-024876</td>
                            <td>Gudang</td>
                            <td>BANDUNG</td>
                            <td>NURTAUFIK KURNIAWAN</td>
                            <td style="text-align:right">1,780,677,323</td>
                            <td style="text-align:right">1,768,328,756</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>9</td>
                            <td>AHMAD SYAIFUDIN</td>
                            <td>AG-252216</td>
                            <td>Pabrik</td>
                            <td>JAKARTA</td>
                            <td>RADEN GUSNANDIKA</td>
                            <td style="text-align:right">376,783,308</td>
                            <td style="text-align:right">364,434,741</td>
                            <td style="text-align:center"><span class="badge outline-badge-info">Terjual</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>10</td>
                            <td>AHYAR SAELAN</td>
                            <td>AG-233035</td>
                            <td>Tanah</td>
                            <td>BANDUNG</td>
                            <td>NANA ROHANA</td>
                            <td style="text-align:right">754,240,168</td>
                            <td style="text-align:right">741,891,601</td>
                            <td style="text-align:center"><span class="badge outline-badge-info">Terjual</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>11</td>
                            <td>AI SUHANAH HJ</td>
                            <td>AG-046814</td>
                            <td>Rumah</td>
                            <td>TANGERANG</td>
                            <td>DEWI PUSPITASARI</td>
                            <td style="text-align:right">256,530,664</td>
                            <td style="text-align:right">244,182,097</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>12</td>
                            <td>AMAN</td>
                            <td>AG-216757</td>
                            <td>Gudang</td>
                            <td>JAKARTA</td>
                            <td>DIMAS PRAYOGO</td>
                            <td style="text-align:right">957,386,623</td>
                            <td style="text-align:right">945,038,056</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>13</td>
                            <td>AMIN</td>
                            <td>AG-196236</td>
                            <td>Gudang</td>
                            <td>BANDUNG</td>
                            <td>EL QOLLA MADANI</td>
                            <td style="text-align:right"> 896,392,653</td>
                            <td style="text-align:right">884,044,086</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>14</td>
                            <td>ANA SUKARNA</td>
                            <td>AG-057025</td>
                            <td>Pabrik</td>
                            <td>SURABAYA</td>
                            <td>ADITYA WICAKSANA</td>
                            <td style="text-align:right">1,117,236,592</td>
                            <td style="text-align:right">1,104,888,025</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                        <tr class="ng-scope">
                            <td>15</td>
                            <td>ANDREAS</td>
                            <td>AG-169730</td>
                            <td>Tanah</td>
                            <td>BANDUNG</td>
                            <td>ANITA SARASWATI</td>
                            <td style="text-align:right">145,101,898</td>
                            <td style="text-align:right">132,753,331</td>
                            <td style="text-align:center"><span class="badge outline-badge-dark">Diminati</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END: Card DATA-->
<?= $this->endSection() ?>

<?= $this->section('pagescript') ?>
<!-- START: Page JS-->
<script src="<?php echo base_url('dist/vendors/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/home.script.js'); ?>"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<!-- <script src="https://code.highcharts.com/maps/modules/exporting.js"></script> -->
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<!-- <script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> -->
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="https://code.highcharts.com/modules/cylinder.js"></script>
<script src="https://code.highcharts.com/modules/funnel3d.js"></script>
<!-- END: Page JS-->

<!-- HC_wilayah -->
<script>
    // Prepare demo data
    // Data is joined to map using value of 'hc-key' property by default.
    // See API docs for 'joinBy' for more info on linking data and map.
    var data = [
        ['id-3700', 0],
        ['id-ac', 0],
        ['id-jt', 713],
        ['id-1024', 407],
        ['id-ba', 916],
        ['id-bt', 1731],
        ['id-ji', 713],
        ['id-jk', 1833],
        ['id-jr', 1934],
        ['id-ks', 509],
        ['id-kt', 916],
        ['id-se', 509],
        ['id-be', 0],
        ['id-kb', 0],
        ['id-bb', 0],
        ['id-nt', 0],
        ['id-kr', 0],
        ['id-ib', 0],
        ['id-su', 0],
        ['id-ri', 0],
        ['id-sw', 0],
        ['id-ku', 0],
        ['id-la', 0],
        ['id-sb', 0],
        ['id-ma', 0],
        ['id-nb', 0],
        ['id-sg', 0],
        ['id-st', 0],
        ['id-pa', 0],
        ['id-ki', 0],
        ['id-go', 0],
        ['id-yo', 0],
        ['id-sl', 0],
        ['id-sr', 0],
        ['id-ja', 0],
    ];

    // Create the chart
    Highcharts.mapChart('hc_wilayah', {
        chart: {
            map: 'countries/id/id-all'
        },

        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            min: 0
        },

        series: [{
            data: data,
            name: 'Total Visit',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }]
    });
</script>

<!-- HC_agunan -->
<script>
    Highcharts.chart('hc_agunan', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Pengunjung: <b>{point.y}</b><br/>' +
                'Rasio: <b>{point.percentage:.0f}%</b><br/>'

        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Jenis Agunan',
            data: [
                ['Rumah', 4378],
                ['Tanah', 3054],
                ['Gudang', 1629],
                ['Pabrik', 1120]
            ]
        }]
    });
</script>

<!-- HC_funnels -->
<script>
    // Set up the chart
    Highcharts.chart('hc_funnels', {
        chart: {
            type: 'funnel3d',
            options3d: {
                enabled: true,
                alpha: 10,
                depth: 50,
                viewDistance: 50
            }
        },
        title: {
            text: ''
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b>',
                    allowOverlap: true,
                    y: 10
                },
                neckWidth: '30%',
                neckHeight: '25%',
                width: '80%',
                height: '80%'
            }
        },
        series: [{
            name: 'Visitors',
            data: [
                ['Total Pengunjung', 10181],
                ['Total Pendaftar', 5528],
                ['Total Peminat', 289],
                ['Total Agunan Terjual', 93]
            ]
        }]
    });
</script>
<?= $this->endSection() ?>