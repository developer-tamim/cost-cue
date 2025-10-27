import { defineStore } from 'pinia'
import { ref, computed } from 'vue'
import {
  collection,
  addDoc,
  updateDoc,
  deleteDoc,
  doc,
  query,
  orderBy,
  onSnapshot,
  serverTimestamp,
} from 'firebase/firestore'
import { db } from '../firebase'
import { getAuth } from 'firebase/auth'

export const useTransactionsStore = defineStore('transactions', () => {
  const transactions = ref([])
  const loading = ref(false)
  const error = ref(null)
  const auth = getAuth()

  const user = computed(() => auth.currentUser)

  const totalIncome = computed(() =>
    transactions.value.filter((t) => t.type === 'income').reduce((s, t) => s + t.amount, 0),
  )
  const totalExpenses = computed(() =>
    transactions.value.filter((t) => t.type === 'expense').reduce((s, t) => s + t.amount, 0),
  )
  const netBalance = computed(() => totalIncome.value - totalExpenses.value)

  const subscribe = () => {
    if (!user.value) return
    const q = query(
      collection(db, 'users', user.value.uid, 'transactions'),
      orderBy('date', 'desc'),
    )
    return onSnapshot(
      q,
      (snap) => (transactions.value = snap.docs.map((d) => ({ id: d.id, ...d.data() }))),
      (err) => (error.value = err.message),
    )
  }

  const add = async (t) => {
    loading.value = true
    try {
      await addDoc(collection(db, 'users', user.value.uid, 'transactions'), {
        ...t,
        date: serverTimestamp(),
      })
    } catch (e) {
      error.value = e.message
      throw e
    } finally {
      loading.value = false
    }
  }

  const update = async (id, upd) => {
    loading.value = true
    try {
      await updateDoc(doc(db, 'users', user.value.uid, 'transactions', id), upd)
    } catch (e) {
      error.value = e.message
      throw e
    } finally {
      loading.value = false
    }
  }

  const remove = async (id) => {
    loading.value = true
    try {
      await deleteDoc(doc(db, 'users', user.value.uid, 'transactions', id))
    } catch (e) {
      error.value = e.message
      throw e
    } finally {
      loading.value = false
    }
  }

  return {
    transactions,
    loading,
    error,
    totalIncome,
    totalExpenses,
    netBalance,
    subscribe,
    add,
    update,
    remove,
  }
})
