<template>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex justify-center gap-10">
      <button class="btn btn-primary my-10" @click="showData = !showData">
          <span v-if="!showData">Tampil</span>
          <span v-if="showData">Sembunyi</span>
      </button>
      
        <router-link 
          class="btn btn-primary my-10" 
          :to="{name:'transaksi.index',params:{id: kategoriId.id1 }}"
          @click="dataId"
          >ID : {{ kategoriId.id1}}
        </router-link>

        <router-link 
          class="btn btn-primary my-10" 
          :to="{name:'transaksi.index',params:{id: kategoriId.id2 }}"
          @click="dataId"
          >ID : {{ kategoriId.id2}}
        </router-link>

        <router-link 
          class="btn btn-primary my-10" 
          :to="{name:'transaksi.index',params:{id: kategoriId.id3 }}"
          @click="dataId"
          >ID : {{ kategoriId.id3}}
        </router-link>
      
    </div>
    <div class="flex flex-wrap -m-4 gap-8 justify-center" v-if="showData">
      <div class="card w-96 bg-white shadow-xl" v-for="post in posts" :key="post.id">
        <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title">
            {{post.title}}
                <div class="badge badge-secondary">NEW</div>
                </h2>
                <p>{{post.content}}</p>
                <div class="card-actions justify-end">
                <button class="badge badge-outline hover:bg-purple-500 hover:text-white">Detail</button> 
                <button class="badge badge-outline">Products</button>
            </div>
        </div>
      </div>


    </div>
    <div class="flex flex-wrap -m-4 gap-8 justify-center" v-else>
      <h5>Data Sembunyi</h5>
    </div>
  </div>
</section>
</template>


<script setup>
    import axios from 'axios'
    import {ref,reactive,onMounted,computed} from 'vue'
    import {useRoute} from "vue-router"

    const posts = ref([]);
    const showData = ref(true);

    const kategoriId = reactive({
      id1 : 1,
      id2 : 2,
      id3 : 3
    })
    
    const route = useRoute();

    const dataId = () => {
      axios.get(`http://localhost:8000/api/post/${route.params.id}`)
        .then(response => posts.value = response.data.data)
        .catch(err => console.log(err));
    }

    onMounted(()=>{
        axios.get('http://localhost:8000/api/post/')
        .then(response => posts.value = response.data.data)
        .catch(err=>console.log(err))
    })
    



</script>