import Vue from 'vue';
import VueRouter from 'vue-router';

import NavBarLogin from "./components/NavBarLogin"
import NavBarLogout from "./components/NavBarLogout"

Vue.use(VueRouter)

const router = new VueRouter({
    routes : [
        {
            path: "/compte",
            component: NavBarLogin
        },

        {
            path: "/login",
            component: NavBarLogout
        }
    ]
})

export default router
