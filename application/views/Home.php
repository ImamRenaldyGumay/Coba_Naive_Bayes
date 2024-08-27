<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 h-screen bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-center bg-gray-900">
                <h1 class="text-xl font-bold">Admin Dashboard</h1>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="<?= base_url('Home/home2')?>" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="fas fa-users"></i> Users
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="fas fa-file-alt"></i> Reports
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </nav>
        </aside>

        <!-- Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white shadow">
                <div class="px-6 py-4 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">Dashboard</h2>
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-600 hover:text-gray-800">
                            <i class="fas fa-bell"></i>
                        </button>
                        <button class="text-gray-600 hover:text-gray-800">
                            <i class="fas fa-envelope"></i>
                        </button>
                        <button class="text-gray-600 hover:text-gray-800">
                            <i class="fas fa-user-circle"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 p-6 bg-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="p-4 bg-white shadow rounded-lg">
                        <h3 class="text-lg font-semibold">Users</h3>
                        <p class="text-gray-600 mt-2">Total: 1500</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="p-4 bg-white shadow rounded-lg">
                        <h3 class="text-lg font-semibold">Revenue</h3>
                        <p class="text-gray-600 mt-2">$25,000</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="p-4 bg-white shadow rounded-lg">
                        <h3 class="text-lg font-semibold">Tasks</h3>
                        <p class="text-gray-600 mt-2">Completed: 75%</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- FontAwesome CDN for Icons (optional) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
