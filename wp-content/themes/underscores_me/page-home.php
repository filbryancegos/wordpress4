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
				<div class="col-sm-3">
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('content') ):
						// loop through the rows of data
						while ( have_rows('content') ) : the_row();
					?>
					<?php
						if( get_row_layout() == 'coffe' ):
					?>
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('description'); ?>
					<?php
						elseif( get_row_layout() == 'download'):
						endif;
						endwhile;
					else :
					// no layouts found
					endif;
					?>
				</div>

				<div class="col-sm-3">
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('content') ):
						// loop through the rows of data
						while ( have_rows('content') ) : the_row();
					?>
					<?php
						if( get_row_layout() == 'wine' ):
					?>
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('description'); ?>
					<?php
						elseif( get_row_layout() == 'download'):
						endif;
						endwhile;
					else :
					// no layouts found
					endif;
					?>
				</div>
				<div class="col-sm-3">
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('content') ):
						// loop through the rows of data
						while ( have_rows('content') ) : the_row();
					?>
					<?php
						if( get_row_layout() == 'tea' ):
					?>
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('description'); ?>
					<?php
						elseif( get_row_layout() == 'download'):
						endif;
						endwhile;
					else :
					// no layouts found
					endif;
					?>
				</div>
				<div class="col-sm-3">
					<?php
					// check if the flexible content field has rows of data
					if( have_rows('content') ):
						// loop through the rows of data
						while ( have_rows('content') ) : the_row();
					?>
					<?php
						if( get_row_layout() == 'milk' ):
					?>
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('description'); ?>
					<?php
						elseif( get_row_layout() == 'download'):
						endif;
						endwhile;
					else :
					// no layouts found
					endif;
					?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();
