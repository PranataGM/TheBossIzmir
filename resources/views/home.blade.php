<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#050505]">
        <div class="absolute inset-0 z-0" id="hero-slider">
            <img src="{{ isset($settings['hero_image_1']) ? asset('storage/' . $settings['hero_image_1']) : 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}" alt="Lounge 1" class="hero-slide w-full h-full object-cover opacity-40 transition-opacity duration-1000 absolute inset-0">
            <img src="{{ isset($settings['hero_image_2']) ? asset('storage/' . $settings['hero_image_2']) : 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}" alt="Lounge 2" class="hero-slide w-full h-full object-cover opacity-0 transition-opacity duration-1000 absolute inset-0">
            <img src="{{ isset($settings['hero_image_3']) ? asset('storage/' . $settings['hero_image_3']) : 'https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}" alt="Lounge 3" class="hero-slide w-full h-full object-cover opacity-0 transition-opacity duration-1000 absolute inset-0">
            
            <!-- Darken the top for navbar readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-transparent to-transparent z-10"></div>
            <!-- Seamless fade to the next section at the bottom -->
            <div class="absolute inset-x-0 bottom-0 h-64 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent z-10"></div>
        </div>
        
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="text-gold tracking-[0.4em] text-sm md:text-base font-semibold uppercase mb-6 block drop-shadow-md">
                The Boss Hookah & Lounge'a
            </span>
            <h1 class="font-serif text-7xl md:text-9xl text-white mb-8 leading-tight font-light tracking-wide drop-shadow-2xl">
                <span class="italic font-medium text-gold">Hoşgeldiniz</span>
            </h1>
            <p class="text-zinc-300 text-lg md:text-2xl font-light mb-12 max-w-3xl mx-auto leading-relaxed drop-shadow">
                Masa oyunları ve nargile zevkinizi zirveye çıkarıyoruz.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-8">
                <a href="#menu-section" class="px-10 py-4 bg-gold text-black font-medium uppercase tracking-[0.2em] text-xs transition-all duration-500 hover:bg-white hover:scale-105 smooth-scroll">
                    Menüyü İncele
                </a>
                <a href="#rezervasyon" class="px-10 py-4 border border-gold text-gold font-medium uppercase tracking-[0.2em] text-xs transition-all duration-500 hover:bg-gold hover:text-black hover:scale-105 smooth-scroll">
                    Rezervasyon
                </a>
            </div>
        </div>
    </section>

    <!-- Highlights Section (Glassmorphism) -->
    <section id="hizmetlerimiz" class="min-h-[80vh] flex items-center justify-center relative overflow-hidden bg-[#050505] border-y border-white/5 py-20">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                
                <!-- Card 1: Hookah -->
                <div class="group bg-black border border-white/10 rounded-2xl p-10 text-center transition-all duration-500 hover:border-white/30 hover:shadow-[0_0_40px_rgba(255,255,255,0.05)] hover:-translate-y-2 cursor-pointer">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center group-hover:scale-110 transition-all duration-500">
                        <svg class="w-10 h-10 text-gold drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <!-- Diamond Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 8.25L12 2.25l8.25 6-8.25 13.5L3.75 8.25z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 8.25h16.5M12 2.25v19.5M8.25 2.25l-4.5 6M15.75 2.25l4.5 6" />
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-white tracking-widest uppercase mb-4 font-light">Lüks Nargile</h3>
                    <p class="text-zinc-500 font-light text-sm tracking-wide leading-relaxed">
                        Dünyaca ünlü premium tütün markaları ve ustalarımızın özel karışımlarıyla eşsiz bir deneyim.
                    </p>
                </div>
                
                <!-- Card 2: Games -->
                <div class="group bg-black border border-white/10 rounded-2xl p-10 text-center transition-all duration-500 hover:border-white/30 hover:shadow-[0_0_40px_rgba(255,255,255,0.05)] hover:-translate-y-2 cursor-pointer">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center group-hover:scale-110 transition-all duration-500">
                        <svg class="w-10 h-10 text-gold drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <!-- Crown Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M4 18l3-11 5 6 5-6 3 11z"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-white tracking-widest uppercase mb-4 font-light">Oyun Salonu</h3>
                    <p class="text-zinc-500 font-light text-sm tracking-wide leading-relaxed">
                        Okey, tavla ve modern kutu oyunları için ayrılmış VIP konforunda özel alanlar.
                    </p>
                </div>

                <!-- Card 3: Cafe -->
                <div class="group bg-black border border-white/10 rounded-2xl p-10 text-center transition-all duration-500 hover:border-white/30 hover:shadow-[0_0_40px_rgba(255,255,255,0.05)] hover:-translate-y-2 cursor-pointer">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center group-hover:scale-110 transition-all duration-500">
                        <svg class="w-10 h-10 text-gold drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <!-- Wine Glass Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 4h10M7 4c0 4 2.5 7 5 9v8M17 4c0 4-2.5 7-5 9M8 21h8"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-white tracking-widest uppercase mb-4 font-light">Cafe & Restoran</h3>
                    <p class="text-zinc-500 font-light text-sm tracking-wide leading-relaxed">
                        Dünya mutfağından seçkin lezzetler ve usta barmenlerimizin elinden imza kokteyller.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="hakkimizda" class="min-h-[80vh] flex items-center justify-center py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-[4/3] relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1543007631-283050bb3e8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="About Us" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                </div>
                <div>
                    <span class="text-gold tracking-[0.2em] text-xs font-semibold uppercase mb-4 block">Hakkımızda</span>
                    <h2 class="font-serif text-4xl md:text-5xl text-white mb-8 font-light">İzmir'in En Prestijli <br><span class="italic text-gold">Nargile & Lounge</span> Deneyimi</h2>
                    <div class="space-y-6 text-zinc-400 font-light leading-relaxed">
                        <p>
                            The Boss Hookah & Lounge, standartların ötesinde bir deneyim arayanlar için tasarlandı. Modern mimarisi, VIP oyun alanları ve seçkin menüsüyle Bornova'da lüksün yeni adresi.
                        </p>
                        <p>
                            Dünyanın dört bir yanından özenle seçilmiş premium tütünlerimiz, alanında uzman nargile şeflerimizin sihirli dokunuşlarıyla eşsiz bir keyfe dönüşüyor.
                        </p>
                    </div>
                    <div class="mt-12 flex gap-8">
                        <div>
                            <p class="text-4xl font-serif text-gold mb-2">10+</p>
                            <p class="text-xs uppercase tracking-widest text-zinc-500">Premium Marka</p>
                        </div>
                        <div>
                            <p class="text-4xl font-serif text-gold mb-2">50+</p>
                            <p class="text-xs uppercase tracking-widest text-zinc-500">Özel Karışım</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    @if(isset($categories) && $categories->count() > 0)
    <section id="menu-section" class="min-h-[80vh] flex flex-col justify-center py-20 bg-[#050505] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div>
                    <span class="text-gold tracking-[0.2em] text-xs font-semibold uppercase mb-4 block">Özel Lezzetler</span>
                    <h2 class="font-serif text-4xl md:text-5xl text-white font-light">İmza <span class="italic text-gold">Tatlarımız</span></h2>
                </div>
                <a href="{{ route('menu') }}" class="inline-flex items-center gap-3 text-gold tracking-widest uppercase text-xs hover:text-white transition-colors duration-300">
                    Tüm Menüyü Gör
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-12">
                @foreach($categories->take(2) as $category)
                    <div class="mb-6">
                        <h3 class="font-serif text-3xl text-white border-b border-white/10 pb-4 mb-8">{{ $category->name }}</h3>
                        <div class="space-y-8">
                            @foreach($category->items->take(3) as $item)
                                <div class="group flex items-start gap-5">
                                    @if($item->getFirstMediaUrl())
                                        <div class="w-20 h-20 shrink-0 overflow-hidden rounded-lg border border-white/5 shadow-lg">
                                            <img src="{{ $item->getFirstMediaUrl() }}" alt="{{ $item->name }}" class="w-full h-full object-cover transition-all duration-700 ease-in-out">
                                        </div>
                                    @endif
                                    <div class="flex-grow pt-1">
                                        <h4 class="font-serif text-xl text-gold group-hover:text-white transition-colors duration-300 mb-2">{{ $item->name }}</h4>
                                        <p class="text-zinc-500 text-sm font-light leading-relaxed">{{ $item->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Gallery Preview -->
    @if(isset($galleries) && $galleries->count() > 0)
    <section id="galeri" class="min-h-[80vh] flex flex-col justify-center py-20 relative bg-black overflow-hidden border-b border-white/5">
        <div class="text-center mb-12">
            <span class="text-gold tracking-[0.3em] uppercase text-xs mb-4 block">Atmosfer</span>
            <h2 class="font-serif text-4xl text-white tracking-widest uppercase font-light">Mekanı Keşfedin</h2>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-2 md:gap-4" id="dynamic-gallery">
                @foreach($galleries->take(10) as $gallery)
                    <div class="gallery-item aspect-[4/5] rounded-xl relative overflow-hidden group transition-all duration-1000 ease-in-out">
                        <img src="{{ $gallery->getFirstMediaUrl() }}" alt="{{ $gallery->title }}" width="400" height="500" loading="lazy" class="gallery-img absolute inset-0 object-cover w-full h-full grayscale opacity-60 transition-all duration-1000" data-url="{{ $gallery->getFirstMediaUrl() }}">
                        <div class="gallery-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-black/40 z-10">
                            <span class="gallery-title font-serif text-white tracking-[0.2em] uppercase text-xs md:text-sm font-light text-center px-2">{{ $gallery->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const galleryContainer = document.getElementById('dynamic-gallery');
                const items = Array.from(galleryContainer.querySelectorAll('.gallery-item'));
                
                if(items.length > 0) {
                    setInterval(() => {
                        // Reset semua gambar menjadi redup (grayscale)
                        items.forEach(slot => {
                            const img = slot.querySelector('.gallery-img');
                            img.classList.add('grayscale', 'opacity-60');
                            img.classList.remove('grayscale-0', 'opacity-100', 'scale-105');
                        });

                        // Pilih 3 gambar secara acak untuk menyala
                        let slotsToHighlight = [];
                        let availableIndices = [...Array(items.length).keys()];
                        for(let i=0; i<3; i++) {
                            if(availableIndices.length === 0) break;
                            let randIdx = Math.floor(Math.random() * availableIndices.length);
                            slotsToHighlight.push(availableIndices[randIdx]);
                            availableIndices.splice(randIdx, 1);
                        }

                        // Nyalakan gambar yang terpilih
                        slotsToHighlight.forEach(slotIdx => {
                            const img = items[slotIdx].querySelector('.gallery-img');
                            img.classList.remove('grayscale', 'opacity-60');
                            img.classList.add('grayscale-0', 'opacity-100', 'scale-105');
                        });

                    }, 3000); // 3 detik
                }
            });
        </script>
    </section>
    @endif

    <!-- Barista / Team Section -->
    <section id="ekibimiz" class="min-h-[80vh] flex items-center justify-center py-20 bg-[#050505]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <!-- Text (Left) -->
                <div class="order-2 lg:order-1">
                    <span class="text-gold tracking-[0.2em] text-xs font-semibold uppercase mb-4 block">Ustalık ve Sanat</span>
                    <h2 class="font-serif text-4xl md:text-5xl text-white mb-8 font-light">Baş Baristamızın <br><span class="italic text-gold">Özel Dokunuşu</span></h2>
                    <div class="space-y-6 text-zinc-400 font-light leading-relaxed">
                        <p>
                            Her bir içecek ve kokteylimiz, baristalarımızın tutkusu ve yıllara dayanan deneyimiyle hazırlanır. Sadece en kaliteli çekirdekleri ve malzemeleri kullanarak, her yudumda The Boss farkını hissetmenizi sağlıyoruz.
                        </p>
                        <p>
                            Klasik lezzetlerden imza reçetelere kadar uzanan geniş yelpazemiz, damak zevkinize hitap etmek için özenle tasarlandı. Ustalarımızın ellerinden çıkan bu sanat eserlerini tatmaya davetlisiniz.
                        </p>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2 relative w-full flex justify-center">
                    <div class="aspect-[2/3] w-full max-w-[320px] lg:max-w-[360px] relative rounded-2xl overflow-hidden shadow-2xl border border-white/5">
                        <img src="{{ isset($settings['barista_image']) ? asset('storage/' . $settings['barista_image']) : 'https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}" alt="Baş Barista" class="w-full h-full object-cover transition-all duration-700">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / Location -->
    <section id="rezervasyon" class="min-h-[80vh] flex items-center justify-center py-20 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
                <div class="order-2 md:order-1 h-[500px] w-full border border-white/5 p-2 rounded-xl overflow-hidden bg-black/50">
                    @if(isset($settings['map_url']))
                        <iframe title="Google Maps Location" src="{{ $settings['map_url'] }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-1000"></iframe>
                    @else
                        <div class="w-full h-full bg-black flex items-center justify-center text-gray-600 font-light tracking-widest text-xs uppercase">
                            Harita Yüklenmedi
                        </div>
                    @endif
                </div>
                
                <div class="order-1 md:order-2">
                    <span class="text-gold tracking-[0.3em] uppercase text-xs mb-4 block">İletişim</span>
                    <h2 class="font-serif text-4xl text-white tracking-widest uppercase font-light mb-12">Bize Ulaşın</h2>
                    
                    <div class="space-y-10">
                        <div>
                            <h4 class="text-gray-500 font-light tracking-[0.2em] text-xs uppercase mb-2">Telefon / Rezervasyon</h4>
                            <p class="text-white font-light text-2xl tracking-wider">
                                @if(isset($settings['contact_phone']))
                                    <a href="tel:{{ str_replace(' ', '', $settings['contact_phone']) }}" class="hover:text-gold transition-colors duration-300">{{ $settings['contact_phone'] }}</a>
                                @else
                                    0553 877 14 00
                                @endif
                            </p>
                        </div>
                        
                        <div>
                            <h4 class="text-gray-500 font-light tracking-[0.2em] text-xs uppercase mb-2">Adres</h4>
                            <p class="text-white font-light text-xl tracking-wide leading-relaxed max-w-sm">
                                {{ $settings['address'] ?? "Myvia Bahçe, Bornova / İzmir" }}
                            </p>
                        </div>

                        <div class="pt-8 flex gap-8">
                            @if(isset($settings['instagram_url']))
                                <a href="{{ $settings['instagram_url'] }}" target="_blank" class="text-gray-500 hover:text-gold transition-colors duration-300 uppercase tracking-[0.2em] text-sm font-light">
                                    Instagram
                                </a>
                            @endif
                            @if(isset($settings['facebook_url']))
                                <a href="{{ $settings['facebook_url'] }}" target="_blank" class="text-gray-500 hover:text-gold transition-colors duration-300 uppercase tracking-[0.2em] text-sm font-light">
                                    Facebook
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Hero Slider Script
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.hero-slide');
            if (slides.length > 0) {
                let currentSlide = 0;
                setInterval(() => {
                    // Hide current
                    slides[currentSlide].classList.remove('opacity-40');
                    slides[currentSlide].classList.add('opacity-0');
                    
                    // Move to next
                    currentSlide = (currentSlide + 1) % slides.length;
                    
                    // Show next
                    slides[currentSlide].classList.remove('opacity-0');
                    slides[currentSlide].classList.add('opacity-40');
                }, 3000);
            }
        });
    </script>
</x-layouts.app>
