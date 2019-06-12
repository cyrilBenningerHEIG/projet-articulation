 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Vos informations</h4>
        <hr>
        <table>
          <p class="mt-2 mb-2">Adresse de livraison</p>
          <tr>
            <th>Destinataire</th>
            <td>{{adreslivr[0].destinataire}}</td>
          </tr>
          <tr>
            <th>Adresse</th>
            <td>{{adreslivr[0].rue}} {{adreslivr[0].numero}}</td>
          </tr>
          <tr>
            <th>Npa/Localité</th>
            <td>{{adreslivr[0].npa}} {{adreslivr[0].localite}}</td>
          </tr>
          <tr>
            <th>Pays</th>
            <td>{{adreslivr[0].pays}}</td>
          </tr>
        </table>
         <table>
          <p class="mt-2 mb-2">Adresse de facturation</p>
          <tr>
            <th>Destinataire</th>
            <td>{{adresfact[0].destinataire}}</td>
          </tr>
          <tr>
            <th>Adresse</th>
            <td>{{adresfact[0].rue}} {{adresfact[0].numero}}</td>
          </tr>
          <tr>
            <th>Npa/Localité</th>
            <td>{{adresfact[0].npa}} {{adresfact[0].localite}}</td>
          </tr>
          <tr>
            <th>Pays</th>
            <td>{{adresfact[0].pays}}</td>
          </tr>
        </table>
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Informations de commande</h4>
        <hr>
        <table>
          <p class="mt-2 mb-2">Adresse de livraison</p>
          <tr>
            <th>Date de commande</th>
            <td>2 Juin 2019</td>
          </tr>
          <tr>
            <th>Moyen de paiement</th>
            <td>Facture</td>
          </tr>
          <tr>
            <th>Numéro de commande</th>
            <td>AJS23GH</td>
          </tr>
          <tr>
            <th>Date de réception</th>
            <td>10.06-15.06</td>
          </tr>
        </table>
      </div>
    </div>
    <h4>Résumé de la commande</h4>
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
          <!-- <tr v-for="produit in produits"> -->
          <tr>
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
                  <p class="card-title">nom</p>
                  <p class="card-title">domaine</p>
                  <p class="card-text">millesime</p>
                  <p class="card-text">region</p>
                  <p class="card-text">pays</p>
                  <p class="card-text">prix</p>
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
          <td>Sout total</td>
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
    </div>
    <div>
      <a href="paiement-etape4" ><button class="btn btn-danger btn-panier center mb-5 mt-5">Passer commande</button></a>
    </div>
  </div>
</template>

<script>

export default{

  props: ["adresfact", "adreslivr", "lastcmd"],
  

}
</script>