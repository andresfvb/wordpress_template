  <?php

function icesi_query_eventos() {
  $args = array(
    "post_type" => 'icesi_eventos',
    'posts_per_page' => 8,
  );
  $clases = new WP_Query($args);
  $total_posts = $clases->found_posts;
  $totalCount=1;
  $crear = 0;
  $count = 1;
  while( $clases->have_posts()): $clases->the_post(  );
  $fecha = get_post_meta(get_the_ID(  ), 'icesi_event_fecha', true);

  $timestamp = strtotime($fecha);
  $fecha_formateada = date('d, F, Y', $timestamp);

  if($crear===0){
    ?>
    <div id="carousel_four" class="carousel-item active">
    <div class="d-flex justify-content-left separador">
    <?php
  }else if($count===5){
    $count = 1;
    ?>
    <div id="carousel_four" class="carousel-item">
    <div class="d-flex justify-content-left separador">
      <?php
  }
?>
        <div class="card calendario__item">
          <img src="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_imagen', true); ?>" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-0" style="color: #16168E"><?php the_title(); ?></h5>
            <span style="color: #bababa"><?php echo get_post_meta(get_the_ID(  ), 'icesi_event_modalidad', true); ?></span>
            <p class="card-text mt-3"><?php the_excerpt(  ); ?></p>
              <div class="d-flex justify-content-center">
                <a href="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_url', true); ?>" class="btn rounded-0 py-2" style="background: #16168E; color: white;width: 100%;">Inscribete</a>
              </div>
          </div>
          <div class="calendario__fecha">
            <p><?php echo $fecha_formateada;?></p>
          </div>
        </div>
      <?php
      if($count===4 || $totalCount === $total_posts){
    ?>
    </div>
      </div>
    <?php
  }
  $crear = 1;
$count++;
$totalCount++;
endwhile; 
wp_reset_postdata(  );

wp_reset_query();

$crear = 0;
$count = 1;
$totalCount = 1;
  while( $clases->have_posts()): $clases->the_post(  );
  $fecha = get_post_meta(get_the_ID(  ), 'icesi_event_fecha', true);

  $timestamp = strtotime($fecha);
  $fecha_formateada = date('d, F, Y', $timestamp);

  if($crear===0){
    ?>
    <div id="carousel_three" class="carousel-item active">
    <div class="d-flex justify-content-left separador">
    <?php
  }else if($count===4){
    $count = 1;
    ?>
    <div id="carousel_three" class="carousel-item">
    <div class="d-flex justify-content-left separador">
      <?php
  }
?>
        <div class="card calendario__item">
          <img src="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_imagen', true); ?>" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-0" style="color: #16168E"><?php the_title(); ?></h5>
            <span style="color: #bababa"><?php echo get_post_meta(get_the_ID(  ), 'icesi_event_modalidad', true); ?></span>
            <p class="card-text mt-3"><?php the_excerpt(  ); ?></p>
              <div class="d-flex justify-content-center">
                <a href="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_url', true); ?>" class="btn rounded-0 py-2" style="background: #16168E; color: white;width: 100%;">Inscribete</a>
              </div>
          </div>
          <div class="calendario__fecha">
            <p><?php echo $fecha_formateada;?></p>
          </div>
        </div>
      <?php
      if($count===3 || $totalCount === $total_posts){
    ?>
    </div>
      </div>
    <?php
  }
  $crear = 1;
$count++;
$totalCount++;
endwhile; 
wp_reset_postdata(  );

wp_reset_query();
$crear = 0;
$count = 1;
$totalCount = 1;
  while( $clases->have_posts()): $clases->the_post(  );
  $fecha = get_post_meta(get_the_ID(  ), 'icesi_event_fecha', true);

  $timestamp = strtotime($fecha);
  $fecha_formateada = date('d, F, Y', $timestamp);

  if($crear===0){
    ?>
    <div id="carousel_one" class="carousel-item active">
    <div class="d-flex justify-content-left separador">
    <?php
  }else if($count===2){
    $count = 1;
    ?>
    <div id="carousel_one" class="carousel-item">
    <div class="d-flex justify-content-left separador">
      <?php
  }
?>
        <div class="card calendario__item">
          <img src="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_imagen', true); ?>" class="card-img-top rounded-0" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-0" style="color: #16168E"><?php the_title(); ?></h5>
            <span style="color: #bababa"><?php echo get_post_meta(get_the_ID(  ), 'icesi_event_modalidad', true); ?></span>
            <p class="card-text mt-3"><?php the_excerpt(  ); ?></p>
              <div class="d-flex justify-content-center">
                <a href="<?php echo get_post_meta(get_the_ID(  ), 'icesi_event_url', true); ?>" class="btn rounded-0 py-2" style="background: #16168E; color: white;width: 100%;">Inscribete</a>
              </div>
          </div>
          <div class="calendario__fecha">
            <p><?php echo $fecha_formateada;?></p>
          </div>
        </div>
      <?php
      if($count===1 || $totalCount === $total_posts){
    ?>
    </div>
      </div>
    <?php
  }
  $crear = 1;
$count++;
$totalCount++;
endwhile; 
wp_reset_postdata(  );
}

?>
<script>
  // Función para verificar el tamaño de la pantalla y realizar acciones en consecuencia
  function verificarTamañoDePantalla() {
  
      // Obtener el ancho de la ventana del navegador
      var anchoDeVentana = window.innerWidth;
      console.log(anchoDeVentana);
      // Definir un umbral de ancho para decidir si mostrar u ocultar
      var screenLg = 1400; // Puedes ajustar este valor según tus necesidades
      var screenMd = 992; // Puedes ajustar este valor según tus necesidades
      var screenSm = 768; // Puedes ajustar este valor según tus necesidades
    
      // Seleccionar el elemento que deseas mostrar u ocultar
      var screeenFour = document.getElementById("carousel_four"); // Reemplaza "miElemento" con el ID de tu elemento
      var screenThree = document.getElementById("carousel_three"); // Reemplaza "miElemento" con el ID de tu elemento
      var screenOne = document.getElementById("carousel_one"); // Reemplaza "miElemento" con el ID de tu elemento
    
      // Verificar el tamaño de la pantalla y realizar acciones en consecuencia
      if (anchoDeVentana > screenLg) {
        // Ocultar el elemento si la pantalla es más pequeña que el umbral
        screenThree.remove();
        screenOne.remove();
        console.log("Entro a 4")
      }else if (anchoDeVentana < screenLg && anchoDeVentana >screenMd ){
        screenOne.remove();
        screeenFour.remove();
        console.log("Entro a 3")
      }else if (anchoDeVentana < screenMd && anchoDeVentana < screenSm ){
        screenThree.remove();
        screeenFour.remove();
        console.log("Entro a 1")
      }
    }
// Llamar a la función cuando se carga la página y cuando se redimensiona la ventana
window.onload = verificarTamañoDePantalla;
window.onresize = verificarTamañoDePantalla;
clearTimeout(window.resizeTimer);
    window.resizeTimer = setTimeout(function () {
      verificarTamañoDePantalla();
    }, 250);
</script>
<?php