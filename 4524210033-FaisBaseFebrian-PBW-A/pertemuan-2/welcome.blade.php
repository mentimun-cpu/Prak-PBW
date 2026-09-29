<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-indigo-600 text-white shadow-md">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold tracking-wide">LaraPress</a>
            <nav class="space-x-6">
                <a href="/" class="font-semibold text-white hover:text-indigo-200 transition">Beranda</a>
                <a href="/tentang-kami" class="text-indigo-100 hover:text-white transition">Tentang Kami</a>
                <a href="/kontak" class="text-indigo-100 hover:text-white transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-4xl mx-auto px-6 py-12 w-full flex items-center justify-center">
        <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 text-center w-full">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Selamat Datang di Blog LaraPress</h1>
            <p class="text-gray-600 text-lg mb-8">Ini adalah halaman utama dari aplikasi blog kita.</p>
            <div class="flex justify-center gap-4">
                <a href="/tentang-kami" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition shadow">Lihat Tentang Kami</a>
                <a href="/kontak" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition shadow">Hubungi Kami</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} LaraPress. All rights reserved.
    </footer>

</body>
</html>
