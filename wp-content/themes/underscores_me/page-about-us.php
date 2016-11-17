<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores_me
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<?php
				$args = array( 'post_type' => 'movies', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="col-sm-3">
					<h2><?php the_title();?></h2>
					<?php the_content(); ?>
				</div>
				<?php
				endwhile;
				?>
			</div>
			<div class="row">
				<?php
				$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="col-sm-3">
					<h2><?php the_title();?></h2>
					<?php the_content(); ?>
				</div>
				<?php
				endwhile;
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();
