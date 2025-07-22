@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm space-y-8">
        <div class="">
            <div class="text-center">
                <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">Register</h2>
                <p class="mt-2 text-sm text-center text-gray-500">Sign up to your new account</p>
            </div>
            @if ($message = Session::get('success'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm">
                    {{ $message }}
                </div>
            @endif
            <form action="{{ route('store') }}" method="POST" class="mt-8 space-y-6">
                @csrf

                <div class="rounded-md -space-y-px">
                    <div class="">
                        <label for="name" class="text-sm">Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="email" class="text-sm">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        >
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="password" class="text-sm">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        >
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    
                    <div class="mt-4">
                        <label for="password_confirmation" class="text-sm">Confirm Password</label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation"
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        > 
                    </div>
                </div>
                {{-- <div class="">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                </div> --}}
                <div>
                    <button type="submit"
                        class="pointer-cursor group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Sign up
                    </button>
                </div>
            </form>

            <p class="mt-4 text-center text-sm text-gray-600">
                Not a member? 
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
            </p>
        </div>
    </div>
</div>
@endsection
