# The Boss Lounge (İzmir) - Web Application ☕✨

A luxurious, dark-themed, and highly responsive web application built for **The Boss Lounge**, a premium cafe/lounge located in İzmir. This project features a beautiful public-facing landing page and a powerful, fully-localized (Turkish) Admin Panel for content management.

## 🚀 Tech Stack

*   **Backend:** Laravel 11 (PHP 8.2+)
*   **Admin Panel:** FilamentPHP v3
*   **Frontend:** Tailwind CSS v3, Alpine.js, Blade Components
*   **Media Management:** Spatie Media Library (WebP, Responsive Images)
*   **Database:** MySQL / SQLite

## ✨ Key Features

*   **Luxurious UI/UX:** Dark theme (#050505) with elegant gold (#c59d5f) accents, scroll animations (AOS), and glassmorphism effects.
*   **Dynamic Menu System:** Grouped by categories (Kahveler, Nargile, Tatlılar, vs.) with prices, descriptions, and high-quality images.
*   **Photo Gallery:** Symmetrical responsive grid (spect-[4/5]) for interior and barista showcases.
*   **Dynamic Settings:** Global settings management (Hero Images, Contact Info, Google Maps URL, Social Links) easily editable via the Admin Panel.
*   **Turkish Admin Panel:** 100% localized Filament Admin interface tailored for local staff operations.
*   **SEO & Performance Optimized:** 100% Lighthouse SEO Score, lazy-loading images, and semantic HTML structure.

## 🛠️ Local Setup & Installation

Follow these steps to run the project on your local machine:

1. **Clone the repository:**
   \\\ash
   git clone https://github.com/yourusername/thebossizmir-web.git
   cd thebossizmir-web
   \\\

2. **Install PHP and Node dependencies:**
   \\\ash
   composer install
   npm install
   \\\

3. **Environment Setup:**
   \\\ash
   cp .env.example .env
   php artisan key:generate
   \\\
   *Configure your database credentials in the .env file.*

4. **Run Migrations & Seeders:**
   \\\ash
   php artisan migrate
   \\\

5. **Link Storage (For Images):**
   \\\ash
   php artisan storage:link
   \\\

6. **Create an Admin User:**
   \\\ash
   php artisan make:filament-user
   \\\

7. **Compile Frontend Assets & Run Server:**
   \\\ash
   npm run build
   php artisan serve
   \\\
   *Visit http://localhost:8000 for the public site, and http://localhost:8000/admin for the Admin Panel.*

## 📂 Project Structure

*   pp/Filament/: Contains all Admin Panel resources (Menu, Gallery, Settings).
*   esources/views/: Blade templates for the public UI (home.blade.php, menu.blade.php).
*   	ailwind.config.js: Custom color palette and font configurations (Montserrat & Cormorant Garamond).

## 📄 License

This project is proprietary and developed specifically for The Boss Lounge.
