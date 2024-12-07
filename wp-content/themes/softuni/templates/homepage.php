<?php
/**
 * Template Name: Homepage
 */
?>


<?php get_header(); ?>

<?php
	get_template_part( 'partials/about', 'section' );
?>

<!--  
<?php
	get_template_part( 'partials/category', 'section' );
?> -->

<?php softuni_display_subjects( 4 ); ?> 


<?php softuni_display_courses( 4 ); ?> 


<?php softuni_display_reviews(); ?> 


<!-- <?php
	get_template_part( 'partials/testimonial', 'section' );
?> -->
 
 <?php
	get_template_part( 'partials/teacher', 'section' );
?>


<?php
	get_template_part( 'partials/points', 'section' );
?>


<?php
	get_template_part( 'partials/contact', 'section' );
?>


  <?php get_footer(); ?>