@echo off
setlocal

echo Creating folders...
mkdir resources\views\layouts
mkdir resources\views\partials
mkdir public\css
mkdir public\js
mkdir public\images

echo Creating Blade templates...
type nul > resources\views\layouts\app.blade.php
type nul > resources\views\partials\header.blade.php
type nul > resources\views\partials\nav.blade.php
type nul > resources\views\index.blade.php
type nul > resources\views\auth.blade.php
type nul > resources\views\registr.blade.php

echo Creating CSS and JS...
type nul > public\css\style.css
type nul > public\js\main.js

echo Creating migration and model...
php artisan make:model Person -m

echo Creating controllers...
php artisan make:controller AuthController
php artisan make:controller RegistrController

echo Setup complete. ✅
pause
