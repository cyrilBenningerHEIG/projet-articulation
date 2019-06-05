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

          <div class="mt-4 mb-4">
            <label class="mr-4 my-auto label-produits">QUANTITÉS : </label>
                <div class="input-group" id="btn-quantity">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-outline-secondary btn-sm" data-type="minus" data-field="">
                          <span class="glyphicon glyphicon-minus">-</span>
                        </button>
                      </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number form-control-sm quantity-bar" value="1" min="1" max="20">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-outline-secondary btn-sm" data-type="plus" data-field="">
                            <span class="glyphicon glyphicon-plus">+</span>
                        </button>
                      </span>                  
                </div>
          </div>
          <button type="button" class="btn btn-outline-danger btn-xl btn-basket"><span class="icon"></span><span>Ajouter au panier</span></button>
        </div>
      </div>
    </div>
          <div class="row">
  <div class="col-4">
    <div class="nav flex-column nav-pills text-info" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link text-right pills active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Description</a>
      <a class="nav-link text-right pills" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Informations</a>
      <a class="nav-link text-right pills" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Régions</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active text-justify" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</p></div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        
        <table class="p table">
          <tr>
            <td>Teneur en alcool</td>
            <td>13.5°</td>
          </tr>
          <tr>
            <td>Cotation</td>
            <td>WeinWisser : 18/20</td>
          </tr>
          <tr>
            <td>Classement</td>
            <td>Cru Bourgeois supérieur</td>
          </tr>
          <tr>
            <td>Apogée</td>
            <td>2022 - 2038</td>
          </tr>
          <tr>
            <td>Producteur</td>
            <td>Château Cambon la Pelouse</td>
          </tr>
          <tr>
            <td>Cépage(s)</td>
            <td>53% Merlot, 32.7% Cabernet Sauvignon, 12.3% Cabernet Franc, 2% Petit Verdot</td>
          </tr>
          <tr>
            <td>Type</td>
            <td>Vin rouge</td>
          </tr>
          <tr>
            <td>Pays</td>
            <td>France</td>
          </tr>
          <tr>
            <td>Région</td>
            <td>Bordeaux</td>
          </tr>
        </table>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><div id="mapid"></div></div>
    </div>
  </div>
</div>
    </section>
</template>