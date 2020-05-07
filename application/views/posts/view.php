<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ?>" alt="post_image" class="img-fluid">
<br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>

<div class="row align-items-start">
    <?= form_open('/posts/delete/'.$post['id']) ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="<?= base_url(); ?>/posts/edit/<?= $post['slug']; ?>" class="btn btn-primary ml-3">Edit</a>
</div>