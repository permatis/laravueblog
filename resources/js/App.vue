<template>
	<div class="">
		<Navbar :tdkLogin="status"/>
		<router-view  @login="gantiLoggedIn" class="data-view"></router-view>
	</div>
</template>

<script>
	import Navbar from './components/Navbar'

	export default {
		name: 'App',
		components: {
			Navbar
		},
		data() {
		    return {
		      tdkLogin: true
		    }
		  },
		  methods: {
		    gantiLoggedIn(status) {
		      this.tdkLogin = status
		    }
		  },
		  computed: {
		  	status() {
		  		return this.tdkLogin
		  	}
		  }
	}
</script>

<style>
	nav {
		position: absolute;
  	left: 50%;
  	transform: translatex(-50%);
  	margin-bottom: 20px;
	}
	nav > a {
		padding: 10px;
		text-decoration: none;
		font-weight: 600;
	}
	nav a.active {
		color: blue;
		text-decoration: underline;
	}
	nav a:hover {
		color: blue;
	}
	.data-view {
		margin-top: 3rem;
	}
</style>