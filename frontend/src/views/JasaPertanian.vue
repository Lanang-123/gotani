<script setup>
    import Navbar from "../components/Navbar.vue"
    import {ref,reactive} from 'vue'

    const activeFitur1 = ref(true);
    const activeFitur2 = ref(true);
    const activeFitur3 = ref(true);

    const toggleWishlist = (jasa) => {
       jasa.isWishlist = !jasa.isWishlist;
    }

    const jasas = ref(
    [
        {
            id:1,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/1.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:2,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/2.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:3,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/3.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:4,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/4.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:5,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/5.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:6,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/6.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:7,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/7.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:8,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/8.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
        {
            id:1,
            username:'toni_12',
            thumbnail: 'assets/images/dummy/1.jpg',
            aboutme:'Saya menerima jasa penggilingan padi,anda bisa mengordernya sekarang',
            isWishlist:false,
            hargaSewa:10000
        },
    ]);

</script>

<template>
    <div class="bg-white mb-12">
        <Navbar />

        <div class="mx-auto max-w-6xl my-9">
            <h1 class="text-center text-2xl font-bold text-black">JASA PERTANIAN</h1>
            <div class="w-14 h-1 bg-ijo-muda mx-auto rounded-full"></div>

            <div class="flex justify-start items-center space-x-4 mt-12">
                <div class="dropdown">
                    <label 
                    tabindex="0" 
                    :class="activeFitur1 ? 'btn m-1 bg-white text-black border-2 border-abu hover:bg-ijo-muda hover:text-white hover:border-ijo-muda flex justify-center items-center gap-4 capitalize'
                    : 'btn m-1 bg-ijo-muda text-white border-2 border-ijo-muda flex justify-center items-center gap-4 capitalize hover:bg-ijo-muda hover:text-white hover:border-ijo-muda'
                    "
                    @click="activeFitur1 = !activeFitur1"
                    >Kategori Jasa <span>
                        <font-awesome-icon icon="caret-down" />
                    </span></label>
                    <ul v-if="!activeFitur1" tabindex="0" class="dropdown-content menu p-2 shadow-lg border-b-2 border-ijo-muda bg-white text-black rounded-box w-52">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <label 
                    tabindex="0" 
                    :class="activeFitur2 ? 'btn m-1 bg-white text-black border-2 border-abu hover:bg-ijo-muda hover:text-white hover:border-ijo-muda flex justify-center items-center gap-4 capitalize'
                    : 'btn m-1 bg-ijo-muda text-white border-2 border-ijo-muda flex justify-center items-center gap-4 capitalize hover:bg-ijo-muda hover:text-white hover:border-ijo-muda'
                    "
                    @click="activeFitur2 = !activeFitur2"
                    >Lokasi <span>
                        <font-awesome-icon icon="caret-down" />
                    </span></label>
                    <ul v-if="!activeFitur2" tabindex="0" class="dropdown-content menu p-2 shadow-lg border-b-2 border-ijo-muda bg-white text-black rounded-box w-52">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <label 
                    tabindex="0" 
                    :class="activeFitur3 ? 'btn m-1 bg-white text-black border-2 border-abu hover:bg-ijo-muda hover:text-white hover:border-ijo-muda flex justify-center items-center gap-4 capitalize'
                    : 'btn m-1 bg-ijo-muda text-white border-2 border-ijo-muda flex justify-center items-center gap-4 capitalize hover:bg-ijo-muda hover:text-white hover:border-ijo-muda'
                    "
                    @click="activeFitur3 = !activeFitur3"
                    >Harga <span>
                        <font-awesome-icon icon="caret-down" />
                    </span></label>
                    <ul v-if="!activeFitur3" tabindex="0" class="dropdown-content menu p-2 shadow-lg border-b-2 border-ijo-muda bg-white text-black rounded-box w-52">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>

            </div>


            <h3 class="text-black mt-8 font-semibold text-xl">Semua Kategori</h3>

            <div class="grid grid-cols-4 gap-7 mt-6">
                <div class="card card-compact w-70 bg-base-100 shadow-xl border-2 border-ijo-tua " v-for="jasa in jasas" :key="jasa.id">
                    <figure class='w-full h-32'>
                        <img :src="'../../src/' + jasa.thumbnail" :alt="jasa.username" />
                    </figure>
                    <div class="card-body bg-white flex flex-wrap">
                        <!-- Identity -->
                        <div class="flex items-center gap-3">
                            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img src="https://placeimg.com/80/80/people" />
                                </div>
                            </label>
                            <p class="text-black font-semibold text-xs">{{ jasa.username }}</p>
                        </div>

                        <!-- Desc -->
                        <div class="flex flex-wrap px-2">
                            <p class='text-black w-[10px] break-words h-[10px]'>{{ jasa.aboutme }}</p>
                        </div>
                        <div class="card-actions  mt-28 flex w-full justify-between items-center">
                            <button title="Add to Favorites"
                            :class="jasa.isWishlist ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleWishlist(jasa)"
                            >&hearts;</button>
                            <h5 class="text-black">Mulai dari <b class="text-lg">RP {{ jasa.hargaSewa }}</b></h5>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>