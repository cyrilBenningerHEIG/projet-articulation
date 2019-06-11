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
      
        $('.card-custom').each(function(){
          var nbAttributs = 0;
          var type = this.dataset.type;
          var pays = this.dataset.pays;
          var region = this.dataset.region;
          var appel = this.dataset.appel;
          var millesime = this.dataset.millesime;
          var produ = this.dataset.produ;
          var format = this.dataset.format;

          filters.forEach(function(filter) {

            if(filter == type){
              nbAttributs++;
            }
            if(filter == pays){
              nbAttributs++;
            }
            if(filter == region){
              nbAttributs++;
            }
            if(filter == appel){
              nbAttributs++;
            }
            if(filter == millesime){
              nbAttributs++;
            }
            if(filter == produ){
              nbAttributs++;
            }
            if(filter == format){
              nbAttributs++;
            }
            });

          console.log(nbAttributs);
          
          if(nbAttributs >= filters.length){
            $(this).addClass("visible").fadeIn();
          }
      });

      if(filters.length == 0){
        $('.card-custom').addClass("visible").fadeIn();
      };

      var nbResults = $('.card-custom.visible').length;
      $('.number_results').text(nbResults + ' résultats');
  },
}
}
</script>