<template>
	<div class="">
		<Navbar :tdkLogin="status"/>
		<div class="container mx-auto py-12">
			<router-view  @login="gantiLoggedIn"></router-view>
		</div>
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
</style>