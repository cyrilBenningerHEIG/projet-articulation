<template>
  <div class="container">
    <h2>Panier</h2>

    <div class="table-responsive-sm">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Produit</th>
            <th scope="col"></th>
            <th scope="col">Quantité / Prix</th>
            <th scope="col">Sous total</th>
          </tr>
        </thead>
        <tbody>
           
          <tr v-for="(vinCart,index) in vinCarts"> 
            <th scope="row">
              <div class="card card-custom mx-2 mb-3">
                <img
                  src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg"
                  class="card-img-top"
                  alt="vin1"
                  id="cart-produit-img"
                >
              </div>
            </th>
            <td>
              <div class="card-body" id="weekproduct">
                <div class="produit-descr">
                  <p class="card-title">{{vinCart.vin.nom}}</p>
                  <p class="card-title">{{vinCart.vin.produ.nom}}</p>
                  <p class="card-text">{{vinCart.vin.millesime}}</p>
                  <p class="card-text">{{vinCart.vin.regn.nom}}</p>
                  <p class="card-text">{{vinCart.vin.regn.pays.nom}}</p>
                  <p class="card-text">{{vinCart.vin.prix.prixht}}</p>
                  <button type="button" class="btn btn-white btn-rounded btn-sm" @click="removeCart(index)">Supprimer</button>
                </div>
              </div>
            </td>
            <td>
              <form>
                <div class="form-group">
                {{vinCart.quantity}}
                   <!-- <input
                    type="number"
                    class="form-control"
                    id="formGroupExampleInput"
                    placeholder="Quantité"
                  > -->
                </div>
              </form>
            </td>
            <td>{{vinCart.vin.prix.prixht*vinCart.quantity}} CHF</td>
          </tr>
          <tr>
          <td ></td>
          <td></td>
          <td>Sous total</td>
          <td>{{totalCart}}</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>TVA & autres taxes</td>
          <td>{{totalCart*0.077}}</td>
          </tr>
           <tr>
          <td></td>
          <td></td>
          <td><h4>Total de la commande</h4><br>(Hors frais de livraison)</td>
          <td><h4>{{(totalCart*0.077)+totalCart}}</h4></td>
          </tr>
        </tbody>
      </table>
      <div class="action-btn">
    <div class="row mt-5 justify-content-center">
      <div class="filters mx-auto">
      <button class="btn btn-white btn-panier-2">Continuer mes achats</button>
        <a href="paiement-etape1"><button class="btn btn-danger btn-panier">Passer commande</button></a>
    </div>
</div>
  </div>
      </div>
  </div>
</template>

<script>

export default {

  data() {
    return {
      vinCarts: [],
      vinTotal:0,
         
    };
  },
  methods:{
    removeCart(index){
      this.vinCarts.splice(index, 1)
      localStorage.setItem('vinCarts',JSON.stringify(this.vinCarts));
      console.log(index)
    }
  },
  
 mounted() {
    console.log('App mounted!');
    this.vinCarts = JSON.parse(localStorage.getItem("vinCarts"));
    
  },

  computed: {
    totalCart: function(){
      let sum = 0;
      this.vinCarts.forEach(function(vinCart) {
         sum += (parseFloat(vinCart.vin.prix.prixht) * parseFloat(vinCart.quantity));
      });

     return sum;
   },

}

 
}
 /* methods:{

    addCart:function(){
      
      localStorage.setItem('vin'+this.vins[this.vinid-1].id, JSON.stringify(this.vins[this.vinid-1]))
     
    },

  }, */
</script>