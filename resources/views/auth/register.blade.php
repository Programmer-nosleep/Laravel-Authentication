<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <div class="flex justify-center mt-10">
        <div class="w-full max-w-xl">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-100 px-6 py-4 text-lg font-semibold border-b">
                    Register
                </div>

                <div class="p-6">
                    {{-- Global Error Alert --}}
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <ul class="mt-2 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('store') }}" method="POST">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-4">
                            <label class="block text-gray-700">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2 @error('name') border-red-500 @enderror" required>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Username --}}
                        <div class="mb-4">
                            <label class="block text-gray-700">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" class="w-full border rounded px-3 py-2 @error('username') border-red-500 @enderror" required>
                            @error('username')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-4">
                            <label class="block text-gray-700">Password</label>
                            <input type="password" name="password" class="w-full border rounded px-3 py-2 @error('password') border-red-500 @enderror" required>
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Password Confirmation --}}
                        <div class="mb-4">
                            <label class="block text-gray-700">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2 @error('password') border-red-500 @enderror" required>
                        </div>

                        {{-- Role --}}
                        <div class="mb-4">
                            <label class="block text-gray-700">Role</label>
                            <select name="role" class="w-full border rounded px-3 py-2 @error('role') border-red-500 @enderror" required>
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
