
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<!-- Inicio carrusel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="#"><img src="./img/series1.png" class="d-block w-100" alt="series"></a>
      <div class="carousel-caption icon-container">
        <a href="#"><i class="bi bi-journal-plus icon-add"></i></a>
        <a href="#"><i class="bi bi-heart icon-like"></i></a>        
      </div>
    </div>
    <div class="carousel-item">
      <a href="#"><img src="./img/series2.png" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption icon-container">
        <a href="#"><i class="bi bi-journal-plus icon-add"></i></a>
        <a href="#"><i class="bi bi-heart icon-like"></i></a>        
      </div>
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
 
 <!-- Inicio buscador -->
 <div class="container h-100">
      <div class="d-flex justify-content-center h-100  buscador">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
<!-- Fin buscador -->

 <div class="col-12">
    <section class="row mas_vendidos">
        <div class="col-12">  
          <h2>Los mejores valorados</h2>

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