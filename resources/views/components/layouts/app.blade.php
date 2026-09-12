<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-pt-24">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Boss Hookah & Lounge - Dünya mutfağından seçkin tatlar, imza kokteyller ve premium nargile deneyimi. Bornova, İzmir.">
        <title>{{ $title ?? 'The Boss Hookah & Lounge' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    </head>
    <body class="bg-black text-gray-100 antialiased flex flex-col min-h-screen font-sans selection:bg-gold selection:text-black">
        
        <!-- Navbar -->
        <nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-700 ease-in-out py-6 bg-transparent border-b border-transparent">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" aria-label="Anasayfa" class="flex items-center gap-3 transition-transform duration-500 hover:scale-105 active:scale-95">
                            <img src="{{ asset('images/logo.png') }}" alt="The Boss Hookah & Lounge" width="120" height="64" class="h-16 w-auto object-contain drop-shadow-xl">
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-10 text-xs uppercase tracking-[0.2em] font-light">
                        <a href="{{ route('home') }}" class="text-white hover:text-gold transition-colors duration-500">Anasayfa</a>
                        <a href="{{ route('home') }}#hakkimizda" class="text-white hover:text-gold transition-colors duration-500">Hakkımızda</a>
                        <a href="{{ route('menu') }}" class="text-white hover:text-gold transition-colors duration-500">Menü</a>
                        <a href="{{ route('home') }}#rezervasyon" class="text-white hover:text-gold transition-colors duration-500">İletişim</a>
                    </div>
                </div>
            </div>
        </nav>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const navbar = document.getElementById('navbar');
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.remove('py-6', 'bg-transparent', 'border-transparent');
                        navbar.classList.add('py-2', 'bg-black/90', 'backdrop-blur-md', 'border-white/10');
                    } else {
                        navbar.classList.add('py-6', 'bg-transparent', 'border-transparent');
                        navbar.classList.remove('py-2', 'bg-black/90', 'backdrop-blur-md', 'border-white/10');
                    }
                });

                // Custom ultra-smooth scrolling for all anchor links including full URLs
                document.querySelectorAll('a[href*="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        try {
                            const url = new URL(this.href);
                            // Only intercept if it's the current page
                            if (url.pathname === window.location.pathname) {
                                const targetId = url.hash;
                                if (targetId && targetId !== '#') {
                                    const targetElement = document.querySelector(targetId);
                                    if (targetElement) {
                                        e.preventDefault();
                                        const offsetTop = targetElement.getBoundingClientRect().top + window.scrollY - 80;
                                        
                                        window.scrollTo({
                                            top: offsetTop,
                                            behavior: 'smooth'
                                        });
                                        
                                        // Update URL without jumping
                                        history.pushState(null, null, targetId);
                                    }
                                }
                            }
                        } catch (err) {
                            // ignore invalid URLs
                        }
                    });
                });
            });
        </script>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-[#020202] border-t border-white/5 pt-24 pb-12 mt-auto relative overflow-hidden">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[1px] bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center mb-16 text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="The Boss Hookah & Lounge" width="180" height="96" class="h-24 w-auto object-contain mb-8 opacity-80 hover:opacity-100 transition-opacity duration-500 grayscale hover:grayscale-0">
                    <p class="text-zinc-400 font-light text-sm md:text-base tracking-widest uppercase max-w-md mx-auto leading-relaxed">
                        Lüks Nargile Deneyimi ve Eşsiz Lezzetlerin Bornova'daki Adresi
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left border-y border-white/5 py-12 mb-12">
                    <!-- Nav -->
                    <div class="flex flex-col items-center md:items-start space-y-4">
                        <h4 class="text-white font-serif tracking-[0.3em] text-sm uppercase mb-4">Hızlı Menü</h4>
                        <a href="{{ route('home') }}" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Anasayfa</a>
                        <a href="{{ route('home') }}#hakkimizda" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Hakkımızda</a>
                        <a href="{{ route('menu') }}" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Menü</a>
                    </div>
                    
                    <!-- Contact -->
                    <div class="flex flex-col items-center md:items-center space-y-4">
                        <h4 class="text-white font-serif tracking-[0.3em] text-sm uppercase mb-4">İletişim</h4>
                        <p class="text-zinc-400 text-xs tracking-widest uppercase font-light text-center">Myvia Bahçe<br>Bornova / İzmir</p>
                        <a href="tel:05538771400" aria-label="Telefon: 0553 877 14 00" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light mt-2">0553 877 14 00</a>
                    </div>
                    
                    <!-- Socials -->
                    <div class="flex flex-col items-center md:items-end space-y-4">
                        <h4 class="text-white font-serif tracking-[0.3em] text-sm uppercase mb-4">Sosyal Medya</h4>
                        <a href="#" aria-label="Instagram" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Instagram</a>
                        <a href="#" aria-label="Facebook" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Facebook</a>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row justify-between items-center text-center gap-6">
                    <p class="text-zinc-400 font-light text-xs tracking-[0.2em] uppercase">&copy; {{ date('Y') }} The Boss Hookah & Lounge.<br class="md:hidden"> Tüm Hakları Saklıdır.</p>
                    <p class="text-[10px] text-zinc-500 tracking-[0.4em] uppercase font-light">by KUZEY EGE GROUP</p>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
