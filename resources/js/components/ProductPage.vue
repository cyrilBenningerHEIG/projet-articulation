<template>
  <section>
    <div class="roadMap">
      <span>
        <a href="#">PRODUITS</a>
        <img class="arrow" src="images/arrow.svg">
        <a href="#">VIN ROUGE</a>
      </span>
    </div>

    <div class="container p-4">
      <div class="row">
        <div class="col">
          <img class="bottleImg" src="images/bottle.png">
        </div>
        <div class="col mt-5">
          <div>
            <h3>Château Cambon la Pelouse - 2015</h3>
            <span> </span>
            <h5 class="mt-3 mb-3 price-font">CHF <b>17.40  </b><i class="price-ht-font">(<span>13</span> CHF hors TVA)</i></h5>
       
            <span> </span>
            <span> </span>
            <p class="font-weight-light mt-2 mb-2 article-font"> Numéro d'article : HFIWOMSH</p>
          </div>
              <br>
          
          <div class="mt-4 mb-4">
            <label class="label-produits">TAILLE :</label> 
            <div>
              <a href="#" class="btn btn-outline-secondary btn-sm disabled" role="button" aria-disabled="true">37.5 cl</a>
              <a href="#" class="btn btn-outline-secondary btn-sm active" role="button" aria-disabled="true">50 cl</a>
              <a href="#" class="btn btn-outline-secondary btn-sm disabled" role="button" aria-disabled="true">75 cl</a>
            </div>
          </div>

          <div class="mt-4 mb-4">
            <label class="label-produits">VARIANTES :</label> 
            <div>
              <a href="#" class="btn btn-outline-secondary btn-sm disabled" role="button" aria-disabled="true">2012</a>
              <a href="#" class="btn btn-outline-secondary btn-sm active" role="button" aria-disabled="true">2015</a>
              <a href="#" class="btn btn-outline-secondary btn-sm disabled" role="button" aria-disabled="true">2017</a>
              </div>
          </div>
        </div>
       </div>
    </div>
        
  <div class="containe">
    <div class="container" v-for="vin in vins" :key="vin.id">
      
        <div class="roadMap">
          <span>
            <a href="#">PRODUITS</a>
            <img class="arrow" src="/public/images/icons/arrow.svg">
            <a href="#">VIN ROUGE</a>
          </span>
        </div>

        <div class="container p-4">
          <div class="row">
            <div class="col">
              <img class="bottleImg" src="images/illustrations/bottle.png">
            </div>
            <div class="col mt-5">
              <div>
                <h3>{{vin.nom}} - {{vin.millesime}}</h3>
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
            
              <br>
              </div>

          <div class="mt-4 mb-4">
            <label class="mr-4 my-auto label-produits">QUANTITÉS : </label>
              <div class="mt-4 mb-4">
                <label>TAILLE :</label>
                <div>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm disabled"
                    role="button"
                    aria-disabled="true"
                  >37.5 cl</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm active"
                    role="button"
                    aria-disabled="true"
                  >50 cl</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm disabled"
                    role="button"
                    aria-disabled="true"
                  >75 cl</a>
                </div>
              </div>

              <div class="mt-4 mb-4">
                <label>VARIANTES :</label>
                <div>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm disabled"
                    role="button"
                    aria-disabled="true"
                  >2012</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm active"
                    role="button"
                    aria-disabled="true"
                  >2015</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm disabled"
                    role="button"
                    aria-disabled="true"
                  >2017</a>
                </div>
              </div>

              <div class="mt-4 mb-4">
                <label class="mr-4 my-auto">QUANTITÉS :</label>
                <div class="input-group" id="btn-quantity">
                  <span class="input-group-btn">
                    <button
                      type="button"
                      class="quantity-left-minus btn btn-outline-secondary btn-sm"
                      data-type="minus"
                      data-field
                    >
                      <span class="glyphicon glyphicon-minus">-</span>
                    </button>
                  </span>
                  <input
                    type="text"
                    id="quantity"
                    name="quantity"
                    class="form-control input-number form-control-sm quantity-bar"
                    value="1"
                    min="1"
                    max="20"
                  >
                  <span class="input-group-btn">
                    <button
                      type="button"
                      class="quantity-right-plus btn btn-outline-secondary btn-sm"
                      data-type="plus"
                      data-field
                    >
                      <span class="glyphicon glyphicon-plus">+</span>
                    </button>
                  </span>
                </div>
              </div>
              <button type="button" class="btn btn-outline-danger btn-xl btn-basket">
                <span class="icon"></span>
                <span>Ajouter au panier</span>
              </button>
            </div>
          </div>
        </div>
        <div class="row">
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
                    <td>Teneur en alcool</td>
                    <td>{{vin.alcool}}</td>
                  </tr>
                  <tr>
                    <td>Cotation</td>
                    <td>{{vin.cotation}}</td>
                  </tr>
                  <tr>
                    <td>Classement</td>
                    <td>{{vin.classement}}</td>
                  </tr>
                  <tr>
                    <td>Apogée</td>
                    <td>{{vin.apogee}}</td>
                  </tr>
                  <tr>
                    <td>Producteur</td>
                    <td>{{vin.produ.nom}}</td>
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
      </div>
  </div>
</template>
<script>

export default {
  
  props: ["vins","prixttc", "prixeuro"],
  
  data() {
    return {
      vin: '',
    };
  }

};
</script>