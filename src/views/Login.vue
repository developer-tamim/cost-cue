<template>
  <div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800"
  >
    <div class="glass-card p-8 w-full max-w-md animate-fade-in">
      <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Welcome to Cost Cue</h1>
        <p class="text-gray-600 dark:text-gray-300 mt-2">Sign in to continue</p>
      </div>

      <form @submit.prevent="handleLogin" class="space-y-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Email</label
          >
          <input
            v-model="email"
            type="email"
            required
            placeholder="you@example.com"
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
          />
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2"
            >Password</label
          >
          <input
            v-model="password"
            type="password"
            required
            placeholder="••••••••"
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"
          />
        </div>
        <div v-if="error" class="text-red-500 text-sm text-center">{{ error }}</div>
        <button
          type="submit"
          :disabled="loading"
          class="w-full gradient-bg text-white py-2 px-4 rounded-lg hover:opacity-90 disabled:opacity-50"
        >
          {{ loading ? 'Signing in...' : 'Sign In' }}
        </button>
      </form>

      <p class="text-center mt-6 text-gray-600 dark:text-gray-300">
        New to Cost Cue?
        <router-link to="/register" class="text-blue-500 hover:underline"
          >Create account</router-link
        >
      </p>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '../stores/auth'

const router = useRouter()
const auth = useAuthStore()

const email = ref(''),
  password = ref(''),
  error = ref(''),
  loading = ref(false)

const handleLogin = async () => {
  try {
    loading.value = true
    error.value = ''
    await auth.login(email.value, password.value)
    router.push('/dashboard')
  } catch (e) {
    error.value = e.message
  } finally {
    loading.value = false
  }
}
</script>
