<?php
	  $args = array(
	  'post_type'=> 'peregrinaciones',
	  'post_per_page' => -1

	  );
?>

<?php  ?>

            <div class="info">
				<div class="titulos-portada">
					<h2>Peregrinaciones</h2>
				</div>
          <?php
          $args = array(
          'post_type'=> 'peregrinaciones',
          'post_per_page' => -1

          );

          ?>
           <?php $peregrinaciones = new WP_Query($args); ?>

<?php while($peregrinaciones->have_posts()): $peregrinaciones->the_post(); ?>

<?php /*the_post_thumbnail();*/ ?>
  <?php // the_title(); ?>

      <?php // the_field('fecha_de_salida'); ?>
              <?php /* the_field('recorrido');*/ ?>
              <div class="peregrinaciones-portada">
	              <a class="enlaces" href="<?php the_permalink(); ?>">
	                <img src="<?php the_field('afiche'); ?>" alt="<?php the_field('titulo'); ?>">
	              </a>
              </div>





<?php endwhile; wp_reset_postdata(); ?>
            </div>