<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Site</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function toggleMenu() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        }
    </script>
</head>
<body class="bg-gray-800 text-gray-300 font-sans">

    <!-- Navbar -->
    <nav class="bg-gray-900 shadow-lg py-3">
        <div class="container mx-auto flex items-center justify-between px-4">
            <a href="#" class="text-3xl font-semibold text-white">MySite</a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="hover:text-blue-400">Home</a>
                <a href="#" class="hover:text-blue-400">Search</a>
                <a href="#" class="hover:text-blue-400">Tags</a>
                <a href="#" class="hover:text-blue-400">Favorites</a>
                <a href="#" class="hover:text-blue-400">Account</a>
                <a href="#" class="hover:text-blue-400">Logout</a>
            </div>

            <!-- Burger Icon for Mobile -->
            <div class="md:hidden flex items-center">
                <button onclick="toggleMenu()" class="text-gray-300 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-900">
            <div class="flex flex-col px-4 pb-4 space-y-2">
                <a href="#" class="hover:text-blue-400">Home</a>
                <a href="#" class="hover:text-blue-400">Search</a>
                <a href="#" class="hover:text-blue-400">Tags</a>
                <a href="#" class="hover:text-blue-400">Favorites</a>
                <a href="#" class="hover:text-blue-400">Account</a>
                <a href="#" class="hover:text-blue-400">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto py-6 flex">

        <!-- Sidebar -->
        <aside class="w-1/5 hidden lg:block bg-gray-900 p-4 rounded-lg shadow-lg mr-4">
            <h2 class="text-lg font-semibold mb-4">Tags & Filters</h2>
            <input type="text" placeholder="Search tags..." class="w-full px-2 py-1 rounded-md bg-gray-800 text-gray-300 focus:outline-none focus:ring focus:ring-blue-500 mb-4">
            <h3 class="text-md font-semibold mb-2">Popular Tags</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline">Animals</a></li>
                <li><a href="#" class="hover:underline">Nature</a></li>
                <li><a href="#" class="hover:underline">Fantasy</a></li>
                <li><a href="#" class="hover:underline">Space</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Card for each image (repeat as needed) -->
            <?php for ($i = 0; $i < 40; $i++): ?>
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-200">
                <img src="https://via.placeholder.com/200" alt="Sample Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-gray-100">Image Title</h3>
                    <p class="text-gray-400 text-sm">By User123</p>
                    <div class="mt-2 flex flex-wrap space-x-1">
                        <span class="bg-gray-800 text-gray-400 text-xs px-2 py-1 rounded-full">#animals</span>
                        <span class="bg-gray-800 text-gray-400 text-xs px-2 py-1 rounded-full">#nature</span>
                        <span class="bg-gray-800 text-gray-400 text-xs px-2 py-1 rounded-full">#fantasy</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">123 views</div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-4 mt-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 My Site. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
