 <nav class="bg-gray-800/50">
     <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
         <div class="flex h-16 items-center justify-between">
             <div class="flex items-center">
                 <div class="shrink-0">
                     <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                         alt="Your Company" class="h-8 w-8" />
                 </div>
                 <div class="hidden md:block">
                     <div class="ml-10 flex items-baseline space-x-6">
                         <a href="/"
                             class="{{ request()->is('/') ? 'bg-gray-900 text-white px-2 py-1 rounded-lg text-sm font-medium' : 'text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}" aria-current="{{ request()->is('/') ? 'page' : false }}">Home</a>
                         <a href="/about"
                             class="{{ request()->is('about') ? 'bg-gray-900 text-white px-2 py-1 rounded-lg text-sm font-medium' : 'text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}" aria-current="{{ request()->is('about') ? 'page' : false }}">About</a>
                         <a href="/blog"
                             class="{{ request()->is('blog') ? 'bg-gray-900 text-white px-2 py-1 rounded-lg text-sm font-medium' : 'text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}" aria-current="{{ request()->is('blog') ? 'page' : false }}">Blog</a>
                         <a href="/content"
                             class="{{ request()->is('content') ? 'bg-gray-900 text-white px-2 py-1 rounded-lg text-sm font-medium' : 'text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white' }}" aria-current="{{ request()->is('content') ? 'page' : false }}">Content</a>

                     </div>
                 </div>
             </div>

             <!-- Desktop Profile -->
             <div class="hidden md:block">
                 <div class="ml-4 flex items-center md:ml-6" x-data="{ open: false }">
                     <button @click="open = !open"
                         class="relative flex max-w-xs items-center rounded-full focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                         <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt=""
                             class="h-8 w-8 rounded-full outline outline-white/10 -outline-offset-1" />
                     </button>
                     <!-- Dropdown -->
                     <div x-show="open" @click.away="open = false"
                         class="absolute top-11 lg:right-8 md:right-4 xl:right-10 2xl:right-52  mt-2 w-48 rounded-md bg-gray-800 py-1 shadow-lg z-50"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                         <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Your
                             profile</a>
                         <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Settings</a>
                         <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Sign
                             out boy</a>
                     </div>
                 </div>
             </div>

             <!-- Mobile menu button -->
             <div class="-mr-2 flex md:hidden">
                 <button @click="mobileOpen = !mobileOpen" type="button"
                     class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                     <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M4 6h16M4 12h16M4 18h16" />
                     </svg>
                     <svg x-show="mobileOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>
         </div>
     </div>

     <!-- Mobile menu -->
     <div x-show="mobileOpen" class="md:hidden p
    x-2 pt-2 pb-3 space-y-1" x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
         <a href="/" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Home</a>
         <a href="/about"
             class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">About</a>
         <a href="/blog"
             class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Blog</a>
         <a href="/content"
             class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Content</a>

         <div class="border-t border-white/10 pt-4 pb-3">
             <div class="flex items-center px-5">
                 <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e"
                     class="h-10 w-10 rounded-full outline outline-white/10 -outline-offset-1" alt="">
                 <div class="ml-3">
                     <div class="text-base font-medium text-white">Tom Cook</div>
                     <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                 </div>
             </div>
             <div class="mt-3 space-y-1 px-2">
                 <a href="#"
                     class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Your
                     profile</a>
                 <a href="#"
                     class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Settings</a>
                 <a href="#"
                     class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Sign
                     out</a>
             </div>
         </div>
     </div>
 </nav>
