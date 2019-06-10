<template>

  <div class="container">
    <div v-if=totalCart>
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
                  <div class="container" id="carteproduit">
   
              <div class="card-body" id="weekproduct">
                <div class="produit-descr">
         <h6 class="card-title" id="nom-carte">
              <div class="container p-0">
                <div class="row">
                  <div class="col-sm produit-titre ">
                        <h5>{{vinCart.vin.nom}}</h5>
                  </div>
                </div>
              </div>
            </h6>
      </div>
    <hr>
    <div class="card-body">
      <div class="check-full" v-if="vinCart.vin.millesime > 1">
      <h6  class="card-text" id="millesime-carte">{{vinCart.vin.millesime}}</h6>
      </div>
      <div class="check-full" v-else>
      <h6  class="card-text" id="millesime-carte"></h6>
      </div>
      <h6  class="card-text" id="produ-carte">{{vinCart.vin.produ.nom}}</h6>
      <h6  class="card-text" id="prix-carte"  style="margin-top : 45px">CHF {{vinCart.vin.prix.prixht}} </h6>
                        <button type="button" class="btn btn-white btn-rounded btn-sm" @click="removeCart(index)">Supprimer</button>
      </div>
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
     <a href="/"><button class="btn btn-white btn-panier-2">Continuer mes achats</button></a>
        <a href="paiement-etape1"><button class="btn btn-danger btn-panier">Passer commande</button></a>
    </div>
</div>
  </div>
      </div>
  </div>
  <div v-else class="container" >
    <div class="container" style="height : 100px;text-align: center;">
    <h2 style="color : #a62b35; padding-top : 50px;">Votre panier est vide</h2>
    </div>
        <div class="container" style="height : 300px;text-align: center;">
      <a href="/"><button class="btn btn-danger" style="margin-top : 35px">Revenir à la boutique</button></a>
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