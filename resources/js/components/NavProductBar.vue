<template>
<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1"></div>
        <div class="col-4">
          <a class="blog-header-logo text-dark" href="/">
            <img class="logo" id="img-logo" src="/images/logo/logo.svg">
          </a>
        </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="icon" id="icon_search" href="#"><img src="/images/icons/recherche.svg" /></a>
                    <a class="icon" id="icon_account" href="../compte"><img src="/images/icons/compte.svg" /></a>
                    <a class="icon" id="icon_cart" href="../panier"><img src="/images/icons/panier.svg" /></a>
                </div>
      </div>
    </header>
  </div>

   <div class="productImg">
         <img class="img-fluid" src="/images/nav/product.png" />
  </div>


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
