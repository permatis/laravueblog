<template>
  <nav class="bg-white px-2 h-16">
    <div class="container flex flex-wrap items-center mx-auto h-full">
      <div class="flex items-center md:w-1/2 w-full justify-start text-2xl font-semibold">
        <img src="/images/logo.png" alt="" class="h-10 w-10 mr-2">
        <span class="font-bold text-teal-400">Laravue</span>Blog
      </div>
      <div class="flex md:w-1/2 w-full h-full md:justify-end">
        <ul class="nav flex space-x-4 text-gray-600 font-semibold tracking-wide">
          <li :class="{ 'active': currentPage === 'home' }" class="px-4">
          	<router-link to="/" v-if="cekLogin" class="hover:no-underline" exact>Home</router-link>
          </li>
          <li :class="{ 'active': currentPage === 'login' }" class="px-4">
          	<router-link to="/login" v-if="cekLogin" class="hover:no-underline">Login</router-link>
          </li>
          <li :class="{ 'active': currentPage === 'dashboard' }" class="px-4">
          	<router-link to="/dashboard" v-if="! cekLogin" class="hover:no-underline">Dashboard</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
	export default {
		props: ['tdkLogin'],
		data() {
			return {
				activeClass: 'active'
			}
		},
		computed: {
			cekLogin() {
				return this.tdkLogin
			},
			currentPage() {
				return this.$route.name
			}
		}
	}
</script>

<style scoped>
	.nav > li {
    display: flex;
    align-items: center;
  }
  .nav > li.active {
  	border-color: #667eea;
  	border-bottom-width: 4px;
  	color: #000;
  }
</style>