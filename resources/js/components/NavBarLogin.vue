<template>
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
                  <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                      <a class="nav-link icon" id="icon_langue" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/icons/terre.svg"/></a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">FR</a>
                        <a class="dropdown-item" href="#">EN</a>
                        <a class="dropdown-item" href="#">IT</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link icon" id="icon_search" data-toggle="dropdown" href="#" role="tab" aria-selected="false"><img src="/images/icons/recherche.svg"/></a>
                      <div class="dropdown-menu">
                        <div class="form-group m-2">
                          <label for="exampleInputEmail1">Recherche</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Recherche...">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link icon" id="icon_account" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="/images/icons/compte.svg"/></a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/compte">Hello {{user.nom}}</a>
                        <a class="dropdown-item" href="/logout">Déconnexion</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a  class="nav-link icon" id="icon_search"  href="/panier"><img src="/images/icons/panier.svg"/> 
                      <div v-if=vinCarts>
                      <span class='badge badge-warning' id='lblCartCount' v-show="vinCarts.length > 0" > {{vinCarts.length}} </span>
                      </div>
                      </a>
                     
                    </li>
                  </ul>
                </div>
      </div>
    </header>
  </div>

  

</template>
<script>
export default {
    props: ["user"],
    
   data() {
    return {
      user: '',
      vinCarts: [],
      
    };
  },
  mounted() {
    console.log('App mounted!');
    this.vinCarts = JSON.parse(localStorage.getItem("vinCarts"));
    
  },
}

</script>
