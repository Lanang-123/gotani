<script setup>
    import {reactive,ref} from 'vue';
    import {useRouter} from 'vue-router'
    import axios from "axios"

    const register = reactive({
        name : '',
        username: '',
        contact: '',
        email: '',
        password: '',
    });

    const isCheck = ref(false);

    const validation = ref([]);

    const router = useRouter();

    const store = () => {
        const {name,username,contact,email,password} = register;

        axios.post('http://localhost:8000/register',{name,username,contact,email,password})
            .then(()=>router.push({name:login}))
            .catch((err)=>validation.value = err.response.data)
    }






</script>

<template>
    <!-- <GuestLayout>
        <Head title="Register" />
        
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout> -->

        <div class="px-4 py-12 mx-auto max-w-screen md:px-0 md:py-0 md:-mt-20 min-h-screen">
        <div class="justify-center mx-auto text-left align-bottom transition-all transform bg-white rounded-lg sm:align-middle md:max-w-full sm:max-w-2xl sm:w-full h-50">
        
        <div class="grid flex-wrap items-center justify-center grid-cols-1  shadow-xl lg:grid-cols-3 rounded-xl md:px-23 md:py-2">
            <div class="w-full md:px-14 md:py-20 p-8">
                <div class="text-gray-500 flex justify-end md:visible invisible lg:pt-1">
                 
                   <a href="/" class="hover:text-green-700 font-semibold"> SIGN IN</a>
                </div>
                <div>
                    <div class="text-left sm:mt-5">
                    <div class="inline-flex items-center w-full">
                        <h2 class="text-3xl font-black leading-6 lg:text-4xl mx-auto lg:mx-0 text-black">Registrasi</h2>
                    </div>
                    <div class="text-base text-gray-500 tracking-20 text-center lg:text-start">
                        <h2 class="text-xl tracking-wide">Buat akun terlebih dahulu</h2>
                    </div>
                    </div>
                </div>
                <div class=" space-y-2 flex flex-col gap-2 py-6">
                    <form @submit.prevent="store" class="flex flex-col gap-2" >
                        <div class="form-group">
                            <h5 for="name" class="font-semibold text-black">Nama Lengkap</h5>
                            <input type="text" name="name" id="name" class="block w-full px-5  text-base text-black transition duration-500 ease-in-out transform border border-transparent rounded-md bg-abu focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Masukkan nama lengkap anda" v-model="register.name">
                        </div>

                        <div>
                            <h5 for="username" class="font-semibold text-black">Username</h5>
                            <input type="text" name="username" id="username" class="block w-full px-5  text-base text-black transition duration-500 ease-in-out transform border border-transparent rounded-md bg-abu focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Masukkan nama lengkap anda"
                            v-model="register.username">
                        </div>

                        <div>
                            <h5 for="contact" class="font-semibold text-black">No.Handphone / WA</h5>
                            <input type="number" name="contact" id="contact" class="block w-full px-5 text-base text-black  transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-abu focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Masukkan no hp/wa anda"
                            v-model="register.contact">
                        </div>

                        <div>
                            <h5 for="email" class="font-semibold text-black">Alamat Email</h5>
                            <input type="email" name="email" id="email" class="block w-full px-5 text-base text-black transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-abu focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Masukkan email anda"
                            v-model="register.email">
                        </div>

                        <div>
                            <h5 for="password" class="font-semibold  text-black">Password</h5>
                            <input type="password" name="password" id="password" class="block w-full px-5  text-base text-black  transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-abu focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Password minimal 8 karakter" v-model="register.password">
                        </div>
                        
                        <div class="flex align-center gap-4 my-4">
                            <input type="checkbox" class="bg-gray-200" :checked="isCheck" @click="isCheck = !isCheck">
                            <p class="-mb-3">Saya setuju dengan<a href="/" class="text-ijo-muda underline"> syarat dan ketentuan</a></p>
                        </div>

                        <div class="flex flex-col mt-4 lg:space-y-2">
                        <button type="submit" 
                        :class="isCheck ? 
                        'flex items-center justify-center w-full px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-gradient-to-r from-ijo-muda to-black  rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 register-text mt-3' 
                        : 'flex items-center justify-center w-full px-10 py-3 text-base font-medium text-center  transition duration-500 ease-in-out transform bg-abu text-black rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 register-text mt-3'"
                        :disabled="!isCheck">BUAT AKUN</button>
                        
                        </div>
                    </form>
                </div>
            </div>
            <div class="order-first md:h-full h-52 w-full lg:block bg-gradient-to-b from-ijo-tua to-black col-span-2 md:p-28 flex justify-center items-center">
                <h1 class="text-white text-7xl md:text-xl"><b class="font-bold">GO</b>Tani</h1>
            </div>
        </div>
        </div>
        </div>

</template>
