<template>
     <div>
      <Header />
      <br>
      <br>
      <br>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-6 py-4 md:pl-60 md:pr-32 md:py-4 text-sm">
    <!-- Main Content Column -->
    <div class="col-span-2 space-y-2">
      <!-- News Title -->
      <h1 class="text-2xl font-bold leading-tight font-serif"> {{ form.title }}</h1>
      
      <!-- Time and Writer Name -->
      <p class="text-xs text-gray-500">Published on August 8, 2024 by {{ form.user_name }}</p>

      <!-- Main Image with Title -->
      <div>
        <img :src="logo3" alt="News Main Image" class="w-full h-auto rounded-lg">
        <p class="text-xs text-gray-600 mt-2 italic font-serif">Image Title or Caption Goes Here</p>
      </div>

      <!-- Highlighted Text and Details -->
      <div>
        <p class="text-xl text-base font-bold text-indigo-600 font-serif" style="margin-bottom: 0.4rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    
          <div  v-html="renderedContent" class="froala-content leading-tight"></div>
      
      </div>
    <br>
      <!-- Like and Comment Section -->
      <div class="mt-8">
        <div class="flex items-center space-x-4">
          <!-- Like Button with Count -->
          <button class="flex items-center px-4 py-2 bg-green-500 text-white rounded">
            <span class="font-serif">Like</span>
            <span class="ml-2 font-serif">(25)</span>
          </button>
          <button class="flex items-center px-4 py-2 bg-gray-500 text-white rounded">
            <span class="font-serif"><i class="fa-solid fa-eye"></i></span>
            <span class="ml-2 font-serif">(89)</span>
          </button>
          <!-- Facebook Icon Button -->
          <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded">
            <i class="fab fa-facebook-f"></i>
          </button>

          <!-- X Icon Button -->
          <button class="flex items-center px-4 py-2 bg-gray-800 text-white rounded">
            <i class="fab fa-x"></i>
          </button>
          <!-- Comment Button -->
          <!-- <button class="px-4 py-2 bg-purple-500 text-white rounded font-serif">Comment</button> -->
        </div>
        <div class="mt-6">
          <p class="font-bold font-serif">Comments:</p>
          <div class="border-t mt-4 pt-4 space-y-4">
            <div>
              <p class="text-xs font-semibold font-serif">Jane Doe:</p>
              <p class="text-xs text-gray-700 font-serif">This is an insightful article. Thank you for sharing!</p>
            </div>
            <div>
              <p class="text-xs font-semibold font-serif">Alex Smith:</p>
              <p class="text-xs text-gray-700 font-serif">I found this very helpful. Keep up the good work!</p>
            </div>
          </div>
        </div>
        <!-- Comment Input Field -->
        <div class="mt-4">
          <textarea class="w-full p-2 border rounded font-serif" rows="4" placeholder="Add your comment..."></textarea>
         <button class="px-4 py-2 bg-purple-500 text-white rounded font-serif">Comment</button>
        </div>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-span-1 space-y-4">
      <!-- Title for Right Column -->
       <br>
       <br>
      <h2 class="text-xl font-bold mb-4 font-serif inline-flex items-center w-full text-red-500">
        Related News
        <div class="ml-4 flex-grow border-t-2 border-black"></div>
      </h2>

      <div class="">
             <!-- News Item 1 (Card Style) -->
          <div class="flex space-x-4">
            <!-- Text Content -->
            <div class="flex-1">
              <a href="#" class="font-bold text-gray-600 hover:text-red-500 hover:underline">
              <h3 class="text-lg font-bold leading-tight font-serif text-left">Gazipur shrine vandalism: Police to take action once complaint filed</h3>
              </a>
            </div>

            <!-- Image -->
            <div class="w-24 h-24">
              <img :src="logo3" alt="News Item Image" class="w-full h-full object-cover rounded-md">
            </div>
          </div>
          <div class="w-full">
              <p class="text-sm text-gray-600 leading-tight font-serif text-justify hover:text-blue-600 hover:underline transition-colors duration-300" style="margin-top: .5rem;">Police will take action if a complaint is filed over the vandalism and arson of Shah Sufi Fasih Pagla shrine in Gazipur, said Gazipur Sadar Police Station...</p>
          </div>
      </div>

    </div>
  </div>
  <br>
  <Footer />
  </div>
</template>

<script setup>
import Header from  "./Header.vue";
import Footer from  "./Footer.vue";
const logo3 = '/image/cricket.jpeg';
import axios from "axios";
import { onMounted, ref, computed } from "vue"
let form =ref({ slug : '' })
    const props = defineProps({
        slug:{
            type:String,
            default:''
        }
    })
    onMounted(async ()=> {
        getNews()
    })
    const getNews = async () => {
        //    let response = await axios.get(`/api/show_invoice/${props.id}`)
        //    console.log('form',response.data.invoice);
        // const response = await axios.get(`/api/details/${props.slug}`);
        //    form.value = response.data.data;
        try {
          const response = await axios.get(`/api/details/${props.slug}`);
          form.value = response.data.data;

          // Dynamically set meta tags
          document.title = response.data.meta_title || 'Default Title';
          
          // Update meta description
          let descriptionMeta = document.querySelector('meta[name="description"]');
          if (descriptionMeta) {
              descriptionMeta.setAttribute('content', response.data.meta_description || 'Default Description');
          }

          // Update meta keywords
          let keywordsMeta = document.querySelector('meta[name="keywords"]');
          if (keywordsMeta) {
              keywordsMeta.setAttribute('content', response.data.meta_keywords || 'Default Keywords');
          }
      } catch (error) {
          console.error('Error fetching news details:', error);
      }
    }
   // Computed property to render content with proper formatting
    const renderedContent = computed(() => {
      // Create a temporary div to parse the HTML content
      const tempElement = document.createElement('div');
      tempElement.innerHTML = form.value.content;

      // Process and return the content with blob URLs
      return tempElement.innerHTML;
    });
</script>

<style  scoped>
.padd_left{
 padding-left: 10rem;
}
@media (min-width: 768px) {
    .padd_left {
      padding-left: 0rem; /* Thicker line for larger screens */
    }
  }
</style>