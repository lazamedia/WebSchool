<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
                </div>
                <div class="flex items-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg mb-6">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        Selamat Datang, {{ Auth::user()->name }}!
                    </h2>
                    <p class="text-gray-600">
                        Anda berhasil login ke dashboard
                    </p>
                </div>
            </div>

            <!-- User Information Card -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi User</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-32 text-sm font-medium text-gray-600">Nama:</div>
                            <div class="text-gray-800">{{ Auth::user()->name }}</div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-32 text-sm font-medium text-gray-600">Email:</div>
                            <div class="text-gray-800">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-32 text-sm font-medium text-gray-600">ID User:</div>
                            <div class="text-gray-800">{{ Auth::user()->id }}</div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-32 text-sm font-medium text-gray-600">Terdaftar Sejak:</div>
                            <div class="text-gray-800">{{ Auth::user()->created_at->format('d F Y') }}</div>
                        </div>

                        @if(Auth::user()->email_verified_at)
                        <div class="flex items-center">
                            <div class="w-32 text-sm font-medium text-gray-600">Status Email:</div>
                            <div class="text-green-600 font-medium">✓ Terverifikasi</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Additional Info Card -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-6">
                <p class="text-blue-800 text-sm">
                    <strong>Info:</strong> Halaman ini menampilkan informasi user yang sedang login
                </p>
            </div>
        </div>
    </div>
</body>
</html>