<template>
<div>
  <div class="container center">
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
          <div  class="container" v-for="t in types">
              <label class="dropdown-item" ><input class="typeList" type="checkbox" v-on:click="filter"/>{{t.type}}</label>
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
              <label class="dropdown-item"><input class="paysList" type="checkbox" v-on:click="filter"/>{{value.nom}}</label>
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
              <label class="dropdown-item"><input class="regnList" type="checkbox" v-on:click="filter"/>{{value.nom}}</label>
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
              <label class="dropdown-item"><input class="appelList" type="checkbox" v-on:click="filter"/>{{value.libelle}}</label>
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
              <label class="dropdown-item"><input class="milleList" type="checkbox" v-on:click="filter"/>{{value.millesime}}</label>
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
              <label class="dropdown-item"><input class="produList" type="checkbox" v-on:click="filter"/>{{value.nom}}</label>
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
              <label class="dropdown-item"><input class="formatList" type="checkbox" v-on:click="filter"/>{{value.quantite}}</label>
            </div>
            </div> 
        </div>
        <div class="btn-group" role="group">
          <button type="button" class="close p-2" aria-label="Close" v-on:click="reset">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
            
        </div>
        <div class="container pt-3">
          <div id="tri-produit" class="row carte-row">
            <div class="col-sm">
              <h5 style="display:inline" class="number_results resultat-mob">Nous avons trouvé <b id="nbvins" class="resultat-mob">{{nbvins}}</b> </h5> <h5 style="display:inline" id="result_text" class="resultat-mob"> vins qui vous correspondent</h5>
            </div>
            <div class="col-sm text-right">
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
                  <a class="dropdown-item" v-on:click="sortByNameAZ">Nom A-Z</a>
                  <a class="dropdown-item" v-on:click="sortByNameZA">Nom Z-A</a>
                  <a class="dropdown-item" v-on:click="sortByPriceAsc">Prix croissant</a>
                  <a class="dropdown-item" v-on:click="sortByPriceDesc">Prix décroissant</a>
                  <a class="dropdown-item" v-on:click="sortByAgeAsc">Millésime croissant</a>
                  <a class="dropdown-item" v-on:click="sortByAgeDesc">Millésime décroissant</a>
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
      //Retour visuel quand un filtre d'une catégorie est sélectionné
        //Types
          var filtersType = [];
          $('.typeList:input:checked').each(function(){
            var type= $(this).parent().text();
            filtersType.push(type); 
          }); 

          if (filtersType.length == 0){
            $('#type-btn').css("font-weight","Normal");
          }else{
            $('#type-btn').css("font-weight","Bold");
          }

        //Pays
          var filtersPays = [];
          $('.paysList:input:checked').each(function(){
            var pays = $(this).parent().text();
            filtersPays.push(pays); 
          }); 

          if (filtersPays.length == 0){
            $('#pays-btn').css("font-weight","Normal");
          }else{
            $('#pays-btn').css("font-weight","Bold");
          }

        //Region
          var filtersRegn = [];
          $('.regnList:input:checked').each(function(){
            var regn= $(this).parent().text();
            filtersRegn.push(regn); 
          }); 

          if (filtersRegn.length == 0){
            $('#region-btn').css("font-weight","Normal");
          }else{
            $('#region-btn').css("font-weight","Bold");
          }

        //Appel
          var filtersAppel = [];
          $('.appelList:input:checked').each(function(){
            var appel= $(this).parent().text();
            filtersAppel.push(appel); 
          }); 

          if (filtersAppel.length == 0){
            $('#appel-btn').css("font-weight","Normal");
          }else{
            $('#appel-btn').css("font-weight","Bold");
          }

        //Millésime
          var filtersMille = [];
          $('.milleList:input:checked').each(function(){
            var mille= $(this).parent().text();
            filtersMille.push(mille); 
          }); 

          if (filtersMille.length == 0){
            $('#millesime-btn').css("font-weight","Normal");
          }else{
            $('#millesime-btn').css("font-weight","Bold");
          }

        //Produ 
          var filtersProdu = [];
          $('.produList:input:checked').each(function(){
            var produ= $(this).parent().text();
            filtersProdu.push(produ); 
          }); 

          if (filtersProdu.length == 0){
            $('#produ-btn').css("font-weight","Normal");
          }else{
            $('#produ-btn').css("font-weight","Bold");
          }

        //Format
          var filtersFormat = [];
          $('.formatList:input:checked').each(function(){
            var format= $(this).parent().text();
            filtersFormat.push(format); 
          }); 

          if (filtersFormat.length == 0){
            $('#format-btn').css("font-weight","Normal");
          }else{
            $('#format-btn').css("font-weight","Bold");
          }

          console.log(filtersType);
          console.log(filtersPays);
          console.log(filtersProdu);
          console.log(filtersAppel);
          console.log(filtersFormat);
          console.log(filtersMille);
          console.log(filtersRegn);
          var filtersArray =
            [filtersType,
            filtersPays,
            filtersRegn,
            filtersAppel,
            filtersMille,
            filtersProdu,
            filtersFormat];

            console.log(filtersArray);
      

      //Ajout de tous les filtres dans un tableau
      $('.card-custom').removeClass("visible").fadeOut();
      var filters = [];
      $('#filters :input:checked').each(function(){
        var category= $(this).parent().text();
        filters.push(category); 
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

            filtersType.forEach(function(filter){
              if(filter == type){
                nbAttributs++;
              }
            });
            
            filtersPays.forEach(function(filter){
              if(filter == pays){
                nbAttributs++;
              }
            });

            filtersRegn.forEach(function(filter){
              if(filter == region){
                nbAttributs++;
              }
            });

            filtersAppel.forEach(function(filter){
              if(filter == appel){
                nbAttributs++;
              }
            });

            filtersMille.forEach(function(filter){
              if(filter == millesime){
                nbAttributs++;
              }
            });

            filtersProdu.forEach(function(filter){
              if(filter == produ){
                nbAttributs++;
              }
            });

            filtersFormat.forEach(function(filter){
              if(filter == format){
                nbAttributs++;
              }
            });

            var countArrays = 0;
            filtersArray.forEach(function(filter){
              if(filter.length !== 0){
                countArrays++;
              }
            });

          if(nbAttributs == countArrays){
            $(this).addClass("visible").fadeIn();
          }

          if(filters.length == 0){
        $('.card-custom').addClass("visible").fadeIn();
      };
      });

      var nbResults = $('.card-custom.visible').length;
      $('#nbvins').text(nbResults);
      if(nbResults< 2){
      $('#result_text').text("vin qui vous correspondent")
          }else{
      $('#result_text').text("vins qui vous correspondent")
          }
  },

  reset:function(){
    $('#filters :input:checked').each(function(){
      $(this).prop( "checked", false );
    });
    $('.card-custom').addClass("visible").fadeIn();
    var nbResults = $('.card-custom.visible').length;
      $('.number_results').text(nbResults + ' résultats');

    $('#type-btn').css("font-weight","Normal");
    $('#pays-btn').css("font-weight","Normal");
    $('#region-btn').css("font-weight","Normal");
    $('#appel-btn').css("font-weight","Normal");
    $('#millesime-btn').css("font-weight","Normal");
    $('#produ-btn').css("font-weight","Normal");
    $('#format-btn').css("font-weight","Normal");
    
      $('#nbvins').text(nbResults);
      if(nbResults< 2){
      $('#result_text').text("vin qui vous correspondent")
          }else{
      $('#result_text').text("vins qui vous correspondent")
          }
  },

  sortByNameAZ:function(){
    var tri = $(event.target).text();
    $('#tri-btn').text(tri);

    $(".card-custom").sort(sort) // sort elements
      .appendTo('#carteContainer'); // append again to the list
    // sort function callback
    function sort(a, b){
      return ($(b).data('nom')) < ($(a).data('nom')) ? 1 : -1;   
  } 
},

  sortByNameZA:function(){
    var tri = $(event.target).text();
    $('#tri-btn').text(tri);

    $(".card-custom").sort(sort) // sort elements
      .appendTo('#carteContainer'); // append again to the list
    // sort function callback
    function sort(a, b){
      return ($(b).data('nom')) > ($(a).data('nom')) ? 1 : -1;   
  } 
},

