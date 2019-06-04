<template>  
<div class="container" >
      <div class="card card-custom" v-for="vin in vins" :key=vin.id>
        <a v-bind:href="'produit/'+ vin.id"> 
    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="card-img-top" alt="vin1">
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
           limit: 5 // or any number you wish to limit to
        }
     },
     computed:{
  computedObj(){
    return this.limit ? this.object.slice(0,this.limit) : this.object
  }
},
}
</script>

