<template>
	<div class="">
		<nav>
			<router-link to="/" exact>Home</router-link>
			<router-link to="/login">Login</router-link>
			<router-link to="/dashboard">Dashboard</router-link>
		</nav>
		<router-view class="data-view"></router-view>
	</div>
</template>

<script>
	export default {
		name: 'app-component',
		data() {
			return {

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