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
           
          <tr v-model="vinCarts"> 
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
                  <p class="card-title">{{vinCarts.nom}}</p>
                  <p class="card-title">{{vinCarts.produ.nom}}</p>
                  <p class="card-text">{{vinCarts.millesime}}</p>
                  <p class="card-text">{{vinCarts.regn.nom}}</p>
                  <p class="card-text">{{vinCarts.regn.pays.nom}}</p>
                  <p class="card-text">{{vinCarts.prix.prixht}}</p>
                  <button type="button" href="#" class="btn btn-white btn-rounded btn-sm">Supprimer</button>
                </div>
              </div>
            </td>
            <td>
              <form>
                <div class="form-group">
                  <input
                    type="number"
                    class="form-control"
                    id="formGroupExampleInput"
                    placeholder="Quantité"
                  >
                </div>
              </form>
            </td>
            <td>40 chf</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>Sous total</td>
          <td>X</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>TVA & autres taxes</td>
          <td>X</td>
          </tr>
          <tr>
          <td></td>
          <td></td>
          <td>Total HT</td>
          <td>X</td>
          </tr>
           <tr>
          <td></td>
          <td></td>
          <td><h4>Total de la commande</h4><br>(Hors frais de livraison)</td>
          <td><h4>X</h4></td>
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
      
    };
  },
  
  mounted() {
    console.log('App mounted!');
    if (localStorage.getItem('vinCarts')) this.vinCarts = JSON.parse(localStorage.getItem('vinCarts'));
  },
 
}
 /* methods:{

    addCart:function(){
      
      localStorage.setItem('vin'+this.vins[this.vinid-1].id, JSON.stringify(this.vins[this.vinid-1]))
     
    },

  }, */
</script>