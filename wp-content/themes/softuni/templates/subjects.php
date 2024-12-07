<?php
/**
 * Template Name: Subjects
 */
?>


<?php get_header(); ?>

<?php softuni_display_subjects( 12 ); ?> 

<?php
	get_template_part( 'partials/teacher', 'section' );
?>

<?php get_footer(); ?>