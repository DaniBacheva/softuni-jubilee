<?php get_header(); ?>

<?php
$id = get_the_ID();
$email = get_field( 'email', $id );
$facebook = get_field( 'facebook', $id );
$linkedin = get_field( 'linkedin', $id );
//var_dump( $facebook );
?>


<div class="row">
  <div class="col mb-5">

    <div class="card-body p-0">
      <div class="text-center mt-3">
        <p class="fw-bold m-0"><?php the_title(); ?></p>
        <p class="text-secondary m-0"><?php the_content(); ?></p>
      </div>

      <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
        <?php if ( has_post_thumbnail() ): ?>
          <div class="offset-md-1 col-md-10">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-circle', 'title' => 'Feature image']); ?>
          </div>
        <?php endif; ?>   
      
        <div class="col-9">

          <?php if ( ! empty( $email ) ) : ?>
              <div>Email: <?php echo esc_attr( $email ) ?></div>
          <?php endif; ?>

          <?php if ( ! empty( $facebook )) : ?>
              <div> Facebook: <?php echo esc_attr( $facebook ) ?></div>
          <?php endif; ?>

          <?php if ( ! empty( $linkedin )) : ?>
              <div>Linkedin: <?php echo esc_attr( $linkedin ) ?></div>
          <?php endif; ?>

        </div>  
      </div>
    </div>
  </div>
            
</div>

<?php get_footer(); ?>