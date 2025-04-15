<!-- resources/js/Components/Sidebar.vue -->
<template>
    <div class="vertical-menu">
      <div data-simplebar class="h-100">
        <div id="sidebar-menu">
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="index.html" key="t-default">Default</a></li>
                <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                <!-- More dashboard options -->
              </ul>
            </li>

            <!-- More menu items -->

            <li class="menu-title" key="t-apps">Apps</li>

            <!-- Apps menu items -->

            <li class="menu-title" key="t-pages">Pages</li>

            <!-- Pages menu items -->

            <li class="menu-title" key="t-components">Components</li>

            <!-- Components menu items -->
          </ul>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    mounted() {
      console.log('Sidebar component mounted');
    }
  }
  </script>
