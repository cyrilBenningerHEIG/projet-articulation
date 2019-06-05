<template>  
<div class="container">
<div class="card card-custom" v-for="vin in vins" :key=vin.id> 
       <div class="container">

     <a v-bind:href="'produit/'+ vin.id">   
    <img src="/public/images/bottle.png" class="card-img-top" alt="vin1">
    </a>
    </div>
    <div class="container" id="carteproduit">
    <h6 class="card-title" id="nom-carte">{{vin.nom}}</h6>
    <hr>
    <div class="card-body">
      <h6  class="card-text" id="millesime-carte">{{vin.millesime}}</h6>
      <h6  class="card-text" id="produ-carte">{{vin.produ.nom}}</h6>
      <h6  class="card-text" id="prix-carte">CHF {{vin.prix.prixht}} </h6>
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
