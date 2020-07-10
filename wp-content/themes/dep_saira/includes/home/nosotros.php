<?php
  $titulo=get_field('titulo_nosotros');
  $info=get_field('info_nosotros');
 ?>

 <section id="nosotros">
   <div class="container">
     <div class="titulo-nosotros text-center">
       <h1> <?php echo $titulo; ?> </h1>
     </div>
     <div class="row contenido text-center">
       <?php echo $info; ?>
     </div>
     <hr>
   </div>
 </section>
