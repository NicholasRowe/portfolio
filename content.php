<?php
/**
* @package nick
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

	<ul class="entry-meta"><!-- .entry-meta -->
		<?php if ( 'post' == get_post_type() ) : ?>
			<li class="posted-on">
				<i class="fa fa-clock-o"></i> <?php the_time('jS F Y') ?>
			</li>
		<?php endif; ?>

		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'nick' ) );
			if ( $categories_list && nick_categorized_blog() ) :
				?>
			<li class="cat-links">
				<i class="fa fa-tags"></i> <?php printf( __( '%1$s', 'nick' ), $categories_list ); ?>
			</span>
		<?php endif; // End if categories ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>

			<li class="comments-link">

			<i class="fa fa-comment"></i> <?php comments_popup_link( __( 'Leave a comment', 'nick' ), __( '1 Comment', 'nick' ), __( '% Comments', 'nick' ) ); ?></span>

			<?php endif; ?>


		<?php endif; // End if 'post' == get_post_type() ?>


	</ul><!-- .entry-meta -->


	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>
		<div class="entry-content">

			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'nick' ) ); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nick' ),
				'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
		<?php endif; ?>

		<div class="read-more"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a></div>

	</article><!-- #post-## -->
