<template>  
<div id="carteContainer" class="container carteContainer">
  <h3 class="padding-mob">Nos suggestions</h3>
  <hr>
<div v-for="vin in vins.slice(9,13)" :key="vin.id" class="card card-custom" v-bind:class="[visibleClass]" v-bind:data-nom='vin.nom' v-bind:data-type='vin.types[0].type' v-bind:data-pays='vin.regn.pays.nom' v-bind:data-region='vin.regn.nom' v-bind:data-appel='vin.appel.libelle' v-bind:data-millesime='vin.millesime' v-bind:data-produ='vin.produ.nom' v-bind:data-format='vin.frmt.quantite' v-bind:data-prix='vin.prix.prixht'> 
       <div class="container">
     <a v-bind:href="'/produit/'+ vin.id">   
    <img v-bind:src="vin.photoUrl" class="card-img-top center" v-bind:alt="'vin1'+vin.id">
    </a>
    </div>
    <div id="carteproduit" class="center">
      <div v-for="value in vin.types">
         <h6 class="card-title" id="nom-carte">
              <div class="container p-0">
                <div class="row" id="title-position">
                  <div class="col-1 pr-3 pl-2">
                      <svg height="20" width="20">
                        <circle v-bind:class="'type-circle-'+ value.id" cx="10" cy="10" r="5" stroke="black" stroke-width="0.3"  />
                      </svg>
                      <div v-if=vin.estBio>
                      <img src="/images/icons/bio.svg" style="width : 20px;" alt="bio"/>
                      </div>
                  </div>
                  <div class="col pr-2 pl-2 vin-titre">
                        <h6 class="mb-0">{{vin.nom}}</h6>
                  </div>
                </div>
              </div>
            </h6>
      </div>
    <hr class="m-0">
    <div id="card-body">
      <h6  class="card-text m-0" id="millesime-carte">{{vin.frmt.quantite}}</h6>
      <div class="check-full" v-if="vin.millesime > 1">
      <h6  class="card-text" id="millesime-carte">{{vin.millesime}}</h6>
      </div>
      <div class="check-full" v-else>
      <h6  class="card-text" id="millesime-carte"> - </h6>
      </div>
      <h6  class="card-text" id="produ-carte">{{vin.produ.nom}}</h6>
      </div>
      </div>
    </div>
    </div>
</template>
<script>
var numeral = require("numeral");

  Vue.filter("formatNumber", function (value) {
    return numeral(value).format("0.00"); // displaying other groupings/separators is possible, look at the docs
  });
export default {
  props: ['vins', 'prixttc', 'prixeuro', 'pourcentagePromo'],

    data(){
        return{
          visibleClass: 'visible',
          vin:'',
        }
     },
}
</script>