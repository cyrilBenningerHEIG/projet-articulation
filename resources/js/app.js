/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



window.Vue = require('vue');
import Vue from 'vue';
import Router from './routes.js'
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'bootstrap/dist/js/bootstrap.js';
import '../style/style.css';
import '../style/stylemobile.css';
import './counter.js';
import JsonStorage from "./lib/JsonStorage";

import { Icon } from 'leaflet'
import 'leaflet/dist/leaflet.css'


// this part resolve an issue where the markers would not appear
delete Icon.Default.prototype._getIconUrl;

Icon.Default.mergeOptions({
    iconRetinaUrl: require('leaflet/dist/images/marker-icon-2x.png'),
    iconUrl: require('leaflet/dist/images/marker-icon.png'),
    shadowUrl: require('leaflet/dist/images/marker-shadow.png')
});


import './countUp/dist/countUp';

window.$ = require('jquery')
window.JQuery = require('jquery')

window.axios = require('axios');

Vue.use(BootstrapVue);




//Home
Vue.component('nav-bar-login', require('./components/NavBarLogin.vue').default);
Vue.component('nav-bar-logout', require('./components/NavBarLogout.vue').default);
Vue.component('menu-home', require('./components/Menu.vue').default);
Vue.component('week-selection', require('./components/SelectionSemaine.vue').default);
Vue.component('footer-bar', require('./components/Footer.vue').default);
Vue.component('week-selection-card', require('./components/CarteSelectionSemaine.vue').default);
Vue.component('week-selection-producer', require('./components/ProducteurSelectionSemaine.vue').default);
Vue.component('history-bar', require('./components/HistoryBar.vue').default);

//Produits Nouveautés
Vue.component('menu-nouveaute', require('./components/MenuNouveaute.vue').default);

//Produits Primeurs
Vue.component('menu-primeur', require('./components/MenuPrimeur.vue').default);

//Produits Promos
Vue.component('menu-promo', require('./components/MenuPromo.vue').default);

//Produits Catalogue
Vue.component('menu-produit', require('./components/MenuProduit.vue').default);

//Filtre produits et formulaire de contact 
Vue.component('product-filter', require('./components/ProductFilter.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);

//Page produits
Vue.component('nav-product-bar', require('./components/NavProductBar.vue').default);
Vue.component('product-page', require('./components/ProductPage.vue').default);
Vue.component('carte-produit', require('./components/CarteProduit.vue').default);
Vue.component('selection-card', require('./components/CarteSelection.vue').default);

//Page histoire
Vue.component('history-page', require('./components/HistoryPage.vue').default);

//CGV 
Vue.component('cgv-texte', require('./components/CGV.vue').default);

//Histoire

//Panier 
Vue.component('panier-produit', require('./components/Panier.vue').default);
Vue.component('titre-panier', require('./components/TitrePanier.vue').default);

//Paiement
Vue.component('header-paiement', require('./components/HeaderPaiement.vue').default);
Vue.component('header-retour', require('./components/Retour.vue').default);
Vue.component('paiement-etape1', require('./components/Paiement1.vue').default);
Vue.component('paiement-compte', require('./components/ComptePaiement.vue').default);

Vue.component('paiement-etape2', require('./components/Paiement2.vue').default);
Vue.component('paiement-livraison', require('./components/LivraisonPaiement.vue').default);

Vue.component('paiement-etape3', require('./components/Paiement3.vue').default);
Vue.component('paiement-page', require('./components/PagePaiement.vue').default);
Vue.component('titre-resume', require('./components/TitreResume.vue').default);
Vue.component('panier-resume', require('./components/PanierResume.vue').default);


Vue.component('paiement-etape4', require('./components/Paiement4.vue').default);
Vue.component('paiement-resumer', require('./components/ResumePaiement.vue').default);

Vue.component('paiement-validation', require('./components/ValidationPaiement.vue').default);

//Compte
Vue.component('adresse-form', require('./components/AdresseForm.vue').default);
Vue.component('compte-client', require('./components/Compte.vue').default);
//LOADING
Vue.component('loading-screen', require('./components/LoadingScreen.vue').default);



const app = new Vue({
    el: '#app',
    router: Router,
});


//////////////////////////////////////  Chargement du type de carte sur Leaflet

// var map = L.map('mapid').setView([47.02, 8.33], 8.5);

// L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
//     attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
//     maxZoom: 5
// }).addTo(map);

// $("a[href='#v-pills-messages']").on('shown.bs.tab', function(e) {
//     map.invalidateSize();
// });

// var blackIcon = new L.Icon({
//     iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-black.png',
//     shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
//     iconSize: [25, 41],
//     iconAnchor: [12, 41],
//     popupAnchor: [1, -34],
//     shadowSize: [41, 41]
// });

// L.marker([44.8, -0.56], { icon: blackIcon }).addTo(map);


////////////////////////////////////// Formulaire adresse de paiement

$(document).ready(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


////////////////////////////////////// Carousel de la page produits 
$('.carousel').carousel({
    interval: 1
})

////////////////////////////////////// Mobile
$(window).on("resize", evt => {
    if (window.matchMedia("screen and (max-width: 30rem)").matches) {
        $(".nav > ul").hide();
    } else {
        $(".nav > ul").show();
    }
});
$(".nav").on("click", evt => {
    if (!window.matchMedia("screen and (max-width: 30rem)").matches) return;
    $(".nav > ul").toggle();
});