<?php get_header(); ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( is_page_template('Promotions') ) :     // this isn't firing - but why?
        ?>
        <div class="container-fluid my-5 p-0 promotionBanner">
            <?php echo 'got a posts ' ?>
        </div>
        <?php
    endif;  // this isn't firing - but why?
    endwhile;
endif;



 ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h4>hello, world!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
