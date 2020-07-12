/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import $ from 'jquery';
// window.$ = window.jQuery = $;

// import 'jquery-ui/ui/widgets/datepicker.js';

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

// Vue.component('example-component', require('./components/ExampleComponent').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// import '../demo11/tools/webpack/vendors/global.js';
// import '../demo11/tools/webpack/scripts.js';

// import '../demo11/dist/assets/plugins/global/plugins.bundle.js';
// import '../demo11/dist/assets/js/scripts.bundle.js';

// import '../demo11/dist/assets/js/pages/builder.js';
// import '../demo11/dist/assets/js/pages/my-script.js';

// import '../../node_modules/owl.carousel/dist/owl.carousel.js';
// import '../demo11/dist/assets/js/pages/dashboard.js';

// import '../../node_modules/jquery/dist/jquery.min.js';

//data-table
// import '../../node_modules/datatables.net/js/jquery.dataTables.min.js';
// import '../demo11/dist/assets/js/pages/crud/datatables/basic/scrollable.js';

//chart
// import '../demo11/dist/assets/js/pages/components/charts/morris-charts.js';
// import '../../node_modules/morris.js/morris.js';
// import '../../node_modules/chart.js/dist/Chart.js';
// import '../../node_modules/chart.js/dist/Chart.bundle.js';
// import '../demo11/dist/assets/plugins/custom/flot/flot.bundle.js';
// import '../demo11/dist/assets/js/pages/components/charts/flotcharts.js';
// import '../demo11/dist/assets/js/pages/components/charts/google-charts.js';

//login-page
// import '../demo11/dist/assets/js/pages/custom/login/login-general.js';

//live-search
// import '../../node_modules/bootstrap-select/dist/js/bootstrap-select.js';
