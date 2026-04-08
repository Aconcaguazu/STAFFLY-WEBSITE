<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staffly - Presensi Cerdas Anti Culas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans text-slate-900 antialiased selection:bg-blue-200">

    <nav class="absolute top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex justify-between items-center">
            <div class="text-2xl font-bold tracking-tighter text-blue-600">
                Staffly.
            </div>
            <div>
                <a href="#" class="text-sm font-medium text-slate-600 hover:text-slate-900 mr-6 transition-colors">Login Admin</a>
                <a href="#" class="px-5 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all shadow-sm hover:shadow-md">Coba Gratis</a>
            </div>
        </div>
    </nav>

    <main class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                Presensi Cerdas, <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Bebas Titip Absen.</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed">
                Tinggalkan sistem absen jadul yang mudah diakali. Pantau kehadiran tim secara akurat menggunakan teknologi Geofencing, Device Binding, dan validasi Biometrik.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="px-8 py-3.5 text-base font-semibold text-white bg-slate-900 rounded-full hover:bg-slate-800 transition-all shadow-lg hover:shadow-xl">
                    Jadwalkan Demo
                </a>
                <a href="#" class="px-8 py-3.5 text-base font-semibold text-slate-700 bg-white border border-slate-200 rounded-full hover:bg-slate-50 transition-all shadow-sm">
                    Pelajari Fitur
                </a>
            </div>
        </div>
    </main>

    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">Dirancang untuk Keamanan Ekstra</h2>
                <p class="mt-4 text-lg text-slate-600">Sistem keamanan berlapis agar data absensi 100% valid.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 text-2xl">
                        📱
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Device Binding</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Satu akun hanya bisa digunakan pada satu perangkat keras. Mencegah praktik login ganda atau menitipkan akun ke teman.
                    </p>
                </div>

                <div class="p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center mb-6 text-2xl">
                        📍
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Geofencing & Anti-Fake GPS</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Kunci radius area absensi. Aplikasi otomatis menolak presensi jika karyawan berada di luar zona atau menggunakan aplikasi Fake GPS.
                    </p>
                </div>

                <div class="p-8 bg-slate-50 rounded-3xl border border-slate-100 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 text-2xl">
                        🤳
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Liveness Facial Scan</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Bukan sekadar foto statis. Sistem memindai wajah secara real-time saat melakukan tap absen untuk memastikan identitas pengguna.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-slate-900 py-12 text-center text-slate-400">
        <p>&copy; 2026 Staffly. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
