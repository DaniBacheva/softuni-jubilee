<?php get_header(); ?>

<?php
$subject_hours = get_post_meta( get_the_ID(), 'subject_hours', true );
$subscribers_count = get_post_meta( get_the_ID(), 'subscribers', true );
?>

<section id="about" class="padding-medium mt-xl-5">
    <div class="container">
        <div class="row align-items-center mt-xl-5">

   <div class="mb-3">
                <h2 class="display-6 fw-semibold"><?php echo get_the_title(); ?></h2>
            </div>


           <?php if ( has_post_thumbnail() ): ?>
            <div class="offset-md-1 col-md-10">

                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-circle', 'title' => 'Feature image']); ?>
            
            </div>
           <?php endif; ?>        
         <div class="col-md-10 mt-5 mt-md-0">
         
              <?php the_content(); ?>

              <div class="mb-3">
                    
              <?php 					
					if ( ! empty( $subject_hours ) ) {
						echo '<div>';
						echo 'Learning hours: ' . esc_attr ( $subject_hours );
						echo '</div>';
					}
					?>
                </div>
                                <a href="#" id="subject-<?php echo get_the_ID(); ?>" data-id="<?php echo get_the_ID(); ?>" class="subscribe btn btn-primary px-5 py-3 mt-4">Subscribe now!</a>
                  <p><?php echo $subscribers_count ?> Subscribers </p>
              
           </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>