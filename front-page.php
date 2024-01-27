<?php get_header(); ?>

<?php while(have_posts( )): the_post(  ); ?>

<main class="content-page">
<!-- Slider -->
<section id="carousel" class="sections container-fluid d-flex flex-row align-items-end">
  <div class="row">
    <div class="text-emphasis-warning carousel__slogan d-flex flex-wrap col-md-6">
      <div class="carousel__section d-flex flex-nowrap flex-column">
        <h3 class="carousel__title">#UnPlusParaTuCarrera</h3>
        <p class="carousel__subtitle">En Icesi impulsamos las <span class="carousel__bold">las competencias</span> de la
        <span class="carousel__bold">nueva generación de profecionales</span> con:</p>
        <div class="carousel__items d-flex mx">
          <p class="carousel__item p-2"><i class="bi bi-check-circle-fill"></i>Maestrías</p>
          <p class="carousel__item p-2"><i class="bi bi-check-circle-fill"></i>Especializaciones</p>
        </div>
        <div class="carousel__explorer">
          <button type="button" class="btn btn-light text-primary btn-lg px-5 py-4"><i class="bi bi-arrow-right"></i> Explora más</button>
        </div>
      </div>
    </div>
    <div id="carouselExampleSlidesOnly" data-bs-ride="carousel" class="carousel slide carousel-fade col-md-6 p-0" >
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <img src="<?php echo get_post_meta( get_the_ID(  ), 'icesi_slider1', true ); ?>" class="w-100" alt="Mujeres empresariales">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_post_meta( get_the_ID(  ), 'icesi_slider2', true ); ?>" class="w-100" alt="Hombre estudiante">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_post_meta( get_the_ID(  ), 'icesi_slider3', true ); ?>" class="w-100" alt="Personas estudiante">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$repeating_group_values = get_post_meta(get_the_ID(), 'icesi_group', true);
if ($repeating_group_values) {
  // Iterar a través de cada grupo repetible
  $count = 1;
  foreach ($repeating_group_values as $repeating_group) {
    ?>
    <section id="<?php echo 'section' . $count; ?>" class="sections container-fluid" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url($repeating_group['icesi_image']); ?>');">
      <div class="row h-100">
        <div class="section__left h-100 col-md-5 d-grid align-items-center flex-nowrap text-emphasis-warning">
          <div class="section__info">
            <h2 class="mb-4"><?php echo esc_html($repeating_group['icesi_title']); ?></h2>
            <p><?php echo esc_html($repeating_group['icesi_description']); ?></p>
            <button type="button" class="btn btn-light text-primary btn-md px-5 py-3 " data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-arrow-right"></i> Descubre los programas</button>
          </div>
        </div>
        <div class="section__right col-md-7 d-grid p-5 align-items-center flex-nowrap text-emphasis-warning">
          <div class="section__items">
            <h4 class="mb-3">Características</h4>
            <div class="container-fluid">
              <div class="row gap-3 text-center">
                <div class="section__item col d-flex align-items-center justify-content-center flex-wrap" style="background-color:<?php echo esc_attr($repeating_group['icesi_color']); ?>"><?php echo $repeating_group['icesi_iconOne']; ?><p><?php echo esc_html($repeating_group['icesi_titleIconOne']); ?></p></div>
                <div class="section__item col d-flex align-items-center justify-content-center flex-wrap" style="background:<?php echo esc_attr($repeating_group['icesi_color']); ?>"><?php echo $repeating_group['icesi_iconTwo']; ?><p><?php echo esc_html($repeating_group['icesi_titleIconTwo']); ?></p></div>
                <div class="section__item col d-flex align-items-center justify-content-center flex-wrap" style="background:<?php echo esc_html($repeating_group['icesi_color']); ?>"><?php echo $repeating_group['icesi_iconThree']; ?><p><?php echo esc_html($repeating_group['icesi_titleIconThree']); ?></p></div>
                <div class="section__item col d-flex align-items-center justify-content-center flex-wrap" style="background:<?php echo esc_html($repeating_group['icesi_color']); ?>"><?php echo $repeating_group['icesi_iconFour']; ?><p><?php echo esc_html($repeating_group['icesi_titleIconFour']); ?></p></div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    $count++;
  }
}
endwhile;
?>
      <section id="calendario" class="calendario container-fluid">
        <div class="calendario__superior container-fluid d-flex justify-content-between mb-4">
          <div clas="calendario__titulo">
            <h2 style="color:#16168E">Calendario de eventos</h2>
          </div>
          <div class="calendario__controles">
            <button id="calendario__prev" class="carousel-control-prev" type="button"
              data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="calendario__icon"><i class="bi bi-arrow-left"></i></span>
              <span class="visually-hidden">Next</span>
            </button>
            <button id="calendario__next" class="carousel-control-next" type="button"
              data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="calendario__icon"><i class="bi bi-arrow-right"></i></span>
              <span class="visually-hidden">Previous</span>
            </button>
          </div>

        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-inner container-fluid calendario__items">
            <?php icesi_query_eventos(); ?>
          </div>
        </div>
      </section>
<!-- Calendario de eventos-->
<!-- Expereiencias de egresados -->
</main>

<?php get_footer( ); ?>