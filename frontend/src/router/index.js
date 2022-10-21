import {createRouter,createWebHistory} from "vue-router";


const routes = [
    {
        path:"/",
        name:'home',
        component: ()=>import('@/views/Home.vue')
    },
    {
        path:"/update/:id",
        name:'transaksi.update',
        component: ()=>import('@/views/transaksi/update.vue')
    },
    {
        path:"/create",
        name:'transaksi.create',
        component: ()=>import('@/views/transaksi/create.vue')
    }
];

const router = createRouter({
    history:createWebHistory(),
    routes
});

export default router;