<template>
<div>
  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div id="filters" class="filters mx-auto">
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
          <div id="typeList" class="container" v-for="t in types">
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{t.type}}</a>
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
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{value.nom}}</a>
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
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{value.nom}}</a>
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
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{value.libelle}}</a>
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
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{value.millesime}}</a>
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
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{value.nom}}</a>
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
              <a class="dropdown-item" v-on:click="filter"><input type="checkbox"/>{{value.quantite}}</a>
            </div>
            </div>
        </div>
        <div class="container">
          <div id="tri-produit" class="row">
            <div class="col-sm">
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
            <div class="col-sm">
              <p class="number_results">{{nbvins}} résultats</p>
            </div>
            <div class="col-sm">
              <div class="btn-group" role="group">
                <button
                  id="tri-btn"
                  type="button"
                  class="btn btn-white dropdown-toggle btn-filter"
                  data-toggle="dropdown"
                  aria-haspopup="false"
                  aria-expanded="true"
                >Tri</button>
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
      </div>
    </div>
    <hr class="mt-0">
  </div>
  </div>
  </div>
</template>
<script>

export default {
  props: ['types', 'pays', 'regns', 'appels', 'produs', 'frmts', 'millesimes', 'nbvins'],

    data(){
        return{
          type:'',
          pays:'',
          regn:'',
          appel:'',
          produ:'',
          frmt:'',
        }
     },

  updated:function() {
    console.log("change");
  },

  methods:{

    filter:function(){
      //Ajout de tous les filtres dans un tableau
      $('.card-custom').removeClass("visible").hide();
      var filters = [];
      $('#filters :input:checked').each(function(){
        var category= $(this).parent().text();
        console.log(category);
        filters.push(category); 
        console.log(filters);
      });

      //Sélection des vins correspondants
      filters.forEach(function(filter) {
        $('.card-custom').each(function(){

          var nbAttributs = 0;

          if(filter == this.dataset.type){
            $(this).addClass("visible");
          }
          if(filter == this.dataset.pays){
            $(this).addClass("visible");
          }
          if(filter == this.dataset.region){
            $(this).addClass("visible");
          }
          if(filter == this.dataset.appel){
            $(this).addClass("visible");
          }
          if(filter == this.dataset.millesime){
            $(this).addClass("visible");
          }
          if(filter == this.dataset.produ){
            $(this).addClass("visible");
          }
          if(filter == this.dataset.format){
            $(this).addClass("visible");
          }
        });

        $('.visible').fadeIn();
      });

      if(filters.length == 0){
        $('.card-custom').addClass("visible").fadeIn();
      };

      var nbResults = $('.card-custom.visible').length;
      console.log(nbResults);
      $('.number_results').text(nbResults + ' résultats');
  },

    filterPays:function(){
      //Pays
      var filter = $(event.target).text();
      $('#type-btn').text(filter);
      $('.card-custom').each(function() {
        $(this).removeClass("visible").hide();
        var type = this.dataset.type;
        if (type == filter){
          $(this).addClass("visible").fadeIn();
        };
      });
    },

    filterRegn:function(){
      //Région
      var filter = $(event.target).text();
      $('#region-btn').text(filter);
      $('.card-custom.visible').each(function() {
        $(this).removeClass("visible").hide();
        var region = this.dataset.region;
        if (region == filter){
          $(this).addClass("visible").show();
        };
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