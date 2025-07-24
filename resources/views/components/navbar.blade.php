@if(Auth::user()->role === 'admin')
<nav class="bg-white border-b border-gray-200">
  <div class="px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
    <div class="flex items-center space-x-4">
      <button id="sidebarToggle" class="md:hidden p-2 rounded hover:bg-gray-200 z-30">
        <svg class="cursor-pointer w-5.5 h-auto text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
      <h2 class="text-xl font-bold">
          {{ $title ?? 'Dashboard' }} 
      </h2>
    </div>
    <div class="flex items-center space-x-6">
        @auth
          <div class="relative">
            <button type="button"
              class="cursor-pointer inline-flex items-center text-sm font-medium text-gray-700 space-x-3"
              id="user-menu-button" aria-expanded="false">
              <div class="flex flex-col text-left">
                <span>{{ Auth::user()->name }}</span>
                <span class="text-[12px] text-gray-400">Kode Lanud: <strong class="uppercase">{{ Auth::user()->role }}</strong></span>
              </div>
              <div class="">
                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                      clip-rule="evenodd"/>
                </svg>
              </div>
            </button>
            <div id="dropdown-menu" class="absolute right-0 mt-2 w-40 p-2 border border-gray-200 rounded-lg shadow-lg bg-white z-50 hidden">
              <button type="submit" class="cursor-pointer block w-full text-left px-4 py-2 font-medium rounded-lg text-sm text-gray-500 hover:bg-blue-100 hover:text-blue-500">Profile</button>
              <button type="submit" class="cursor-pointer block w-full text-left px-4 py-2 font-medium rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-500">Settings</button>
              <div class="border-b border-gray-200 my-2"></div>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="cursor-pointer block w-full text-left px-4 py-2 font-medium rounded-lg text-sm text-gray-500 hover:bg-red-100 hover:text-red-500">Logout</button>
              </form>
            </div>
          </div>
        @else
          <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium text-sm">Login</a>
          <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600 font-medium text-sm">Register</a>
        @endauth
    </div>
  </div>
</nav>
@else 
<nav class="bg-[#1C2333] shadow border-b border-gray-200">
  <div class="px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
    <div class="flex items-center space-x-4">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="w-8 h-auto" />
      <h2 class="text-xl font-bold text-white">
          {{ $title }} 
      </h2>
    </div>
    <div class="flex items-center space-x-6">
        <div class="relative">
            <input type="text" placeholder="Search here..." class="bg-[#373E4E] text-white placeholder-gray-400 py-2 pl-10 pr-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm w-48">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

      <div class="">
        <button type="button" class="cursor-pointer relative p-1 text-gray-700 hover:text-gray-400 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
        @auth
        <div class="relative">
          <button type="button"
            class="cursor-pointer inline-flex items-center text-sm font-medium text-white space-x-3"
            id="user-menu-button" aria-expanded="false">
            <div class="flex flex-col text-left">
              <span>{{ Auth::user()->name }}</span>
              <span class="text-[12px] text-gray-400">Kode Lanud: <strong class="uppercase">{{ Auth::user()->role }}</strong></span>
            </div>
            <div class="">
              <svg class="ml-1 w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                    clip-rule="evenodd"/>
              </svg>
            </div>
          </button>
          <div id="dropdown-menu" class="absolute right-0 mt-2 w-40 p-2 border border-gray-200 rounded-lg shadow-lg bg-white z-50 hidden">
            <button type="submit" class="cursor-pointer block w-full text-left px-4 py-2 font-medium rounded-lg text-sm text-gray-500 hover:bg-blue-100 hover:text-blue-500">Profile</button>
            <button type="submit" class="cursor-pointer block w-full text-left px-4 py-2 font-medium rounded-lg text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-500">Settings</button>
            <div class="border-b border-gray-200 my-2"></div>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="cursor-pointer block w-full text-left px-4 py-2 font-medium rounded-lg text-sm text-gray-500 hover:bg-red-100 hover:text-red-500">Logout</button>
            </form>
          </div>
        </div>
        @else
          <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium text-sm">Login</a>
          <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600 font-medium text-sm">Register</a>
        @endauth
    </div>
  </div>
</nav>
@endif