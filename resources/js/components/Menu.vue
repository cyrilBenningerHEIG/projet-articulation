 <template>
  <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/nav/home.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/02V2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/03V2.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/07V2.png" alt="Fouth slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/nav/04V2.png" alt="Fifth slide">
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

    <div class="nav-scroller py-3 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="text-muted menu" id="products-link" href="produits" style="text-decoration : none">PRODUITS</a>
        <p class="text-muted" id="menu-mob">|</p>
        <a class="text-muted menu" id="primeurs-link" href="primeurs" style="text-decoration : none">PRIMEURS</a>
        <p class="text-muted" id="menu-mob">|</p>
        <a class="text-muted menu" id="news-link" href="nouveautes" style="text-decoration : none">NOUVEAUTÉS</a>
        <p class="text-muted" id="menu-mob">|</p>
        <a class="text-muted menu" id="promo-link" href="promos" style="text-decoration : none">PROMOTIONS</a>
      </nav>
    </div>
  </div>
</template>