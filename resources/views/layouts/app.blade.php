<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Layanan Pengiriman Paket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-700 text-white flex flex-col">
            <div class="p-6 text-2xl font-bold border-b border-blue-600">
                Admin Panel
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="/dashboardadmin" class="block py-2 px-4 hover:bg-blue-600 rounded">Dashboard</a>
                <a href="/product" class="block py-2 px-4 hover:bg-blue-600 rounded">Product</a>
                <a href="/home" class="block py-2 px-4 hover:bg-blue-600 rounded">Home</a>
                <a href="/about" class="block py-2 px-4 hover:bg-blue-600 rounded">About</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
