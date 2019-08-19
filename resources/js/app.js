/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import { InertiaApp } from "@inertiajs/inertia-vue";
import Vue from "vue";

Vue.use(InertiaApp);

require("@/plugins");

Vue.mixin({
    methods: {
        route: route
    },

    computed: {
        $user() {
            if (this.$page.user) {
                return this.$page.user;
            }

            return null;
        }
    }
});

const app = document.getElementById("app");

new Vue({
    render: h =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: name =>
                    import(`@/Pages/${name}`).then(module => module.default)
            }
        })
}).$mount(app);
