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
    <div class="flex items-center space-x-4">
        @auth
          <div class="relative">
            <button type="button"
              class="cursor-pointer inline-flex items-center text-sm font-medium text-gray-700 space-x-3"
              id="user-menu-button" aria-expanded="false">
              <div class="flex flex-col text-right">
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
<nav class="bg-white shadow border-b border-gray-200">
  <div class="px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
    <div class="flex items-center space-x-4"> 
      <h2 class="text-xl font-bold">
          {{ $title }} 
      </h2>
    </div>
    <div class="flex items-center space-x-4">
        @auth
          <div class="relative">
            <button type="button"
              class="cursor-pointer inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 focus:outline-none"
              id="user-menu-button" aria-expanded="false">
              {{ Auth::user()->name }}
              <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                    clip-rule="evenodd"/>
              </svg>
            </button>
            <div class="absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10 hidden">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
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