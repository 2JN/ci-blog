<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ?>" alt="post_image" class="img-fluid">
<br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>

<div class="row align-items-start px-3">
    <?= form_open('/posts/delete/'.$post['id']) ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="<?= base_url(); ?>/posts/edit/<?= $post['slug']; ?>" class="btn btn-primary ml-3">Edit</a>
</div>

<hr>

<h3>Add Comment</h3>

<?= validation_errors(); ?>

<?= form_open('comments/create/'.$post['id']) ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control">
        </textarea>
    </div>
    <input type="hidden" name="slug" value="<?= $post['slug'] ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h3>Comments</h3>
<?php if($comments): ?>
    <?php foreach($comments as $comment): ?>
        <blockquote class="blockquote">
            <?= $comment['body']; ?>
            <footer class="blockquote-footer"><?= $comment['name']; ?></footer>
        </blockquote>
    <?php endforeach ?>
<?php else: ?>
    <p>No comments to display</p>
<?php endif ?>
