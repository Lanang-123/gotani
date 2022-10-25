<template>
    <div class="h-screen mx-auto max-w-5xl my-8 ">
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

        <!-- Terbaru -->
        

    </div>
</template>

<script setup>
import {ref,computed} from 'vue';

const tabName = ref('all');

const clickTab = (name) => tabName.value = name;




</script>