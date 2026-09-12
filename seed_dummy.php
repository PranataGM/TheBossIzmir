<?php
use App\Models\MenuCategory;
use App\Models\MenuItem;
use App\Models\Gallery;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

DB::statement('PRAGMA foreign_keys=OFF;');
MenuCategory::truncate();
MenuItem::truncate();
Gallery::truncate();
DB::table('media')->truncate();
DB::statement('PRAGMA foreign_keys=ON;');

$cat1 = MenuCategory::create(['name' => 'Premium Hookah', 'sort_order' => 1]);
$item = $cat1->items()->create(['name' => 'The Boss Signature', 'description' => 'Özel karışım, tropikal meyveler ve buz.', 'price' => 450, 'is_active' => true]);
$item->addMediaFromUrl('https://images.unsplash.com/photo-1516684732162-798a0062be99?q=80&w=800')->toMediaCollection('default');

$item2 = $cat1->items()->create(['name' => 'Lady Killer', 'description' => 'Kavun, mango, orman meyveleri ve nane.', 'price' => 350, 'is_active' => true]);
$item2->addMediaFromUrl('https://images.unsplash.com/photo-1574620959050-b0ff071c3dd4?q=80&w=800')->toMediaCollection('default');

$cat2 = MenuCategory::create(['name' => 'İmza Kokteyller', 'sort_order' => 2]);
$item3 = $cat2->items()->create(['name' => 'Myvia Sunset', 'description' => 'Çarkıfelek meyvesi, narenciye, özel şurup.', 'price' => 220, 'is_active' => true]);
$item3->addMediaFromUrl('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=800')->toMediaCollection('default');

$item4 = $cat2->items()->create(['name' => 'Blue Boss', 'description' => 'Yaban mersini, limonata, buz.', 'price' => 180, 'is_active' => true]);
$item4->addMediaFromUrl('https://images.unsplash.com/photo-1536935338788-846bb9981813?q=80&w=800')->toMediaCollection('default');

$cat3 = MenuCategory::create(['name' => 'Ana Yemekler', 'sort_order' => 3]);
$item5 = $cat3->items()->create(['name' => 'Cafe de Paris Soslu Bonfile', 'description' => 'Özel sos, patates kızartması ile.', 'price' => 650, 'is_active' => true]);
$item5->addMediaFromUrl('https://images.unsplash.com/photo-1544025162-8311099f6b9c?q=80&w=800')->toMediaCollection('default');

$item6 = $cat3->items()->create(['name' => 'Boss Burger', 'description' => '200gr dana köfte, cheddar, karamelize soğan.', 'price' => 320, 'is_active' => true]);
$item6->addMediaFromUrl('https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=800')->toMediaCollection('default');

$g1 = Gallery::create(['title' => 'VIP Lounge', 'sort_order' => 1, 'is_visible' => true]);
$g1->addMediaFromUrl('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1200')->toMediaCollection('default');

$g2 = Gallery::create(['title' => 'Teras', 'sort_order' => 2, 'is_visible' => true]);
$g2->addMediaFromUrl('https://images.unsplash.com/photo-1514933651103-005eec06c04b?q=80&w=1200')->toMediaCollection('default');

$g3 = Gallery::create(['title' => 'Oyun Salonu', 'sort_order' => 3, 'is_visible' => true]);
$g3->addMediaFromUrl('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1200')->toMediaCollection('default');

$g4 = Gallery::create(['title' => 'Bar', 'sort_order' => 4, 'is_visible' => true]);
$g4->addMediaFromUrl('https://images.unsplash.com/photo-1572116469696-31de0f17cc34?q=80&w=1200')->toMediaCollection('default');

Setting::updateOrCreate(['key' => 'contact_phone'], ['value' => '0555 123 4567']);
Setting::updateOrCreate(['key' => 'address'], ['value' => 'Myvia Bahçe, Bornova / İzmir']);

echo "Done seeding!\n";
