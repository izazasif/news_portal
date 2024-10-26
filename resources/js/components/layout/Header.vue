<template>
    <header class="fixed top-0 left-0 right-0 bg-black text-black shadow-md z-50" style="background-color: whitesmoke;">
      <div class="container mx-auto flex justify-between items-center p-4">
        <!-- Logo -->
        <div class="flex items-center">
          <img :src="logo" alt="Eventhub Logo" class="h-10 w-50">
        </div>
        
        <!-- Navigation Links -->
        <nav class="hidden md:flex flex-grow items-center" style="margin-left: 100px;">
          <!-- Left Navigation Links -->
          <div class="flex space-x-4 md:space-x-9 relative">
            <a href="#" class="hover:text-gray-400 transition duration-300 text-xl font-bold" style="font-family: 'GramophoneShadedNF', serif;" @click="onShow">Home</a>

            <a href="#" class="hover:text-gray-400 transition duration-300 font-bold text-xl" style="font-family: 'GramophoneShadedNF', serif;" @click="onShowCat">World</a>
            
            <a href="#" class="hover:text-gray-400 transition duration-300 font-bold text-xl" style="font-family: 'GramophoneShadedNF', serif;" @click="onShow">Arts and Culture</a>

            <a href="#" class="hover:text-gray-400 transition duration-300 font-bold text-xl" style="font-family: 'GramophoneShadedNF', serif;" @click="onShow">Sports</a>

            <a href="#" class="hover:text-gray-400 transition duration-300 font-bold text-xl" style="font-family: 'GramophoneShadedNF', serif;" @click="onShow">Tech & Startup</a>

            <a href="#" class="hover:text-gray-400 font-bold transition duration-300 font-bold text-xl" style="font-family: 'GramophoneShadedNF', serif;">Openions</a>
          </div>
          
          <!-- Right Navigation Links -->
          <div class="ml-auto flex items-center space-x-4">
            <div class="relative">
              <button @click="toggleSearch" class="hover:text-gray-400 transition duration-300 focus:outline-none font-bold text-xl">
                <i class="fas fa-search"></i>
              </button>
              <transition name="fade">
                <input v-if="isSearchOpen" type="text" placeholder="Search..." class="absolute top-0 right-0 w-full md:w-64 p-2 border rounded bg-white text-black focus:outline-none font-serif">
              </transition>
            </div>
            <a href="#" class="hover:text-gray-400 transition duration-300 font-bold text-l"><i class="fas fa-user il text-black"></i> Sign In</a>
          </div>
        </nav>
  
        <!-- Mobile Menu Button -->
        <div class="md:hidden lg:hidden flex items-center">
          <!-- Mobile Search Button -->
          <button @click="toggleSearch" class="text-gray focus:outline-none ml-10">
            <i class="fas fa-search"></i>
          </button>
          <button @click="toggleMenu" class="text-gray focus:outline-none ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
  
      <!-- Mobile Search Bar -->
      <transition name="fade">
        <div v-if="isSearchOpen" class="md:hidden lg:hidden bg-white text-black p-2">
          <input type="text" placeholder="Search..." class="w-full p-2 border rounded focus:outline-none font-serif">
        </div>
      </transition>
  
      <!-- Mobile Menu -->
      <div v-if="isMenuOpen" class="lg:hidden sm:hidden bg-black text-white">
        <a href="#" class="block px-4 py-2 hover:bg-gray-800 font-serif">Home</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-800 font-serif">World</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-800 font-serif">Arts and Culture</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-800 font-serif">Sports</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-800 font-serif">Tech & Startup</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-800 font-serif"><i class="fas fa-user il text-white"></i> Sign In</a>
        <!-- <div @click="toggleCategoryMenu" class="block px-4 py-2 hover:bg-gray-800 font-serif">Category</div>
        <transition name="fade">
          <div v-if="isCategoryMenuOpen" class="bg-white text-black p-4 z-40 ml-4 mr-8">
            <div class="grid grid-cols-1 gap-4">
              <div class="flex flex-col space-y-2">
                <h4 class="font-bold">Column 1</h4>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 1</a>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 2</a>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 3</a>
              </div>
              <div class="flex flex-col space-y-2">
                <h4 class="font-bold">Column 2</h4>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 1</a>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 2</a>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 3</a>
              </div>
              <div class="flex flex-col space-y-2">
                <h4 class="font-bold">Column 3</h4>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 1</a>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 2</a>
                <a href="#" class="hover:text-gray-400 transition duration-300 font-serif">Subcategory 3</a>
              </div>
            </div>
          </div>
        </transition>
      </div> -->
      </div>
    </header>
  </template>
    <script setup>
    import { ref } from 'vue';
    const logo = '/image/hello.png';
    import { useRouter } from "vue-router"


    const router = useRouter()
    const isMenuOpen = ref(false);
    const isSearchOpen = ref(false);
    const showCategoryMenu = ref(false);
    const isCategoryMenuOpen = ref(false);
  
    function toggleMenu() {
    isMenuOpen.value = !isMenuOpen.value;
  }
  
  function toggleSearch() {
    isSearchOpen.value = !isSearchOpen.value;
  }
  function toggleCategoryMenu() {
    isCategoryMenuOpen.value = !isCategoryMenuOpen.value;
  }
  const onShow =  () => {
    router.push('/');
}
const onShowCat = () => {
  router.push('/newscategory');
}
    </script>
    
    <style  scoped>
    .fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
      opacity: 0;
    }
    </style>
    