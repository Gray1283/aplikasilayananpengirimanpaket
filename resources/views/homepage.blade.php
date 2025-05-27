<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastShip - Jasa Layanan Pengiriman Paket Terpercaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-up': 'fadeInUp 1s ease-out',
                        'fade-in-up-delay': 'fadeInUp 1s ease-out 0.2s both',
                        'bounce-slow': 'bounce 2s infinite'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="font-sans">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-slate-800 to-blue-600 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-shipping-fast text-white text-2xl"></i>
                    <span class="text-white text-2xl font-bold">FastShip</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium transition-all duration-300 hover:bg-white/10">Beranda</a>
                    <a href="#layanan" class="text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium transition-all duration-300 hover:bg-white/10">Layanan</a>
                    <a href="#keuntungan" class="text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium transition-all duration-300 hover:bg-white/10">Keuntungan</a>
                    <a href="#lacak" class="text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium transition-all duration-300 hover:bg-white/10">Lacak Paket</a>
                    <a href="#kontak" class="text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium transition-all duration-300 hover:bg-white/10">Kontak</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <a href="#home" class="block text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium">Beranda</a>
                <a href="#layanan" class="block text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium">Layanan</a>
                <a href="#keuntungan" class="block text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium">Keuntungan</a>
                <a href="#lacak" class="block text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium">Lacak Paket</a>
                <a href="#kontak" class="block text-white hover:text-blue-200 px-3 py-2 rounded-md font-medium">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-br from-blue-600 via-slate-700 to-slate-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in-up">
                Kirim Paket dengan Cepat & Aman
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 animate-fade-in-up-delay">
                Layanan pengiriman terpercaya ke seluruh Indonesia dengan harga terjangkau
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl flex items-center space-x-2">
                    <i class="fas fa-paper-plane"></i>
                    <span>Kirim Paket Sekarang</span>
                </button>
                <button class="border-2 border-white text-white hover:bg-white hover:text-slate-800 px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:-translate-y-1 flex items-center space-x-2">
                    <i class="fas fa-search"></i>
                    <span>Lacak Paket</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Keuntungan Section -->
    <section id="keuntungan" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
                    Mengapa Memilih FastShip?
                </h2>
                <p class="text-xl text-gray-600">
                    Berbagai keuntungan yang akan Anda dapatkan
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Keuntungan 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-500">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Pengiriman Cepat</h3>
                    <p class="text-gray-600 text-center">Paket sampai dalam 1-3 hari ke seluruh Indonesia dengan jaringan logistik terdepan.</p>
                </div>
                
                <!-- Keuntungan 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-green-500">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Aman & Terpercaya</h3>
                    <p class="text-gray-600 text-center">Jaminan keamanan 100% dengan asuransi dan sistem tracking real-time.</p>
                </div>
                
                <!-- Keuntungan 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-yellow-500">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-money-bill-wave text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Harga Terjangkau</h3>
                    <p class="text-gray-600 text-center">Tarif kompetitif dengan berbagai pilihan layanan sesuai budget Anda.</p>
                </div>
                
                <!-- Keuntungan 4 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-purple-500">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Jangkauan Luas</h3>
                    <p class="text-gray-600 text-center">Melayani pengiriman ke 500+ kota di seluruh Indonesia.</p>
                </div>
                
                <!-- Keuntungan 5 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-red-500">
                    <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Customer Service 24/7</h3>
                    <p class="text-gray-600 text-center">Tim support siap membantu Anda kapan saja melalui berbagai channel komunikasi.</p>
                </div>
                
                <!-- Keuntungan 6 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-indigo-500">
                    <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-mobile-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4 text-center">Aplikasi Mobile</h3>
                    <p class="text-gray-600 text-center">Kelola pengiriman dengan mudah melalui aplikasi mobile yang user-friendly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-slate-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">10M+</div>
                    <div class="text-blue-200">Paket Terkirim</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="text-blue-200">Kota Terjangkau</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">50K+</div>
                    <div class="text-blue-200">Pelanggan Puas</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">99.9%</div>
                    <div class="text-blue-200">Tingkat Keberhasilan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-shipping-fast text-blue-400 text-2xl"></i>
                        <span class="text-2xl font-bold">FastShip</span>
                    </div>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        FastShip adalah layanan pengiriman paket terpercaya yang melayani seluruh Indonesia dengan komitmen memberikan pelayanan terbaik kepada setiap pelanggan.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-400 hover:bg-blue-500 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 hover:bg-pink-700 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-red-600 hover:bg-red-700 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-green-600 hover:bg-green-700 rounded-full flex items-center justify-center transition-colors duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak Kami</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span class="text-gray-300">+62 21 1234 5678</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span class="text-gray-300">info@fastship.com</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1"></i>
                            <span class="text-gray-300">Jl. Sudirman No. 123<br>Jakarta Pusat, 10220</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-blue-400"></i>
                            <span class="text-gray-300">24/7 Customer Service</span>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Pengiriman Reguler</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Pengiriman Kilat</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Pengiriman Same Day</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">COD (Cash on Delivery)</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Lacak Paket</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-blue-400 transition-colors duration-300">Kalk≈ulator Ongkir</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © 2024 FastShip. All rights reserved. | Developed with ❤️ for Indonesia
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 text-sm transition-colors duration-300">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.grid > div').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>