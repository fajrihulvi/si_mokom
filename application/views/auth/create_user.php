<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-center text-center">
        <div class="col-md-12">
          <div class="card-body">
            <h4 class="mb-3 f-w-400">Sign up</h4>
            <form action="<?= base_url('auth/create_user') ?>" method="post">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-mail"></i></span>
              </div>
              <input type="email" name="email" class="form-control" placeholder="Email address">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-lock"></i></span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="feather icon-lock"></i></span>
              </div>
              <input type="password" name="konfir-password" class="form-control" placeholder="Konfirmasi Password">
            </div>
            <button class="btn btn-primary btn-block mb-4">Sign up</button>
            </form>
            <p class="mb-2">Already have an account? <a href="<?= base_url('auth/login') ?>" class="f-w-400">Signin</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signup ] end -->