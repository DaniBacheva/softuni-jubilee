<?php
/**
 * Template Name: Courses
 */
?>


<?php get_header(); ?>

<?php softuni_display_courses( 12 ); ?> 

<?php
	get_template_part( 'partials/teacher', 'section' );
?>

<?php get_footer(); ?>