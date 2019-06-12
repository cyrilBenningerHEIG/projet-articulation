<template>
<div>
  <div class="container">
    <div class="row mt-5 mb-5 justify-content-center">
      <div class="filters mx-auto">
        <div class="btn-group" role="group">
          <button
            id="type-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Type</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="typeList" class="container" v-for="value in types">
            <a class="dropdown-item" v-on:click="filterType"><input type="checkbox"/>{{value.type}}</a>
            </div>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="pays-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Pays</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="paysList" class="container" v-for="value in pays">
            <a class="dropdown-item" v-on:click="filterPays">{{value.nom}}</a>
            </div>
            </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="region-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Régions</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="rgnList" class="container" v-for="value in regns">
            <a class="dropdown-item" v-on:click="filterRegn">{{value.nom}}</a>
            </div>
            </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="appel-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Appellation</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="appelList" class="container" v-for="value in appels">
            <a class="dropdown-item" v-on:click="filterAppel">{{value.libelle}}</a>
            </div>
            </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="millesime-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
            value="Millésime"
          >Millésime</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="milleList" class="container" v-for="value in millesimes">
            <a id="milleOption" class="dropdown-item" v-on:click="filterMille">{{value.millesime}}</a>
            </div>
            </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="produ-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Producteur</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="produList" class="container" v-for="value in produs">
            <a class="dropdown-item" v-on:click="filterProdu">{{value.nom}}</a>
            </div>
            </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="format-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Format</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <div id="frmtList" class="container" v-for="value in frmts">
            <a class="dropdown-item" v-on:click="filterFormat">{{value.quantite}}</a>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    <div class="d-flex justify-content-between pt-5">
      <div>
          <a class="icon_display" id="icon_display2" href="#">
            <img src="images/icons/display2.svg">
          </a>
          <a class="icon_display" id="icon_display3" href="#">
            <img src="images/icons/display3.svg">
          </a>
          <a class="icon_display" id="icon_display4" href="#">
            <img src="images/icons/display4.svg">
          </a>
      </div>
      <div><p class="number_results">{{nbvins}} résultats</p></div>
      <div>
        <div class="btn-group" role="group">
          <button id="tri-btn" type="button" class="btn btn-white dropdown-toggle btn-filter" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Tri</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item">Nom A-Z</a>
              <a class="dropdown-item">Nom Z-A</a>
              <a class="dropdown-item">Prix croissant</a>
              <a class="dropdown-item">Prix décroissant</a>
              <a class="dropdown-item">Age croissant</a>
              <a class="dropdown-item">Age décroissant</a>
            </div>
        </div>
      </div>
    </div>
    <hr class="mt-0">
  </div>
</template>
<script>

export default {
  props: ['types', 'pays', 'regns', 'appels', 'produs', 'frmts', 'millesimes', 'nbvins', 'filters'],

    data(){
        return{
          type:'',
          pays:'',
          regn:'',
          appel:'',
          produ:'',
          frmt:'',
          filters:'',
        }
     },

     methods:{

    // filterType:function(filters){
      
      //Type
//       var type = $(event.target).text();
//       filters[0].push(type);
//       console.log(filters);
//       var filters_array = filters
//       $('#pays-btn').text(type);
//       $('.card-custom').each(function(filters_array) {
//         $(this).hide();
//         filters_array.forEach(function(value) {
//        $("*[data-type='" + this.value[i] + "']").show();
// });
      // });
    // },

    filterPays:function(){
      //Pays
      var pays = $(event.target).text();
      console.log(pays);
      $('#pays-btn').text(pays);
      $('.card-custom').each(function() {
        $(this).hide();
        $("*[data-pays='" + pays + "']").show();
      });
    },

    filterRegn:function(){
      //Région
      var regn = $(event.target).text();
      console.log(regn);
      $('#region-btn').text(regn);
      $('.card-custom').each(function() {
        $(this).hide();
        $("*[data-region='" + regn + "']").show();
      });
    },

    filterAppel:function(){
      //Appellation
      var appel = $(event.target).text();
      $('#appel-btn').text(appel);
      $('.card-custom').each(function() {
        $(this).hide();
        $("*[data-appel='" + appel + "']").show();
      });
    },

    filterMille:function(){
      //Millesime
      var mille = $(event.target).text();
      $('#millesime-btn').text(mille);
      $('.card-custom').each(function() {
        $(this).hide();
        $("*[data-millesime='" + mille + "']").show();
      });
    },

    filterProdu:function(){
      //Producteur
      var produ = $(event.target).text();
      $('#produ-btn').text(produ);
      $('.card-custom').each(function() {
        $(this).hide();
        $("*[data-produ='" + produ + "']").show();
      });
    },

    filterFormat:function(){
      //Format
      var format = $(event.target).text();
      $('#format-btn').text(format);
      $('.card-custom').each(function() {
        $(this).hide();
        $("*[data-format='" + format + "']").show();

        //your_data_attribute_value.split(" ");
      });
    },

  },
}
</script>