<?php get_header(); ?>

<!-- 
<section id="about" class="padding-medium mt-xl-5">
    <div class="container">
        <div class="row align-items-center mt-xl-5">

           <?php if ( has_post_thumbnail() ): ?>
            <div class="offset-md-1 col-md-10">

                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-circle', 'title' => 'Feature image']); ?>
            
            </div>
           <?php endif; ?>        
         <div class="col-md-10 mt-5 mt-md-0">
            <div class="mb-3">
                <p class="text-secondary ">Learn more about us</p>
                <h2 class="display-6 fw-semibold"><?php echo get_the_title(); ?></h2>
            </div>
              <?php the_content(); ?>
     
                  <a href="about.html" class="btn btn-primary px-5 py-3 mt-4">Learn more</a>

           </div>
        </div>
    </div>
</section> -->

<section id="teacher" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <p class="text-secondary">Meet our popular teachers</p>
        <h2 class="display-6 fw-semibold">Our Teachers</h2>
      </div>

      <div class="row">
        <div class="col mb-5">
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

            <div class="card-body p-0">
              <div class="text-center mt-3">
                <p class="fw-bold m-0">?php echo get_the_title(); ?</p>
                <p class="text-secondary m-0"><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        </div>

         
      </div>
</section>

<?php get_footer(); ?>