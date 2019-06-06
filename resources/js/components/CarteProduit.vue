<template>  
<div class="container">
<div class="card card-custom" v-for="vin in vins" :key=vin.id> 
       <div class="container">

     <a v-bind:href="'produit/'+ vin.id">   
    <img src="/public/images/bottle.png" class="card-img-top" alt="vin1">
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
