<template>
  <section>      
  <div class="containe">
    <div class="container" v-for="vin in vins" :key="vin.id">
      
        <div class="roadMap pt-2 pb-5">
          <span>
            <a href="../produits" class="produit-liens"><b>PRODUITS</b></a>
            <img class="arrow" src="/images/icons/arrow.svg">
            <a href="#produit" class="produit-liens"><b>{{vin.nom}}</b></a>
          </span>
        </div>

        <div class="container p-4">
          <div class="row">
            <div class="col">
              <img class="bottleImg" id="produit" v-bind:src="vin.photoUrl">
            </div>
          <div class="col mt-4 mb-4">
              <div v-if="vin.millesime">
                <h3> {{vin.nom}} <span>- {{vin.millesime}}</span></h3>
                <span></span>
                <h5 class="mt-3 mb-3 price-font">
                  
                  <b v-if="unchecked ==true">{{prixeurottc}} €</b>
                  <b v-else>CHF {{prixttc}}</b>
                  <i class="price-ht-font">
                    <span v-if="unchecked ==true">({{prixeuro}} € hors TVA)</span>
                    <span v-else>({{vin.prix.prixht}}  CHF hors TVA)</span> 
                  </i>
                </h5>
                <div>
                    <b-form-checkbox v-model="unchecked" name="check-button" switch>
                      Prix euro <b></b>
                    </b-form-checkbox>
                </div>

                <span></span>
                <span></span>
                <p class="font-weight-light mt-2 mb-2 article-font">Numéro d'article : {{vin.id}}</p>
              </div>

              <div v-else>
                <h3> {{vin.nom}} <span> </span></h3>
                <span></span>
                <h5 class="mt-3 mb-3 price-font">
                  CHF
                  <b>{{prixttc}}</b>
                  <i class="price-ht-font">
                    (<span>{{vin.prix.prixht}}</span> CHF hors TVA)
                  </i>
                </h5>

                <span></span>
                <span></span>
                <p class="font-weight-light mt-2 mb-2 article-font">Numéro d'article : {{vin.id}}</p>
              </div>



              <div class="mt-4 mb-4">
                <label>TAILLE : </label><span> {{vin.frmt.quantite}}</span>
                <div>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm"
                    role="button"
                    aria-disabled="true"
                  >37.5 cl</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm active "
                    role="button"
                    aria-disabled="true"
                  >{{vin.frmt.quantite}}</a>
                </div>
              </div>

              <div class="mt-4 mb-4">
                <label>VARIANTES : </label><span> {{vin.millesime}}</span>
                <div>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm"
                    role="button"
                    aria-disabled="true"
                  >2012</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm active"
                    role="button"
                    aria-disabled="true"
                  >{{vin.millesime}}</a>
                </div>
              </div>

              <div class="mt-4 mb-4">
                <label class="mr-4 my-auto">Nombre de boîte : </label>
                <div class="container">
                  <div class="row">
                    <div class="col-3 pl-0">
                        <div class="input-group" id="btn-quantity">
                          <span class="input-group-btn">
                            <button type="button" @click="decrement()" class="quantity-left-minus btn btn-outline-secondary btn-sm" >
                              <span class="glyphicon glyphicon-minus">-</span>
                            </button>
                          </span>
                          <input type="text"  class="form-control input-number form-control-sm quantity-bar"  :value="quantite" min="1" max="20">
                          <span class="input-group-btn">
                            <button type="button" @click="increment()" class="quantity-right-plus btn btn-outline-secondary btn-sm" >
                              <span class="glyphicon glyphicon-plus">+</span>
                            </button>
                          </span>
                        </div>
                    </div>
                    <div class="col">
                      <span><img class="icon mr-3" id="icon_box" src="/images/icons/box.svg">{{vin.condi.nombre}} bouteille par boîte ({{vin.condi.type}})</span>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-outline-danger btn-xl btn-basket" @click="addCart">
                <span class="icon"></span>
                <span>Ajouter au panier</span>
              </button>
            </div>
          </div>
        </div>
        <br>
        <div class="row mb-5" >
          <div class="col-4">
            <div
              class="nav flex-column nav-pills text-info"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <a
                class="nav-link text-right pills active"
                id="v-pills-home-tab"
                data-toggle="pill"
                href="#v-pills-home"
                role="tab"
                aria-controls="v-pills-home"
                aria-selected="true"
              >Description</a>
              <a
                class="nav-link text-right pills"
                id="v-pills-profile-tab"
                data-toggle="pill"
                href="#v-pills-profile"
                role="tab"
                aria-controls="v-pills-profile"
                aria-selected="false"
              >Informations</a>
              <a
                class="nav-link text-right pills"
                id="v-pills-messages-tab"
                data-toggle="pill"
                href="#v-pills-messages"
                role="tab"
                aria-controls="v-pills-messages"
                aria-selected="false"
              >Régions</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active text-justify"
                id="v-pills-home"
                role="tabpanel"
                aria-labelledby="v-pills-home-tab"
              >
                <p>{{vin.description}}</p>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-profile"
                role="tabpanel"
                aria-labelledby="v-pills-profile-tab"
              >
                <table class="p table">
                <tr>
                    <td>Appellation</td>
                    <td>{{vin.appel.libelle}}</td>
                  </tr>
                  <tr>
                    <td>Teneur en alcool</td>
                    <td>{{vin.alcool}}</td>
                  </tr>
                  <tr>
                    <td>Cotation</td>
                    <div v-if="vin.cotation">
                    <td>{{vin.cotation}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Classement</td>
                    <div v-if="vin.classement">
                    <td>{{vin.classement}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Apogée</td>
                    <div v-if="vin.apogee">
                    <td>{{vin.apogee}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Producteur</td>
                    <a v-bind:href="vin.produ.url" target="_blank"> 
                    <td id="a-producteur" >{{vin.produ.nom}}</td>
                    </a> 
                  </tr>
                  <tr>
                    <td>Cépage(s)</td>
                    <div v-for="value in vin.cepags">
                      <td>{{value.pivot.pourcentage}}% {{value.nom}}</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Type</td>
                    <div v-for="value in vin.types">
                      <td>{{value.type}}</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Pays</td>
                    <td>{{vin.regn.pays.nom}}</td>
                  </tr>
                  <tr>
                    <td>Région</td>
                    <td>{{vin.regn.nom}}</td>
                  </tr>
                </table>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-messages"
                role="tabpanel"
                aria-labelledby="v-pills-messages-tab"
              >
                <div id="mapid"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
      </section>
</template>
<script>

 export default {
  
  
  props: ["vins","prixttc", "prixeuro", "prixeurottc", "vinid"],

   data() {
    return {
      vin: '',
      vinCarts: [],
      quantite: 1,
      unchecked:false,
      
    };
  },
  methods: {
    addCart() {
      var entry = {vin:this.vins[this.vinid-1], quantity:this.quantite}
      localStorage.setItem("entry", JSON.stringify(entry))
      this.vinCarts.push(entry)
      localStorage.setItem("vinCarts", JSON.stringify(this.vinCarts));
    },
    increment () {
      this.quantite++
    },
    decrement () {
      if(this.quantite === 1) {
        alert('Negative quantity not allowed')
      } else {
        this.quantite--
      }
    },
    
    

  },
  mounted() {
    console.log('App mounted!');
    this.vinCarts = JSON.parse(localStorage.getItem("vinCarts"));
    if( this.vinCarts == null)  this.vinCarts = [];
  },
  
 

}
  
/*   data() {
    return {
      vin: '',
      vinCarts: [],
      
    };
  },
methods: {
    addCart() {
      this.vinCarts.push(JSON.parse(localStorage.getItem('vinCarts')));
    },
  },
  mounted() {
    console.log('App mounted!');
    if (localStorage.getItem('vinCarts')) this.vinCarts.push(JSON.parse(localStorage.getItem('vinCarts')));
  },
  watch: {
    vinCarts: {
      handler() {
        console.log('Vins changed!');
        localStorage.setItem('vinCarts', JSON.stringify(this.vins[this.vinid-1]));
      },
      deep: true,
    },
  }
}  */

</script>

