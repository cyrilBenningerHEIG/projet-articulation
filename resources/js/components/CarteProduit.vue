<template>  
<div id="carteContainer" class="container carteContainer">
<div v-for="vin in vins" :key="vin.id" class="card card-custom" v-bind:data-type='vin.types[0].type' v-bind:data-pays='vin.regn.pays.nom' v-bind:data-region='vin.regn.nom' v-bind:data-appel='vin.appel.libelle' v-bind:data-millesime='vin.millesime' v-bind:data-produ='vin.produ.nom' v-bind:data-format='vin.frmt.quantite'> 
       <div class="container">

     <a v-bind:href="'produit/'+ vin.id">   
    <img src="images/illustrations/bottle.png" class="card-img-top" alt="vin1">
    </a>
    </div>
    <div class="container" id="carteproduit">
   
      <div v-for="value in vin.types">
         <h6 class="card-title" id="nom-carte">
      <svg height="20" width="20">
       <circle v-bind:class="'type-circle-'+ value.id" cx="10" cy="10" r="5" stroke="black" stroke-width="0.3"  />
       </svg>

       {{vin.nom}}</h6>
              </div>
    <hr>
    <div class="card-body">
      <div class="check-full" v-if="vin.millesime > 1">
      <h6  class="card-text" id="millesime-carte">{{vin.millesime}}</h6>
      </div>
      <div class="check-full" v-else>
      <h6  class="card-text" id="millesime-carte"></h6>
      </div>
      <h6  class="card-text" id="produ-carte">{{vin.produ.nom}}</h6>
      <h6  class="card-text" id="prix-carte">CHF {{vin.prix.prixht}} </h6>
      </div>
    </div>
    </div>
  </div>
  </div>
</template>
<script>
export default {
  props: ['vins', 'prixttc', 'prixeuro'],

    data(){
        return{
          vin:'',
        }
     },
}
</script>