<?= validation_errors(); ?>

<?= form_open('users/register'); ?>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <h1 class="text-center"><?= $title; ?></h1>

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

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>
<?= form_close(); ?>