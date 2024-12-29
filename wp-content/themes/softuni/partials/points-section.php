<?php
//var_dump( $args );
?>


<section id="points" class="padding-medium pt-0">
    <div class="container">
      <div class="text-center">
      <?php if ( ! empty( $args['core'] ) ) : ?>
        <h2 class="display-6 fw-semibold"><?php echo esc_attr( $args['core'] ); ?></h2>
      <?php endif; ?> 
      </div>
      <div class="row align-items-center mt-5">
        <div class="col-md-6 pe-md-5">
          <?php if ( ! empty( $args['points'] ) ) : ?>
            <?php echo esc_attr( $args['points'] ); ?>
          <?php endif; ?> 
        </div>

        <div class="col-md-6 pe-md-5">
          <?php if ( ! empty( $args['points-r'] ) ) : ?>
            <?php echo esc_attr( $args['points-r'] ); ?>
          <?php endif; ?> 

        </div>
      </div>
    </div>
  </section>