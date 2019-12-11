<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="card-body">
            <h4 class="mb-3 f-w-400 text-center">Sign up</h4>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth/create_user') ?>" method="post">
            <div class="row">
              <div class="col-md-6 pr-0">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                  </div>
                  <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?= set_value('first_name'); ?>">
                </div>
                <?= form_error('first_name', '<small class="text-danger mt-0">', '</small>'); ?>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?= set_value('last_name'); ?>">
                  <?= form_error('last_name', '<small class="text-danger mt-0">', '</small>'); ?>
                </div>
              </div>
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-user"></i></span>
              </div>
              <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>">
            </div>
            <?= form_error('username', '<small class="text-danger mt-0">', '</small>'); ?>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-mail"></i></span>
              </div>
              <input type="email" name="email" class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
            </div>
            <?= form_error('email', '<small class="text-danger mt-0">', '</small>'); ?>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-phone"></i></span>
              </div>
              <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="<?= set_value('phone'); ?>">
            </div>
            <?= form_error('phone', '<small class="text-danger mt-0">', '</small>'); ?>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-lock"></i></span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <?= form_error('password', '<small class="text-danger mt-0">', '</small>'); ?>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-lock"></i></span>
              </div>
              <input type="password" name="konfir-password" class="form-control" placeholder="Confirm Password">
            </div>
            <?= form_error('konfir-password', '<small class="text-danger mt-0">', '</small>'); ?>
            <button class="btn btn-primary btn-block mb-4 mt-3" type="submit">Sign up</button>
            </form>
            <p class="mb-2 text-center">Already have an account? <a href="<?= base_url('auth/login') ?>" class="f-w-400">Signin</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signup ] end -->