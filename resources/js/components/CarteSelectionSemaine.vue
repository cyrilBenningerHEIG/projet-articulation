<template>  
<div class="container" >
  <div class="row">
      <div class="card card-custom col" v-for="vin in vins.slice(0,4)" :key=vin.id>
        <div class="">

          <a v-bind:href="'produit/'+ vin.id"> 
          <img v-bind:src="vin.photoUrl" class="card-img-top center" alt="vin1">
          </a>
        </div>
        <div id="carteproduit" class="center">
          <div v-for="value in vin.types">
            <h6 class="card-title" id="nom-carte">
              <div class="container">
                <div class="row">
                  <div class="col-1 pl-1 pr-1">
                      <svg height="20" width="20">
                        <circle v-bind:class="'type-circle-'+ value.id" cx="10" cy="10" r="5" stroke="black" stroke-width="0.3"  />
                      </svg>
                  </div>
                  <div class="col-11 pr-1 pl-1 vin-titre">
                        {{vin.nom}} - {{vin.millesime}}
                  </div>
                </div>
              </div>
            </h6>
          </div>
      </div>
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

