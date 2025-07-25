<div class="">
  <div class="absolute bg-green-100 text-green-800 px-4 py-3 rounded-md text-sm font-medium">
    @if ($message = Session::get('success'))
      <div class="fixed top-5 right-5 border-l-5 border-green-600 bg-green-100 text-green-800 px-4 py-3 text-sm font-medium shadow-lg flex items-center justify-between gap-2 min-w-[250px] animate-slide-in">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
          </svg>
          {{ $message }}
        </div>
        <button onclick="this.parentElement.remove()" class="text-green-500 hover:text-green-700">
          &times;
        </button>
      </div>
    @endif
  </div>  
</div>