<template>
    <div class="pb-8">
        <Navbar />
        <div class="mx-auto max-w-5xl my-8 ">
            <h1 class="text-center text-2xl font-bold text-black">BERBAGI EDUKASI</h1>
            <div class="h-1 w-14 bg-ijo-muda text-center mx-auto"></div>

            <!-- Tab Edukasi -->
            <div class="tabs tabs-boxed bg-white flex justify-center my-9 ">

                <a :class="tabName === 'all' ? 'tab border-2 flex justify-center text-white font-semibold items-center px-6 h-10 rounded-md bg-ijo-muda border-ijo-muda' :
                'tab border-2 flex justify-center text-black font-semibold items-center px-6 h-10'
                " @click="clickTab('all')">Semua Edukasi</a> 

                <a :class="tabName === 'edukasi-bertani' ? 'tab border-2 flex justify-center text-white font-semibold items-center px-6 h-10 rounded-md bg-ijo-muda border-ijo-muda' :
                'tab border-2 flex justify-center text-black font-semibold items-center px-6 h-10'
                " @click="clickTab('edukasi-bertani')">Edukasi Bertani</a> 

                <a :class="tabName === 'edukasi-berniaga' ? 'tab border-2 flex justify-center text-white font-semibold items-center px-6 h-10 rounded-md bg-ijo-muda border-ijo-muda' :
                'tab border-2 flex justify-center text-black font-semibold items-center px-6 h-10'
                " @click="clickTab('edukasi-berniaga')">Edukasi Berniaga</a>

                <a :class="tabName === 'lahan-bertani' ? 'tab border-2 flex justify-center text-white font-semibold items-center px-6 h-10 rounded-md bg-ijo-muda border-ijo-muda' :
                'tab border-2 flex justify-center text-black font-semibold items-center px-6 h-10'
                " @click="clickTab('lahan-bertani')">Lahan Bertani</a>

                <a :class="tabName === 'inovasi-bertani' ? 'tab border-2 flex justify-center text-white font-semibold items-center px-6 h-10 rounded-md bg-ijo-muda border-ijo-muda' :
                'tab border-2 flex justify-center text-black font-semibold items-center px-6 h-10'
                " @click="clickTab('inovasi-bertani')">Inovasi Bertani</a>

            </div>     

            <h3 class="text-black font-semibold text-lg">Terbaru</h3>

            <div class="grid grid-cols-4 gap-6 mt-3">
                <div class="card card-compact w-62 bg-gray-100 shadow-xl" v-for="baru in terbaru" :key="baru.id">
                    <figure >
                        <img :src="'../../src/' + baru.thumbnail" :alt="baru.title" class="w-full h-32"/>
                    </figure>
                    <div class="card-body flex flex-wrap mt-8">
                        <div class="flex flex-wrap">
                            <p class="break-words -mt-5 w-[10px] h-[10px] text-black font-bold text-center">{{ baru.title }}
                                
                            </p>
                        </div>
                        
                        <div class="text-end mt-20">
                            <p class="text-black text-sm">Lihat detail informasinya
                            <span class="ml-3 text-ijo-tua">
                                <font-awesome-icon icon="circle-arrow-right" /> 
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="text-black font-semibold text-lg mt-12">Untukmu</h3>

            <div class="grid grid-cols-4 gap-6 mt-3">
                <div class="card card-compact w-62 bg-gray-100 shadow-xl" v-for="baru in terbaru" :key="baru.id">
                    <figure >
                        <img :src="'../../src/' + baru.thumbnail" :alt="baru.title" class="w-full h-32"/>
                    </figure>
                    <div class="card-body flex flex-wrap mt-8">
                        <div class="flex flex-wrap">
                            <p class="break-words -mt-5 w-[10px] h-[10px] text-black font-bold text-center">{{ baru.title }}
                                
                            </p>
                        </div>
                        
                        <div class="text-end mt-20">
                            <p class="text-black text-sm">Lihat detail informasinya
                            <span class="ml-3 text-ijo-tua">
                                <font-awesome-icon icon="circle-arrow-right" /> 
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref,computed} from 'vue';
import Navbar from "../components/Navbar.vue"

const tabName = ref('all');

const clickTab = (name) => tabName.value = name;

const terbaru = [
    {
        id:1,
        thumbnail:'assets/images/dummy/1.jpg',
        title:'Hasil bumi yang cocok untuk ditanam'
    },
    {
        id:2,
        thumbnail:'assets/images/dummy/2.jpg',
        title:'Pemakaian pupuk yang baik untuk padi'
    },
    {
        id:3,
        thumbnail:'assets/images/dummy/3.jpg',
        title:'Menambah relasi untuk saling bertukar informasi'
    },
    {
        id:4,
        thumbnail:'assets/images/dummy/4.jpg',
        title:'Membasmi musuh besar petani dengan cara ini'
    },
]




</script>