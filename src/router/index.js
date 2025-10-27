import { createRouter, createWebHistory } from 'vue-router'
import { getAuth, onAuthStateChanged } from 'firebase/auth'

const routes = [
  { path: '/login', name: 'Login', component: () => import('../views/Login.vue') },
  { path: '/register', name: 'Register', component: () => import('../views/Register.vue') },
  {
    path: '/',
    redirect: '/dashboard',
    component: () => import('../layouts/DashboardLayout.vue'),
    meta: { requiresAuth: true },
    children: [
      { path: '/dashboard', name: 'Dashboard', component: () => import('../views/Dashboard.vue') },
      {
        path: '/transactions',
        name: 'Transactions',
        component: () => import('../views/Transactions.vue'),
      },
      { path: '/loans', name: 'Loans', component: () => import('../views/Loans.vue') },
      { path: '/analytics', name: 'Analytics', component: () => import('../views/Analytics.vue') },
      { path: '/settings', name: 'Settings', component: () => import('../views/Settings.vue') },
    ],
  },
]

const router = createRouter({ history: createWebHistory(), routes })

router.beforeEach((to, _, next) => {
  const requiresAuth = to.matched.some((r) => r.meta.requiresAuth)
  const unsubscribe = onAuthStateChanged(getAuth(), (user) => {
    if (requiresAuth && !user) next('/login')
    else next()
    unsubscribe()
  })
})

export default router
