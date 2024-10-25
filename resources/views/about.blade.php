<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Lorem Ipsum</h1>
            <nav>
                <a href="/" class="text-white hover:text-blue-200 px-4">Home</a>
                <a href="/about" class="text-white hover:text-blue-200 px-4">About</a>
                <a href="/contact" class="text-white hover:text-blue-200 px-4">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto my-8 p-4">
        <h2 class="text-3xl font-semibold text-center mb-4">About Us</h2>
        <p class="text-lg text-center max-w-2xl mx-auto mb-8">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>

        <!-- Team Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 1" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Lorem Ipsum</h3>
                <p class="text-blue-600">CEO</p>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Team Member 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 2" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Lorem Ipsum</h3>
                <p class="text-blue-600">CTO</p>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!-- Team Member 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <img src="https://via.placeholder.com/150" alt="Team Member 3" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Lorem Ipsum</h3>
                <p class="text-blue-600">COO</p>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Lorem Ipsum. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>
    