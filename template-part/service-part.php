<!-- service section -->

<section class="service_section layout_padding ">
    <div class="container">
        <h2 class="custom_heading"><?php the_field('tittle-services'); ?></h2>
        <p class="custom_heading-text">
            <?php the_field('desc-services'); ?>
        </p>
        <div class=" layout_padding2">
            <div class="card-deck">
                <?php
// Check rows exists.
if( have_rows('services-items') ):
    // Loop through rows.
    while( have_rows('services-items') ) : the_row();
        ?>

                <div class="card">
                    <img class="card-img-top" src="<?php the_sub_field('services-items-icon'); ?>" alt="Card image cap" />

                    <div class="card-body">
                        <h5 class="card-title"><?php the_sub_field('services-items-tittle'); ?></h5>
                        <p class="card-text">
                            <?php the_sub_field('services-items-description'); ?>
                        </p>
                    </div>
                </div>

                <?php endwhile;

// No value.
else :
    // Do something...
endif;
?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="" class="custom_dark-btn">
            <?php the_field('button-services'); ?> 
            </a>
        </div>
    </div>
</section>

<!-- end service section -->

