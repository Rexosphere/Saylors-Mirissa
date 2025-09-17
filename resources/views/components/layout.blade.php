<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Saylor\'s Mirissa - Where Ocean Meets Elegance' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['Noto_Sans'] bg-orange-50">
    <!-- Header -->
    <header class="w-full h-20 bg-white flex justify-center items-center">
        <nav class="flex justify-between items-center w-full max-w-screen-2xl px-8">
            <div class="text-4xl font-normal font-['Belleza'] text-black leading-10">
                Saylor's Mirissa
            </div>
            
            <div class="hidden md:flex justify-center items-center gap-20">
                <x-mary-menu-item title="HOME" link="#home" class="text-stone-400 text-lg font-normal font-['Noto_Sans'] leading-snug hover:text-stone-700 transition-colors" />
                <x-mary-menu-item title="ACCOMMODATION" link="#accommodation" class="text-stone-700 text-lg font-normal font-['Noto_Sans'] leading-snug hover:text-stone-400 transition-colors" />
                <x-mary-menu-item title="LOCATION" link="/location" class="text-stone-700 text-lg font-normal font-['Noto_Sans'] leading-snug hover:text-stone-400 transition-colors" />
                <x-mary-menu-item title="EXPERIENCES" link="#experiences" class="text-stone-700 text-lg font-normal font-['Noto_Sans'] leading-snug hover:text-stone-400 transition-colors" />
                <x-mary-menu-item title="ABOUT" link="#about" class="text-stone-700 text-lg font-normal font-['Noto_Sans'] leading-snug hover:text-stone-400 transition-colors" />
            </div>
            
            <div class="flex items-center gap-4">
                <div class="text-stone-400 text-lg font-normal font-['Noto_Sans'] leading-snug">Check Availability</div>
                <div class="w-48 h-11 border border-stone-400"></div>
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