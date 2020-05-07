<h2><?= $title; ?></h2>
<?= validation_errors(); ?>

<?= form_open('users/register'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="John Doe" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="john@domain.com" class="form-control">
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="jdoe" class="form-control">
    </div>

    <div class="form-group">
        <label for="zipcode">Zipcode</label>
        <input type="text" name="zipcode" placeholder="55555" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="**********" class="form-control">
    </div>

    <div class="form-group">
        <label for="password2">Confirm Password</label>
        <input type="password" name="password2" placeholder="**********" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
<?= form_close(); ?>