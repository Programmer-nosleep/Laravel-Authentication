@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-10">
    <div class="w-full max-w-2xl">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-gray-100 px-6 py-4 text-lg font-semibold border-b">
                Home
            </div>
            <div class="p-6">
                <div class="bg-green-100 text-green-800 px-4 py-3 rounded-md text-sm font-medium">
                    @if ($message = Session::get('success'))
                        {{ $message }}
                    @else
                        You are logged in!
                    @endif
                </div>              
            </div>
        </div>
    </div>
</div>
@endsection