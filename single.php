<?php get_header();?>

<section class="page layout_padding-top ">
    <?php get_template_part( 'template-part/search-part','part' ) ?>
    <div class=" container search-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>
    </div>
</section>

<?php get_footer();?>