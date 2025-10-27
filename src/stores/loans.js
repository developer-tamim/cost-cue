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

export const useLoansStore = defineStore('loans', () => {
  const loans = ref([])
  const loading = ref(false)
  const error = ref(null)
  const auth = getAuth()

  const user = computed(() => auth.currentUser)

  const totalBorrowed = computed(() =>
    loans.value
      .filter((l) => l.type === 'borrowed' && l.status !== 'repaid')
      .reduce((s, l) => s + l.remainingAmount, 0),
  )
  const totalLent = computed(() =>
    loans.value
      .filter((l) => l.type === 'lent' && l.status !== 'repaid')
      .reduce((s, l) => s + l.remainingAmount, 0),
  )

  const subscribe = () => {
    if (!user.value) return
    const q = query(collection(db, 'users', user.value.uid, 'loans'), orderBy('dueDate', 'asc'))
    return onSnapshot(
      q,
      (snap) => (loans.value = snap.docs.map((d) => ({ id: d.id, ...d.data() }))),
      (err) => (error.value = err.message),
    )
  }

  const add = async (l) => {
    loading.value = true
    try {
      await addDoc(collection(db, 'users', user.value.uid, 'loans'), {
        ...l,
        remainingAmount: l.amount,
        status: 'active',
        createdAt: serverTimestamp(),
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
      await updateDoc(doc(db, 'users', user.value.uid, 'loans', id), upd)
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
      await deleteDoc(doc(db, 'users', user.value.uid, 'loans', id))
    } catch (e) {
      error.value = e.message
      throw e
    } finally {
      loading.value = false
    }
  }

  return { loans, loading, error, totalBorrowed, totalLent, subscribe, add, update, remove }
})
