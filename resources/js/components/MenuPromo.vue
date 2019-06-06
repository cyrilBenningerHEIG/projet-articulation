 <template>
  <div class="container">
    <div class="homepageImg">
      <img class="img-fluid" :src="'images/nav/promo.png'">
    </div>

    <div class="nav-scroller py-3 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 pt-4 text-muted menu" id="products-link" href="produits">PRODUITS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="primeurs-link" href="primeurs">PRIMEURS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="news-link" href="nouveautes">NOUVEAUTÉS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="promo-link" href="promos">PROMOTIONS</a>
      </nav>
    </div>
  </div>
</template>