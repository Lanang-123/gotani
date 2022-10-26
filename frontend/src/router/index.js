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
        path:"/register",
        name:"register",
        component: ()=>import('@/views/auth/Register.vue')
    },
    {
        path:"/login",
        name:"login",
        component: ()=>import('@/views/auth/Login.vue')
    },
    {
        path:"/jasa",
        name:"jasa",
        component: ()=>import('@/views/JasaPertanian.vue')
    },
    
];

const router = createRouter({
    history:createWebHistory(),
    routes
});

export default router;