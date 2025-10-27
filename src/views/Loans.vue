<template>
  <div>
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Loans</h2>
      <button
        @click="openModal()"
        class="gradient-bg text-white px-4 py-2 rounded-lg hover:opacity-90"
      >
        + Add
      </button>
    </div>

    <div class="glass-card p-6">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
        <thead>
          <tr>
            <th class="pb-3">Person</th>
            <th class="pb-3">Type</th>
            <th class="pb-3">Amount</th>
            <th class="pb-3">Remaining</th>
            <th class="pb-3">Due Date</th>
            <th class="pb-3">Status</th>
            <th class="pb-3"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="l in loans" :key="l.id" class="border-t dark:border-gray-700">
            <td class="py-2">{{ l.person }}</td>
            <td :class="l.type === 'lent' ? 'text-green-600' : 'text-red-600'">{{ l.type }}</td>
            <td>${{ l.amount.toFixed(2) }}</td>
            <td>${{ l.remainingAmount.toFixed(2) }}</td>
            <td>{{ new Date(l.dueDate).toLocaleDateString() }}</td>
            <td>{{ l.status }}</td>
            <td class="flex space-x-2">
              <button @click="openModal(l)" class="text-blue-500 hover:underline">Edit</button>
              <button @click="loansStore.remove(l.id)" class="text-red-500 hover:underline">
                Delete
              </button>
            </td>
          </tr>
        </tbody>
      </table>
      <p v-if="!loans.length" class="text-gray-500 dark:text-gray-400 text-center py-4">
        No loans yet
      </p>
    </div>

    <!-- Modal -->
    <div v-if="modal" class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
      <div class="glass-card p-6 w-full max-w-md">
        <h3 class="text-lg font-semibold mb-4">{{ editing.id ? 'Edit' : 'Add' }} Loan</h3>
        <form @submit.prevent="save">
          <input
            v-model="form.person"
            required
            placeholder="Person Name"
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          />
          <select
            v-model="form.type"
            required
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          >
            <option value="borrowed">Borrowed</option>
            <option value="lent">Lent</option>
          </select>
          <input
            v-model.number="form.amount"
            required
            type="number"
            step="0.01"
            placeholder="Amount"
            class="mb-3 w-full px-3 py-2 border rounded dark:bg-gray-700 dark:text-white"
          />
          <input
            v-model="form.dueDate"
            required
            type="date"
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
import { useLoansStore } from '../stores/loans'
import { storeToRefs } from 'pinia'

const loansStore = useLoansStore()
const { loans } = storeToRefs(loansStore)

const modal = ref(false)
const editing = ref({})
const form = reactive({ person: '', type: 'borrowed', amount: '', dueDate: '', notes: '' })

const openModal = (l = {}) => {
  editing.value = { ...l }
  Object.assign(form, { person: '', type: 'borrowed', amount: '', dueDate: '', notes: '', ...l })
  modal.value = true
}

const save = async () => {
  if (editing.value.id) await loansStore.update(editing.value.id, form)
  else await loansStore.add(form)
  modal.value = false
}
</script>
