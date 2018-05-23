<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package everyschool
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php query_posts('page_id=11'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>



<div class="white-bg">
<section class="content-container-narrow section" id="infographics">

		<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



		<?php endwhile; ?>
		</section>
	</div>

	<?php query_posts('page_id=14'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>

	<div class="black-bg">
	<section class="content-container-narrow section" id="yourstory">


	<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



	<?php endwhile; ?>

	<?php query_posts('page_id=18'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php endwhile; ?>

	</section>
</div>






<?php query_posts('page_id=30'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>



<div class="black-bg">
<section class="content-container-narrow section" id="forparents">

<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



<?php endwhile; ?>
</section>
</div>



<?php query_posts('page_id=34'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>



<div class="white-bg">
<section class="content-container-narrow section" id="faq">

<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



<?php endwhile; ?>
</section>
</div>







<?php query_posts('page_id=37'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>



<div class="black-bg">
<section class="content-container-narrow section" id="join">

<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



<?php endwhile; ?>

</section>

<div class="content-container coalition-members">


<?php query_posts('page_id=41'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>



<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



<?php endwhile; ?>

</div>
</div>







		</main><!-- #main -->
	</div><!-- #primary -->



<!-- MODAL DIALOG -->

<div class="remodal" data-remodal-id="modal"
  data-remodal-options="hashTracking: false, closeOnOutsideClick: true">

  <button data-remodal-action="close" class="remodal-close"></button>

	<?php query_posts('page_id=60'); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php $key="Social Share"; echo get_post_meta($post->ID, $key, true); ?>



	<?php 	get_template_part( 'template-parts/content', get_post_type() ); ?>



	<?php endwhile; ?>

  <br>

  <button data-remodal-action="confirm" class="remodal-confirm">Close</button>
</div>




<?php
get_sidebar();
get_footer();
