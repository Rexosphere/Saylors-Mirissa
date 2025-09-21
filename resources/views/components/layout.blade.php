<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Saylor\'s Mirissa - Where Ocean Meets Elegance' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Noto_Sans'] bg-orange-50">
    <!-- Header -->
<header class="fixed top-0 left-0 w-full h-20 bg-black/30 backdrop-blur-md border-b border-white/20 flex justify-between items-center shadow-md z-50">

    <nav class="flex justify-between items-center w-full pl-8 pr-0">
        <!-- Left Side: Saylor's Mirissa -->
        <div class="text-2xl font-normal font-['Belleza'] text-white leading-10 drop-shadow-sm">
            Sailor's Mirissa
        </div>

        <!-- Center: Navigation Menu Items -->
        <div class="hidden md:flex justify-center items-center gap-10 mx-auto">
            <x-mary-menu-item title="HOME" link="/" class="text-stone-100 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-900 transition-colors" />
            <x-mary-menu-item title="ACCOMMODATION" link="/accommodation" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
            <x-mary-menu-item title="LOCATION" link="/location" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
            <x-mary-menu-item title="EXPERIENCES" link="#experiences" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
            <x-mary-menu-item title="ABOUT" link="#about" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
        </div>

        <!-- Right Side: Check Availability Button -->
        <div class="flex-shrink-0">
            <a href="#availability" class="bg-[#72B6B9] hover:bg-[#5A8E91] text-white px-8 h-20 flex items-center  font-bold font-['NATS'] transition-colors text-center">
            Check Availability
            </a>
        </div>

    </nav>
</header>



    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />
</body>
</html>