<?php get_header(); ?>


  <section id="concurso" class="cuerpo">

	  					<div class="imagenfondo" style="background-image: url('<?php the_field('Fondo'); ?>');">




    <div class="titulo">
      <?php the_field('titulo'); ?>
    </div>

    <div class="form">
      <p>
          <?php if( get_field('fondo_formulario') ): ?>

  	       <img class="fondoform" src="<?php the_field('fondo_formulario'); ?>" />

         <?php endif; ?>

	<?php if( get_field('formulario') ):
     the_field('formulario');
	endif; ?>

    </div>

    <div class="bajada">
      <?php the_field('contenido'); ?>
    </div>


		  				</div>
  </section>



<?php get_sidebar(); ?>

<?php get_footer(); ?>
