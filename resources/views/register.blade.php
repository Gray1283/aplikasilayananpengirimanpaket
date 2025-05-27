<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - QuickSend</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#F59E0B'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-blue-100">
    <!-- Header -->
    <nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-shipping-fast text-white text-lg"></i>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">QuickSend</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Sudah punya akun?</span>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium transition-colors">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex min-h-screen pt-0">
        <!-- Left Side - Hero Section -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 bg-black/10"></div>
            <!-- Decorative Elements -->
            <div class="absolute top-20 left-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 text-center text-white p-12">
                <div class="mb-8">
                    <i class="fas fa-truck text-6xl mb-6 animate-pulse"></i>
                </div>
                <h1 class="text-4xl font-bold mb-6 leading-tight">
                    Kirim Paket Jadi<br>
                    <span class="text-yellow-300">Lebih Mudah</span>
                </h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Bergabunglah dengan ribuan pengguna yang sudah mempercayai layanan pengiriman kami
                </p>
                <div class="flex items-center justify-center space-x-8 text-blue-100">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-300">10k+</div>
                        <div class="text-sm">Paket Terkirim</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-300">500+</div>
                        <div class="text-sm">Kota Terjangkau</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-yellow-300">24/7</div>
                        <div class="text-sm">Layanan Support</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-8">
                    <div class="inline-flex items-center space-x-2">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-shipping-fast text-white text-xl"></i>
                        </div>
                        <span class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">QuickSend</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Buat Akun Baru</h2>
                        <p class="text-gray-600">Mulai kirim paket dengan mudah dan aman</p>
                    </div>

                    <form id="registrationForm" class="space-y-6">
                        <!-- Nama Lengkap -->
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                </div>
                                <input type="text" id="fullName" name="fullName" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                                    placeholder="Masukkan nama lengkap">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                </div>
                                <input type="email" id="email" name="email" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                                    placeholder="nama@email.com">
                            </div>
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                </div>
                                <input type="tel" id="phone" name="phone" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                                    placeholder="08xxxxxxxxxx">
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap</label>
                            <div class="relative">
                                <div class="absolute top-3 left-0 pl-3 flex items-start pointer-events-none">
                                    <i class="fas fa-map-marker-alt text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                </div>
                                <textarea id="address" name="address" rows="3" required
                                    class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300 resize-none"
                                    placeholder="Jalan, Kelurahan, Kecamatan, Kota, Kode Pos"></textarea>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                </div>
                                <input type="password" id="password" name="password" required
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                                    placeholder="Minimal 8 karakter">
                                <button type="button" onclick="togglePassword('password')"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i id="passwordToggle" class="fas fa-eye-slash text-gray-400 hover:text-blue-500 transition-colors"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="group">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400 group-focus-within:text-blue-500 transition-colors"></i>
                                </div>
                                <input type="password" id="confirmPassword" name="confirmPassword" required
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                                    placeholder="Ulangi password">
                                <button type="button" onclick="togglePassword('confirmPassword')"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i id="confirmPasswordToggle" class="fas fa-eye-slash text-gray-400 hover:text-blue-500 transition-colors"></i>
                                </button>
                            </div>
                            <div id="passwordMatch" class="mt-1 text-sm hidden"></div>
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="terms" name="terms" required
                                class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="terms" class="text-sm text-gray-600 leading-relaxed">
                                Saya menyetujui <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Syarat & Ketentuan</a> 
                                dan <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Kebijakan Privasi</a>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-3 px-6 rounded-xl font-medium text-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform hover:scale-[1.02] transition-all duration-200 shadow-lg hover:shadow-xl">
                            <i class="fas fa-user-plus mr-2"></i>
                            Daftar Sekarang
                        </button>
                    </form>

                    <!-- Social Login -->
                    <div class="mt-8">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-4 bg-white text-gray-500">Atau daftar dengan</span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-3">
                            <button type="button"
                                class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                <i class="fab fa-google text-red-500 text-lg"></i>
                                <span class="ml-2">Google</span>
                            </button>
                            <button type="button"
                                class="w-full inline-flex justify-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                <i class="fab fa-facebook text-blue-600 text-lg"></i>
                                <span class="ml-2">Facebook</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-2xl p-8 max-w-md mx-4 text-center transform scale-95 transition-transform">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-500 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Registrasi Berhasil!</h3>
            <p class="text-gray-600 mb-6">Akun Anda telah berhasil dibuat. Silakan cek email untuk verifikasi.</p>
            <button onclick="closeModal()" 
                class="bg-blue-500 text-white px-6 py-2 rounded-xl hover:bg-blue-600 transition-colors">
                Tutup
            </button>
        </div>
    </div>

    <script>
        // Toggle Password Visibility
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const toggle = document.getElementById(fieldId + 'Toggle');
            
            if (field.type === 'password') {
                field.type = 'text';
                toggle.classList.remove('fa-eye-slash');
                toggle.classList.add('fa-eye');
            } else {
                field.type = 'password';
                toggle.classList.remove('fa-eye');
                toggle.classList.add('fa-eye-slash');
            }
        }

        // Password Matching Validation
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const matchDiv = document.getElementById('passwordMatch');
            
            if (confirmPassword.length > 0) {
                matchDiv.classList.remove('hidden');
                if (password === confirmPassword) {
                    matchDiv.textContent = '✓ Password cocok';
                    matchDiv.className = 'mt-1 text-sm text-green-600';
                } else {
                    matchDiv.textContent = '✗ Password tidak cocok';
                    matchDiv.className = 'mt-1 text-sm text-red-600';
                }
            } else {
                matchDiv.classList.add('hidden');
            }
        });

        // Form Submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Password tidak cocok!');
                return;
            }
            
            if (password.length < 8) {
                alert('Password minimal 8 karakter!');
                return;
            }
            
            // Simulate API call
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mendaftarkan...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                showSuccessModal();
            }, 2000);
        });

        function showSuccessModal() {
            const modal = document.getElementById('successModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            modal.querySelector('div').classList.remove('scale-95');
            modal.querySelector('div').classList.add('scale-100');
        }

        function closeModal() {
            const modal = document.getElementById('successModal');
            modal.querySelector('div').classList.remove('scale-100');
            modal.querySelector('div').classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 200);
        }

        // Phone number formatting
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('0')) {
                e.target.value = value;
            } else if (value.startsWith('62')) {
                e.target.value = '0' + value.substring(2);
            }
        });
    </script>
</body>
</html>