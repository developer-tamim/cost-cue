<!-- resources/js/Pages/Dashboard.vue -->
<template>
    <div id="layout-wrapper">
      <Header />
      <Sidebar />
      <MainContent />
    </div>
  </template>

  <script>
  import Header from './Component/Header.vue';
  import Sidebar from './Component/Sidebar.vue';
  import MainContent from './Component/Pages/MainContent.vue';

  export default {
    components: {
      Header,
      Sidebar,
      MainContent
    },
    mounted() {
      // Initialize any scripts here
      console.log('Dashboard mounted');
    }
  }
  </script>
