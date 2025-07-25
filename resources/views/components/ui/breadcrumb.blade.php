<nav class="bg-white border-b border-gray-200 p-4 rounded-md w-full" aria-label="Breadcrumb"> 
  <ol class="list-reset flex text-gray-500 text-sm">
      <li class="flex items-center">
          <a href="{{ route('home') }}" class="hover:text-gray-700">
              <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 2L2 8h2v8h4v-4h4v4h4V8h2L10 2z" />
              </svg>
          </a>
      </li>
  
      <li>
          <span class="mx-2 text-gray-400">/</span>
      </li>
  
      <li class="text-gray-700 font-medium">{{ $breadcrumbs }}</li>
  </ol>
</nav>
