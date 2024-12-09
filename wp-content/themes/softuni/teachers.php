<?php 

$teachers_args = array(
    'post_type'       => 'teacher',
    'post_status'     => 'publish',
    'posts_per_page'   => 3,
);

$teachers_query = new WP_Query ( $teachers_args );
//var_dump( $teachers_query )
?>


<?php if ( $teachers_query-> have_posts() ) : ?>
<section id="teacher" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <p class="text-secondary">Meet our popular teachers</p>
        <h2 class="display-6 fw-semibold">Our Teachers</h2>
      </div>

      <div class="row">
      <?php while ( $teachers_query->have_posts() ) : $teachers_query->the_post(); ?>
        <div class="col mb-5">

 <div class="card-body p-0">
              <div class="text-center mt-3">
                <p class="fw-bold m-0"><?php the_title(); ?></p>
                <p class="text-secondary m-0"><?php the_content(); ?></p>
              </div>
            </div>

          <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
          <?php if ( has_post_thumbnail() ): ?>
            <div class="image-holder zoom-effect rounded-3">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-3', 'title' => 'Feature image']); ?>
              <ul class="social-links list-unstyled position-absolute">
                <li>
                  <a href="#">
                    <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                      <use xlink:href="#facebook" class="text-white"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                      <use xlink:href="#twitter" class="text-white"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                      <use xlink:href="#instagram" class="text-white"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                      <use xlink:href="#linkedin" class="text-white"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <?php endif; ?>   
           
          </div>
        </div>
        <?php endwhile; ?>         
      </div>
</section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>