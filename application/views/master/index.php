<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Pelanggan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="">Data Pelanggan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="<?= base_url('pelanggan/tambah') ?>" class="btn btn-warning mr-2"><i class="fa fa-plus-square"></i> Tambah Pelanggan</a>
                            <button class="btn btn-outline-primary"><i class="fa fa-print"></i> Print</button>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Site Code</th>
                                        <th rowspan="2">Location Type</th>
                                        <th rowspan="2">IDPEL</th>
                                        <th rowspan="2">Site Name</th>
                                        <th rowspan="2">Nama Pelanggan</th>
                                        <th rowspan="2">Alamat</th>
                                        <th rowspan="2">Status</th>
                                        <th rowspan="2">Tarif</th>
                                        <th rowspan="2">Daya</th>
                                        <th colspan="3">Data Meter</th>
                                        <th colspan="3">Data Modem</th>
                                        <th colspan="3">Data Simcard</th>
                                    </tr>
                                    <tr>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>No. Seri</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>No. Imei</th>
                                        <th>Nomor</th>
                                        <th>Brand</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($pelanggan as $p): ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td>CUSTOMER</td>
                                        <td>163000001342</td>
                                        <td>TANJUNG</td>
                                        <td>ALI YASIN</td>
                                        <td>JL. SRIWIJAYA</td>
                                        <td>ACTIVE</td>
                                        <td>B3</td>
                                        <td>345000</td>
                                        <td>WASION</td>
                                        <td>imeter 318</td>
                                        <td>201401001968</td>
                                        <td>WASION</td>
                                        <td>WS-18E</td>
                                        <td>358191919819</td>
                                        <td>85338939606</td>
                                        <td>TELKOMSEL</td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->