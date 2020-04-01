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

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

import '../demo11/tools/webpack/vendors/global.js';
import '../demo11/tools/webpack/scripts.js';

// Global Theme Bundle(used by all pages)
import '../demo11/dist/assets/plugins/global/plugins.bundle.js';
import '../demo11/dist/assets/js/scripts.bundle.js';
import '../js/page.js';

import '../demo11/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js';
import '../demo11/dist/assets/plugins/custom/gmaps/gmaps.js';
import '../demo11/dist/assets/js/pages/dashboard.js';
import '../demo11/dist/assets/js/pages/builder.js';
import '../demo11/dist/assets/js/pages/my-script.js';

//Table
import '../demo11/src/assets/js/pages/crud/metronic-datatable/base/data-ajax.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/base/data-json.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/base/data-local.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/base/html-table.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/base/local-sort.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/base/translation.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/child/data-ajax.js';
import '../demo11/src/assets/js/pages/crud/metronic-datatable/child/data-local.js';

import '../demo11/dist/assets/js/pages/custom/user/profile.js';