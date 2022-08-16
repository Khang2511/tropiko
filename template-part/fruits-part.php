<!-- fruits section -->

<section class="fruit_section layout_padding-top">
    <div class="container">
        <h2 class="custom_heading"><?php the_field('tittle-fruits'); ?></h2>
        <p class="custom_heading-text">
        <?php the_field('desc-fruits'); ?>
        </p>
        <?php
// Check rows exists.
if( have_rows('fruits-item') ):
    // Loop through rows.
    while( have_rows('fruits-item') ) : the_row();
        ?>

<div class="row layout_padding2">
            <div class="col-md-8">
                <div class="fruit_detail-box">
                    <h3>
                    <?php the_sub_field('fruits-item-tittle'); ?>
                    </h3>
                    <p class="mt-4 mb-5">
                    <?php the_sub_field('fruits-item-desc'); ?>
                    </p>
                    <div>
                        <a href="" class="custom_dark-btn">
                        <?php the_sub_field('fruits-item-button'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div class="fruit_img-box d-flex justify-content-center align-items-center">
                <img src="<?php the_sub_field('fruits-item-img'); ?>" alt="" class="" width="<?php the_sub_field('fruits-item-width'); ?>" />
                </div>
            </div>
        </div>

                <?php endwhile;

// No value.
else :
    // Do something...
endif;
?>
        
    </div>
</section>

<!-- end fruits section -->