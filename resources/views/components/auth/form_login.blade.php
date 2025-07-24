<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
  <div class="flex flex-col items-center w-full max-w-md">
    <div class="mb-8 p-4.5">
      {{-- <img src="{{ asset('assets/img/wallpaper3.png') }}" alt="Logo" class="w-80 h-auto"> --}}
        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="w-18 h-18" />
    </div>
    <div class="bg-white border-gray-300 shadow-lg rounded-2xl w-full max-w-md">
      <div class="p-8">
        <div class="w-full max-w-sm space-y-2 text-center">
          <h1 class="text-2xl font-bold text-gray-700">Login</h1>
          <p class="text-sm text-gray-500">{{ $context }}</p>
        </div>
      
        <div class="w-full max-w-sm mt-5">
          @if ($message = Session::get('success'))
            <div class="fixed top-5 right-5 bg-green-100 text-green-800 px-4 py-3 rounded-md text-sm font-medium shadow-lg flex items-center justify-between gap-2 min-w-[250px] animate-slide-in">
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
      
          <form class="space-y-4" action="{{ route('authenticate') }}" method="POST">
            @csrf
      
            <div class="space-y-3">
              <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input 
                  type="text"
                  id="username"
                  name="username"
                  value="{{ old('username') }}"
                  required
                  class="appearance-none mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="Enter username"
                >
                @error('username')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
              </div>
      
              <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                  type="password"
                  id="password"
                  name="password"
                  required
                  value="{{ old('password') }}"
                  class="appearance-none mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="Enter password"
                >
                @error('password')
                  <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
              </div>
            </div>
    
            <div class="flex items-center">
              <input 
                id="remember" 
                name="remember" 
                type="checkbox" 
                class="h-3 w-3 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" 
                {{ old('remember') ? 'checked' : '' }}
              >
              <label for="remember" class="ml-2 block font-semibold text-sm text-gray-700">
                Remember me
              </label>
            </div>
      
            <div>
              <button 
                type="submit" 
                class="cursor-pointer w-full flex justify-center py-2 px-4 border border-transparent font-semibold rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 text-sm"
              >
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
