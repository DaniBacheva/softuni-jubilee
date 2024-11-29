<?php get_header(); ?>

<section id="features">
    <div class="feature-box container">
      <div class="row ">
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">100+</h2>
              <h6 class="feature-info text-uppercase">instructors</h6>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">500+</h2>
              <h6 class="feature-info text-uppercase">courses</h6>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">free</h2>
              <h6 class="feature-info text-uppercase">certifications</h6>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">2,000+</h2>
              <h6 class="feature-info text-uppercase">happy members</h6>

            </div>
          </div>
        </div>

      </div>
    </div>
</section>

<section id="about" class="padding-medium mt-xl-5">
    <div class="container">
        <div class="row align-items-center mt-xl-5">

       
         <div class="col-md-12 mt-5 mt-md-0">
            <div class="mb-3">
                <p class="text-secondary ">Learn more about us</p>
                <h2 class="display-6 fw-semibold"><?php echo get_the_title(); ?></h2>
            </div>
              <?php the_content(); ?>
     
                  <a href="about.html" class="btn btn-primary px-5 py-3 mt-4">Learn more</a>

           </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>