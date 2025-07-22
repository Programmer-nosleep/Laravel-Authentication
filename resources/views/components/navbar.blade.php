<nav class="bg-white shadow border-b border-gray-200">
    <div class="px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <div class="flex items-center space-x-4">
          <h2 class="text-xl font-bold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
              Laravel Authentication
          </h2>
        </div>

        <div class="flex items-center space-x-4">
            @auth
                <a href="{{ route('jobs.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md shadow hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                    New Job
                </a>

                <div class="relative">
                    <button type="button"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 focus:outline-none"
                        id="user-menu-button" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
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
