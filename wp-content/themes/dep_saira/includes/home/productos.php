<?php
  $titulo=get_field('titulo_productos');
  $imagen=get_field('imagen_producto');
  $info=get_field('info_producto');
 ?>

 <section id="productos">
   <div class="container">
     <div class="titulo-productos text-center">
       <h1> <?php echo $titulo; ?> </h1>
     </div>
     <div class="row">
       <div class="col-md-6 imagen">
         <img src="<?php echo $imagen ?>" alt="productos" width="100%" height="auto">
       </div>
       <div class="col-md-6 info">
         <?php echo $info; ?>
       </div>
     </div>
   </div>
 </section>
