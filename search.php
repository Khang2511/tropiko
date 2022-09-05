<?php get_header();?>

<section class="page layout_padding-top ">
    <?php get_template_part( 'template-part/search-part','part' ) ?>
    <div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="container">
				<header class="mb-5">
					<h1 class="page-title"> <?php echo $wp_query->found_posts; ?>
						<?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
					</h1>
				</header>
				<?php if ( have_posts() ) { ?>
					<div>
						<?php while ( have_posts() ) {
							the_post(); ?>
							<div class="card mb-5 pb-3">
								<div class="card-body">
										<a href="<?php echo esc_url(get_the_permalink()); ?>">
                                        <h3 class="card-title">
											<?php the_title(); ?>
                                            </h3>
										</a>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } 
				else {
				}?>

			</div>
		</main>
	</div>
</section>

<?php get_footer();?>