<?php get_header();?>


<!-- slider section -->
<section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
// Check rows exists.
if( have_rows('slide') ):
    // Loop through rows.
    while( have_rows('slide') ) : the_row();
     $image = get_sub_field('image');
        ?>
            <div class="<?php the_sub_field('class-slide'); ?>">
                <div class="slider_item-box">
                    <div class="slider_item-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slider_item-detail">
                                        <div>
                                            <h1>
                                                <?php the_sub_field('tittle-slide'); ?>
                                            </h1>
                                            <p>
                                                <?php the_sub_field('desc-slide'); ?>
                                            </p>
                                            <div class="d-flex">
                                                <a href="<?php the_sub_field('button-shop-url'); ?>"
                                                    class="text-uppercase custom_orange-btn mr-3">
                                                    <?php the_sub_field('button-text-shop'); ?>
                                                </a>
                                                <a href="<?php the_sub_field('button-contact-url'); ?>"
                                                    class="text-uppercase custom_dark-btn">
                                                    <?php the_sub_field('button-text-contact'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider_img-box">
                                        <div>
                                            <img src="<?php the_sub_field('image-slide'); ?>" alt="" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- end slider section -->
</div>

<!-- service section -->

<?php get_template_part( 'template-part/service-part','part' ) ?>

<!-- end service section -->

<!-- fruits section -->

<?php get_template_part( 'template-part/fruits-part','part' ) ?>

<!-- end fruits section -->

<!-- tasty section -->
<section class="tasty_section">
    <div class="container_fluid">
        <h2>
            <?php the_field('tasty-tittle'); ?>
        </h2>
    </div>
    <style>
    .tasty_section {
        background-image: url(<?php the_field('tasty-background');
        ?>)
    }
    </style>
</section>

<!-- end tasty section -->

<!-- client section -->

<section class="client_section layout_padding">
    <div class="container">
        <h2 class="custom_heading"><?php the_field('testimonial-tittle'); ?></h2>
        <p class="custom_heading-text">
            <?php the_field('desc-testimonial'); ?>
        </p>
        <div>
            <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $testimonial=new WP_Query(array(
                        'post_type' => 'testimonial',
                    ));
                    ?>
                    <?php $count = 0 ?>
                    <?php if($testimonial->have_posts( )): 
                        while($testimonial->have_posts()):
                        $testimonial->the_post(); 
                        ?>
                        <?php if ( $count == 0 )  {  ?>
                            <?php $count= $count+1 ?>
                            <div class="carousel-item active">
                                <div class="client_container layout_padding2">
                                    <?php the_post_thumbnail(); ?>    
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content( ); ?>
                                </div>
                            </div>
                            <?php } 
                            else {?>
                            <?php $count= $count+1 ?>
                            <div class="carousel-item ">
                                <div class="client_container layout_padding2">
                                    <?php the_post_thumbnail(); ?>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content( ); ?>
                                </div>
                            </div>
                            <?php
                        }?>
                    <?php endwhile; 
                    endif; ?>    
                </div>
                <div class="custom_carousel-control">
                    <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
                        <span class="" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
                        <span class="" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<!-- contact section -->
<?php get_template_part( 'template-part/contact-part','part' ) ?>
<!-- end contact section -->

<!-- map section -->
<section class="map_section">
    <div id="map" class="h-100 w-100 ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99029.84505283511!2d-84.61044109524899!3d39.13645224401073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884051b1de3821f9%3A0x69fb7e8be4c09317!2zQ2luY2lubmF0aSwgT2hpbywgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1658717392667!5m2!1svi!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- end map section -->



<?php get_footer();?>