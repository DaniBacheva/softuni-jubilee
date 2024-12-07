<?php get_header(); ?>

<section id="about" class="padding-medium mt-xl-5">
    <div class="container">
        <div class="row align-items-center mt-xl-5">

       
         <div class="col-md-12 mt-5 mt-md-0">
            <div class="mb-3">
                <p class="text-secondary ">Learn more about us</p>
                <h2 class="display-6 fw-semibold"><?php the_title(); ?></h2>
            </div>
            <?php while( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>

     
                  <a href="about.html" class="btn btn-primary px-5 py-3 mt-4">Learn more</a>

                  <?php endwhile; ?>     
           </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>