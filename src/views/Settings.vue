<template>
  <div>
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Settings</h2>
    <div class="glass-card p-6 max-w-xl">
      <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Preferences</h3>
      <label class="flex items-center justify-between">
        <span>Dark Mode</span>
        <input type="checkbox" v-model="dark" @change="toggle" class="toggle" />
      </label>
      <div class="mt-6">
        <button
          @click="auth.logout()"
          class="gradient-bg text-white px-4 py-2 rounded-lg hover:opacity-90"
        >
          Logout
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useAuthStore } from '../stores/auth'

const auth = useAuthStore()
const dark = ref(false)

const toggle = () => {
  dark.value
    ? document.documentElement.classList.add('dark')
    : document.documentElement.classList.remove('dark')
  localStorage.theme = dark.value ? 'dark' : 'light'
}

onMounted(() => {
  dark.value = localStorage.theme === 'dark'
})
</script>
