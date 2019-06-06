 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Paiement en ligne</h4>
        <hr>
        <p class="text-justify small-text">Vous allez être redirigié vers la page de paiement sécurisé Ogone pour confirmer votre commande et votre paiement</p>
        <div class="row">
            <div class="col cartes-img"><img class="img-fluid" :src="'images/carteCredits/PostFinance.png'"></div>
            <div class="col cartes-img "><img class="img-fluid" :src="'images/carteCredits/e-finance.png'"></div>
            <div class="w-100"></div>

            <div class="col cartes-img"><img class="img-fluid" :src="'images/carteCredits/visa.png'"></div>
            <div class="col cartes-img"><img class="img-fluid" :src="'images/carteCredits/mastercard.png'"></div>
        </div>
      </div>
      
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Facture</h4>
        <hr>
          <p class="text-justify small-text">Clients existants et commandes primeurs : Vous recevez une facture payable à 30 jours</p>
          <p class="text-justify small-text">Nouveaux clients : paiement sur facture avant livraison</p>
        <form class="mr-5 ml-5">
        
          <div class="form-group mt-4 mb-5">
            <button
              type="submit"
              class="btn btn-outline-danger btn-outline-form btn-block"
            >Envoie par la post</button>
            <p class="text-justify small-text">Envoie par poste une facture</p>
          </div>
          <div class="form-group mt-5 mb-5">
            <a href="paiement-etape3" class="p">
              <button class="btn btn-danger btn-block">Envoie par e-mail</button>
            </a>
            <p class="text-justify small-text">SAVE THE PLANET: envoie facture par e-mail</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>