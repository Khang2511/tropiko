<?php get_header();?>
<section class="fruit_section layout_padding-top page">
    <div class="container">
        <div class="">
            <div class="fruit_detail-box">
            <?php the_field('404-tittle', 'option'); ?>
            <?php the_field('404-desc', 'option'); ?>
        </div>
    </div>
</section>
<style>
    .fruit_section {
        background-image: url(<?php the_field('404-img', 'option');
        ?>);
        background-repeat: no-repeat;
    }
    </style>
<?php get_footer();?>