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
<header class="fixed top-0 left-0 w-full h-20 bg-black/30 backdrop-blur-md border-b border-white/20 flex justify-between items-center shadow-md z-50">

    <nav class="flex justify-between items-center w-full px-8">
        <!-- Left Side: Saylor's Mirissa -->
        <div class="text-2xl font-normal font-['Belleza'] text-white leading-10 drop-shadow-sm">
            Saylor's Mirissa
        </div>

        <!-- Center: Navigation Menu Items -->
        <div class="hidden md:flex justify-center items-center gap-10 mx-auto">
            <x-mary-menu-item title="HOME" link="#home" class="text-stone-100 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-900 transition-colors" />
            <x-mary-menu-item title="ACCOMMODATION" link="#accommodation" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
            <x-mary-menu-item title="LOCATION" link="/location" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
            <x-mary-menu-item title="EXPERIENCES" link="#experiences" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
            <x-mary-menu-item title="ABOUT" link="#about" class="text-stone-200 text-sm font-normal font-['Noto_Sans'] leading-snug hover:text-stone-500 transition-colors" />
        </div>

        <!-- Right Side: Check Availability and Button -->
       <a href="#availability" class="bg-[#72B6B9] hover:bg-[#5A8E91] text-white px-8 py-4 rounded-lg font-bold font-['NATS'] transition-colors inline-block text-center">
  Check Availability
</a>

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