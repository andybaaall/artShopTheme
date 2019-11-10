<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="<?php get_template_directory_uri(); ?> /node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php get_template_directory_uri(); ?> /assets/css/master.css">

        <title>French Art Shop - Wellington</title>
        <?php wp_head(); ?>
    </head>
    <body>

        <div class="container-fluid p-0">
            <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
                <h1 class="display-3 text-light"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
