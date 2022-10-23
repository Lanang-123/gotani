<template>
    <div class="mx-auto md:max-w-3xl my-10">
        <h1 class="text-xl font-bold text-black">KERANJANG</h1>
        <br>
        <div class="form-control w-32">
            <label class="label cursor-pointer">
                <input type="checkbox" :checked="isChecked" class="checkbox checkbox-accent border-2 border-abu" @click="checkAll"/>
                <span class="label-text font-semibold text-md">Pilih Semua</span> 
            </label>
        </div>
        <div class="mt-4 p-[2px] w-full bg-abu rounded-full"></div>

        <!-- List Keranjang -->
            <div class="flex flex-col max-w-full space-y-4 dark:bg-gray-900 dark:text-gray-100  py-3">
              
                <!-- Data List -->
                <div class="form control">
                    <label class="label cursor-pointer">
                        <div class="w-32 flex gap-4 items-center">
                            <input type="checkbox" :checked="isChecked" class="checkbox checkbox-accent border-2 border-abu" />
                            
                            <h2 class="text-lg font-semibold text-black">Your cart</h2>
                        </div>
                    </label>
                    <p class="pl-11 -mt-2 text-sm">Buleleng</p>
                    <ul class="flex flex-col divide-y divide-gray-400">
                        <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                            <div class="flex w-full space-x-2 sm:space-x-4">
                                <input type="checkbox" :checked="isChecked" class="checkbox checkbox-accent border-2 border-abu ml-1" />
                                <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="Polaroid camera">
                                <div class="flex flex-col justify-between w-full pb-4">
                                    <div class="flex justify-between w-full pb-2 space-x-2">
                                        <div class="space-y-1">
                                            <h3 class="text-lg font-semibold leading-snug sm:pr-8">Polaroid camera</h3>
                                            <p class="text-sm dark:text-gray-400">xl</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-lg font-semibold text-black">Rp. {{ total }}</p>
                                            <p class="text-sm line-through dark:text-gray-600 text-ijo-muda">Rp. 10.000,00</p>
                                        </div>
                                    </div>
                                    <div class="flex text-sm">
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="flex items-center py-1 pl-0 space-x-1 hover:text-ijo-muda text-lg" @click="qty++">
                                            <font-awesome-icon icon="circle-plus"/>
                                            </button>
                                            <span>{{ qty }}</span>
                                            <button type="button" class="flex items-center px-2 py-1 pl-0 space-x-1 hover:text-ijo-muda text-lg">
                                            <font-awesome-icon icon="circle-minus" @click="qty == 0 ? false : qty--"/>
                                            </button>

                                        </div>
                                        <button type="button" class="flex items-center px-2 py-1 pl-0 space-x-1 hover:text-amber-600 ml-4">
                                            <font-awesome-icon icon="trash"/>
                                            <span>Remove</span>
                                        </button>
                                        <button type="button" class="flex items-center px-2 py-1 space-x-1 hover:text-red-500">
                                            <span class="text-2xl ">&hearts;</span>
                                            <span>Add to favorites</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    <input type="text" placeholder="Catatan untuk penjual..." className="input input-bordered input-accent w-full bg-white border-none text-black placeholder-ijo-muda font-semibold" />

                    <div class="mt-1 p-[1px] w-full bg-abu rounded-full"></div>
                </div>
                


                <!-- Checkout -->
                <div class="space-y-1 text-right my-2">
                    <p class="text-ijo-muda">Total Pembayaran:
                        <span class="font-semibold">Rp. {{total}}</span>
                    </p>
                    
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" class="px-6 py-2 border rounded-md dark:border-violet-400">Back
                        <span class="sr-only sm:not-sr-only">to shop</span>
                    </button>
                    <button type="button" class="px-6 py-2 border rounded-md dark:bg-violet-400 dark:text-gray-900 dark:border-violet-400 bg-ijo-muda text-white font-semibold">
                        <span class="sr-only sm:not-sr-only">Continue to</span>Checkout
                    </button>
                </div>
               
            </div>

            


    </div>
</template>

<script setup>
    import {ref,computed} from 'vue'
    const qty = ref(0);
    const rupiah = ref(1000);
    const isChecked = ref(false);

    let checkAll = () => isChecked.value = !isChecked.value
    

    let total = computed(()=>{
        if(qty.value == 0) return rupiah;
        return qty.value * rupiah.value;
    })

</script>