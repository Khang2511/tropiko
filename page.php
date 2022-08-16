<?php get_header();?>

<!-- slider section -->


<section class="fruit_section layout_padding-top">
    <div class="container">
        <h2 class="custom_heading"><?php the_field('tittle-fruits'); ?></h2>
        <p class="custom_heading-text">
        <?php the_field('desc-fruits'); ?>
        </p>

<div class="row layout_padding2">
            <div class="col-md-8">
                <div class="fruit_detail-box">
                <h2 class="custom_heading"><?php the_field('tittle-privacy'); ?></h2>
                    <h3 class="mt-4 mb-5">
                    <?php the_field('subtittle-privacy'); ?>
                    </h3>
                    <p >
        <?php the_field('desc-privacry'); ?>
        </p>
                </div>
            </div>

        </div>
        
    </div>
</section>
        
  <!-- service section -->

  
<?php get_footer();?>