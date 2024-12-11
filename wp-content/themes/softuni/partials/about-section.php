<?php
//var_dump( $args );
?>

<section id="about" class="padding-medium mt-xl-5">
  <div class="container">
    <div class="row align-items-center mt-xl-5">
      <div class="offset-md-1 col-md-5">
        <?php if ( ! empty( $args['image'] ) ) : ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-img.jpg" alt="img" class="img-fluid rounded-circle">
        <?php endif; ?>  
      </div>
      <div class="col-md-5 mt-5 mt-md-0">

        <div class="mb-3">
          <p class="text-secondary "><?php _e( 'Learn more about us', 'softuni' ); ?></p>
            <?php if ( ! empty( $args['title'] ) ) : ?>
              <h2 class="display-6 fw-semibold"><?php echo esc_attr( $args['title'] ); ?></h2>
            <?php endif; ?>
        </div>
        
        <div class="content">
          <?php if ( ! empty( $args['content'] ) ) : ?>
          <?php echo $args['content']; ?>
          <?php endif; ?>
        </div>

        <?php if ( ! empty( $args['cta_title'] ) && $args['cta_url'] ) : ?>
          <?php
          $new_tab = '';
          if ( ! empty( $args['cta_new_tab'] ) && $args['cta_new_tab'] == true ) {
            $new_tab = 'target="_blank"';
          }
          ?>
          <div class="btn-wrap">
            <a <?php echo $new_tab; ?> href="<?php echo esc_url( $args['cta_url'] ); ?>" class="btn btn-primary px-5 py-3 mt-4"><?php echo esc_attr( $args['cta_title'] ); ?></a>
          </div>
        <?php endif; ?>
      </div>
      
    </div>
  </div>
</section>  