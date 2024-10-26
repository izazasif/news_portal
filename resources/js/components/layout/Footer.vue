<template>
    <!-- Footer Section -->
    <footer class="bg-beige py-6 font-bold text-l" style="color: rgb(110 75 75);background-color: whitesmoke;font-family: 'GramophoneShadedNF', serif;">
      <div class="container mx-auto px-4 flex flex-wrap justify-center md:justify-between">
        <!-- Logo and First Section -->
        <div class="w-full md:w-auto mb-8 md:mb-0 text-center">
          <img :src="logo" alt="Eventhub Logo" class="h-18 w-60 mb-4 mx-auto">
          <p class="font-semibold mb-2 font-serif">Caută după evenimente</p>
          <ul>
            <li class="mb-1 font-serif">Nuntă</li>
            <li class="mb-1 font-serif">Botez</li>
            <li class="mb-1 font-serif">Aniversare</li>
            <li class="mb-1 font-serif">Petrecere tematică</li>
            <li class="mb-1 font-serif">Eveniment corporate</li>
          </ul>
        </div>
        <!-- Other Sections (hidden on mobile) -->
        <div class="hidden md:block">
          <p class="font-semibold mb-2 font-serif">Pentru furnizori</p>
          <ul>
            <li class="mb-1 font-serif">Înregistrează-ți afacerea</li>
            <li class="mb-1 font-serif">Eventhub PRO</li>
            <li class="mb-1 font-serif">Premiile "Furnizor de top"</li>
          </ul>
        </div>
        <div class="hidden md:block">
          <p class="font-semibold mb-2 font-serif">Termeni și politici</p>
          <ul>
            <li class="mb-1 font-serif">Termeni și condiții</li>
            <li class="mb-1 font-serif">Politica de confidențialitate</li>
            <li class="mb-1 font-serif">Politica privind cookie-urile</li>
          </ul>
        </div>
        <div class="hidden md:block">
          <p class="font-semibold mb-2 font-serif">Eventhub</p>
          <ul>
            <li class="mb-1 font-serif">Despre noi</li>
            <li class="mb-1 font-serif">Contactează-ne</li>
            <li class="mb-1 font-serif">Întrebări frecvente</li>
          </ul>
        </div>
      </div>
    </footer>
  </template>
  
  <script setup>
   const logo = '/image/hello.png';
  </script>
  
  <style scoped>
  </style>
  