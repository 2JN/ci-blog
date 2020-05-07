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

                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
