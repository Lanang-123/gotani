<script setup>
    import Navbar from "../components/Navbar.vue"
    import KategoriSide from "../components/KategoriSide.vue"
    import MainProduct from "../components/MainProduct.vue"


    import { ref, onMounted } from "vue";
    import axios from "axios";

onMounted(() => {
  axios.get("http://localhost:8000/products")
    .then((res) => console.log(res))
    .catch((err) => console.log(err));
});
</script>

<template>
  <div>
    <Navbar />
    <div class="grid grid-cols-5 gap-x-32 p-10">
      <KategoriSide />

      <div class="col-span-4">
        <!-- Banner -->
        <div class="max-w-full mx-auto">
          <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div
              class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 bg-ijo-tua"
            >
              <!-- Item 1 -->
              <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                          <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                      </div> -->
              <!-- Item 2 -->
              <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                      </div> -->
              <!-- Item 3 -->
              <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                      </div> -->
            </div>
            <!-- Slider indicators -->
            <div
              class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2"
            >
              <button
                type="button"
                class="w-3 h-3 rounded-full"
                aria-current="false"
                aria-label="Slide 1"
                data-carousel-slide-to="0"
              ></button>
              <button
                type="button"
                class="w-3 h-3 rounded-full"
                aria-current="false"
                aria-label="Slide 2"
                data-carousel-slide-to="1"
              ></button>
              <button
                type="button"
                class="w-3 h-3 rounded-full"
                aria-current="false"
                aria-label="Slide 3"
                data-carousel-slide-to="2"
              ></button>
            </div>
            <!-- Slider controls -->
            <button
              type="button"
              class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
              data-carousel-prev
            >
              <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
              >
                <svg
                  class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  ></path>
                </svg>
                <span class="hidden">Previous</span>
              </span>
            </button>
            <button
              type="button"
              class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
              data-carousel-next
            >
              <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
              >
                <svg
                  class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  ></path>
                </svg>
                <span class="hidden">Next</span>
              </span>
            </button>
          </div>

          <!-- Layanan -->
          <div
            class="grid grid-cols-3 gap-10 justify-items-center -mt-7 absolute mx-auto lebar-layanan"
          >
            <router-link
              :to="{ name: 'edukasi' }"
              class="flex bg-ijo-muda py-3 gap-4 justify-center items-center px-3 text-white rounded-lg w-56"
            >
              <b class="text-2xl"><font-awesome-icon icon="graduation-cap" /></b>
              <h5 class="font-semibold">Edukasi Pertanian</h5>
            </router-link>
            <div
              class="flex bg-ijo-muda py-3 gap-4 justify-center items-center px-3 text-white rounded-lg w-56"
            >
              <b class="text-2xl"><font-awesome-icon icon="calendar-check" /></b>
              <h5 class="font-semibold">Event Pertanian</h5>
            </div>
            <router-link
              :to="{name: 'jasa'}"
              class="flex bg-ijo-muda py-3 gap-4 justify-center items-center px-3 text-white rounded-lg w-56"
            >
              <b class="text-2xl"><font-awesome-icon icon="people-group" /></b>
              <h5 class="font-semibold">Jasa Pertanian</h5>
            </router-link>
          </div>
        </div>

        <MainProduct />
      </div>
    </div>
  </div>
</template>
