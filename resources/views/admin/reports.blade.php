@extends('layout.app')

@section('content')
<div>
  @if(Auth::user()->role === 'admin')
    @include('components.sidebar')
  @endif
  <div class="flex flex-col flex-1 md:ml-62">
    @include('components.navbar')
    @if(Auth::user()->role === 'admin')
      <div>
          @include('components.ui.breadcrumb')
      </div>
    @endif
    <div>
      {{-- @include('components.main') --}}
    </div>
  </div>
</div> 
@endsection