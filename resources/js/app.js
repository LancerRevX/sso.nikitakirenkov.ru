import { createApp, h } from 'vue';
import { createI18n } from 'vue-i18n';
import { createInertiaApp } from '@inertiajs/vue3';
// eslint-disable-next-line no-unused-vars
// import bootstrap from 'bootstrap';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';
import '../css/app.css';

import { messages } from './translations';

createInertiaApp({
    title: title => `${title} - nikitakirenkov.ru - SSO`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        let i18n = createI18n({
            locale: 'ru',
            fallbackLocale: 'en-US',
            messages,
        });

        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(i18n)
            .mount(el);
    },
});