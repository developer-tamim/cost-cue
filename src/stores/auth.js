import { defineStore } from 'pinia'
import { ref } from 'vue'
import {
  getAuth,
  signInWithEmailAndPassword,
  createUserWithEmailAndPassword,
  signOut,
  onAuthStateChanged,
} from 'firebase/auth'

export const useAuthStore = defineStore('auth', () => {
  const user = ref(null)
  const loading = ref(false)
  const error = ref(null)
  const auth = getAuth()

  const init = () =>
    new Promise((res) =>
      onAuthStateChanged(auth, (u) => {
        user.value = u
        res(u)
      }),
    )

  const login = async (email, pwd) => {
    loading.value = true
    error.value = null
    try {
      const { user: u } = await signInWithEmailAndPassword(auth, email, pwd)
      user.value = u
    } catch (e) {
      error.value = e.message
      throw e
    } finally {
      loading.value = false
    }
  }

  const register = async (email, pwd) => {
    loading.value = true
    error.value = null
    try {
      const { user: u } = await createUserWithEmailAndPassword(auth, email, pwd)
      user.value = u
    } catch (e) {
      error.value = e.message
      throw e
    } finally {
      loading.value = false
    }
  }

  const logout = async () => {
    await signOut(auth)
    user.value = null
  }

  return { user, loading, error, login, register, logout, init }
})
