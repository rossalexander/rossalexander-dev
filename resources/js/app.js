import {createApp, h} from 'vue'
import {createInertiaApp, Head} from '@inertiajs/inertia-vue3'
import {InertiaProgress} from "@inertiajs/progress";
import Layout from "./Shared/Layout";

createInertiaApp({
    resolve: name => {
        let page = require(`./Pages/${name}`).default;
        page.layout ??= page.layout = Layout;
        return page;
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component("Head", Head)
            .mount(el)
    },

    title: title => "RossAlexander.dev / " + title
})

InertiaProgress.init({
    color: '#E11D48',
});
