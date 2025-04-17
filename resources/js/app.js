import '../css/app.css';
import './bootstrap';

// css
import './assets/images/favicon.ico';
import './assets/css/bootstrap.min.css';
import './assets/css/icons.min.css';
import './assets/css/app.min.css';
import './assets/libs/node-waves/waves.min.css';
// import './assets/js/plugin.js';
// css

// js
import './assets/libs/jquery/jquery.min.js';
import './assets/libs/bootstrap/js/bootstrap.bundle.min.js';
import './assets/libs/metismenu/metisMenu.min.js';
import './assets/libs/simplebar/simplebar.min.js';
// import './assets/libs/node-waves/waves.min.js';
import './assets/libs/apexcharts/apexcharts.min.js';
import './assets/js/pages/dashboard.init.js';
// import './assets/js/app.js';
// js


import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
