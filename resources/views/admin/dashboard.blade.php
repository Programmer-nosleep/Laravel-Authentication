@extends('layout.app')

@section('content')
<div>
  @if(Auth::user()->role === 'admin')
    @include('components.sidebar')
  @endif
  <div class="flex flex-col flex-1 md:ml-62">
    @include('components.navbar')

    <div>
      @include('components.ui.breadcrumb')
    </div>
    <div>
      @include('components.main')
    </div>
  </div>
</div>
@endsection