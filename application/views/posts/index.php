<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
    <h3><?= $post['title']; ?></h3>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ?>" alt="post_image" class="img-fluid">
        </div>
        <div class="col-12 col-md-9">
            <small class="post-date">Posted on: <?= $post['created_at']; ?> in <strong><?= $post['name'] ?></strong></small><br />
            <?= word_limiter($post['body'], 50); ?>
            <p><a href="<?= site_url('/posts/'.$post['slug']); ?>">Read more</a></p>
        </div>
    </div>
<?php endforeach; ?>
<div class="pagination-links">
    <?= $this->pagination->create_links(); ?>
</div>