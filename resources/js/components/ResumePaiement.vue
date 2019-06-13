 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Vos informations</h4>
        <hr>
        <table v-for="livr in adreslivr" :key="livr.id">
          <p class="mt-2 mb-2">Adresse de livraison</p>
          <tr>
            <th>Destinataire</th>
            <td>{{livr.destinataire}}</td>
          </tr>
          <tr>
            <th>Adresse</th>
            <td>{{livr.rue}} {{livr.numero}}</td>
          </tr>
          <tr>
            <th>Npa/Localité</th>
            <td>{{livr.npa}} {{livr.localite}}</td>
          </tr>
          <tr>
            <th>Pays</th>
            <td>{{livr.pays}}</td>
          </tr>
        </table>
         <table  v-for="fact in adresfact" :key="fact.id">
          <p class="mt-2 mb-2">Adresse de facturation</p>
          <tr>
            <th>Destinataire</th>
            <td>{{fact.destinataire}}</td>
          </tr>
          <tr>
            <th>Adresse</th>
            <td>{{fact.rue}} {{fact.numero}}</td>
          </tr>
          <tr>
            <th>Npa/Localité</th>
            <td>{{fact.npa}} {{fact.localite}}</td>
          </tr>
          <tr>
            <th>Pays</th>
            <td>{{fact.pays}}</td>
          </tr>
        </table>
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Informations de commande</h4>
        <hr>
        <table>
          <p class="mt-2 mb-2">Informations de commande</p>
          <tr>
            <th>Date de commande</th>
            <td>{{cmd.created_at | formatDate}}</td>
          </tr>
          <tr>
            <th>Numéro de commande</th>
            <td>{{cmd.id}}</td>
          </tr>
          <tr>
            <th>Date de réception</th>
            <td>{{DateLivraison | formatDate}}</td>
          </tr>
        </table>
      </div>
    </div>
    <h4>Résumé de la commande</h4>
    <div class="table-responsive-sm">
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
                <h4><b>{{(Math.ceil(((totalCart*0.077)+totalCart) * 20) / 20).toFixed(2) }}</b></h4>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
    </div>
    <div>
      <a href="paiement-etape4" ><button class="btn btn-danger btn-panier center mb-5 mt-5">Passer commande</button></a>
    </div>
  </div>
</template>

<script>
var moment = require('moment');

Vue.filter('formatDate', function(value) {
    if (value) {
      return moment(String(value)).format('DD/MM/YYYY')
    }
  });

export default{

  props: ["adresfact", "adreslivr", "cmd"],

  data() {
    return {
      vinCarts: [],
      vinTotal: 0,
    }
  },
  
   methods: {
    removeCart() {
      
      localStorage.clear();
      
    }
  },

  mounted() {
    console.log("App mounted!");
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

    DateLivraison() {
  var result = new Date(this.cmd.created_at);
  result.setDate(result.getDate() + 10);
  return result;
  },


  }

}
</script>