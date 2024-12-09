<?php 

$reviews_args = array(
    'post_type'       => 'review',
    'post_status'     => 'publish',
    'posts_per_page'   => 3,
);

$reviews_query = new WP_Query ( $reviews_args );
//var_dump( $reviews_query )
?>

<section id="testimonial" class="padding-medium bg-primary-subtle">
    
  <div class="container">
     
    <div class="text-center mb-4">
      <p class="text-secondary ">What our students say about us</p>
      <h2 class="display-6 fw-semibold">Reviews</h2>
    </div>

    <div class="row">
     <?php if ( $reviews_query-> have_posts() ) : ?>
     
        <div class="offset-md-1 col-md-10">
          <div class="swiper testimonial-swiper">
                
            <div class="swiper-wrapper">
              <?php while ( $reviews_query->have_posts() ) : $reviews_query->the_post(); ?>
                <div class="swiper-slide pe-md-5">

                  
                  <div class="my-4">
              
                    <p class="text-muted"><?php the_content(); ?></p>
                    <div class="row">
                      <?php if ( has_post_thumbnail() ): ?>
                        <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid rounded-3', 'title' => 'Feature image'] ); ?></a> 
                      <?php endif; ?> 
                    
                      <div class="col-9">
                        <h5 class="m-0 mt-2"><?php the_title(); ?></h5>
                      </div>

                  </div>
                      
                  </div>
                  
                </div>
               <?php endwhile;	?> 
            </div>
 
            <div class="swiper-pagination"></div>

          </div>
     
        </div>

        <?php endif; ?>


    </div>
  </div>
   

</section>