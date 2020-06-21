<template>
	<div class="">
		<h1>Halaman Login</h1>
		<form @submit.prevent="login">
      <div class="">
        <label for="username">Username</label>
        <input type="text" v-model="username">
      </div>
      <div class="">
        <label for="password">Password</label>
        <input type="password" v-model="password">
      </div>
      <button>Login</button>
    </form>
	</div>
</template>

<script>
export default {
	data() {
    return {
      username: '',
      password: ''
    }
  },
  methods: {
    login() {
      if(this.username && this.password) {
        this.$router.push({ name:'dashboard', params: { username: this.username, isLogin: true }})
      }
    }
  }
}
</script>