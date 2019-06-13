<template>
  <section>      
  <div class="container">
    <div class="container" v-for="vin in vins" >
        <div class="roadMap pt-2 pb-5">
          <span>
            <a href="../produits" class="produit-liens"><b>PRODUITS</b></a>
            <img class="arrow" src="/images/icons/arrow.svg">
            <a href="#produit" class="produit-liens"><b>{{vin.nom}}</b></a>
          </span>
        </div>

        <div class="container p-4">
          <div class="row">
            <div class="col">
              <img class="bottleImg center-mob" id="produit" v-bind:src="vin.photoUrl">
            </div>
          <div class="col mt-4 mb-4">
              <div v-if="vin.millesime">
                <h3> {{vin.nom}} <span>- {{vin.millesime}}</span></h3>
                <span></span>
              </div>
                 <div v-else>
                <h3> {{vin.nom}} <span> </span></h3>
                <span></span>
                </div>
                <h5 v-if="vin.prix.prixPromo" class="mt-3 mb-3 price-font">   
                  <b v-if="unchecked ==true">{{prixpromoeuro | formatNumber}} €</b>
                  <b v-else>CHF {{vin.prix.prixPromo | formatNumber}}</b>
                  <b style="font-size:80%; text-decoration: line-through; text-decoration-color:red" v-if="unchecked ==true">{{prixeurottc}} €</b>
                  <b style="font-size: 80%; text-decoration: line-through; text-decoration-color:red" v-else>CHF {{vin.prix.prixht}}</b><b style="color:red; padding-left:5px">-{{pourcentagepromo}}%</b> 

                  <i class="price-ht-font">
                    <span></span> 
                  </i>
                </h5>
                 <h5 v-else class="mt-3 mb-3 price-font">    
                  <b v-if="unchecked ==true">{{prixeurottc | formatNumber}} €</b>
                  <b v-else>CHF {{prixttc| formatNumber}}</b>
                  <i class="price-ht-font">
                    <span v-if="unchecked ==true">({{prixeuro  | formatNumber}} € hors TVA)</span>
                    <span v-else>({{vin.prix.prixht  | formatNumber}}  CHF hors TVA)</span> 
                  </i>
                </h5>
                <!-- <h5 class="mt-3 mb-3 price-font">
                  CHF 
                  <b v-if="vin.prix.promops">{{vin.prix.prixPromo}}</b>
                  <b v-else >{{prixttc}}</b>
                  <i class="price-ht-font">
                    (<span>{{vin.prix.prixht}}</span> CHF hors TVA)
                  </i>
                </h5> -->
                <div>
                    <b-form-checkbox v-model="unchecked" name="check-button" switch>
                      Prix euro <b></b>
                    </b-form-checkbox>
                </div>

                <span></span>
                <span></span>
                <p class="font-weight-light mt-2 mb-2 article-font">Numéro d'article : {{vin.id}}</p>

              <div class="mt-4 mb-4">
                <label>TAILLE : </label><span> {{vin.frmt.quantite}}</span>
                <div>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm"
                    role="button"
                    aria-disabled="true"
                  >37.5 cl</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm active "
                    role="button"
                    aria-disabled="true"
                  >{{vin.frmt.quantite}}</a>
                </div>
              </div>

              <div class="mt-4 mb-4">
                <label>VARIANTES : </label><span> {{vin.millesime}}</span>
                <div>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm"
                    role="button"
                    aria-disabled="true"
                  >2012</a>
                  <a
                    href="#"
                    class="btn btn-outline-secondary btn-sm active"
                    role="button"
                    aria-disabled="true"
                  >{{vin.millesime}}</a>
                </div>
              </div>

              <div class="mt-4 mb-4">
                <label class="mr-4 my-auto">Nombre de boîte : </label>
                <div class="container">
                  <div class="row">
                    <div class="col-3 pl-0 col-produit-mob">
                        <div class="input-group" id="btn-quantity">
                          <span class="input-group-btn">
                            <button type="button" @click="decrement()" class="quantity-left-minus btn btn-outline-secondary btn-sm" >
                              <span class="glyphicon glyphicon-minus">-</span>
                            </button>
                          </span>
                          <input type="text"  class="form-control input-number form-control-sm quantity-bar"  :value="quantite" min="1" max="20">
                          <span class="input-group-btn">
                            <button type="button" @click="increment()" class="quantity-right-plus btn btn-outline-secondary btn-sm" >
                              <span class="glyphicon glyphicon-plus">+</span>
                            </button>
                          </span>
                        </div>
                    </div>
                    <div class="col col-box-mob">
                      <span><img class="icon mr-3" id="icon_box" src="/images/icons/box.svg">{{vin.condi.nombre}} bouteille par boîte ({{vin.condi.type}})</span>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-outline-danger btn-xl btn-basket" @click="addCart">
                <span class="icon"></span>
                <span id="addcarttext">Ajouter au panier</span>
              </button>
            </div>
          </div>
        </div>
        <br>
        <div class="row mb-5" id="map-desk" >
          <div class="col-4">
            <div class="nav flex-column nav-pills text-info" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link text-right pills active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"
              >Description</a>
              <a class="nav-link text-right pills" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"
              >Informations</a>
              <a class="nav-link text-right pills" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" v-on:click="generateMap"
              >Région</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active text-justify" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>{{vin.description}}</p>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <table class="p table">
                <tr>
                    <td>Appellation</td>
                    <td>{{vin.appel.libelle}}</td>
                  </tr>
                  <tr>
                    <td>Teneur en alcool</td>
                    <td>{{vin.alcool}}</td>
                  </tr>
                  <tr>
                    <td>Cotation</td>
                    <div v-if="vin.cotation">
                    <td>{{vin.cotation}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Classement</td>
                    <div v-if="vin.classement">
                    <td>{{vin.classement}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Apogée</td>
                    <div v-if="vin.apogee">
                    <td>{{vin.apogee}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Producteur</td>
                    <a v-bind:href="vin.produ.url" target="_blank"> 
                    <td id="a-producteur" >{{vin.produ.nom}}</td>
                    </a> 
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
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div id="mapid"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="accordion" id="accordionExample">
          <!-- Version Mobile -->
        <div class="container" id="map-mob" v-for="vin in vins" >
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <b>Description</b> 
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                  <p class="text-justify">{{vin.description}}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <b>Informations</b> 
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <table class="p table">
                <tr>
                    <td>Appellation</td>
                    <td>{{vin.appel.libelle}}</td>
                  </tr>
                  <tr>
                    <td>Teneur en alcool</td>
                    <td>{{vin.alcool}}</td>
                  </tr>
                  <tr>
                    <td>Cotation</td>
                    <div v-if="vin.cotation">
                    <td>{{vin.cotation}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Classement</td>
                    <div v-if="vin.classement">
                    <td>{{vin.classement}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Apogée</td>
                    <div v-if="vin.apogee">
                    <td>{{vin.apogee}}</td>
                    </div>
                    <div v-else>
                    <td>-</td>
                    </div>
                  </tr>
                  <tr>
                    <td>Producteur</td>
                    <a v-bind:href="vin.produ.url" target="_blank"> 
                    <td id="a-producteur" >{{vin.produ.nom}}</td>
                    </a> 
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
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <b>Région</b> 
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div id="mapid"></div>
              </div>
            </div>
        </div>
      </div>
    </div>
      </section>
</template>
<script>
//Formating prices
var numeral = require("numeral");

  Vue.filter("formatNumber", function (value) {
    return numeral(value).format("0.00"); // displaying other groupings/separators is possible, look at the docs
  });


// import {LMap, LTileLayer, LIcon, LMarker} from 'vue2-leaflet';
import L from 'leaflet';
import { Icon } from 'leaflet';

 export default {
  
  props: ["vins","prixttc", "prixeuro", "prixeurottc", "vinid", "prixpromoeuro", "pourcentagepromo", "lat", "long"],

   data() {
    return {
      vin: '',
      vinCarts: [],
      quantite: 1,
      unchecked:false,
      lat: 0,
    };
  },

  methods: {
    generateMap() {
        var map = L.map('mapid').setView([this.lat, this.long], 8.5);

      L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
      attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
      maxZoom: 7
      }).addTo(map);

      $("a[href='#v-pills-messages']").on('shown.bs.tab', function(e) {
        map.invalidateSize();
      });

      var blackIcon = new L.Icon({
          iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-black.png',
          shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
          iconSize: [25, 41],
          iconAnchor: [12, 41],
          popupAnchor: [1, -34],
          shadowSize: [41, 41]
      });

      L.marker([this.lat, this.long], { icon: blackIcon }).addTo(map);
    },

    addCart() {
      $("#addcarttext").text("Ajouté au panier ✓");
      $('.btn-basket').css('border','5px solid green');
      $('.btn-basket').css('background-color','green');
      $('.btn-outline-danger:focus').css('box-shadow','0 0 0 0.2rem rgba(0, 153, 0, 0.2)');
      var entry = {vin:this.vins[this.vinid-1], quantity:this.quantite}
      localStorage.setItem("entry", JSON.stringify(entry))
      this.vinCarts.push(entry)
      localStorage.setItem("vinCarts", JSON.stringify(this.vinCarts));
    },
    increment () {
      this.quantite++
    },
    decrement () {
      if(this.quantite === 1) {
        alert('Negative quantity not allowed')
      } else {
        this.quantite--
      }
    },
    
    

  },
  mounted() {
    this.vinCarts = JSON.parse(localStorage.getItem("vinCarts"));
    if( this.vinCarts == null)  this.vinCarts = [];
  },


}

</script>

