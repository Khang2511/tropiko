<?php get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : custom_post_types_get_custom_template(); else: endif; ?>



    </div>
</section>

<?php get_footer();?>