<!-- Error Messages -->
    @if ($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg text-sm">
            {{ $errors->first() }}
        </div>
    @endif

    <!-- Success Messages -->
    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg text-sm">
            {{ session('success') }}
        </div>
    @endif

    <style>
        @keyframes fadeOutSmooth {
            from {
                opacity: 1;
                transform: translateY(0);
                max-height: 100px;
                margin-bottom: 1rem;
            }
            to {
                opacity: 0;
                transform: translateY(-10px);
                max-height: 0;
                margin-bottom: 0;
            }
        }

        .fade-out {
            animation: fadeOutSmooth 1.8s ease forwards;
        }

        .alert {
            transition: all 0.6s ease;
        }
    </style>

    <script>
        // Auto-hide untuk notifikasi Laravel (success dan error)
        document.addEventListener('DOMContentLoaded', () => {
            const alerts = document.querySelectorAll('.bg-red-50, .bg-green-50');
            alerts.forEach(alert => {
                alert.classList.add('alert');
                setTimeout(() => {
                    alert.classList.add('fade-out');
                    setTimeout(() => alert.remove(), 500);
                }, 2000); // tampil 2 detik dulu, lalu fade-out 1.8 detik
            });
        });


    </script>
