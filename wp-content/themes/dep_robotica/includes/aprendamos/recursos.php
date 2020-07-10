<section id="trabajo">
  <?php
  while (have_rows('tarejetas_de_cursos')): the_row();
    $yt_id = get_sub_field('video');
    $titulo = get_sub_field('titulo_video');
    $info = get_sub_field('descripcion_de_video');
    $file = get_sub_field('documento_pdf');
  ?>
  <div class="item">
    <div class="videos-item">

      <a  class="images" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $yt_id; ?>"data-fancybox="gallery">
    <img src="https://i.ytimg.com/vi/<?php echo $yt_id; ?>/hqdefault.jpg" alt="" width="100%" height="auto">
    <div class="video-news--caption">
    <h3><?php echo $titulo; ?></h3>
    <p><?php echo $info ?></p>
    </div>
    </a>
    </div>

    <div class="info">
      <?php echo $info; ?>
    </div>

  </div>
<?php endwhile; ?>
</section>
