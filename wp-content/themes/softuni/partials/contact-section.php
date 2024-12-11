<?php
//var_dump( $args );
?>

<section id="register">
    <div class="container padding-medium">
      <div class="row align-items-center">
        <div class="offset-md-1 col-md-5 ">
          <div>
          <?php if ( ! empty( $args['subscribe'] ) ) : ?>
            <h2 class="display-6 fw-semibold"><?php echo esc_attr( $args['subscribe'] ); ?></h2>
            <?php endif; ?>   
      
            <?php if ( ! empty( $args['sign'] ) ) : ?>
            <p class="text-secondary "><?php echo esc_attr( $args['sign'] ); ?></p>
            <?php endif; ?> 
          </div>
        </div>
        <div class="col-md-5">
          <form id="form">
               <input type="email" name="email" placeholder="Write Your Email Address*"
              class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4">
		

              <?php if ( ! empty( $args['cta_text'] ) && $args['cta_url'] ) : ?>
					

                <div class="btn-wrap">
						<a href="<?php echo esc_url( $args['cta_url'] ); ?>" class="btn btn-primary px-5 py-3 mt-4"><?php echo esc_attr( $args['cta_text'] ); ?></a>
					</div>
						<!-- <button class="btn btn-primary px-5 py-3"><a  href="<?php echo esc_url( $args['cta_url'] ); ?>" ><?php echo esc_attr( $args['cta_text'] ); ?></a></button>
					</div> -->
				<?php endif; ?>

          </form>
        </div>

      </div>
    </div>
  </section>