<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Meter</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="">Data Meter</a></li>
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
                            <a href="#" class="btn btn-primary mr-2" id="meterAdd" data-toggle="modal" data-target="#tambahMeter">
                                <i class="fa fa-plus-square"></i> Tambah Data Meter</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>No Seri</th>
                                        <th>Type</th>
                                        <th>Merk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($meter as $m): ?>
                                    <tr>
                                        <td class="text-center"><?= $i ?></td>
                                        <td><?= $m['no_seri'] ?></td>
                                        <td><?= $m['tipe'] ?></td>
                                        <td><?= $m['merk'] ?></td>
                                        <td class="text-center">
                                            <a href="#" id="editMeter" class="btn btn-warning" data-toggle="modal" data-target="#tambahMeter" data-id="<?= $m['no_seri'] ?>">edit</a>
                                            <a href="<?= base_url('meter/hapus/').$m['no_seri'] ?>" class="btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach;?>
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

<!-- Modal -->
<div class="modal fade" id="tambahMeter" tabindex="-1" role="dialog" aria-labelledby="tambahMeterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahMeterLabel">Tambah Data Meter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('meter/tambah') ?>" method="post">
          <div class="form-group">
            <label for="no_seri">No Seri</label>
            <input type="number" name="no_seri" id="no_seri" class="form-control" id="no_seri" required>
          </div>
          <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
          </div>
          <div class="form-group">
            <label for="merk">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" required>
          </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary btnSubmit" type="Submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>