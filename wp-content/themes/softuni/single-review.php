<?php get_header(); ?>

<?php
$id = get_the_ID();
$review_job = get_field( 'job', $id );
$review_age = get_field( 'age', $id );
//var_dump( $review_age );
?>

<section id="testimonial" class="padding-medium bg-primary-subtle">
  <div class="container">
    <div class="text-center mb-4">
      <p class="text-secondary "><?php _e( 'What our students say about us', 'softuni' ); ?></p>
      <h2 class="display-6 fw-semibold"><?php _e( 'Reviews', 'softuni' ); ?></h2>
    </div>

    <div class="row">
    
      <div class="offset-md-1 col-md-10">
 
        <div class="swiper testimonial-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide pe-md-5">
              <div class="my-4">
                <p class="text-muted"><?php the_content(); ?></p>
                <div class="row">

                  <?php if ( has_post_thumbnail() ): ?>
                    <div class="col-3"> <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-circle', 'title' => 'Feature image']); ?>
                    </div>
                  <?php endif; ?>

                  <div class="col-9">
                    <h5 class="m-0 mt-2"><?php the_title(); ?></h5>

                    <div class="col-9">
                      <?php if ( ! empty( $review_job ) ) : ?>
                          <div><?php echo esc_attr( $review_job ) ?></div>
                      <?php endif; ?>
                      <?php if ( ! empty( $review_age )) : ?>
                          <div><?php echo esc_attr( $review_age ) ?> years</div>
                      <?php endif; ?>
                    </div>  
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="swiper-pagination"></div>

        </div>

      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>