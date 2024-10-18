<nav class="bg-blue-600 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      
      <div class="text-white text-2xl font-bold">
        <a href="/">MyWebsite</a>
      </div>

    
      <div class="space-x-6 hidden md:flex">
        
        <a href="/login" class="text-white hover:text-gray-200 transition duration-300">Login</a>
        <a href="/home" class="text-white hover:text-gray-200 transition duration-300">Contact</a>
      </div>

      
      <div class="md:hidden">
        <button id="menu-btn" class="text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>
    </div>

   
    <div id="mobile-menu" class="hidden md:hidden bg-blue-700 p-4">
      <a href="/" class="block text-white py-2">Landing</a>
      <a href="/home" class="block text-white py-2">Homepage</a>
      <a href="/login" class="block text-white py-2">Login</a>
    </div>
  </nav>
  <script>
    
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>