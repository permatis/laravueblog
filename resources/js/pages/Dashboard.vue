<template>
	<div class="">
		<h1>Halaman Dashboard</h1>
		<p>Hello {{ $route.params.username }} </p>
	</div>
</template>

<script>
export default {
		data() {
    return {
      login: false
    }
  },
  created() {
    if(!this.$route.params.isLogin) {
      this.$router.push({ path: '/' })
      this.$emit('login', !this.login)
    } else {
      this.$emit('login', this.login)
    }
  }
}
</script>