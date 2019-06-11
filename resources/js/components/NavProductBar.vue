<template>
<body>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>

    <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/nav/01.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/02.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/03.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/07.png" alt="Fouth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/04.png" alt="Fifth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/06.png" alt="Sixth slide">
          </div>

    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
   <!-- <div class="productImg">
         <img class="img-fluid" src="/images/nav/product.png" />
  </div> -->


  <div class="container">
    <div class="nav-scroller py-3 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 pt-4 text-muted menu" id="products-link" href="../produits">PRODUITS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="primeurs-link" href="../primeurs">PRIMEURS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="news-link" href="../nouveautes">NOUVEAUTÉS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="promo-link" href="../promos">PROMOTIONS</a>
      </nav>
    </div>
  </div>
</body>
</template>
