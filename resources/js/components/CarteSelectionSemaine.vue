<template>  
<div class="container" >
      <div class="card card-custom" v-for="vin in 5" :key=vin.id>
        <a v-bind:href="'produit/'+ vin.id"> 
       <img src="images/illustrations/bottle.png" class="card-img-top" alt="vin1">
    </a>
    <div class="card-body" id="weekproduct">
      <h5 class="card-title">{{vin.nom}}</h5>
      <p class="card-text">{{vin.millesime}}</p>
    </div>
  </div>
  </div>
</template>
<script>
export default {
  props: ['vins'],

    data(){
        return{
          vin:'',
        }
     },
}
</script>

