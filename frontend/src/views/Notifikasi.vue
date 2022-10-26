<template>
    <div>
        <Navbar />
        <div class="mx-auto max-w-3xl h-screen my-5">
            <div class="py-2 bg-white px-4 w-full shadow-md border rounded">
                <h1 class="text-black font-bold">Notifikasi</h1>
            </div>
            <div class="tabs w-full grid grid-cols-2 my-2">
                <a :class="menu1 ? 'tab border-b-4 border-ijo-muda text-ijo-muda font-bold' : 'tab font-semibold text-gray-400'" @click="handleMenu">Transaksi</a> 
                <a :class="menu2 ? 'tab border-b-4 border-ijo-muda text-ijo-muda font-bold' : 'tab font-semibold text-gray-400'" @click="handleMenu">Untuk Kamu</a> 
            </div>

            <!-- Dinamic Notif Transaksi-->
            
            <div class="container max-w-5xl px-4 py-12 mx-auto" v-if="fitur">
                <div class="grid gap-4 mx-4 sm:grid-cols-12">
                    <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                        <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-16 sm:before:absolute sm:before:top-2 sm:before:bottom-6 sm:before:w-0.5 sm:before:-left-3 before:bg-ijo-muda">
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-ijo-muda">
                                <div class="flex items-center gap-6">
                                    <font-awesome-icon icon="clock" class="text-ijo-tua text-5xl"/>
                                    <h3 class="text-xl font-semibold  text-black">Menunggu Konfirmasi </h3>
                                </div>
                            </div>
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-ijo-muda">
                                <div class="flex items-center gap-6">
                                    <font-awesome-icon icon="rotate" class="text-ijo-tua text-5xl"/>
                                    <h3 class="text-xl font-semibold  text-black">Pesanan Diproses </h3>
                                </div>
                            </div>
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-ijo-muda">
                                <div class="flex items-center gap-6">
                                    <font-awesome-icon icon="van-shuttle" class="text-ijo-tua text-5xl"/>
                                    <h3 class="text-xl font-semibold  text-black">Sedang Dikirim </h3>
                                </div>
                            </div>
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-abu">
                                <div class="flex items-center gap-6">
                                    <font-awesome-icon icon="location-dot" class="text-ijo-tua text-5xl"/>
                                    <h3 class="text-xl font-semibold  text-black">Sampai Tujuan </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-12 flex flex-col gap-5" v-else>
                <div class="flex max-w-xl space-x-2 sm:space-x-4 hover:shadow-md rounded">
                    <div class="flex-shrink-0 object-cover w-16 h-16 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500 bg-ijo-muda text-white">
                        <div class="flex justify-center items-center h-full flex-wrap text-center">
                            <h1 class="text-xl">Spesial Untukmu</h1>
                        </div>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <div class="flex justify-between w-full pb-2 space-x-2 items-center flex-wrap">
                            <div class="space-y-1 w-full my-auto">
                                <h3 class="text-lg font-semibold leading-snug sm:pr-8 text-black">1 Promo untuk User</h3>
                                <p class="text-sm dark:text-gray-400">Banyak voucher yang menantimu, <b class="text-ijo-tua">Ayo claim disini sekarang</b></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="flex max-w-xl space-x-2 sm:space-x-4 hover:shadow-md rounded">
                    <div class="flex-shrink-0 object-cover w-16 h-16 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500 bg-ijo-muda text-white">
                        <div class="flex justify-center items-center h-full flex-wrap text-center">
                            <h1 class="text-xl">Spesial Untukmu</h1>
                        </div>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <div class="flex justify-between w-full pb-2 space-x-2 items-center flex-wrap">
                            <div class="space-y-1 w-full my-auto">
                                <h3 class="text-lg font-semibold leading-snug sm:pr-8 text-black">1 Promo untuk User</h3>
                                <p class="text-sm dark:text-gray-400">Banyak voucher yang menantimu, <b class="text-ijo-tua">Ayo claim disini sekarang</b></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script setup>
    import {ref} from 'vue'
    import Navbar from "../components/Navbar.vue"
    const menu1 = ref(true);
    const menu2 = ref(false);

    const fitur = ref(true);

    let handleMenu = () => {
        menu1.value = !menu1.value
        menu2.value = !menu2.value
        fitur.value = !fitur.value
    }

</script>