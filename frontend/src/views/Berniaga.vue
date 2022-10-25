<template>
    <div class="min-h-screen mx-auto max-w-6xl my-2">
        <div class="dark:bg-gray-800 dark:text-gray-100">
            <div class="container flex flex-col justify-center p-6 mx-auto sm:py-7 lg:py-7 lg:flex-row lg:justify-between">
                <div class="flex flex-col justify-center px-6  text-center rounded-sm max-w-xl pb-24">
                    <h1 class="text-5xl font-bold leading-none sm:text-2xl text-center text-black">Mulai Berniaga,Tingkatkan Omset Bersama
                        
                    </h1>
                    <p class="mt-6 mb-8 text-lg sm:mb-12">Ayo beri nama usahamu yang unik dan sederhana agar mudah diingat oleh konsumen
                    </p>
                    <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start mx-auto">
                        <img src="../assets/images/berniaga.png">
                    </div>
                </div>
                <div class="flex flex-col justify-start p-6 mt-8 lg:mt-0  w-3/4 border-2 rounded-lg">
                    <h5 class="text-black font-semibold">Selamat datang,<b>User</b> Ayo lengkapi form Niagamu !</h5>
                    <br>
                    <div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
                        <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-80 sm:before:w-0.5 sm:before:-left-3 before:bg-ijo-muda">
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-ijo-muda">
                                <h3 class="text-lg font-bold tracking-wide text-black">Masukkan No.HP </h3>
                                <p class="mt-2 text-gray-800 font-semibold">+62 821 34334343</p>
                            </div>
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-ijo-muda">
                                <h3 class="text-lg font-bold tracking-wide text-black">Masukkan Nama Toko </h3>
                                <label for="namaToko" class="mt-2 text-gray-800 font-semibold">Nama Toko</label>
                                <input type="text" id="namaToko" name="namaToko" placeholder="Masukkan nama toko..." class="input border-2 border-ijo-muda input-accent w-full max-w-full bg-white mt-1 text-black" />
                            </div>
                            <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-ijo-muda">
                                <h3 class="text-lg font-bold tracking-wide text-black">Masukkan Alamat Usahamu </h3>

                                <label for="kodeKecamatan" class="mt-2 text-gray-800 font-semibold">Kode atau Kecamatan</label>
                                <input type="text" id="kodeKecamatan" name="kodeKecamatan" placeholder="Masukkan kode atau Kecamatan..." class="input border-2 border-ijo-muda input-accent w-full max-w-full bg-white mt-1 text-black" />
                                <label for="kodePos" class="mt-3 text-gray-800 font-semibold">Kode Pos</label>
                                <input type="text" id="kodePos" name="kodePos" placeholder="Masukkan kode Pos..." class="input border-2 border-ijo-muda input-accent w-full max-w-full bg-white mt-1 text-black" />
                                <div class="flex mt-5 max-w-sm gap-5">
                                    <input type="checkbox" checked="checked" class="checkbox checkbox-lg rounded-full checkbox-accent text-white border-2" /> 
                                    <p class="text-gray-800 font-semibold text-sm">Saya setuju dengan <a class="text-ijo-muda">Syarat dan Ketentuan</a> serta <a class="text-ijo-muda">Kebijakan Privasi</a> GOTani</p>
                                </div>
                                <br>
                                <div class="flex gap-4">
                                    <button class="btn btn-outline px-10 rounded-xl border-2 border-gray-400 text-black font-bold hover:text-white">Kembali</button>
                                    <button class="btn btn-outline px-10 rounded-xl border-2 border-ijo-muda text-white bg-ijo-muda font-bold hover:bg-ijo-muda hover:text-white">Selesai</button>
                                </div>
                            </div>
                        </div>
			        </div>
                </div>
            </div>
	    </div>
    </div>
</template>

<script setup>

</script>