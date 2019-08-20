/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.$ = window.jQuery = require('jquery');
require('../bootstrap-3.3.7-dist/js/bootstrap');

require('./scripts/header-functions');
require('./scripts/manejoDeMenus');

if(document.getElementById('owl-1') || document.getElementById('owl-2')){
	require('../OwlCarousel2-2.3.4/dist/owl.carousel.min');

	require('./scripts/slider');
}

