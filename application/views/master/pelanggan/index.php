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
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <a href="<?= base_url('pelanggan/tambah') ?>" class="btn btn-primary mr-2"><i class="fa fa-plus-square"></i> Tambah Pelanggan</a>
                            <button class="btn btn-outline-success"><i class="fa fa-print"></i> Print</button>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered ta-m">
                                <thead class="text-center">
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
                                        <th colspan="2">Data Simcard</th>
                                        <th rowspan="2">Action</th>
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
                                        <td><?= $p['site_code'] ?></td>
                                        <td>CUSTOMER</td>
                                        <td><?= $p['id_pel'] ?></td>
                                        <td><?= $p['site_name'] ?></td>
                                        <td><?= $p['nama_pelanggan'] ?></td>
                                        <td><?= $p['alamat'] ?></td>
                                        <td><?= $p['status'] ?></td>
                                        <td><?= $p['tarif'] ?></td>
                                        <td><?= $p['daya'] ?></td>
                                        <td><?= $p['meter_merk'] ?></td>
                                        <td><?= $p['meter_tipe'] ?></td>
                                        <td><?= $p['no_seri'] ?></td>
                                        <td><?= $p['merk'] ?></td>
                                        <td><?= $p['tipe'] ?></td>
                                        <td><?= $p['no_imei'] ?></td>
                                        <td><?= $p['no_sim'] ?></td>
                                        <td><?= $p['brand'] ?></td>
                                        <td>
                                            <a href="<?= base_url('pelanggan/edit/').$p['id_pel'] ?>" class="btn btn-warning">edit</a>
                                            <a href="<?= base_url('pelanggan/delete/').$p['id_pel'] ?>" class="btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach; ?>
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