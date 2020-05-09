<h2><?= $title; ?></h2>
<ul class="list-group">
    <?php foreach($categories as $category): ?>
        <li class="list-group-item d-flex align-items-center">
            <a href="<?= site_url('/categories/posts/'.$category['id']); ?>">
                <?= $category['name'] ?>
            </a>
            <?php if ($this->session->userdata('user_id') === $category['user_id'] ): ?>
                <form method="POST" action="categories/delete/<?= $category['id'] ?>" class="ml-auto my-0">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>