<x-layouts.app>
    <!-- Header -->
    <div class="relative pt-40 pb-20 bg-black overflow-hidden border-b border-white/5">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-black/80 to-transparent"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <span class="text-gold tracking-[0.4em] text-xs font-semibold uppercase mb-4 block drop-shadow-md">Lezzet Serüveni</span>
            <h1 class="font-serif text-5xl md:text-7xl text-white mb-6 font-light tracking-widest uppercase">The Boss <span class="italic text-gold">Menü</span></h1>
            <p class="text-zinc-400 font-light max-w-xl mx-auto text-sm md:text-base leading-relaxed tracking-wide">
                Dünya mutfağından seçkin tatlar, imza kokteyller ve premium nargile karışımlarımızla benzersiz bir gastronomi yolculuğu.
            </p>
        </div>
    </div>

    <!-- Category Nav (Sticky) -->
    <div class="sticky top-[88px] z-40 bg-black/80 backdrop-blur-xl border-b border-white/10 py-4 hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-12 justify-center">
                @foreach($categories as $category)
                    <a href="#cat-{{ \Illuminate\Support\Str::slug($category->name) }}" class="text-zinc-400 hover:text-gold uppercase tracking-[0.2em] text-xs font-light transition-colors duration-300 smooth-scroll">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Menu Items -->
    <div class="bg-[#050505] min-h-screen py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            @forelse($categories as $category)
                <div id="cat-{{ \Illuminate\Support\Str::slug($category->name) }}" class="mb-32 scroll-mt-32">
                    <div class="text-center mb-16">
                        <h2 class="inline-block font-serif text-3xl md:text-5xl text-white tracking-wider pb-4 border-b border-gold/30">
                            {{ $category->name }}
                        </h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-12">
                        @foreach($category->items as $item)
                            <div class="group flex gap-6 items-start">
                                @if($item->getFirstMediaUrl())
                                    <div class="w-24 h-24 shrink-0 rounded-lg overflow-hidden border border-white/5 shadow-2xl relative">
                                        <div class="absolute inset-0 bg-gold/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10 pointer-events-none"></div>
                                        <img src="{{ $item->getFirstMediaUrl() }}" alt="{{ $item->name }}" width="112" height="112" loading="lazy" class="w-full h-full object-cover transition-all duration-700">
                                    </div>
                                @endif
                                <div class="flex-grow pt-2">
                                    <div class="flex justify-between items-end mb-2">
                                        <h3 class="font-serif text-xl text-zinc-200 group-hover:text-gold transition-colors duration-500">{{ $item->name }}</h3>
                                    </div>
                                    @if($item->description)
                                        <p class="text-zinc-500 text-sm font-light leading-relaxed tracking-wide group-hover:text-zinc-400 transition-colors duration-500">{{ $item->description }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="text-center text-zinc-500 py-32 font-light tracking-widest uppercase text-sm">
                    Menü içerikleri henüz eklenmedi.
                </div>
            @endforelse
        </div>
    </div>
</x-layouts.app>
