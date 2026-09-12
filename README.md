# The Boss Hookah & Lounge - Web Application ☕✨

A luxurious, dark-themed, and highly responsive web application built for **The Boss Hookah & Lounge**, a premium cafe and lounge located in Bornova, İzmir. This project features a beautiful public-facing landing page and a powerful, fully-localized (Turkish) Admin Panel for content management.

## 🚀 Tech Stack

*   **Backend:** Laravel 13 (PHP 8.2+)
*   **Admin Panel:** FilamentPHP v3
*   **Frontend:** Tailwind CSS v3, Alpine.js, Blade Components
*   **Media Management:** Spatie Media Library
*   **Database:** MySQL / SQLite

## ✨ Key Features

*   **Luxurious UI/UX:** Dark theme (`#050505`) with elegant gold (`#c59d5f`) accents, smooth scroll transitions, and glassmorphism effects.
*   **Responsive Design:** Fully optimized for Mobile, Tablet, and Desktop displays with precise viewport scaling.
*   **Dynamic Menu System:** Categorized menu items (Kahveler, Nargile, Tatlılar, vb.) with prices, descriptions, and high-quality image support.
*   **Photo Gallery:** Symmetrical responsive grid (`aspect-[4/5]`) for interior and atmosphere showcases.
*   **Dynamic Settings:** Global settings management (Hero Images, Contact Info, Google Maps URL, Social Links) easily editable via the Admin Panel.
*   **Turkish Admin Panel:** 100% localized Filament Admin interface tailored for local staff operations.

## 🛠️ Local Setup & Installation

Follow these steps to run the project on your local machine:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/thebossizmir-web.git
   cd thebossizmir-web
   ```

2. **Install PHP and Node dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Configure your database credentials in the `.env` file.*

4. **Run Migrations & Seeders:**
   ```bash
   php artisan migrate
   ```

5. **Link Storage (For Images):**
   ```bash
   php artisan storage:link
   ```

6. **Create an Admin User:**
   ```bash
   php artisan make:filament-user
   ```

7. **Compile Frontend Assets & Run Server:**
   ```bash
   npm run build
   php artisan serve
   ```
   *Visit `http://localhost:8000` for the public site, and `http://localhost:8000/admin` for the Admin Panel.*

## 📂 Project Structure

*   `app/Filament/`: Contains all Admin Panel resources (Menu, Gallery, Settings).
*   `resources/views/`: Blade templates for the public UI (`home.blade.php`, `menu.blade.php`, `app.blade.php`).
*   `tailwind.config.js`: Custom color palette and font configurations (Montserrat & Cormorant Garamond).

## 📄 License

This project is proprietary and developed specifically for The Boss Hookah & Lounge.
