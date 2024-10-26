<template>
    <div class="relative overflow-hidden w-full">
      <div
        class="flex transition-transform duration-300 ease-out"
        :style="{ transform: `translateX(-${currentIndex * 100}%)` }"
      >
        <div
          v-for="(slide, index) in newsitem"
          :key="index"
          class="min-w-full relative"
        >
        <img :src="`${base_path}${slide.main_image}`" :alt="slide.caption" class="w-full h-fixed object-cover" />
          <a href="" class="flex items-start w-full" @click="onShow(slide.slug)">
            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-l text-white p-2 text-center leading-tight font-serif">
              {{ slide.title }}
            </div>
          </a>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted, onUnmounted } from 'vue';
  import { useRouter } from "vue-router"
  const router = useRouter()
  let newsitem = ref([])

  const logo1 = '/image/web.jpg';
  const logo2 = '/image/van.jpg';
  const logo3 = '/image/dev.png';
  const base_path = '/website/';

  
  const currentIndex = ref(0);
  
  const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % newsitem.value.length;
  };
  
  onMounted(async () => {
    getlatestthree()
    const interval = setInterval(nextSlide, 3000); // Change to 4000 for 4 seconds
    onUnmounted(() => {
      clearInterval(interval);
    });
  });
  const getlatestthree = async() => {
        let response = await axios.get("/api/latest_three_item")
        newsitem.value = response.data.latestPosts;
    }
    const onShow =  (slug) => {
      console.log(slug);
    router.push(`/show/${slug}`);
}

  </script>
  
  <style scoped>
  /* Fixed height for all slide images */
  .h-fixed {
    height: 350px; /* Adjust this value as needed */
  }
  </style>