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