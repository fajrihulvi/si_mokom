<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Ubah Data Pelanggan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('pelanggan') ?>">Master Data</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('pelanggan') ?>">Data Pelanggan</a></li>
                            <li class="breadcrumb-item"><a href="">Edit Pelanggan</a></li>
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
                        <form action="<?= base_url('pelanggan/edit/').$pelanggan->id_pel ?>" method="post">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="id_pelanggan">Id Pelanggan</label>
                                    <input type="number" class="form-control" id="id_pelanggan" name="id_pelanggan" value="<?= $pelanggan->id_pel ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="site">Site Name</label>
                                    <select class="form-control" id="site" name="site">
                                        <option>-- Pilih Site --</option>
                                        <?php foreach($sites as $site): ?>
                                        <option <?= ($pelanggan->site_id == $site['id']) ? 'selected' : '' ?> value="<?= $site['id'] ?>"><?= $site['site_code'].' - '.$site['site_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="nama_plgn">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="nama_plgn" name="nama_plgn" value="<?= $pelanggan->nama_pelanggan ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat_plgn">Alamat</label>
                                    <input type="text" class="form-control" id="alamat_plgn" name="alamat_plgn" value="<?= $pelanggan->alamat ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="tarif">Tarif</label>
                                    <input type="text" class="form-control" id="tarif" name="tarif" value="<?= $pelanggan->tarif ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="daya">Daya</label>
                                    <input type="number" class="form-control" id="daya" name="daya" value="<?= $pelanggan->daya ?>">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="lat">Latitude</label>
                                    <input type="text" class="form-control" id="lat" name="lat" value="<?= $pelanggan->lat ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="long">Longtitude</label>
                                    <input type="text" class="form-control" id="long" name="long" value="<?= $pelanggan->long ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                          <option>-- Pilih Status --</option>
                                          <option <?= ($pelanggan->status == 'ACTIVE') ? 'selected' : '' ?> value="ACTIVE">ACTIVE</option>
                                          <option <?= ($pelanggan->status == 'DEACTIVE') ? 'selected' : '' ?> value="DEACTIVE">DEACTIVE</option>
                                        </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="meter">Meter</label>
                                    <select class="form-control" id="meter" name="meter">
                                        <option>-- Pilih Meter --</option>
                                        <?php foreach($meter as $m): ?>
                                        <option <?= ($pelanggan->meter_id == $m['id']) ? 'selected' : '' ?>
                                          value="<?= $m['id'] ?>"><?= $m['no_seri'].' - '.$m['merk'].' - '.$m['tipe'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="modem">Modem</label>
                                    <select class="form-control" id="modem" name="modem">
                                        <option>-- Pilih modem --</option>
                                        <?php foreach($modem as $mo): ?>
                                        <option <?= ($pelanggan->modem_id == $mo['id']) ? 'selected' : '' ?>
                                          value="<?= $mo['id'] ?>"><?= $mo['no_imei'].' - '.$mo['merk'].' - '.$mo['tipe'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="simcard">Sim Card</label>
                                    <select class="form-control" id="simcard" name="simcard">
                                        <option>-- Pilih Simcard --</option>
                                        <?php foreach($simcard as $sim): ?>
                                        <option <?= ($pelanggan->sim_card_id == $sim['id']) ? 'selected' : '' ?>
                                          value="<?= $sim['id'] ?>"><?= $sim['no_sim'].' - '.$sim['brand'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                  </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
<!-- [ Main Content ] end -->