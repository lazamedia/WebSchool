<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran Siswa Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen py-8 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Success Banner -->
        <div class="bg-white rounded-lg shadow-lg p-4 mb-6 border-l-4 border-green-500">
            <div class="flex items-center">
                <div class="bg-green-100 rounded-full p-2 mr-4">
                    <i class="fas fa-check-circle text-green-600 text-3xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-800">Pendaftaran Berhasil!</h1>
                    <p class="text-gray-600 ">Terima kasih telah mendaftar. Silakan simpan bukti pendaftaran ini.</p>
                </div>
            </div>
        </div>

        <!-- Registration Preview Card -->
        <div id="previewContent" class="bg-white rounded-lg shadow-lg overflow-hidden mb-6">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-4 lg:px-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class=" font-bold">Nomor pendaftaran</h2>
                        <p class="text-blue-100 ">PSB2025001234</p>
                    </div>
                </div>
            </div>

            <!-- Student Data -->
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Data Calon Siswa</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="space-y-3">
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Nama Lengkap</label>
                            <p class="text-gray-800 font-semibold">Ahmad Fauzi Rahman</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">NISN</label>
                            <p class="text-gray-800 font-semibold">0051234567</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Tempat, Tanggal Lahir</label>
                            <p class="text-gray-800 font-semibold">Yogyakarta, 15 Maret 2012</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Jenis Kelamin</label>
                            <p class="text-gray-800 font-semibold">Laki-laki</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Asal Sekolah</label>
                            <p class="text-gray-800 font-semibold">SD Negeri 1 Sleman</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Jurusan yang Dipilih</label>
                            <p class="text-gray-800 font-semibold">IPA</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Email</label>
                            <p class="text-gray-800 font-semibold">ahmad.fauzi@email.com</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">No. Telepon</label>
                            <p class="text-gray-800 font-semibold">0812-3456-7890</p>
                        </div>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Data Orang Tua/Wali</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="space-y-3">
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Nama Ayah</label>
                            <p class="text-gray-800 font-semibold">Budi Rahman, S.E.</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Pekerjaan Ayah</label>
                            <p class="text-gray-800 font-semibold">Wiraswasta</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Nama Ibu</label>
                            <p class="text-gray-800 font-semibold">Siti Nurhaliza, S.Pd.</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500 font-medium">Pekerjaan Ibu</label>
                            <p class="text-gray-800 font-semibold">Guru</p>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 p-4 rounded-lg">
                    <label class="text-sm text-gray-500 font-medium">Alamat Lengkap</label>
                    <p class="text-gray-800 font-semibold">Jl. Kaliurang KM 5, RT 02/RW 05, Caturtunggal, Depok, Sleman, Yogyakarta 55281</p>
                </div>

                <!-- Timestamp -->
                <div class="mt-6 pt-4 border-t border-gray-200">
                    <p class="text-sm text-gray-500">Tanggal Pendaftaran: <span class="font-semibold text-gray-700" id="regDate">11 Oktober 2025, 14:30 WIB</span></p>
                </div>
            </div>
        </div>

        <!-- Download Button -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Simpan Bukti Pendaftaran</h3>
            <button onclick="downloadPDF()" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-blue-700 hover:to-indigo-700 transition duration-300 flex items-center justify-center">
                <i class="fas fa-download mr-2"></i>
                Download Bukti Pendaftaran (PDF)
            </button>
        </div>

        <!-- Next Steps -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-list-check text-blue-600 mr-2"></i>
                Langkah Selanjutnya
            </h3>
            <div class="space-y-4">
                <div class="flex items-start p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">1</div>
                    <div>
                        <h4 class="font-bold text-gray-800">Verifikasi Berkas</h4>
                        <p class="text-gray-600 text-sm mt-1">Harap membawa berkas asli dan fotokopi untuk verifikasi pada tanggal <strong>20-25 Oktober 2025</strong> di sekolah.</p>
                        <ul class="mt-2 text-sm text-gray-600 list-disc list-inside">
                            <li>Ijazah SD/Sederajat</li>
                            <li>Kartu Keluarga</li>
                            <li>Akta Kelahiran</li>
                            <li>Pas Foto 3x4 (3 lembar)</li>
                        </ul>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">2</div>
                    <div>
                        <h4 class="font-bold text-gray-800">Tes Masuk</h4>
                        <p class="text-gray-600 text-sm mt-1">Mengikuti tes akademik dan wawancara pada tanggal <strong>1-3 November 2025</strong>. Jadwal detail akan dikirim via email.</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">3</div>
                    <div>
                        <h4 class="font-bold text-gray-800">Pengumuman Hasil</h4>
                        <p class="text-gray-600 text-sm mt-1">Pengumuman hasil seleksi akan diumumkan pada tanggal <strong>10 November 2025</strong> melalui website dan SMS.</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-4 flex-shrink-0">4</div>
                    <div>
                        <h4 class="font-bold text-gray-800">Daftar Ulang</h4>
                        <p class="text-gray-600 text-sm mt-1">Bagi yang diterima, melakukan daftar ulang pada tanggal <strong>15-20 November 2025</strong> dengan membawa bukti pendaftaran ini.</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded">
                <div class="flex items-start">
                    <i class="fas fa-exclamation-triangle text-yellow-600 mt-1 mr-3"></i>
                    <div>
                        <h4 class="font-bold text-gray-800">Penting!</h4>
                        <p class="text-sm text-gray-700 mt-1">Simpan baik-baik bukti pendaftaran ini. Nomor pendaftaran akan digunakan untuk mengecek hasil seleksi dan proses daftar ulang.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="bg-white rounded-lg shadow-lg p-6 mt-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Informasi Lebih Lanjut</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="p-3 bg-gray-50 rounded-lg">
                    <i class="fas fa-phone text-blue-600 text-xl mb-2"></i>
                    <p class="text-sm text-gray-600">Telepon</p>
                    <p class="font-semibold text-gray-800">(0274) 123-4567</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-lg">
                    <i class="fas fa-envelope text-blue-600 text-xl mb-2"></i>
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="font-semibold text-gray-800">ppdb@sekolah.sch.id</p>
                </div>
                <div class="p-3 bg-gray-50 rounded-lg">
                    <i class="fas fa-globe text-blue-600 text-xl mb-2"></i>
                    <p class="text-sm text-gray-600">Website</p>
                    <p class="font-semibold text-gray-800">www.sekolah.sch.id</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function downloadPDF() {
            const element = document.getElementById('previewContent');
            const opt = {
                margin: 10,
                filename: 'Bukti_Pendaftaran_PSB2025001234.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
            
            html2pdf().set(opt).from(element).save();
        }

        // Set tanggal otomatis
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            const options = { 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                timeZone: 'Asia/Jakarta'
            };
            const dateString = now.toLocaleDateString('id-ID', options) + ' WIB';
            document.getElementById('regDate').textContent = dateString;
        });
    </script>
</body>
</html>