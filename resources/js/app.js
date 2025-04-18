import '../css/app.css';
import './bootstrap';

// CSS imports
import './assets/images/favicon.ico';
import './assets/css/bootstrap.min.css';
import './assets/css/icons.min.css';
import './assets/css/app.min.css';
import './assets/libs/node-waves/waves.min.css';

// JS imports
import './assets/libs/jquery/jquery.min.js';
import './assets/libs/bootstrap/js/bootstrap.bundle.min.js';
import './assets/libs/metismenu/metisMenu.min.js';
import './assets/libs/simplebar/simplebar.min.js';

// Explicitly attach Waves to window object
import('./assets/libs/node-waves/waves.min.js').then((module) => {
    if (typeof window !== 'undefined') {
        window.Waves = module.default || module;
    }
});

import './assets/libs/apexcharts/apexcharts.min.js';
import './assets/js/pages/dashboard.init.js';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

// Initialize Waves if available
if (typeof window !== 'undefined' && typeof window.Waves !== 'undefined') {
    window.Waves.init();
}

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);

        // Reattach waves effect on Inertia page visits
        Inertia.on('finish', () => {
            if (typeof window !== 'undefined' && typeof window.Waves !== 'undefined') {
                window.Waves.init();
            }
        });

        return app;
    },
    progress: {
        color: '#4B5563',
    },
});
