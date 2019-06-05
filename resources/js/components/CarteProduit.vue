<template>  
<div class="container">
<div class="card card-custom" v-for="vin in vins" :key=vin.id> 
     <a v-bind:href="'produit/'+ vin.id">   
    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="card-img-top" alt="vin1">
    </a>
    <div class="card-body" id="weekproduct">
    <h6 class="card-title">{{vin.nom}}</h6>
      <p class="card-text">{{vin.millesime}}</p>
      <p class="card-text">{{vin.produ.nom}}</p>
      <p class="card-text">{{prixttc}}</p>
      
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
