<div class="">
  <div class="absolute bg-green-100 text-green-800 px-4 py-3 rounded-md text-sm font-medium">
    @if ($message = Session::get('success'))
        {{ $message }}
    @else
        You are logged in!
    @endif
  </div>  
</div>