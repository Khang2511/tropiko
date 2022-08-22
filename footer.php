<section class="info_section layout_padding">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
        <?php test_menu2('footer-menu'); ?>
        </div>
        <div class="col-md-3">
        <?php test_menu2('footer-menu-col2'); ?>
        </div>
        <div class="col-md-3">
        <?php test_menu2('footer-menu-col3'); ?>
        </div>
                
            <div class="col-md-3">
                <div class="social_container">
                    <h5>
                        <?php the_field('footer-follow', 'option'); ?>
                    </h5>
                    <div class="social-box">
                        <?php
// Check rows exists.
if( have_rows('footer-link','option')  ):
    // Loop through rows.
    while( have_rows('footer-link','option') ) : the_row();
     $image = get_sub_field('image');
        ?>
                <?php if(get_sub_field('footer-link-url','option' )!= ''): ?>
                        <a href="">
                            <img src="<?php the_sub_field('footer-link-icon','option'); ?>" alt="">
                        </a>
                        
                        <?php 
                        else :
                            ?>
                           
                            <?php
                        endif;
                    endwhile;

// No value.
else :
    // Do something...
endif;
?>

                    </div>
                </div>
                <div class="subscribe_container">
                    <h5>
                        Subscribe Now
                    </h5>
                    <div class="form_container">
                        <?php echo apply_shortcodes( '[contact-form-7 id="224" title="Subcribe Now"]' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        <?php the_field('copyright-tittle','option') ?>
        <a
            href="<?php the_field('copyright-link','option') ?>"><?php the_field('copyright-link-display','option') ?></a>

    </p>
</section>
<!-- footer section -->
<?php wp_footer();?>

</body>

</html>