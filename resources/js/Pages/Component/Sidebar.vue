<!-- resources/js/Components/Sidebar.vue -->
<template>
    <div class="vertical-menu">
      <div data-simplebar class="h-100">
        <div id="sidebar-menu">
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>

            <li>
              <a :href="route('dashboard')" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
              </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-layout"></i>
                    <span key="t-layouts">Layouts</span>
                </a>
            </li>

            <li class="menu-title" key="t-apps">Apps</li>



            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-calendar"></i>
                    <span key="t-dashboards">Calendars</span>
                </a>

            </li>

            <li>
                <a href="chat.html" class="waves-effect">
                    <i class="bx bx-chat"></i>
                    <span key="t-chat">Chat</span>
                </a>
            </li>

            <li>
                <a href="apps-filemanager.html" class="waves-effect">
                    <i class="bx bx-file"></i>
                    <span key="t-file-manager">File Manager</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-store"></i>
                    <span key="t-ecommerce">Ecommerce</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-bitcoin"></i>
                    <span key="t-crypto">Crypto</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-envelope"></i>
                    <span key="t-email">Email</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-receipt"></i>
                    <span key="t-invoices">Invoices</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-briefcase-alt-2"></i>
                    <span key="t-projects">Projects</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-task"></i>
                    <span key="t-tasks">Tasks</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bxs-user-detail"></i>
                    <span key="t-contacts">Contacts</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-detail"></i>
                    <span key="t-blog">Blog</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-briefcase-alt"></i>
                    <span key="t-jobs">Jobs</span>
                </a>
            </li>

            <li class="menu-title" key="t-pages">Pages</li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-user-circle"></i>
                    <span key="t-authentication">Authentication</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-file"></i>
                    <span key="t-utility">Utility</span>
                </a>
            </li>

            <li class="menu-title" key="t-components">Components</li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-tone"></i>
                    <span key="t-ui-elements">UI Elements</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bxs-eraser"></i>
                    <span class="badge rounded-pill bg-danger float-end">10</span>
                    <span key="t-forms">Forms</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-list-ul"></i>
                    <span key="t-tables">Tables</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bxs-bar-chart-alt-2"></i>
                    <span key="t-charts">Charts</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-aperture"></i>
                    <span key="t-icons">Icons</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-map"></i>
                    <span key="t-maps">Maps</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-share-alt"></i>
                    <span key="t-multi-level">Multi Level</span>
                </a>
            </li>
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
