<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<div class="contact-main">

					<div class="entry-content">

						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'nick' ) ); ?>
						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'nick' ),
							'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->

					</div>

					<aside class="contact-aside">

						<img src="<?php bloginfo('template_directory'); ?>/assets/img/contact-img.png" class="img-rounded contact-profile" alt="Nicholas Rowe"></a>

						<p>Hi, thanks for landing here! Below are some social media links for you to contact me on, feel free to drop me a line, I don't bite, honest.  </p>

						<ul class="social-media">
							<li><a href="http://twitter.com/rowefx" target="_blank" class="twitter"></a></li>
							<li><a href="https://github.com/NicholasRowe" target="_blank" class="github"></a></li>
							<li><a href="skype:nick7878782?call" target="_blank" class="skype"></a></li>
							<li><a href="https://plus.google.com/110632794376587641322/" target="_blank" class="google"></a></li>

						</ul>

					</aside>

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
