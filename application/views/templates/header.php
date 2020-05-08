<html>
    <head>
        <title>CI Blog</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles/style.css">
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blogs<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories<span class="sr-only">(current)</span></a>
                    </li>

                    <?php if(!$this->session->userdata('logged_in')): ?>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="<?php echo base_url('users/login'); ?>">Login<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('users/register'); ?>">Register<span class="sr-only">(current)</span></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="<?php echo base_url('posts/create'); ?>">Create Post<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('categories/create'); ?>">Create Category<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('users/logout'); ?>">Logout<span class="sr-only">(current)</span></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div class="container">
            <?php if($this->session->flashdata('user_registered')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('user_registered') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
                <p class="alert alert-danger"><?= $this->session->flashdata('login_failed') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_success')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('login_success') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('logout_success')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('logout_success') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_created')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('post_created') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_updated')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('post_updated') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('post_deleted')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('post_deleted') ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata('category_created')): ?>
                <p class="alert alert-success"><?= $this->session->flashdata('category_created') ?></p>
            <?php endif; ?>
