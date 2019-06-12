<template>
  <div class="test text-center">
    <h4 class="mt-5 pt-3">GAZZAR VOUS PROPOSE</h4>
    <div class="container counter">
      <div class="row">
        <div class="col-sm">
          <span class="counter h2">{{ nbregions }}</span><br>
          <h6>RÉGIONS</h6>
        </div>
        <div class="col-sm">
          <span class="counter h2">{{ nbvins }}</span>
          <h6>VINS</h6>
        </div>
        <div class="col-sm">
          <span class="counter h2">{{ nbprodu }}</span>
          <h6>PRODUCTEURS</h6>
        </div>
      </div>
    </div>
    <p class="box text-justify">Depuis 1973, Gazzar travaille dans l’exigence renouvelée du détail qui fait l’art d’un grand vin. Parmi l’étendue considérable de l’offre, notre tâche est de sélectionner pour vous des vins de légende, mais également de rechercher des vins hors des sentiers battus. Nous favorisons des producteurs artisanaux et respectueux de la nature. Nous partageons avec eux cette passion des grands vins. Nous prenons le soin de déguster tous les vins que nous vous proposons, garantissant ainsi l’excellence et un conseil personnel.</p>
    <a href="histoire"><button class="btn btn-primary btn-history btn-outline-danger">CONSULTER L'HISTOIRE DE GAZZAR</button></a>
  </div>
</template>

<script>
export default {
  props: ['nbregions', 'nbvins', 'nbprodu'],
  

    data(){
        return{
          nbregions:'',
          nbvins:'',
          nbprodu:'',
        }
     },
}


</script>
