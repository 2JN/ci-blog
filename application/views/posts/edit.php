<h2><?= $title ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>
  <input type="hidden" name="id" value="<?= $post['id']; ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" aria-describedby="postTitle" placeholder="Title" value="<?= $post['title']; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="">Body</label>
    <textarea name="body" class="form-control" aria-describedby="postBody" placeholder="Write your thoughts..."><?= $post['body']; ?></textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option
          value="<?= $category['id']; ?>"
          selected="<?= $category['id'] === $post['category_id'] ? 'selected' : '' ?>"
        >
          <?= $category['name']; ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>