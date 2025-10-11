@extends('layouts.main')

@section('content')
    


    <section class="max-w-6xl mx-auto px-4 py-8 sm:py-12">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-3">Formulir Pendaftaran Siswa Baru</h1>
            <p class="text-gray-600 text-sm sm:text-base">Silakan lengkapi data diri Anda dengan benar dan lengkap</p>
        </div>

        <!-- Form Section -->
        <div class="bg-white rounded-sm p-6 sm:p-8 border border-gray-300 shadow-lg">
            <form id="registrationForm">
                <!-- Row 1: Personal Data & Photo -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Left Column: Personal Inputs -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2">Nama Lengkap *</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 placeholder:text-sm focus:ring-amber-500 focus:border-transparent outline-none" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2">NISN *</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 placeholder:text-sm focus:ring-amber-500 focus:border-transparent outline-none" placeholder="Masukkan NISN" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2">Nomor HP *</label>
                            <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 placeholder:text-sm focus:ring-amber-500 focus:border-transparent outline-none" placeholder="Contoh: 08123456789" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2">Email *</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 placeholder:text-sm focus:ring-amber-500 focus:border-transparent outline-none" placeholder="contoh@email.com" required>
                        </div>
                    </div>

                    <!-- Right Column: Photo Upload -->
                    <div class=" lg:p-8 mb-5">
                        <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2">Foto Siswa *</label>
                        <div id="dropZone" class="h-full min-h-[280px] border-2 border-dashed border-gray-300 rounded-sm flex flex-col items-center justify-center cursor-pointer hover:border-amber-500 transition-colors bg-gray-50">
                            <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-gray-600 text-sm mb-1">Seret & lepas foto di sini</p>
                            <p class="text-gray-400 text-xs mb-3">atau</p>
                            <button type="button" class="px-6 py-2  rounded text-sm text-gray-500 hover:border-amber-500 hover:text-amber-500 border border-gray-500">Pilih File</button>
                            <input type="file" id="fileInput" class="hidden" accept="image/*">
                        </div>
                    </div>
                </div>

                <!-- Select Jenis Kelamin  -->
                <div class="flex flex-col lg:flex-row items-center w-full gap-4 mb-6">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48  ">Jenis Kelamin *</label>
                    <div class="grid grid-cols-2 gap-3 flex-1 lg:max-w-md w-full">

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="gender" value="L" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500  peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                Laki-laki
                            </div>
                        </label>

                        <label class="flex items-center justify-center  rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="gender" value="P" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                Perempuan
                            </div>
                        </label>

                    </div>
                </div>

                <!-- Tanggal Lahir -->
                <div class="flex flex-col lg:flex-row items-center w-full gap-4 mb-6">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48">Tanggal Lahir *</label>
                    <input type="date" class="w-full lg:max-w-md flex-1 px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 placeholder:text-sm focus:border-transparent outline-none" required>
                </div>

                <!-- Tempat Lahir -->
                <div class="flex flex-col lg:flex-row items-center w-full gap-4 mb-6">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48">Tempat Lahir *</label>
                    <input type="text" class="w-full flex-1 px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 placeholder:text-sm focus:border-transparent outline-none" placeholder="Kota kelahiran" required>
                </div>



                <div class="mb-6 flex flex-col lg:flex-row items-center w-full gap-4">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48">Nama Ayah Kandung *</label>
                    <input type="text" class="w-full flex-1 px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 placeholder:text-sm focus:border-transparent outline-none" placeholder="Nama lengkap ayah" required>
                </div>
                <div class="mb-6 flex flex-col lg:flex-row items-center w-full gap-4">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48">Nama Ibu Kandung *</label>
                    <input type="text" class="w-full flex-1 px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 placeholder:text-sm focus:border-transparent outline-none" placeholder="Nama lengkap ibu" required>
                </div>


                <!-- Row 4: Address -->
                <div class="mb-6 flex flex-col lg:flex-row items-center w-full gap-4">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48">Alamat Lengkap *</label>
                    <textarea rows="3" class="w-full flex-1 px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 placeholder:text-sm focus:border-transparent outline-none resize-none " placeholder="Masukkan alamat lengkap" required></textarea>
                </div>

                <!-- Row 5: School Origin & Name -->
                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 mb-6">
                    {{-- <div>
                        <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2">Lulusan *</label>
                        <div class="grid grid-cols-3 gap-3">
                            <label class="flex items-center justify-center border-2 border-gray-300 rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                                <input type="radio" name="school_type" value="MTS" class="hidden peer" required>
                                <div class="peer-checked:bg-amber-500 peer-checked:text-white w-full text-center font-medium rounded p-3 ">
                                    MTS
                                </div>
                            </label>
                            <label class="flex items-center justify-center border-2 border-gray-300 rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                                <input type="radio" name="school_type" value="SMP" class="hidden peer" required>
                                <div class="peer-checked:bg-amber-500 peer-checked:text-white w-full text-center font-medium rounded p-3 ">
                                    SMP
                                </div>
                            </label>
                            <label class="flex items-center justify-center border-2 border-gray-300 rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                                <input type="radio" name="school_type" value="Lainnya" class="hidden peer" required>
                                <div class="peer-checked:bg-amber-500 peer-checked:text-white w-full text-center font-medium rounded p-3 ">
                                    Lainnya
                                </div>
                            </label>
                        </div>
                    </div> --}}
                    <div class="flex flex-col lg:flex-row items-center w-full gap-4 ">
                        <label class="block text-sm font-medium text-gray-700 w-full lg:w-48">Nama Sekolah Asal *</label>
                        <input type="text" 
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-sm focus:ring-2 focus:ring-amber-500 placeholder:text-sm focus:border-transparent outline-none w-full lg:w-auto" 
                            placeholder="Nama sekolah asal" required>
                    </div>

                </div>

                <!-- Row 6: Uniform Size -->
                <div class="mb-8 flex flex-col lg:flex-row items-center w-full gap-4">
                    <label class="block text-sm font-medium text-gray-700 mt-2 mb-1 lg:mb-2 w-full lg:w-48">Ukuran Baju Seragam *</label>
                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-3 w-full flex-1">

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="size" value="S" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                S
                            </div>
                        </label>

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="size" value="M" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                M
                            </div>
                        </label>

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="size" value="L" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                L
                            </div>
                        </label>

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="size" value="XL" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                XL
                            </div>
                        </label>

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="size" value="XXL" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                XXL
                            </div>
                        </label>

                        <label class="flex items-center justify-center   rounded-sm cursor-pointer hover:border-amber-500 transition-colors">
                            <input type="radio" name="size" value="XXXL" class="hidden peer" required>
                            <div class="border-2 border-gray-300 peer-checked:border-amber-500 peer-checked:text-amber-500 w-full text-center font-medium rounded p-2">
                                XXXL
                            </div>
                        </label>

                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center lg:justify-end mt-5">
                    <button type="submit" class="px-8 py-3 bg-cyan-600 text-white font-medium rounded-sm hover:bg-cyan-700 transition-colors">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
        </div>

    </section>

    {{-- <div class="mb-10">
        <footer class="text-center text-gray-500 text-sm py-4">
             Made with ❤️ by MAM Limpung
        </footer>
    </div> --}}


    <script>
        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');

        dropZone.addEventListener('click', () => fileInput.click());

        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('border-amber-500', 'bg-amber-50');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('border-amber-500', 'bg-amber-50');
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('border-amber-500', 'bg-amber-50');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                displayFileName(files[0]);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                displayFileName(e.target.files[0]);
            }
        });

        function displayFileName(file) {
            dropZone.innerHTML = `
                <svg class="w-12 h-12 text-green-500 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p class="text-gray-700 font-medium">${file.name}</p>
                <p class="text-gray-400 text-sm mt-2">Klik untuk mengubah foto</p>
            `;
        }

        document.getElementById('registrationForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Form berhasil dikirim!');
        });
    </script>


@endsection