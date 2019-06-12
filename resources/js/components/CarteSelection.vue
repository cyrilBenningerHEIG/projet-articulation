<template>
    <div class="container">
        <div>
            <h3 class="text-center">NOTRE SÉLECTION<hr></h3>
        </div>
       <div class="container" >
  <div class="row">
      <div class="card card-custom col" v-for="vin in vins.slice(7,11)" :key=vin.id>
        <div class="">

          <a v-bind:href="'produit/'+ vin.id"> 
          <img v-bind:src="vin.photoUrl"  v-bind:alt="'vin1'+vin.id" class="card-img-top center">
          </a>
        </div>
        <div id="carteproduit" class="center">
          <div v-for="value in vin.types">
            <h6 class="card-title" id="nom-carte">
              <div class="container p-0">
                <div class="row" id="title-position">
                  <div class="col-1 pl-1 pr-1">
                      <svg height="20" width="20">
                        <circle v-bind:class="'type-circle-'+ value.id" cx="10" cy="10" r="5" stroke="black" stroke-width="0.3"  />
                      </svg>
                  </div>
                  <div class="col pr-2 pl-2 vin-titre">
                        {{vin.nom}} - {{vin.millesime}}
                  </div>
                </div>
              </div>
            </h6>
          </div>
          <hr class="m-0">
      <div id="card-body">
      <div class="check-full" v-if="vin.millesime > 1">
      <h6  class="card-text" id="millesime-carte">{{vin.millesime}}</h6>
      </div>
      <div class="check-full" v-else>
      <h6  class="card-text" id="millesime-carte"> - </h6>
      </div>
      <h6  class="card-text" id="produ-carte">{{vin.produ.nom}}</h6>
      <h6  class="card-text" id="prix-carte">CHF {{vin.prix.prixht}} </h6>
      </div> 
      </div>
    </div>
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
  props: ['vins'],

    data(){
        return{
          vin:'',
        }
     },
}
</script>