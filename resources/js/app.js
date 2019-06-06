/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'bootstrap/dist/js/bootstrap.js';
import '../style/style.css';
import './counter.js';
// import Counter from './countUp/dist/countUp'

window.$ = require('jquery')
window.JQuery = require('jquery')



Vue.use(BootstrapVue);



Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('week-selection', require('./components/SelectionSemaine.vue').default);
Vue.component('footer-bar', require('./components/Footer.vue').default);
Vue.component('week-selection-card', require('./components/CarteSelectionSemaine.vue').default);
Vue.component('week-selection-producer', require('./components/ProducteurSelectionSemaine.vue').default);
Vue.component('history-bar', require('./components/HistoryBar.vue').default);

//Filtre produits et formulaire de contact 
Vue.component('product-filter', require('./components/ProductFilter.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);

//Page produits
Vue.component('nav-product-bar', require('./components/NavProductBar.vue').default);
Vue.component('product-page', require('./components/ProductPage.vue').default);

const app = new Vue({
    el: '#app',
});



window.$ = require('jquery')
window.JQuery = require('jquery')