<template>
  <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
    <!-- Sidebar -->
    <aside
      :class="[
        'fixed inset-y-0 left-0 z-50 w-64 bg-white dark:bg-gray-800 shadow-lg transform transition-transform lg:translate-x-0',
        sidebarOpen ? 'translate-x-0' : '-translate-x-full',
      ]"
    >
      <div class="flex items-center justify-between p-6 border-b dark:border-gray-700">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Cost Cue</h1>
        <button @click="toggleSidebar" class="lg:hidden">
          <XMarkIcon class="h-6 w-6 text-gray-500" />
        </button>
      </div>
      <nav class="p-4">
        <router-link
          v-for="item in nav"
          :key="item.name"
          :to="item.to"
          :class="[
            'flex items-center px-4 py-3 mb-2 rounded-lg transition-colors',
            $route.name === item.name
              ? 'gradient-bg text-white'
              : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700',
          ]"
        >
          <component :is="item.icon" class="h-5 w-5 mr-3" />
          {{ item.name }}
        </router-link>
      </nav>
    </aside>

    <!-- Main -->
    <div class="lg:ml-64">
      <header class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
          <button @click="toggleSidebar" class="lg:hidden">
            <Bars3Icon class="h-6 w-6 text-gray-500" />
          </button>
          <div class="flex items-center space-x-4">
            <button
              @click="toggleTheme"
              class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700"
            >
              <SunIcon v-if="isDark" class="h-5 w-5" />
              <MoonIcon v-else class="h-5 w-5" />
            </button>
            <button
              @click="handleLogout"
              class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700"
            >
              <ArrowRightOnRectangleIcon class="h-5 w-5" />
            </button>
          </div>
        </div>
      </header>
      <main class="p-6">
        <router-view />
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import {
  HomeIcon,
  CurrencyDollarIcon,
  BanknotesIcon,
  ChartPieIcon,
  CogIcon,
  Bars3Icon,
  XMarkIcon,
  SunIcon,
  MoonIcon,
  ArrowRightOnRectangleIcon,
} from '@heroicons/vue/24/outline'
import { useRouter } from 'vue-router'
import { useAuthStore } from '../stores/auth'

const router = useRouter()
const auth = useAuthStore()

const nav = [
  { name: 'Dashboard', to: '/dashboard', icon: HomeIcon },
  { name: 'Transactions', to: '/transactions', icon: CurrencyDollarIcon },
  { name: 'Loans', to: '/loans', icon: BanknotesIcon },
  { name: 'Analytics', to: '/analytics', icon: ChartPieIcon },
  { name: 'Settings', to: '/settings', icon: CogIcon },
]

const sidebarOpen = ref(false)
const toggleSidebar = () => (sidebarOpen.value = !sidebarOpen.value)

const isDark = ref(false)
const toggleTheme = () => {
  isDark.value = !isDark.value
  localStorage.theme = isDark.value ? 'dark' : 'light'
  if (isDark.value) document.documentElement.classList.add('dark')
  else document.documentElement.classList.remove('dark')
}

onMounted(() => {
  isDark.value = localStorage.theme === 'dark'
  if (isDark.value) document.documentElement.classList.add('dark')
})

const handleLogout = async () => {
  await auth.logout()
  router.push('/login')
}
</script>
