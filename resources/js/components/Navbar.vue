<template>
	<div class="">
		<nav>
			<router-link to="/" v-if="cekLogin" exact>Home</router-link>
			<router-link to="/login" v-if="cekLogin">Login</router-link>
			<router-link to="/dashboard" v-if="! cekLogin">Dashboard</router-link>
		</nav>
	</div>
</template>

<script>
	export default {
		props: ['tdkLogin'],
		computed: {
			cekLogin() {
				return this.tdkLogin
			}
		}
	}
</script>