<footer class="container site-footer">
  <hr/>
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>


<div class="container-fuid" style="background-image: url('http://nabai.co/wp-content/uploads/2020/06/formulario-foto-fondo-1.png');">
  <div class="row">
    <div class="col-md-6">
      <img src="https://nabai.co/wp-content/uploads/2020/06/logo.png" alt="" width="100%" height="auto">
    </div>
    <div class="col-md-6">
       <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>
