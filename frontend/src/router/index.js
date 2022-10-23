import {createRouter,createWebHistory} from "vue-router";


const routes = [
    {
        path:"/",
        name:'home',
        component: ()=>import('@/views/Home.vue')
    },
    {
        path:"/keranjang",
        name:"keranjang",
        component: ()=>import('@/views/Keranjang.vue')
    },
    {
        path:"/notifikasi",
        name:"notifikasi",
        component: ()=>import('@/views/Notifikasi.vue')
    },
    {
        path:"/berniaga",
        name:"berniaga",
        component: ()=>import('@/views/Berniaga.vue')
    },
    {
        path:"/edukasi",
        name:"edukasi",
        component: ()=>import('@/views/Edukasi.vue')
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