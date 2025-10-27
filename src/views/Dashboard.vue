<template>
  <div>
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Dashboard</h2>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="glass-card p-6">
        <p class="text-sm text-gray-600 dark:text-gray-300">Total Income</p>
        <p class="text-2xl font-bold text-green-600">${{ totalIncome.toFixed(2) }}</p>
      </div>
      <div class="glass-card p-6">
        <p class="text-sm text-gray-600 dark:text-gray-300">Total Expenses</p>
        <p class="text-2xl font-bold text-red-600">${{ totalExpenses.toFixed(2) }}</p>
      </div>
      <div class="glass-card p-6">
        <p class="text-sm text-gray-600 dark:text-gray-300">Net Balance</p>
        <p class="text-2xl font-bold" :class="netBalance >= 0 ? 'text-green-600' : 'text-red-600'">
          ${{ netBalance.toFixed(2) }}
        </p>
      </div>
      <div class="glass-card p-6">
        <p class="text-sm text-gray-600 dark:text-gray-300">Outstanding Loans</p>
        <p class="text-2xl font-bold text-purple-600">
          ${{ (totalBorrowed + totalLent).toFixed(2) }}
        </p>
      </div>
    </div>

    <!-- Recent Transactions -->
    <div class="glass-card p-6">
      <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Recent Transactions</h3>
      <ul class="space-y-2">
        <li v-for="t in recent" :key="t.id" class="flex justify-between text-sm">
          <span class="text-gray-700 dark:text-gray-300">{{ t.title }}</span>
          <span :class="t.type === 'income' ? 'text-green-600' : 'text-red-600'">
            {{ t.type === 'income' ? '+' : '-' }}${{ t.amount.toFixed(2) }}
          </span>
        </li>
        <li v-if="!recent.length" class="text-gray-500 dark:text-gray-400 text-sm">
          No transactions yet
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { useTransactionsStore } from '../stores/transactions'
import { useLoansStore } from '../stores/loans'

const tx = useTransactionsStore()
const loans = useLoansStore()

const { totalIncome, totalExpenses, netBalance } = tx
const { totalBorrowed, totalLent } = loans

const recent = computed(() => tx.transactions.slice(0, 5))
</script>
