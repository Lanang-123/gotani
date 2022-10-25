<template>
    <div>
        <div class="my-20">
            <div class="bg-ijo-tua text-white font-bold py-3 px-3 text-xl rounded-md -mb-10 italic">
                <h1>PRODUK BARU</h1>
            </div>
            <div class="my-24 flex space-x-4 overflow-x-scroll whitespace-nowrap px-5 scrollbar-hide py-2">
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="my-20">
            <div class="bg-ijo-tua text-white font-bold py-3 px-3 text-xl rounded-md -mb-10 italic">
                <h1>PRODUK TERLARIS</h1>
            </div>
            <div class="my-24 flex space-x-4 overflow-x-scroll whitespace-nowrap px-5 scrollbar-hide py-2">
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
                <div class="w-64 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="https://th.bing.com/th/id/OIP.6Z9pQugkd7YtIFM-kujI0QHaE8?w=239&h=180&c=7&r=0&o=5&pid=1.7" />
                <div class="px-5 py-3 space-y-2 w-full overflow-auto">
                    <div class="w-full">
                        <h3 class="text-md">Super Computer <br> 9064GB RAM</h3>
                    </div>
                    <div class="space-x-2 flex flex-wrap ">
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">Free Ship</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        <span class="px-3 py-0.5 border border-ijo-muda text-[9px] text-ijo-muda">7 Day Return</span>
                        
                    </div>
                    <p class="space-x-2">
                        <span class="text-lg font-semibold">Rp 100000</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-3 py-2 bg-ijo-tua hover:bg-amber-600 text-center text-xs text-white rounded duration-300"><font-awesome-icon icon="cart-shopping" /> 
                            Tambah</a>

                        <button title="Add to Favorites"
                            :class="isFavorit ? 'text-2xl text-red-500 hover:text-red-500 duration-300' : 'text-2xl text-gray-300 hover:text-red-500 duration-300'"
                            @click="toggleFavorit"
                            >&hearts;</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import {ref} from 'vue'
    const isFavorit = ref(false);
    const toggleFavorit = () => isFavorit.value = !isFavorit.value;
    
</script>

<!-- <span class="text-sm line-through text-gray-500">$1000</span>
                <span class="text-sm text-red-700">40% off</span> -->