/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

<<<<<<< HEAD
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

const app = new Vue({
    el: '#app',
});
=======
window.Vue = require('vue');
import Vue from 'vue';
import Router from './routes.js'
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'bootstrap/dist/js/bootstrap.js';
import '../style/style.css';
import './counter.js';
import L from 'leaflet';




// import Counter from './countUp/dist/countUp'

window.$ = require('jquery')
window.JQuery = require('jquery')



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

//Panier 
Vue.component('panier-produit', require('./components/Panier.vue').default);

const app = new Vue({
    el: '#app',
    router: Router,
});


var map = L.map('mapid').setView([47.02, 8.33], 8.5);

L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
    attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
    maxZoom: 5
}).addTo(map);

$("a[href='#v-pills-messages']").on('shown.bs.tab', function(e) {
    map.invalidateSize();
});

var blackIcon = new L.Icon({
    iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-black.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
});

L.marker([44.8, -0.56], { icon: blackIcon }).addTo(map);



// Chargement du type de carte sur Leaflet
>>>>>>> a4afe13e4ade29bc63bd96bbf8442be614527701
