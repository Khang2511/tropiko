<?php get_header();?>

<!-- slider section -->


<section class="fruit_section layout_padding-top">
    <div class="container">
            <div class="">
                <div class="fruit_detail-box">
                <h2 class="custom_heading"><?php the_field('tittle-privacy'); ?></h2>

                </div>
            </div>
            <?php
// Check rows exists.
if( have_rows('section-privacy') ):
    // Loop through rows.
    while( have_rows('section-privacy') ) : the_row();
        ?>

<div class="row layout_padding2">
                    <h3>
                    <?php the_sub_field('section-tittle'); ?>
                    </h3>
                    <p class="mt-4 mb-5">
                    <?php the_sub_field('section-desc'); ?>
                    </p>

        </div>

                <?php endwhile;

// No value.
else :
    // Do something...
endif;
?>
        
        
    </div>
</section>
        
  <!-- service section -->

  
<?php get_footer();?>