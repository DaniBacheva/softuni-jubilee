<?php
/**
 * Template Name: Homepage
 */
?>


<?php get_header(); ?>

<?php
	get_template_part( 'partials/about', 'section' );
?>

<?php softuni_display_subjects( 4 ); ?> 


<?php softuni_display_courses( 4 ); ?> 


<?php softuni_display_reviews(); ?>
 

<?php softuni_display_teachers(); ?>

<!-- <?php
	get_template_part( 'partials/teacher', 'section' );
?> -->


<?php
	get_template_part( 'partials/points', 'section' );
?>


<?php
	get_template_part( 'partials/contact', 'section' );
?>


<?php get_footer(); ?>