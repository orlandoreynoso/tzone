<?php 

/*
Template Name: PortadaTravelZone
 */

 get_header();


?>


<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>

<section class="services-one">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      	<div class="coti">
        <?php //  dynamic_sidebar('acordion');  ?>
        <?php  dynamic_sidebar('cotizar');  ?>      		
      	</div>
      </div>
    </div>
  </div>  
</section>

 <section class="contenido-home">
   <div class="container">
     <div class="row">
         <div class="col-xs-12 col-md-8 contenido-portada">
          <?php get_template_part('template/frontpage','cpt'); ?>             
          <?php // include (TEMPLATEPATH . '/libs/contenido-home.php');  ?>
          <?php get_template_part( 'template/frontpage', 'contenidos'); ?>
         </div>
        <div class="col-xs-12 col-md-4 contenido-laterales">
          <div class="search"><?php  get_search_form(); ?></div>
          <?php include (TEMPLATEPATH . '/libs/lateral.php'); ?>
        </div>
     </div>
   </div>
 </section> 



  



<?php 
  get_footer();
?>