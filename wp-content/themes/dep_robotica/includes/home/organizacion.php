<?php
  $informacion1= get_field('organizacion');
 ?>

 <section id="organizacion">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <?php echo $informacion1; ?>
       </div>
       <div class="col-md-6">
         <header>
           <h2>Impacto</h2>
         </header>
         <?php
      while (have_rows('impacto')): the_row();
       $icono = get_sub_field('icono');
       $descripcion = get_sub_field('descripcion');

       ?>
        <div class="item-impacto">
          <img src="<?php echo $icono ?>" alt="">
          <?php echo $descripcion; ?>
        </div>
      <?php endwhile; ?>
       </div>
     </div>
   </div>
 </section>
