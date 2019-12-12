<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Site</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="">Data Site</a></li>
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
                            <a href="#" class="btn btn-primary mr-2" id="siteAdd" data-toggle="modal" data-target="#tambahSite">
                                <i class="fa fa-plus-square"></i> Tambah Site</a>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Site Code</th>
                                        <th>Site Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($site as $s): ?>
                                    <tr>
                                        <td class="text-center"><?= $i ?></td>
                                        <td><?= $s['site_code'] ?></td>
                                        <td><?= $s['site_name'] ?></td>
                                        <td class="text-center">
                                            <a href="#" id="editSite" class="btn btn-warning" data-toggle="modal" data-target="#tambahSite" data-id="<?= $s['site_code'] ?>">edit</a>
                                            <a href="<?= base_url('site/hapus/').$s['site_code'] ?>" class="btn btn-danger">hapus</a>
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
<div class="modal fade" id="tambahSite" tabindex="-1" role="dialog" aria-labelledby="tambahSiteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahSiteLabel">Tambah Site</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('site/tambah') ?>" method="post">
          <div class="form-group">
            <label for="site_code">Site Code</label>
            <input type="number" name="site_code" id="site_code" class="form-control" id="site_code" placeholder="Enter Site Code" required>
          </div>
          <div class="form-group">
            <label for="site_name">Site Name</label>
            <input type="text" class="form-control" id="site_name" name="site_name" placeholder="Enter Site Name" required>
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