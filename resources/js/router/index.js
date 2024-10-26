import { createRouter, createWebHistory }  from "vue-router";

import App from '../components/layout/Home.vue';
import Details from '../components/layout/Details.vue';
import Category from '../components/layout/Category.vue';
const routes = [
    {
        path:'/',
        component:App
    },
    {
        path: '/show/:slug',  // Add the :slug dynamic segment
        component: Details,
        props: true,  // Pass route params as props to the component
    },
    {
        path: '/newscategory',  // Add the :slug dynamic segment
        component: Category,
    }
]

const router = createRouter({
    history:createWebHistory(),
    routes
})

export default router 