<?php 

/*
    Template Name: Contact Us
 */

?>

<?php get_header(); ?>

<div class="container"> 

    <h1><?php the_title(); ?></h1>

    <div class="row">

        <div class="col-lg-6">
            Contact form
        </div>
        
        <div class="col-lg-6">
            Right column content
        </div>

    </div>

    <?php get_template_part('includes/section', 'content'); ?>

</div>


<?php get_footer(); ?>