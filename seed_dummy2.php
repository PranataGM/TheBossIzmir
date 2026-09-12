<?php
use App\Models\MenuCategory;
use App\Models\MenuItem;
use App\Models\Gallery;

$cat = MenuCategory::firstOrCreate(['name' => 'Signature Serisi', 'sort_order' => 4]);

$menuImages = [
    'https://images.unsplash.com/photo-1551024709-8f23befc6f87?q=80&w=800',
    'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=800',
    'https://images.unsplash.com/photo-1544145945-f90425340c7e?q=80&w=800',
    'https://images.unsplash.com/photo-1563227812-0ea4c22e6cc8?q=80&w=800',
    'https://images.unsplash.com/photo-1551538827-9c037cb4f32a?q=80&w=800',
    'https://images.unsplash.com/photo-1470337458703-46ad1756a187?q=80&w=800',
    'https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?q=80&w=800',
    'https://images.unsplash.com/photo-1497534446932-c925b458314e?q=80&w=800',
    'https://images.unsplash.com/photo-1436076863939-06870fe779c2?q=80&w=800',
    'https://images.unsplash.com/photo-1414235077428-33898dba1e6f?q=80&w=800',
];

for ($i = 0; $i < 10; $i++) {
    $item = $cat->items()->create([
        'name' => 'Özel Lezzet ' . ($i + 1),
        'description' => 'Şefin özel tarifi, taptaze malzemeler.',
        'price' => rand(150, 600),
        'is_active' => true
    ]);
    try {
        $item->addMediaFromUrl($menuImages[$i])->toMediaCollection('default');
    } catch (\Exception $e) {}
}

$galleryImages = [
    'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1200',
    'https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1200',
    'https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1200',
    'https://images.unsplash.com/photo-1572116469696-31de0f17cc34?q=80&w=1200',
    'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1200',
    'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1200',
    'https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1200',
    'https://images.unsplash.com/photo-1525268771113-32d9e9021a97?q=80&w=1200',
    'https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=1200',
    'https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200',
];

for ($i = 0; $i < 10; $i++) {
    $gallery = Gallery::create([
        'title' => 'Galeri ' . ($i + 1),
        'sort_order' => $i + 5,
        'is_visible' => true
    ]);
    try {
        $gallery->addMediaFromUrl($galleryImages[$i])->toMediaCollection('default');
    } catch (\Exception $e) {}
}

echo "Done seeding more dummy data!\n";
