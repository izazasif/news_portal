<template>
  <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mx-auto px-6 py-4">
        <div class="col-span-3">
            <Slider />
        </div>
        <div class="flex items-start col-span-3 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full mt-4">
                <div class="" v-for="news in newsitem" :key="news.id">
                        <!-- News Item 1 (Card Style) -->
                    <div class="flex space-x-4">
                        <!-- Text Content -->
                        <div class="flex-1">
                        <a href="#" class="font-bold text-gray-600 hover:text-red-500 hover:underline" @click="onShow(news.slug)">
                        <h3 class="text-lg font-bold leading-tight font-serif text-left">{{ news.title }}</h3>
                        </a>
                        </div>

                        <!-- Image -->
                        <div class="w-24 h-24">
                        <img :src="`${base_path}${news.main_image}`" alt="News Item Image" class="w-full h-full object-cover rounded-md">
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <a href="" class="flex items-start w-full" @click="onShow(news.slug)">
                        <p class="text-sm text-gray-600 mt-1 hover:text-blue-500 hover:underline leading-tight font-serif line-clamp-3">
                            {{ trunCatetext(news.content) }}
                        </p>
                        </a>
                        <span class="text-sm text-gray-700 mt-2 font-serif">
                            {{ news.published_at ? timeAgo(news.published_at) : 'Invalid date'  }}
                        </span>
                    </div>
                </div>
                <!-- <div v-for="news in newsitem" :key="news.id" 
                    class="flex flex-col items-center md:items-start pb-4 min-h-[300px] max-h-[350px]">

                    <img :src="`${base_path}${news.main_image}`" 
                        alt="News Image" 
                        class="w-full md:w-80 md:h-48 object-cover rounded-lg mb-4 transform transition-transform duration-300 hover:scale-105" />

                    <div class="flex flex-col items-start w-full">
                        <a href="" class="flex items-start w-full" @click="onShow(news.slug)">
                        <div class="flex items-start group mb-2">
                            <div class="shrink-0 w-4 h-4 rounded-full bg-gray-600 mr-2 group-hover:bg-red-500 transition-colors duration-300"></div>
                          
                            <h2 class="flex-1 md:text-sm sm:text-sm font-bold text-gray-800 group-hover:text-red-500 hover:underline transition-colors duration-300 leading-tight font-serif line-clamp-2" style="margin-top: -4px;">
                                {{ news.title }}
                            </h2>
                        </div>
                        </a>

                        <a href="" class="flex items-start w-full" @click="onShow(news.slug)">
                         
                            <p class="text-sm text-gray-600 mt-1 hover:text-blue-500 hover:underline leading-tight font-serif line-clamp-3">
                                {{ trunCatetext(news.content) }}
                            </p>
                        </a>

                        <span class="text-sm text-gray-700 mt-2 font-serif">
                            {{ news.published_at ? timeAgo(news.published_at) : 'Invalid date'  }}
                        </span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <div class="grid grid-cols-1 px-6 py-2">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 px-4 py-2 border border-[#21587c] p-4">
            <!-- Large News Section -->
            <div class="lg:col-span-2 lg:border-r border-[#21587c]">
                <img :src="`${base_path}${newsitem2.main_image}`" 
                    alt="Large News Image" 
                    class="object-cover rounded-lg mb-4 mx-auto" style="height: 400px;width: 97%;">
                
                <span v-if="newsitem2.user" class="text-gray-400 text-xs font-serif hover:text-blue-500 transition-colors duration-200">
                    {{ newsitem2.user.name }}
                </span>
                <span v-else class="text-gray-400 text-xs font-serif hover:text-blue-500 transition-colors duration-200">
                    Loading...
                </span>
                
                <a href="" class="block mt-2" @click="onShow(newsitem2.slug)">
                    <div class="flex items-center group mt-2">
                        <div class="w-4 h-4 rounded-full bg-gray-600 mr-2 text-left bg-red-500"></div>
                        <h2 class="text-sm md:text-xl font-bold text-gray-700 md:text-left leading-tight font-serif text-red-500 hover:underline">
                            {{ newsitem2.title }}
                        </h2>
                    </div>
                </a>
                
                <a href="" class="block mt-2" @click="onShow(newsitem2.slug)">
                    <p class="text-gray-600 hover:text-blue-500 hover:underline leading-tight font-serif">
                        {{ trunCatetext2(newsitem2.content) }}
                    </p>
                </a>

                <span class="text-xs md:text-sm text-gray-500 font-serif block mt-2">
                    {{ newsitem2.published_at ? timeAgo(newsitem2.published_at) : 'Invalid date' }}
                </span>
            </div>


            <!-- Small News Section -->
            <div class="lg:col-span-1">
                <h2 class="text-xl font-bold mb-4 font-serif inline-flex items-center w-full text-red-500">
                    Most View
                    <div class="ml-4 flex-grow border-t-2 border-black"></div>
                </h2>
                <!-- News Item 1 -->
                <div v-for="newsabc in newsitem3" :key="newsabc.id" class="border-b border-[#21587c] pb-4 mb-4">
                    
                        <div class="flex items-center space-x-4">
                            <img :src="`${base_path}${newsabc.main_image}`" alt="News Image 1" class="w-16 h-16 object-cover rounded-lg transform transition-transform duration-300 hover:scale-105">
                            <div>
                                <a href="" class="text-gray-600 hover:underline transition-colors duration-200 block mt-2" @click="onShow(newsabc.slug)">
                                    <div class="flex items-center group">
                                        <span class="md:text-md sm:text-sm font-bold text-gray-700 text-left md:text-left leading-tight font-serif h-12 flex items-center group-hover:text-red-500 transition-colors duration-300">
                                            {{ newsabc.title }}
                                        </span>
                                    </div>
                                </a>
                                <span class="text-xs md:text-sm text-gray-500 font-serif">  {{ newsabc.published_at ? timeAgo(newsabc.published_at) : 'Invalid date' }}</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 px-6 py-2">
        <div v-if="newsitem4" class="bg-[#1f5375] p-6 w-full" style="background-color: #146a69;">
            <div class="flex justify-between items-center">
                <span class="text-xs md:text-sm text-white font-serif">{{ newsitem4.published_at ? timeAgo(newsitem4.published_at) : 'Invalid date' }}</span>
                <span class="text-white text-sm font-serif">{{ newsitem4.category_name }}</span>
            </div>
            <div class="mt-1">
                <span class="text-white text-xs font-serif">{{ newsitem4.user_name }}</span>
                <a href="" class="block mt-2" @click="onShow(newsitem4.slug)">
                <h2 class="md:text-2xl sm:text-md font-bold text-white mt-1 font-serif leading-tight flex items-center">
                    <!-- Red Dot -->
                    <span class="inline-block w-2 h-20 bg-red-500 rounded-full mr-2"></span>
                    <!-- Title with hover effect -->
                    <span class="hover:text-red-500 transition-colors duration-300 hover:underline">{{ newsitem4.title }}</span>
                </h2>
                </a>
                <a href="" class="block mt-2" @click="onShow(newsitem4.slug)">
                <p class="text-white mt-1 leading-tight font-serif text-justify news-title">
                    {{ trunCatetext3(newsitem4.content) }}
                    <!-- Read More link with hover effect -->
                    <a href="#" class="text-white hover:text-red-500 underline ml-2 transition-colors duration-300">Read More</a>
                </p>
                </a>
            </div>
        </div>
        <div v-else>
            <p class="text-white">News item not available.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 px-6 py-2">
            <!-- Category Title with space between border and title, and responsive layout -->
            <h2 class="text-xl font-bold mb-4 font-serif inline-flex items-center w-full text-red-500">
                International
                <div class="ml-4 flex-grow border-t-2 border-black"></div>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-6 py-2 gap-4">
                <!-- News Item with fixed size and consistent layout -->
                <div v-for="newsthree in newsitem5" :key="newsthree.id" class="border-b border-r-0 lg:border-b-0 lg:border-r border-[#21587c] pb-4 lg:pb-0 lg:pr-4">
                    <div class="flex flex-col h-full space-y-4">
                        <!-- Image Link with fixed size and responsive effect -->
                        <a href="#" class="block w-full h-48">
                            <img :src="`${base_path}${newsthree.main_image}`" alt="News Image 1" class="w-full h-full object-cover rounded-lg transform transition-transform duration-300 hover:scale-105">
                        </a>
                        <div class="flex flex-col h-full">
                            <!-- Title Link with fixed size and hover effect -->
                            <a href="#" class="md:text-md font-bold text-gray-800 leading-tight font-serif hover:text-red-500 transition-colors duration-300 hover:underline"  @click="onShow(newsthree.slug)">
                                {{ newsthree.title }}
                            </a>
                            <!-- Content with gray color, justified text, and blue underline on hover -->
                            <a href="" class="block mt-2" @click="onShow(newsthree.slug)">
                            <p class="text-sm text-gray-600 leading-tight font-serif text-justify hover:text-blue-600 hover:underline transition-colors duration-300">
                                {{ trunCatetext4(newsthree.content)}}
                            </p>
                            </a>
                            <span class="text-xs md:text-sm text-gray-500 font-serif mt-auto">{{ newsitem2.published_at ? timeAgo(newsitem2.published_at) : 'Invalid date' }}</span>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other news items -->
            </div>
    </div>
        <div class="grid grid-cols-1 px-6 py-2">
                    <h2 class="text-xl font-bold mb-4 font-serif inline-flex items-center w-full text-red-500">
                                Sports
                        <div class="ml-4 flex-grow border-t-2 border-black"></div>
                    </h2>
                    <div class="grid  md:grid-cols-4 sm:grid-cols-1 px-6 py-2 gap-4">
                            <div v-for="art in newsitem6" :key="art.id" class="">
                                <!-- News Item 1 (Card Style) -->
                            <div class="flex space-x-4">
                                <!-- Text Content -->
                                <div class="flex-1">
                                <a href="#" @click="onShow(art.slug)" class="font-bold text-gray-600 hover:text-red-500 hover:underline">
                                <h3 class="text-lg font-bold leading-tight font-serif text-left">{{ art.title }}</h3>
                                </a>
                                </div>

                                <!-- Image -->
                                <div class="w-24 h-24">
                                <img :src="`${base_path}${art.main_image}`" alt="News Item Image" class="w-full h-full object-cover rounded-md">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm text-gray-600 leading-tight font-serif text-justify hover:text-blue-600 hover:underline transition-colors duration-300" style="margin-top: .5rem;">{{ trunCatetext4(art.content)}}</p>
                            </div>
                            <div class="flex justify-between items-center mt-2 text-xs md:text-sm text-gray-500 font-serif">
                                <span>{{ newsitem2.published_at ? timeAgo(newsitem2.published_at) : 'Invalid date' }}</span>
                            </div>
                    </div>
        </div>
       
</div>
<!-- Load More Button -->
<div class="flex justify-center mt-8">
    <button @click="loadMoreNews" class="w-full max-w-xs py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white text-base font-semibold rounded-full hover:from-purple-600 hover:to-pink-600 transition-all duration-300 shadow-lg transform hover:scale-105">
        Load More
    </button>
</div>
 
</template>

<script setup>
  import { useRouter } from "vue-router"
  import Slider from  "./Slider.vue";
  import { formatDistanceToNow } from 'date-fns';
  import { ref, onMounted } from 'vue';
  const base_path = '/website/';
  const logo3 = '/image/cricket.jpeg';
  const router = useRouter()
  let newsitem = ref([])
  let newsitem2 = ref([])
  let newsitem3 = ref([])
  let newsitem4 = ref([])
  let newsitem5 = ref([])
  let newsitem6 = ref([])
  let currentPage = ref(1);
  let perPage = 4;
  let hasMorePages = ref(true);

  onMounted(async () => {
    getlatestthree()
    trunCatetext()
    trunCatetext2()
    trunCatetext3()
    trunCatetext4()
    nextFivePost()
    nextFourside()
    nextLargeone()
    nextThreecate()
    lastFour()
  });
    const timeAgo =  (date) => {
       return formatDistanceToNow(new Date(date), { addSuffix: true });
   };

    const getlatestthree = async() => {
        let response = await axios.get("/api/latest_three_item")
        newsitem.value = response.data.latestPosts.slice(0,2);
    }
    const nextFivePost = async() => {
        let response = await axios.get("/api/next_five_Posts")
        newsitem2.value = response.data.nextFourNews;
        
    }
    const nextFourside = async () =>{
        let response = await axios.get("/api/next_four_side")
        newsitem3.value = response.data.nextFoursides;
   }
   const nextLargeone = async () => {
    let response = await axios.get("/api/next_large_one")
    newsitem4.value = response.data.articles;
   }
   const nextThreecate = async () =>{
    let response = await axios.get("/api/next_category_three")
    newsitem5.value = response.data.cateThreecontents;
   }
   const lastFour = async () => {
  try {
    let response = await axios.get('/api/lastFour', {
      params: { page: currentPage.value, per_page: perPage }
    });
    
    // Append new items to the existing list
    newsitem6.value = [...newsitem6.value, ...response.data.data];  // Access the 'data' field correctly
    
    // Check if there are more pages to load
    hasMorePages.value = response.data.current_page < response.data.last_page;
  } catch (error) {
    console.error('Error fetching data:', error);
  }
};

// Load more news on button click
const loadMoreNews = () => {
  currentPage.value++; // Increment page number
  lastFour(); // Fetch the next batch of news items
};
    const trunCatetext = (content = '', wordLimit = 25) => {
        const tempElement = document.createElement('div');
        tempElement.innerHTML = content;
        const text = tempElement.textContent || tempElement.innerText || '';
        const words = text.split(' ');
        if (words.length > wordLimit) {
            return words.slice(0, wordLimit).join(' ') + '...';
        }
        return text;
    };
    const trunCatetext2 = (content = '', wordLimit = 40) => {
        
        const tempElement = document.createElement('div');
        tempElement.innerHTML = content;
        const text = tempElement.textContent || tempElement.innerText || '';
        const words = text.split(' ');
        if (words.length > wordLimit) {
            return words.slice(0, wordLimit).join(' ') + '...';
        }
        return text;
    };
    const trunCatetext3 = (content = '', wordLimit = 60) => {
        // Ensure content is a string
        const tempElement = document.createElement('div');
        tempElement.innerHTML = content;
        const text = tempElement.textContent || tempElement.innerText || '';
        const words = text.split(' ');
        if (words.length > wordLimit) {
            return words.slice(0, wordLimit).join(' ') + '...';
        }
        return text;
    };
    const trunCatetext4 = (content = '', wordLimit = 20) => {
        const tempElement = document.createElement('div');
        tempElement.innerHTML = content;
        const text = tempElement.textContent || tempElement.innerText || '';
        const words = text.split(' ');
        if (words.length > wordLimit) {
            return words.slice(0, wordLimit).join(' ') + '...';
        }
        return text;
    };
    const onShow =  (slug) => {
    router.push(`/show/${slug}`);
  }

</script>

<style  scoped>
  .news-title {
        margin-top: -19px;
        margin-left: 17px;
    }
@media (max-width: 640px) {
    
    .news-title {
        margin-top: -19px;
        margin-left: 15px;
    }
}  
/* Add line-clamp support */
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>