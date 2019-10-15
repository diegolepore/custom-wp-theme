<?php get_header(); ?>

<div class="container"> 

    <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" class="img-fluid mb-3 img-thumbnail" alt="<?php the_title(); ?>">
    <?php endif; ?>

    <h1><?php the_title(); ?></h1>
    
    <h2><?php the_field('home_subtitle'); ?></h2>

    <div class="description"><?php the_field('home_description'); ?></div>
    
    <?php get_template_part('includes/section', 'content'); ?>

    <!-- Image Field -->
    <img width="350" src="<?php the_field('home_image'); ?>" alt="">

    <!-- Group Field -->
    <?php
		// vars 
        $btnLink = get_field('home_button_links');	

        if( $btnLink ): ?>

            <a href="<?php echo $btnLink['button_url']; ?>" target="_blank">
                <button><?php echo $btnLink['button_text']; ?></button>
            </a>
    <?php endif; ?>

    <!-- Gallery Field -->

    <ul class="gallery">
    <?php
		// vars 
        $gallery = get_field('home_gallery');	

        // var_dump($gallery);
        if( $gallery ): ?>
        <?php
            foreach (array_values($gallery) as $i => $value) {
            // var_dump($value); 
            ?>
            <li>
                <h3><?php echo $value['title'] ?></h3>
                <img width="350" src="<?php echo $value['url'] ?>" alt="">
                <p><?php echo $value['description'] ?></p>
                <a href="<?php echo $value['caption'] ?>" target="_blank">Learn more</a>
            </li>

        <?php
            }
        ?>

        <?php endif; ?>

    </ul>

    <?php get_search_form(); ?>

</div>


<?php get_footer(); ?>