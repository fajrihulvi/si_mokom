<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="card-body">
            <center><span>Monitoring Pemeliharan Komunikasi</span></center>
            <h4 class="mb-3 f-w-400 text-center">Pelanggan AMR</h4>
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('auth/login') ?>" method="post">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-mail"></i></span>
              </div>
              <input id="email" name="email" type="email" class="form-control" placeholder="Email address"value="<?= set_value('email'); ?>">
            </div>
            <?= form_error('email', '<small class="text-danger mt-0">', '</small>'); ?>

            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-lock"></i></span>
              </div>
              <input id="password" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>

            <div class="form-group text-left mt-3">
              <div class="checkbox checkbox-primary d-inline">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember" class="cr"> Remember me</label>
              </div>
            </div>
            <button class="btn btn-block btn-primary mb-4" type="submit">Signin</button>
            </form>
            <p class="mb-2 text-muted text-center">Forgot password? <a href="<?= base_url('auth/forgot_password') ?>" class="f-w-400">Reset</a></p>
            <p class="mb-0 text-muted text-center">Don’t have an account? <a href="<?= base_url('auth/create_user') ?>" class="f-w-400">Signup</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signin ] end -->
