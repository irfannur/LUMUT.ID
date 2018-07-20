
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Floating labels example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('asset/css/login.css');?>" rel="stylesheet">
  </head>

  <body>

    <?= form_open('login', ['class' => 'form-signin']) ?>
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Test Lumut.Id</h1>
		  <?php if ($isLogin): ?>
		    <p>Halo.. <strong><?= $username ?>! </strong>
		    Maaf <strong>Anda tidak memiliki Akses halaman ini</strong>. Silahkan klik... <a href="<?=site_url('dashboard');?>">Lanjutkan</a> 
		    atau <a href="<?=site_url('login/logout');?>">LogOut</a></p>

		  <?php else: ?>
		    <p>Untuk menggunakan aplikasi ini silakan login dahulu.</p>
		  <?php endif ?>
      </div>

      <div class="form-label-group">
      	<input id="Username" name="username" type="text" class="form-control" placeholder="Username" required autofocus>
		<?=form_error('username');?>
        <label for="Username">Username</label>
      </div>

      <div class="form-label-group">
      	<input id="Password" name="password" type="password" class="form-control" placeholder="Password" required>
		<?=form_error('password');?>
        <label for="Password">Password</label>
      </div>
      <?= showFlashMessage() ?>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <?=form_button(['type' => 'submit', 'content' => 'Login', 'class' => 'btn btn-lg btn-secondary btn-block']);?>
      
    </form>
  </body>
</html>

