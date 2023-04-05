Ini adalah website e-commerce second hand dari pak FranciscoMontenegro97 yang saya gunakan untuk menyelesaikan salah satu tugas mata kuliah PPLBO. Bagi yang mau silahkan fork saja anjay, caranya:
1. clone github ini, cari tau dewek la
2. cd ke folder
3. jalankan di terminal copy .env.example .env
3.1 php artisan config:cache
3.2 php artisan key:generate
4. jalankan di terminal composer install
5. jalankan di terminal composer require gloudemans/shoppingcart
5. sesuaikan database key dengan database anda
6. jalankan di terminal php artisan migrate:fresh --seed
7. jalankan di terminal npm install --save-dev vite laravel-vite-plugin
8. jalankan di terminal npm run dev
9. jalankan php artisan serve
10. tada, selesai blok
