<?php get_header(); ?>

<section id="about" class="padding-medium mt-xl-5">
    <div class="container">
        <div class="row align-items-center mt-xl-5">

        <?php while ( have_posts() ) : the_post(); ?>      
            <?php if ( has_post_thumbnail() ): ?>
                <div class="offset-md-1 col-md-10">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-circle', 'title' => 'Feature image']); ?>
                </div>
            <?php endif; ?> 

            <div class="col-md-10 mt-5 mt-md-0">
                <div class="mb-3">
                    <h2 class="display-6 fw-semibold"><?php the_title(); ?></h2>
                    <p class="text-secondary ">Date: <?php the_date(); ?></p>
                    <p class="text-secondary "><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">Author: <?php the_author_meta( 'display_name' ); ?></p>
                    <p class="text-secondary ">Category: <?php the_category(); ?></p>   
                </div>

                <?php the_content(); ?>
            </div>

        <?php endwhile;	?>
        </div>
    </div>
</section>

<?php get_footer(); ?>