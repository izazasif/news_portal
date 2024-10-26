<template>
    <div>
    <Header />
    <br>
      <br>
      <br>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-6 py-4">
      <!-- Left Column -->
      <div class="space-y-4">
        <div class="border border-gray-300 p-4 rounded-lg flex">
          <a href="" class="flex items-center hover:text-red-400 transition duration-300">
            <img :src="logo3" alt="News Image 1" class="w-24 h-24 object-cover mr-4 rounded-lg">
            <div>
              <h3 class="text-l font-bold text-gray-800 font-serif">News Heading 1</h3>
              <p class="text-gray-600 font-serif">Brief description of the news item goes here.</p>
              <span class="text-xs text-gray-500 font-serif">1 hour ago</span>
            </div>
          </a>
        </div>
        <div class="border border-gray-300 p-4 rounded-lg flex">
          <a href="" class="flex items-center">
            <img :src="logo2" alt="News Image 2" class="w-24 h-24 object-cover mr-4 rounded-lg">
            <div>
              <h3 class="text-l font-bold text-gray-800 font-serif">News Heading 2</h3>
              <p class="text-gray-600 font-serif">Brief description of the news item goes here.</p>
              <span class="text-xs text-gray-500 font-serif">1 hour ago</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Middle Column -->
      <div class="border border-gray-300 p-4 rounded-lg">
        <a href="">
          <img :src="logo3" alt="Large News Image" class="w-full h-48 object-cover mb-2 rounded-lg">
          <h2 class="text-xl font-bold text-gray-800 font-serif">Large News Heading</h2>
          <p class="text-gray-600 mt-2 font-serif">Detailed description of the large news item goes here. This section can contain more text and information to give a comprehensive overview of the news.</p>
          <span class="text-xs text-gray-500 font-serif">1 hour ago</span>
        </a>
      </div>

      <!-- Right Column -->
      <div class="space-y-4">
        <div class="border border-gray-300 p-4 rounded-lg flex">
          <a href="" class="flex items-center">
            <img :src="logo3" alt="News Image 3" class="w-24 h-24 object-cover mr-4 rounded-lg">
            <div>
              <h3 class="text-l font-bold text-gray-800 font-serif">News Heading 3</h3>
              <p class="text-gray-600 font-serif">Brief description of the news item goes here.</p>
              <span class="text-xs text-gray-500 font-serif">1 hour ago 55</span>
            </div>
          </a>
        </div>
        <div class="border border-gray-300 p-4 rounded-lg flex">
          <a href="" class="flex items-center">
            <img :src="logo2" alt="News Image 4" class="w-24 h-24 object-cover mr-4 rounded-lg">
            <div>
              <h3 class="text-l font-bold text-gray-800 font-serif">News Heading 4</h3>
              <p class="text-gray-600 font-serif">Brief description of the news item goes here.</p>
              <span class="text-xs text-gray-500 font-serif">1 hour ago</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 px-6 py-2">
        <div class="bg-[#1f5375] p-6 w-full" style="background-color: #146a69;">
            <div class="flex justify-between items-center">
                <span class="text-xs md:text-sm text-white font-serif">1 minute ago</span>
                <span class="text-white text-sm font-serif">Category Name</span>
            </div>
            <div class="mt-1">
                <span class="text-white text-xs font-serif">Writer Name</span>
                <h2 class="text-2xl font-bold text-white mt-1 font-serif">Div Heading</h2>
                <p class="text-white mt-1 leading-tight font-serif">
                    Content for the div. Some text describing the content below the heading. Make sure it provides valuable information.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio odio dolorum nihil blanditiis neque consequatur facilis sapiente deserunt dolor minus accusantium similique, cumque recusandae ratione vitae! Consequuntur beatae molestias libero?
                </p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 mx-auto px-2 py-2">
        <div class="p-2 md:p-3">
            <img :src="logo3" alt="Privacy Policy Header" class="w-full h-48 md:h-64 object-cover mb-2 md:mb-4 transform transition-transform duration-300 hover:scale-105">
            <a href="#" class="text-gray-600 hover:underline">
                <p class="leading-tight text-xs md:text-base font-serif">We are Bangladeshi People, Need to Know Everything</p>
            </a>
            <span class="text-xs md:text-sm text-gray-500 font-serif">1 minute ago</span>
        </div>
        <div class=" p-2 md:p-3">
            <img :src="logo3" alt="Privacy Policy Header" class="w-full h-48 md:h-64 object-cover mb-2 md:mb-4 transform transition-transform duration-300 hover:scale-105">
            <a href="#" class="text-gray-600 hover:underline">
                <p class="leading-tight text-xs md:text-base font-serif">We are Bangladeshi People, Need to Know Everything</p>
            </a>
            <span class="text-xs md:text-sm text-gray-500 font-serif">1 minute ago</span>
        </div>
        <div class=" p-2 md:p-3">
            <img :src="logo3" alt="Privacy Policy Header" class="w-full h-48 md:h-64 object-cover mb-2 md:mb-4 transform transition-transform duration-300 hover:scale-105">
            <a href="#" class="text-gray-600 hover:underline">
                <p class="leading-tight text-xs md:text-base font-serif">We are Bangladeshi People, Need to Know Everything</p>
            </a>
            <span class="text-xs md:text-sm text-gray-500 font-serif">1 minute ago</span>
        </div>
        <div class=" p-2 md:p-3">
            <img :src="logo3" alt="Privacy Policy Header" class="w-full h-48 md:h-64 object-cover mb-2 md:mb-4 transform transition-transform duration-300 hover:scale-105">
            <a href="#" class="text-gray-600 hover:underline">
                <p class="leading-tight text-xs md:text-base font-serif">We are Bangladeshi People, Need to Know Everything</p>
            </a>
            <span class="text-xs md:text-sm text-gray-500 font-serif">1 minute ago</span>
        </div>
    </div>
    <Footer />
</div>
  </template>
  
  <script setup>
  const logo3 = '/image/cricket.jpeg';
   import Header from  "./Header.vue";
   import Footer from  "./Footer.vue";
  </script>
  
  <style scoped>
  /* Ensure images are styled properly */
  img {
    border-radius: 0.5rem; /* rounded-lg */
  }
  </style>
  