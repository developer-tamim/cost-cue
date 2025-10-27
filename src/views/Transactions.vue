<template>
  <div>
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Transactions</h2>
      <button
        @click="openModal()"
        class="gradient-bg text-white px-4 py-2 rounded-lg hover:opacity-90"
      >
        + Add
      </button>
    </div>

    <!-- List -->
    <div class="glass-card p-6">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
        <thead>
          <tr>
            <th class="pb-3">Title</th>
            <th class="pb-3">Category</th>
            <th class="pb-3">Type</th>
            <th class="pb-3">Amount</th>
            <th class="pb-3">Date</th>
            <th class="pb-3"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="t in transactions" :key="t.id" class="border-t dark:border-gray-700">
            <td class="py-2">{{ t.title }}</td>
            <td>{{ t.category }}</td>
            <td :class="t.type === 'income' ? 'text-green-600' : 'text-red-600'">{{ t.type }}</td>
            <td>${{ t.amount.toFixed(2) }}</td>
            <td>{{ new Date(t.date?.toDate()).toLocaleDateString() }}</td>
            <td class="flex space-x-2">
              <button @click="openModal(t)" class="text-blue-500 hover:underline">Edit</button>
              <button @click="tx.remove(t.id)" class="text-red-500 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
      <p v-if="!transactions.length" class="text-gray-500 dark:text-gray-400 text-center py-4">
        No transactions yet
      </p>
    </div>

    <!-- Modal -->
    <div v-if="modal" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
      <div class="glass-card p-6 w-full max-w-md">
        <h3 class="text-lg font-semibold mb-4">{{ editing.id ? 'Edit' : 'Add' }} Transaction</h3>
        <form @submit.prevent="save">
          <input
            v-model="form.title"
            required
            placeholder="Title"
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          />
          <input
            v-model.number="form.amount"
            required
            type="number"
            step="0.01"
            placeholder="Amount"
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          />
          <select
            v-model="form.type"
            required
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          >
            <option value="income">Income</option>
            <option value="expense">Expense</option>
          </select>
          <input
            v-model="form.category"
            required
            placeholder="Category (e.g. Food)"
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          />
          <textarea
            v-model="form.notes"
            placeholder="Notes (optional)"
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          />
          <div class="flex justify-end space-x-2">
            <button
              type="button"
              @click="modal = false"
              class="px-4 py-2 rounded bg-gray-200 dark:bg-gray-700"
            >
              Cancel
            </button>
            <button type="submit" class="px-4 py-2 rounded gradient-bg text-white">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive } from 'vue'
import { useTransactionsStore } from '../stores/transactions'
import { storeToRefs } from 'pinia'

const tx = useTransactionsStore()
const { transactions } = storeToRefs(tx)

const modal = ref(false)
const editing = ref({})
const form = reactive({ title: '', amount: '', type: 'expense', category: '', notes: '' })

const openModal = (t = {}) => {
  editing.value = { ...t }
  Object.assign(form, { title: '', amount: '', type: 'expense', category: '', notes: '', ...t })
  modal.value = true
}

const save = async () => {
  if (editing.value.id) await tx.update(editing.value.id, form)
  else await tx.add(form)
  modal.value = false
}
</script>
