<section id="trabajo">
  <?php
  while (have_rows('tarjetas')): the_row();
    $foto = get_sub_field('foto');
    $info = get_sub_field('informacion');
  ?>
  <div class="item">
    <img src="<?php echo $foto; ?>" alt="">

    <div class="info">
      <?php echo $info; ?>
    </div>

  </div>
<?php endwhile; ?>
</section>
