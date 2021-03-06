<?= validation_errors(); ?>

<?= form_open('users/login'); ?>
  <div class="row justify-content-center">
    <div class="col-12 col-md-4">
      <h1 class="text-center"><?= $title; ?></h1>
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>

      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </div>
  </div>
<?= form_close(); ?>