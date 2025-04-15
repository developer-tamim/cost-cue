<!-- resources/js/Components/MainContent.vue -->
<template>
    <div class="main-content">
      <div class="page-content">
        <div class="container-fluid">
          <!-- Page title -->
          <div class="row">
            <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <!-- Dashboard content -->
          <div class="row">
            <!-- Dashboard widgets and content -->
            <!-- You'll need to convert each section to Vue components -->
            <!-- For example, create separate components for charts, tables, etc. -->
          </div>
        </div>
      </div>

      <!-- Footer -->
      <!-- <footer class="footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-6">
                      <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- Footer -->
    </div>
  </template>

  <script>
  export default {
    mounted() {
      console.log('Main content component mounted');
      // Initialize any charts or plugins here
    }
  }
  </script>
