import './bootstrap';

import { createApp, h } from 'vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { createInertiaApp } from '@inertiajs/vue3'
import Guest from './Layouts/Guest.vue'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Guest
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)
    },
})
