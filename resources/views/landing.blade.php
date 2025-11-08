<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Al-Qur'an Ikhlas Bayangkara</title>
    <link rel="icon" type="image.png" href="{{ asset('logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html { scroll-behavior: smooth; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 0.6s ease-out; }
        .gradient-text {
            background: linear-gradient(135deg, #15803d 0%, #22c55e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            background: #15803d;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .mobile-menu.active {
            max-height: 500px;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-sm shadow-md z-50 transition-all">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#home" class="text-2xl font-bold gradient-text">Ikhlas Bayangkara</a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 font-medium">
                    <a href="#tentang" class="nav-link hover:text-green-700 transition">Tentang</a>
                    <a href="#visi" class="nav-link hover:text-green-700 transition">Visi & Misi</a>
                    <a href="#program" class="nav-link hover:text-green-700 transition">Program</a>
                    <a href="#nilai" class="nav-link hover:text-green-700 transition">Nilai</a>
                    <a href="#galeri" class="nav-link hover:text-green-700 transition">Galeri</a>
                    <a href="#testimoni" class="nav-link hover:text-green-700 transition">Testimoni</a>
                    <a href="#kontak" class="nav-link hover:text-green-700 transition">Kontak</a>
                </div>
                
                <a href="https://wa.me/628123287425" target="_blank" 
                   class="hidden md:block bg-green-700 text-white px-6 py-2.5 rounded-full hover:bg-green-800 transition shadow-lg hover:shadow-xl">
                    Daftar Sekarang
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-green-700 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu md:hidden mt-4">
                <div class="flex flex-col space-y-3 py-4">
                    <a href="#tentang" class="hover:text-green-700 transition py-2">Tentang</a>
                    <a href="#visi" class="hover:text-green-700 transition py-2">Visi & Misi</a>
                    <a href="#program" class="hover:text-green-700 transition py-2">Program</a>
                    <a href="#nilai" class="hover:text-green-700 transition py-2">Nilai</a>
                    <a href="#galeri" class="hover:text-green-700 transition py-2">Galeri</a>
                    <a href="#testimoni" class="hover:text-green-700 transition py-2">Testimoni</a>
                    <a href="#kontak" class="hover:text-green-700 transition py-2">Kontak</a>
                    <a href="https://wa.me/628123287425" target="_blank" 
                       class="bg-green-700 text-white px-6 py-2.5 rounded-full text-center hover:bg-green-800 transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="relative bg-gradient-to-br from-green-800 via-green-700 to-green-600 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative container mx-auto px-6 py-32 md:py-40 mt-16 text-center">
            <div class="fade-in">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Rumah Al-Qur'an<br/>Ikhlas Bayangkara
                </h1>
                <p class="text-2xl md:text-3xl italic mb-6 text-green-100">
                    "Ikhlas Belajar, Bahagia Bertambah"
                </p>
                <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto text-green-50">
                    Belajar & Menghafal Al-Qur'an untuk Dewasa & Anak-anak dengan Metode Ummi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#program" 
                       class="bg-white text-green-700 px-8 py-4 rounded-full font-semibold hover:bg-green-50 transition shadow-lg hover:shadow-xl w-full sm:w-auto">
                        Lihat Program
                    </a>
                    <a href="#kontak" 
                       class="bg-green-900 text-white px-8 py-4 rounded-full font-semibold hover:bg-green-950 transition shadow-lg hover:shadow-xl w-full sm:w-auto">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="tentang" class="container mx-auto px-6 py-20 fade-in">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold gradient-text mb-8">Tentang Kami</h2>
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <p class="text-lg leading-relaxed text-gray-700">
                    Rumah Al-Qur'an Ikhlas Bayangkara adalah lembaga pendidikan nonformal yang berfokus pada pembelajaran dan penghafalan Al-Qur'an
                    bagi anak-anak dan dewasa, menggunakan <strong class="text-green-700">Metode Ummi</strong> — metode yang sistematis, menyenangkan, dan terstandar.
                    Kami hadir sebagai wadah bagi siapa pun yang ingin memperbaiki bacaan, menghafal, dan mengamalkan Al-Qur'an.
                </p>
            </div>
        </div>
    </section>

    <!-- VISI MISI -->
    <section id="visi" class="bg-gradient-to-br from-green-50 to-green-100 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold gradient-text text-center mb-12">Visi & Misi</h2>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <div class="text-green-700 text-5xl mb-4">🎯</div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4">Visi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Menjadi lembaga pembinaan Al-Qur'an yang unggul berbasis metode Ummi, mencetak pribadi ikhlas yang cinta, hafal, dan mengamalkan Al-Qur'an.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl shadow-xl p-8 card-hover">
                    <div class="text-green-700 text-5xl mb-4">🎓</div>
                    <h3 class="text-2xl font-bold text-green-700 mb-4">Misi</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Menyelenggarakan program tahsin & tahfidz Al-Qur'an dewasa dan anak-anak</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Meningkatkan kualitas bacaan dan hafalan peserta secara berkelanjutan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Menumbuhkan nilai ikhlas, disiplin, dan cinta Al-Qur'an</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-2">✓</span>
                            <span>Menjadi pusat dakwah Qur'ani yang transformasional</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM -->
    <section id="program" class="container mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold gradient-text text-center mb-12">Program Kami</h2>
        
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div class="bg-gradient-to-br from-green-700 to-green-600 text-white rounded-2xl shadow-2xl p-8 card-hover">
                <div class="text-6xl mb-4">👨‍🎓</div>
                <h3 class="text-3xl font-semibold mb-4">Program Dewasa</h3>
                <p class="mb-6 text-green-50">
                    Pembinaan baca & hafalan Al-Qur'an dewasa dengan metode Ummi — mulai dari nol hingga lancar tartil.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center bg-white/10 rounded-lg p-3">
                        <span class="mr-3">📖</span>
                        <span>Tahsin & Tajwid Praktis</span>
                    </div>
                    <div class="flex items-center bg-white/10 rounded-lg p-3">
                        <span class="mr-3">🕋</span>
                        <span>Hafalan bertahap (tahfidz juz 30 dst)</span>
                    </div>
                    <div class="flex items-center bg-white/10 rounded-lg p-3">
                        <span class="mr-3">💡</span>
                        <span>Murojaah & Tadabbur</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-br from-green-600 to-green-500 text-white rounded-2xl shadow-2xl p-8 card-hover">
                <div class="text-6xl mb-4">👶</div>
                <h3 class="text-3xl font-semibold mb-4">Program Anak-anak</h3>
                <p class="mb-6 text-green-50">
                    Program tahfidz anak-anak dengan target hafal juz 29 & 30 dalam 1 tahun, dalam suasana ceria & terarah.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center bg-white/10 rounded-lg p-3">
                        <span class="mr-3">🎮</span>
                        <span>Metode Ummi Interaktif</span>
                    </div>
                    <div class="flex items-center bg-white/10 rounded-lg p-3">
                        <span class="mr-3">🤝</span>
                        <span>Adab & Motivasi Belajar Qur'an</span>
                    </div>
                    <div class="flex items-center bg-white/10 rounded-lg p-3">
                        <span class="mr-3">🌟</span>
                        <span>Lingkungan belajar Qur'ani</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section id="nilai" class="bg-gradient-to-br from-green-50 to-green-100 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold gradient-text text-center mb-4">Nilai Inti</h2>
            <p class="text-2xl text-green-700 font-bold text-center mb-12">I K H L A S</p>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6 max-w-6xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover">
                    <h3 class="text-4xl font-bold text-green-700 mb-3">I</h3>
                    <p class="text-sm md:text-base">Ikhlas dalam niat dan amal</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover">
                    <h3 class="text-4xl font-bold text-green-700 mb-3">K</h3>
                    <p class="text-sm md:text-base">Konsisten dalam belajar dan menghafal</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover">
                    <h3 class="text-4xl font-bold text-green-700 mb-3">H</h3>
                    <p class="text-sm md:text-base">Hormat terhadap Al-Qur'an dan sesama</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover">
                    <h3 class="text-4xl font-bold text-green-700 mb-3">L</h3>
                    <p class="text-sm md:text-base">Loyal terhadap komitmen pribadi dan komunitas</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover">
                    <h3 class="text-4xl font-bold text-green-700 mb-3">A</h3>
                    <p class="text-sm md:text-base">Aktif dalam perbaikan diri melalui Al-Qur'an</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center card-hover">
                    <h3 class="text-4xl font-bold text-green-700 mb-3">S</h3>
                    <p class="text-sm md:text-base">Sabar dalam proses dan tahapan belajar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section id="galeri" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold gradient-text text-center mb-12">Galeri Dokumentasi</h2>
            
            <div class="relative">
                <div class="flex space-x-6 overflow-x-auto pb-6 snap-x snap-mandatory scrollbar-hide">
                    <!-- Foto 1 - Ganti URL dengan link foto Anda -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img1.jpg') }}" 
                             alt="Kegiatan 1" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Foto 2 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img2.jpg') }}" 
                             alt="Kegiatan 2" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Foto 3 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img3.jpg') }}" 
                             alt="Kegiatan 3" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Foto 4 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img4.jpg') }}" 
                             alt="Kegiatan 4" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Foto 5 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img5.jpg') }}" 
                             alt="Kegiatan 5" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Foto 6 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img6.jpg') }}" 
                             alt="Kegiatan 6" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Foto 7 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img7.jpg') }}" 
                             alt="Kegiatan 7" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Foto 8 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img8.jpg') }}" 
                             alt="Kegiatan 8" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Foto 9 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img9.jpg') }}" 
                             alt="Kegiatan 9" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Foto 10 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img10.jpg') }}" 
                             alt="Kegiatan 10" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Foto 11 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img11.jpg') }}" 
                             alt="Kegiatan 11" 
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Foto 12 -->
                    <div class="flex-shrink-0 w-80 md:w-96 h-64 bg-gray-200 rounded-2xl shadow-xl overflow-hidden snap-center card-hover">
                        <img src="{{ asset('images/img12.jpg') }}" 
                             alt="Kegiatan 12" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            
            <p class="text-center text-gray-500 mt-6 text-sm md:text-base">
                ← Geser ke kanan untuk melihat lebih banyak →
            </p>
        </div>
    </section>

    <!-- TESTIMONI -->
    <section id="testimoni" class="container mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold gradient-text text-center mb-12">Testimoni Peserta</h2>
        
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 card-hover relative">
                <div class="text-green-700 text-6xl absolute top-4 left-4 opacity-20">"</div>
                <p class="italic text-gray-700 mb-6 relative z-10 pt-8">
                    Saya baru belajar Al-Qur'an di usia 50-an. Di Rumah Al-Qur'an Ikhlas Bayangkara, saya merasa sangat terbantu. Metodenya mudah diikuti, dan suasananya menyemangati.
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-700 rounded-full flex items-center justify-center text-white font-bold">
                        U
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-green-700">Bp. Uman</h4>
                        <p class="text-sm text-gray-500">Peserta Tahsin Dewasa</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-xl p-8 card-hover relative">
                <div class="text-green-700 text-6xl absolute top-4 left-4 opacity-20">"</div>
                <p class="italic text-gray-700 mb-6 relative z-10 pt-8">
                    Anak saya jadi semangat menghafal Qur'an, gurunya sabar dan metode Ummi sangat membantu dalam hafalan dan tajwid.
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-700 rounded-full flex items-center justify-center text-white font-bold">
                        R
                    </div>
                    <div class="ml-4">
                        <h4 class="font-semibold text-green-700">Ibu Rina</h4>
                        <p class="text-sm text-gray-500">Orang Tua Peserta Anak</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" class="bg-gradient-to-br from-green-700 to-green-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-12">Hubungi Kami</h2>
            
            <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <div class="text-4xl mb-3">📍</div>
                    <h3 class="font-semibold mb-2">Lokasi</h3>
                    <p>Permata Candiloka Blok T</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <div class="text-4xl mb-3">📞</div>
                    <h3 class="font-semibold mb-2">WhatsApp</h3>
                    <a href="https://wa.me/628123287425" class="hover:underline">0812-3287-425</a>
                    <p class="text-sm text-green-100">(Ustadz Fauzy)</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <div class="text-4xl mb-3">📸</div>
                    <h3 class="font-semibold mb-2">Instagram</h3>
                    <a href="https://instagram.com/rumahalquran.ikhlasbayangkara" class="hover:underline text-sm">
                        @rumahalquran.ikhlasbayangkara
                    </a>
                </div>
            </div>
            
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 max-w-md mx-auto mb-8">
                <div class="text-4xl mb-3">📅</div>
                <h3 class="font-semibold mb-2">Jadwal</h3>
                <p>Setiap Hari – Pagi & Sore</p>
            </div>
            
            <a href="https://wa.me/628123287425" 
               class="inline-block bg-white text-green-700 px-8 py-4 rounded-full font-semibold hover:bg-green-50 transition shadow-xl hover:shadow-2xl">
                Daftar Sekarang via WhatsApp
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-green-900 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-2">&copy; 2025 Rumah Al-Qur'an Ikhlas Bayangkara</p>
            <p class="text-green-200 text-sm">Ikhlas Belajar, Bahagia Bertambah</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(20px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });
    </script>
</body>
</html>