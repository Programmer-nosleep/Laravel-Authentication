<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-800">

    @include('components.navbar')

    <div class="container mx-auto mt-8 px-4">
        @yield('content')

        <div class="text-center mt-12 text-sm text-gray-600">
            <p>
                Back to Tutorial:
                <a href="https://www.allphptricks.com/laravel-11-custom-user-registration-and-login-tutorial/"
                   class="text-blue-600 hover:underline font-semibold">
                    Tutorial Link
                </a>
            </p>
            <p>
                For More Web Development Tutorials Visit:
                <a href="https://www.allphptricks.com/"
                   class="text-blue-600 hover:underline font-semibold">
                    AllPHPTricks.com
                </a>
            </p>
        </div>
    </div>

</body>
</html>
