<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('categories/create') ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Category name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>