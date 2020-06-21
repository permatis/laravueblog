require('./bootstrap');
window.Vue = require('vue');

import routes from './router'

//root component
Vue.component(
	'app-component', 
	require('./App.vue').default
);

const app = new Vue({
    el: '#app',
	router: routes
});
