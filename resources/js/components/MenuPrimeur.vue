 <template>
  <div class="container">
    <div class="homepageImg img-desk">
      <img class="img-fluid" :src="'images/nav/primeur.jpg'">
    </div>
    <div class="homepageImg img-mob">
      <img class="img-fluid" :src="'images/navMob/primeur.jpeg'">
    </div>

    <div class="nav-scroller py-3 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="text-muted menu" id="products-link" href="produits" style="text-decoration : none">PRODUITS</a>
        <p class="text-muted" id="menu-mob">|</p>
        <a class="text-muted menu selected" id="primeurs-link" href="primeurs" style="text-decoration : none">PRIMEURS</a>
        <p class="text-muted" id="menu-mob">|</p>
        <a class="text-muted menu" id="news-link" href="nouveautes" style="text-decoration : none">NOUVEAUTÉS</a>
        <p class="text-muted" id="menu-mob">|</p>
        <a class="text-muted menu" id="promo-link" href="promos" style="text-decoration : none">PROMOTIONS</a>
      </nav>
    </div>
  </div>
</template>