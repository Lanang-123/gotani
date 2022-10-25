<template>
    <div class="navbar bg-white shadow-lg">
    <div class="flex-1 md:gap-10">
        <router-link :to="{name:'home'}" class="btn btn-ghost normal-case text-xl text-black"><b class="text-ijo-muda">GO</b>Tani</router-link>
        
        <div class="form-control md:block hidden">
            <div class="input-group lebar-input h-8">
                <input type="text" placeholder="Search…" class="input input-bordered bg-white border border-abu border-2 w-full max-h-full" />
                <button class="bg-abu border hide-border max-h-full p-3 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-ijo-tua" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Search Input -->

    
    <div class="flex-none gap-1 md:gap-2">
        <div class="flex items-center justify-center gap-2 md:mx-0 mx-3">
            <router-link :to="{name:'berniaga'}" class="h-5 w-5 text-xl p-5 bg-gray-100 flex justify-center items-center  rounded-full  hover:text-ijo-tua "><font-awesome-icon icon="store" /></router-link>
            <p class="text-xs text-ijo-tua font-semibold md:block hidden">Berniaga</p>
        </div>
        <div class="w-0 h-10 border-l-2 border-gray-200 "></div>
        <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <div class="indicator">
            <div class="h-5 w-5 text-xl flex item-center justify-center hover:text-ijo-tua"><font-awesome-icon icon="cart-shopping" /></div>
            <span class="badge badge-sm indicator-item mt-1">{{ jumlahCart }}</span>
            </div>
        </label>
        <!-- <p><font-awesome-icon icon="phone" /></p> -->
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-white shadow">
                <div class="card-body">
                    <span class="font-bold text-lg">8 Items</span>
                    <span class="text-info">Subtotal: Rp. 10.000,00</span>
                    <div class="card-actions">
                        <router-link class="btn btn-primary btn-block" :to="{name:'keranjang'}">View cart</router-link>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown dropdown-end md:mr-7 mr-2">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <div class="indicator">
            <div class="h-5 w-5 text-xl flex item-center justify-center hover:text-ijo-tua"><font-awesome-icon icon="bell" /></div>
            <span class="badge badge-sm indicator-item mt-1">{{ jumlahCart }}</span>
            </div>
        </label>
        <!-- <p><font-awesome-icon icon="phone" /></p> -->
            <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-white shadow">
                <div class="card-body">
                    <span class="font-bold text-lg">8 Items</span>
                    <span class="text-info">7 Pesan</span>
                    <div class="card-actions">
                        <router-link :to="{name:'notifikasi'}" class="btn btn-primary btn-block">Lihat Notifikasi</router-link>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
    
            <div class="w-10 rounded-full">
                <img src="https://placeimg.com/80/80/people" />
            </div>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
            <li>
            <a class="justify-between">
                Profile
                <span class="badge">New</span>
            </a>
            </li>
            <li><a>Settings</a></li>
            <li><a>Logout</a></li>
        </ul>
        </div>
        <p class="leading text-black text-sm md:block hidden">HALO,lANANG</p>
        
    </div>
    
    </div>
</template>

<script setup>
    import {ref} from 'vue'
    
    const jumlahCart = ref(0);
</script>