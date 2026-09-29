<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LaraPress</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-indigo-600 text-white shadow-md">
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold tracking-wide">LaraPress</a>
            <nav class="space-x-6">
                <a href="/" class="text-indigo-100 hover:text-white transition">Beranda</a>
                <a href="/tentang-kami" class="text-indigo-100 hover:text-white transition">Tentang Kami</a>
                <a href="/kontak" class="font-semibold text-white hover:text-indigo-200 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-4xl mx-auto px-6 py-12 w-full">
        <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100">
            <h1 class="text-3xl font-extrabold text-gray-900 mb-2">Kontak Kami</h1>
            <p class="text-gray-600 mb-6">Silakan hubungi kami melalui informasi kontak berikut:</p>
            
            <div class="bg-indigo-50 border-l-4 border-indigo-600 p-6 rounded-r-xl mb-8">
                <ul class="space-y-4">
                    <li class="flex items-center text-gray-700">
                        <span class="font-semibold w-28">Email</span>
                        <span class="mr-2">:</span>
                        <a href="mailto:admin@larapress.com" class="text-indigo-600 font-medium hover:underline">admin@larapress.com</a>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="font-semibold w-28">Telepon</span>
                        <span class="mr-2">:</span>
                        <span>(021) 555-1234</span>
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="font-semibold w-28">Alamat</span>
                        <span class="mr-2">:</span>
                        <span>Jl. Pendidikan No. 45, Jakarta</span>
                    </li>
                </ul>
            </div>

            <div class="border-t border-gray-100 pt-6 flex items-center gap-4 text-sm font-medium">
                <a href="/" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition shadow"> Kembali ke Halaman Utama </a>
                <span class="text-gray-300">|</span>
                <a href="/tentang-kami" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-indigo-700 transition shadow">Lihat Halaman Tentang Kami </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} LaraPress. All rights reserved.
    </footer>

</body>
</html>