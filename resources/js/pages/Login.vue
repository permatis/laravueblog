<template>
	<div class="flex">
    <div class="m-auto w-full max-w-md bg-white shadow-md px-5 py-5 rounded-md">
    <div class="text-2xl font-semibold tracking-wide mb-2">Login</div>
    <p class="mb-4 -mt-1"> Anda belum memiliki akun?  
      <a href="" class="text-indigo-700 font-semibold no-underline hover:no-underline">Buat akun</a>
    </p>
  		<form @submit.prevent="login" class="">
        <div class="mb-4">
          <label for="username" class="block uppercase text-gray-700 font-bold mb-2">Username</label>
          <input type="text" v-model="username" class="w-full shadow-xs  border py-3 px-3 appearance-none focus:outline-none text-gray-500" placeholder="Masukkan username anda">
        </div>
        <div class="mb-4">
          <label for="password" class="block uppercase text-gray-700 font-bold mb-2">Password</label>
          <input type="password" v-model="password" class="w-full shadow-xs border py-3 px-3 appearance-none focus:outline-none text-gray-500" placeholder="Masukkan password anda">
        </div>
        <div class="flex mb-5">
          <div class="flex flex-auto items-center">
            <input type="checkbox" class="h-4 w-4">
            <span class="ml-2 font-semibold text-gray-600">Ingat saya</span>
          </div>
          <div class="flex-auto text-right">
            <a href="" class="font-semibold text-indigo-700">Lupa password</a>
          </div>
        </div>
        <button class="w-full bg-indigo-700 p-3 rounded-md text-white uppercase">Login</button>
      </form>
    </div>
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