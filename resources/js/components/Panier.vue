<template>
  <div class="container">
    <div v-if="vinCarts.length">
      <h2>Panier</h2>

      <div class="table-responsive-sm">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Produits</th>
              <th scope="col"></th>
              <th scope="col">Prix / Quantité</th>
              <th scope="col">Sous total (HT)</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(vinCart,index) in vinCarts">
              <th scope="row">
                <div class="card card-custom mx-2 mb-3">
                  <img
                    class="card-img-top"
                    v-bind:src="vinCart.vin.photoUrl"
                    v-bind:alt="'vin1'+vinCart.vin.id"
                  >
                </div>
              </th>
              <td>
                <div class="container" id="carteproduit">
                  <div class="card-body p-0" id="weekproduct">
                    <div class="produit-descr">
                      <h6 class="card-title m-0" id="nom-carte">
                        <div class="container p-0">
                          <div class="row" id="title-position">
                            <div class="col-sm vin-titre">
                              <h5>{{vinCart.vin.nom}}</h5>
                            </div>
                          </div>
                        </div>
                      </h6>
                    </div>
                    <hr class="m-0">
                    <div class="card-body p-1">
                      <div class="check-full" v-if="vinCart.vin.millesime > 1">
                        <h6 class="card-text" id="millesime-carte">{{vinCart.vin.millesime}}</h6>
                      </div>
                      <div class="check-full" v-else>
                        <h6 class="card-text" id="millesime-carte"></h6>
                      </div>
                      <h6 class="card-text mb-0" id="produ-carte">{{vinCart.vin.produ.nom}}</h6>
                      <button type="button" class="btn btn-danger btn-rounded btn-sm" @click="removeCart(index)">X</button>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <form>
                  <div class="form-group panier-quantite">
                    <h6><span class="card-text" id="prix-carte">CHF {{vinCart.vin.prix.prixht}}</span> x {{vinCart.vin.condi.nombre}} bouteilles </h6>
                  </div>
                </form>
              </td>
              <td>
                <div class="panier-quantite"><b>{{(Math.ceil((vinCart.vin.prix.prixht*(vinCart.quantity*vinCart.vin.condi.nombre)*20)) / 20).toFixed(2) }} CHF</b>
                </div>
                </td>
              
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Sous total</td>
              <td>{{(Math.ceil(totalCart * 20) / 20).toFixed(2) }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>TVA & autres taxes</td>
              <td>{{(Math.ceil((totalCart*0.077 * 20)) / 20).toFixed(2) }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <h4>Total de la commande</h4>
                <p><i>(Hors frais de livraison)</i></p>
                <br>
                <input
                  style="margin-top : 25px"
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Code promotionel"
                >
              </td>
              <td>
                <h4><b vinTotal>{{totalttc }}</b></h4>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="action-btn">
          <div class="row mt-5 justify-content-center">
            <div class="filters mx-auto">
              <a href="/">
                <button class="btn btn-white btn-panier-2">Continuer mes achats</button>
              </a>
              <a href="paiement-etape1">
                <button class="btn btn-danger btn-panier">Passer commande</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-else class="container">
      <div class="container" style="height : 100px;text-align: center;">
        <h2 style="color : #a62b35; padding-top : 50px;">Votre panier est vide</h2>
      </div>
      <div class="container" style="height : 300px;text-align: center;">
        <a href="/">
          <button class="btn btn-danger" style="margin-top : 35px">Revenir à la boutique</button>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      vinCarts: [],
      vinTotal: 0,
      visibleClass: "visible",
        vin: ""
    };
  },
  methods: {
    removeCart(index) {
      this.vinCarts.splice(index, 1);
      localStorage.setItem("vinCarts", JSON.stringify(this.vinCarts));
    }
  },

  mounted() {
    this.vinCarts = JSON.parse(localStorage.getItem("vinCarts"));
  },

  computed: {
    totalCart: function() {
      let sum = 0;
      this.vinCarts.forEach(function(vinCart) {
        sum +=
          parseFloat(vinCart.vin.prix.prixht) *
          parseFloat(vinCart.quantity * vinCart.vin.condi.nombre);
      });
      
      return sum;
    },
    totalttc: function(){
      var sumttc = (Math.ceil(((this.totalCart*0.077)+this.totalCart) * 20) / 20).toFixed(2);
      localStorage.setItem("total", sumttc)
      return sumttc

    },

  },

    props: ["vins", "prixttc", "prixeuro"],

  
  }
/* methods:{

    addCart:function(){
      
      localStorage.setItem('vin'+this.vins[this.vinid-1].id, JSON.stringify(this.vins[this.vinid-1]))
     
    },

  }, */
</script>