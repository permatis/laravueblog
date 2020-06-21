import Vue from 'vue'
import VueRouter from 'vue-router'

//instance vue-router
Vue.use(VueRouter)

//import pages
import Home from './pages/Home'
import Login from './pages/Login'
import Dashboard from './pages/Dashboard'

//define routes
const routes = [
	{
		path: '/',
		name: 'home',
		component: Home
	},
	{
		path: '/login',
		name: 'login',
		component: Login
	},
	{
		path: '/dashboard',
		name: 'dashboard',
		component: Dashboard
	}
]

export default new VueRouter({
	mode: 'history',
	routes,
	linkActiveClass: "active"
})