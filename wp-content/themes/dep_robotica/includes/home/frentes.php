<section id="frentes">
  <?php
  while (have_rows('frentes')): the_row();
    $icono = get_sub_field('icono');
    $titulo = get_sub_field('titulo');
    $descripcion = get_sub_field('descripcion');
  ?>
  <div class="">
    <img src="<?php echo $icono; ?>" alt="">
    <h3><?php echo $titulo; ?></h3>
    <?php echo $descripcion; ?>
  </div>
<?php endwhile; ?>
</section>
