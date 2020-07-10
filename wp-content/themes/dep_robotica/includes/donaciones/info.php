<section id="info-donaciones">
  <div class="titulo">
    <h1><?php the_field('titulo_seccion_donacion') ?></h1>
  </div>
  <div class="contnedor-info">
    <figure>
      <img src="<?php the_field('imagen_donacion') ?>" alt="">
    </figure>
    <div class="info">
      <h3> <?php the_field('texto_seccion_donacion') ?></h3>
    </div>
  </div>
  <div class="cuentas">
      <h3> <?php the_field('informacion_para_donacion') ?></h3>
  </div>
  <div class="metodos-pago">
    <div class="nequi">
      <img src="<?php the_field('logo_nequi') ?>" alt="">
    </div>
    <div class="paypal">
      <img src="<?php the_field('logo_paypal') ?>" alt="">
    </div>
  </div>
</section>
