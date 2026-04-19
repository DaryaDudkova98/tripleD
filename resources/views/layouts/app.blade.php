<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff">

    <!-- Основные SEO -->
    <title>tripleD — Создание лендингов и сайтов под ключ</title>
    <meta name="description"
        content="Закажите продающий лендинг в tripleD. Дизайн, вёрстка, адаптив под любой бизнес. От 3-5 дней. Портфолио и цены на сайте.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="tripleD">

    <!-- Open Graph / Соцсети -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tripleD.by/">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="tripleD — создание лендингов">
    <meta property="og:description" content="Разрабатываю лендинги, которые продают. Примеры работ.">
    <meta property="og:image" content="https://tripled.by/preview.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/images/logo.svg">

    <!-- Vite (CSS + JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#19171b] text-gray-200 min-h-screen flex flex-col">

    @include('header')

    <main class="flex-grow">
        <!-- Весь контент страницы -->
        <div class="container mx-auto px-4 py-12">
            @include('hero')
            @include('about')
            @include('projects')
            @include('service')
            @include('pricing')
            @include('contacts')
        </div>
    </main>

    @include('btn')
    @include('footer')

</body>

</html>
