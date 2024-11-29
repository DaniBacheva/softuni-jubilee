<?php 

$courses_args = array(
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'posts_per_page'   => $number_of_posts,
);

$courses_query = new WP_Query ( $courses_args );
//var_dump( $courses_query )
?>

<?php if ( $courses_query-> have_posts() ) : ?>
<section id="courses" class="padding-medium">
    <div class="container">
        <div class="text-center mb-5">
            <p class="text-secondary">Some of our most popular online courses</p>
         <h2 class="display-6 fw-semibold">Explore Inspiring Online Courses</h2>
        </div>

      <div class="row">

      <?php while ( $courses_query->have_posts() ) : $courses_query->the_post(); ?>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div>
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">

          <?php if ( has_post_thumbnail() ): ?>
                             <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid rounded-3', 'title' => 'Feature image'] ); ?>   
                        <?php endif; ?> 
          
            <div class="card-body p-0">

              <div class="d-flex justify-content-between my-3">
                <p class="text-black-50 fw-bold text-uppercase m-0"><?php the_title(); ?></p>
                <div class="d-flex align-items-center">
                  <svg width="20" height="20">
                    <use xlink:href="#clock" class="text-black-50"></use>
                  </svg>
                  <p class="text-black-50 fw-bold text-uppercase m-0"><?php echo get_the_date(); ?></p>
                </div>
              </div>

              <a href="courses-details.html">
                <h5 class="course-title py-2 m-0"><?php echo get_the_excerpt(); ?></h5>
              </a>

              <div class="card-text">
                <span class="rating d-flex align-items-center mt-3">
                  <p class="text-muted fw-semibold m-0 me-2">By: <?php echo get_the_author(); ?></p>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                  <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                </span>
              </div>

            </div>
          </div>
        </div>

        <?php endwhile;	?>
  
      </div>

      <div class="text-center mt-4">
        <a href="courses.html" class="btn btn-primary px-5 py-3">View all courses</a>
      </div>

    </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>