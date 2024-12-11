<footer id="footer">
  <div class="container padding-medium ">
    <div class="row">

      <?php get_sidebar( 'footer-1' ); ?>

      <?php get_sidebar( 'footer-2' ); ?>

      <?php get_sidebar( 'footer-3' ); ?>

      <?php get_sidebar( 'footer-4' ); ?>

    </div>
  </div>
</footer>

<div id="footer-bottom">
  <hr class="text-black-50">
  <div class="container">
    <div class="row py-3">
      <div class="col-md-6 copyright">
        <p>© <?php echo date( 'Y' ) ?> TemplatesJungle. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <p>Free HTML Template by: <a href="https://templatesjungle.com/" target="_blank" class="fw-bold">
            TemplatesJungle</a> Distributed by: <a href="https://themewagon.com" target="_blank" class="fw-bold">
              ThemeWagon
        </a></p>
      </div>
    </div>
  </div>
</div>


<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"></script>
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script> -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>