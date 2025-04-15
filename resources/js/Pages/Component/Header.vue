<!-- resources/js/Components/Header.vue -->
<template>
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="assets/images/logo.svg" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="assets/images/logo-light.svg" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="19">
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
          </button>

          <!-- App Search -->
          <form class="app-search d-none d-lg-block">
            <div class="position-relative">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="bx bx-search-alt"></span>
            </div>
          </form>

          <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
            <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
              <span key="t-megamenu">Mega Menu</span>
              <i class="mdi mdi-chevron-down"></i>
            </button>
            <!-- Mega menu content -->
          </div>
        </div>

        <div class="d-flex">
          <!-- Additional header elements -->
          <div class="dropdown d-inline-block d-lg-none ms-2">
            <!-- Mobile search dropdown -->
          </div>

          <div class="dropdown d-inline-block">
            <!-- Language dropdown -->
          </div>

          <div class="dropdown d-none d-lg-inline-block ms-1">
            <!-- Quick action dropdown -->
          </div>

          <div class="dropdown d-none d-lg-inline-block ms-1">
            <!-- Fullscreen toggle -->
          </div>

          <div class="dropdown d-inline-block">
            <!-- Notifications dropdown -->
          </div>

          <div class="dropdown d-inline-block">
            <!-- User profile dropdown -->
          </div>

          <div class="dropdown d-inline-block">
            <!-- Settings dropdown -->
          </div>
        </div>
      </div>
    </header>
  </template>

  <script>
  export default {
    mounted() {
      console.log('Header component mounted');
    }
  }
  </script>
