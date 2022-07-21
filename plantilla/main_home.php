<!-- Inicio carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/series1.png" class="d-block w-100" alt="series">
    </div>
    <div class="carousel-item">
      <img src="./img/series2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <!-- Fin carrusel -->
<div class="col-12">
    <section class="row mas_vendidos">
        <div class="col-12">
            <h2>Los más vendidos</h2>

            <div class="vendidos_contenedor">
                <!-- funcion grande y el archivo lo puedo ver en la carpeta funciones -->
                <?php pintar(4, "card_mas_vendidos.php"); ?>

            </div>
        </div>
    </section>

    <section class="row novedades">
        <div class="col-12">
            <h2>Novedades</h2>

            <div class="vendidos_contenedor">
                <!-- funcion grande y el archivo lo puedo ver en la carpeta funciones -->
                <?php pintar(4, "card_novedades.php");?>

            </div>
        </div>
    </section>
</div>