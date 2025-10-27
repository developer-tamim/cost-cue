<template>
  <div>
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Analytics</h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- Income vs Expense -->
      <div class="glass-card p-6">
        <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Monthly Trend</h3>
        <Line :data="trendData" :options="chartOptions" />
      </div>

      <!-- Category Breakdown -->
      <div class="glass-card p-6">
        <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Expense Categories</h3>
        <Pie :data="categoryData" :options="chartOptions" />
      </div>

      <!-- Loan Progress -->
      <div class="glass-card p-6">
        <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">Loan Overview</h3>
        <Bar :data="loanData" :options="chartOptions" />
      </div>
    </div>
  </div>
</template>

<script setup>
import { computed } from 'vue'
import { Line, Pie, Bar } from 'vue-chartjs'
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  LineElement,
  CategoryScale,
  LinearScale,
  PointElement,
  ArcElement,
  BarElement,
} from 'chart.js'
import { useTransactionsStore } from '../stores/transactions'
import { useLoansStore } from '../stores/loans'

ChartJS.register(
  Title,
  Tooltip,
  Legend,
  LineElement,
  CategoryScale,
  LinearScale,
  PointElement,
  ArcElement,
  BarElement,
)

const tx = useTransactionsStore()
const loans = useLoansStore()

const chartOptions = { responsive: true, maintainAspectRatio: false }

// ---- Monthly Trend ---- //
const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
const incomeByMonth = months.map(() => Math.random() * 2000 + 500)
const expenseByMonth = months.map(() => Math.random() * 1500 + 400)
const trendData = {
  labels: months,
  datasets: [
    { label: 'Income', data: incomeByMonth, borderColor: '#10b981', backgroundColor: '#10b98120' },
    {
      label: 'Expense',
      data: expenseByMonth,
      borderColor: '#ef4444',
      backgroundColor: '#ef444420',
    },
  ],
}

// ---- Category Pie ---- //
const categoryTotals = tx.transactions
  .filter((t) => t.type === 'expense')
  .reduce((acc, t) => {
    acc[t.category] = (acc[t.category] || 0) + t.amount
    return acc
  }, {})
const categoryData = {
  labels: Object.keys(categoryTotals),
  datasets: [
    {
      data: Object.values(categoryTotals),
      backgroundColor: ['#f59e0b', '#3b82f6', '#8b5cf6', '#ec4899', '#10b981'],
    },
  ],
}

// ---- Loan Bar ---- //
const loanData = {
  labels: ['Borrowed', 'Lent'],
  datasets: [
    {
      label: 'Outstanding',
      data: [loans.totalBorrowed, loans.totalLent],
      backgroundColor: ['#ef4444', '#10b981'],
    },
  ],
}
</script>
