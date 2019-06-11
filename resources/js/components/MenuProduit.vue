 <template>
  <div class="container">
    <div class="homepageImg">
      <img class="img-fluid" :src="'images/nav/product.png'">
    </div>

    <div class="nav-scroller py-3 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 pt-4 text-muted menu selected" id="products-link" href="produits" style="text-decoration : none">PRODUITS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="primeurs-link" href="primeurs" style="text-decoration : none">PRIMEURS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="news-link" href="nouveautes" style="text-decoration : none">NOUVEAUTÉS</a>
        <p class="p-2 pt-4 text-muted">|</p>
        <a class="p-2 pt-4 text-muted menu" id="promo-link" href="promos" style="text-decoration : none">PROMOTIONS</a>
      </nav>
    </div>
  </div>
</template>