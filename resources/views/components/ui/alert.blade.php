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

@if ($message = Session::get('warning'))
    <div class="fixed top-5 right-5 bg-yellow-100 text-yellow-800 px-4 py-3 rounded-md text-sm font-medium shadow-lg flex items-center justify-between gap-2 min-w-[250px] animate-slide-in">
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M8.257 3.099c.366-.446.987-.523 1.43-.17.044.036.085.075.123.117L17.548 13.34a1.25 1.25 0 01-.971 2.085H3.423a1.25 1.25 0 01-.972-2.085L8.257 3.1zM9 11h2v2H9v-2zm0-4h2v3H9V7z"/>
            </svg>
            {{ $message }}
        </div>
        <button onclick="this.parentElement.remove()" class="text-yellow-600 hover:text-yellow-800">
            &times;
        </button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="fixed top-5 right-5 bg-red-100 text-red-800 px-4 py-3 rounded-md text-sm font-medium shadow-lg flex items-center justify-between gap-2 min-w-[250px] animate-slide-in">
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 7h2v4H9V7zm0 6h2v2H9v-2z" clip-rule="evenodd" />
            </svg>
            {{ $message }}
        </div>
        <button onclick="this.parentElement.remove()" class="text-red-600 hover:text-red-800">
            &times;
        </button>
    </div>
@endif