sortByPriceAsc:function(){
    var tri = $(event.target).text();
    $('#tri-btn').text(tri);

    $(".card-custom").sort(sort) // sort elements
      .appendTo('#carteContainer'); // append again to the list
    // sort function callback
    function sort(a, b){
      return ($(b).data('prix')) < ($(a).data('prix')) ? 1 : -1;   
  } 
},

sortByPriceDesc:function(){
    var tri = $(event.target).text();
    $('#tri-btn').text(tri);

    $(".card-custom").sort(sort) // sort elements
      .appendTo('#carteContainer'); // append again to the list
    // sort function callback
    function sort(a, b){
      return ($(b).data('prix')) > ($(a).data('prix')) ? 1 : -1;   
  } 
},

sortByAgeAsc:function(){
    var tri = $(event.target).text();
    $('#tri-btn').text(tri);

    $(".card-custom").sort(sort) // sort elements
      .appendTo('#carteContainer'); // append again to the list
    // sort function callback
    function sort(a, b){
      return ($(b).data('millesime')) < ($(a).data('millesime')) ? 1 : -1;   
  } 
},

sortByAgeDesc:function(){
    var tri = $(event.target).text();
    $('#tri-btn').text(tri);

    $(".card-custom").sort(sort) // sort elements
      .appendTo('#carteContainer'); // append again to the list
    // sort function callback
    function sort(a, b){
      return ($(b).data('millesime')) > ($(a).data('millesime')) ? 1 : -1;   
  } 
},
emptyFilters:function(){
  location.reload();
},
}
}
</script>