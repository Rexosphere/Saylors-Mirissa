<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Saylor\'s Mirissa - Where Ocean Meets Elegance' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['DM_Sans'] bg-orange-50">
    <!-- Header -->
    <header class="w-full h-20 bg-white flex justify-center items-center">
        <nav class="flex justify-between items-center w-full max-w-screen-2xl px-8">
            <div class="text-4xl font-normal font-['Belleza'] text-black leading-10">
                Saylor's Mirissa
            </div>
            
            <div class="hidden md:flex justify-center items-center gap-20">
                <x-mary-menu-item title="HOME" link="#home" class="text-stone-400 text-lg font-normal font-['DM_Sans'] leading-snug hover:text-stone-700 transition-colors" />
                <x-mary-menu-item title="ACCOMMODATION" link="#accommodation" class="text-stone-700 text-lg font-normal font-['DM_Sans'] leading-snug hover:text-stone-400 transition-colors" />
                <x-mary-menu-item title="LOCATION" link="#location" class="text-stone-700 text-lg font-normal font-['DM_Sans'] leading-snug hover:text-stone-400 transition-colors" />
                <x-mary-menu-item title="EXPERIENCES" link="#experiences" class="text-stone-700 text-lg font-normal font-['DM_Sans'] leading-snug hover:text-stone-400 transition-colors" />
                <x-mary-menu-item title="ABOUT" link="#about" class="text-stone-700 text-lg font-normal font-['DM_Sans'] leading-snug hover:text-stone-400 transition-colors" />
            </div>
            
            <div class="flex items-center gap-4">
                <div class="text-stone-400 text-lg font-normal font-['DM_Sans'] leading-snug">Check Availability</div>
                <div class="w-48 h-11 border border-stone-400"></div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-orange-50 flex flex-col justify-center items-center">
        <div class="w-full max-w-6xl py-20 flex flex-col justify-start items-start gap-16 px-8">
            <div class="w-full flex justify-between items-start">
                <div class="flex flex-col justify-start items-start gap-4">
                    <div class="text-4xl font-normal font-['Belleza'] text-black leading-10">
                        Saylor's Mirissa
                    </div>
                    <div class="text-neutral-600 text-base font-normal font-['DM_Sans'] leading-tight max-w-64">
                        Book Your Stay and Let the Ocean Be Your Guide.
                    </div>
                </div>
                
                <div class="flex justify-start items-start gap-20">
                    <div class="flex flex-col justify-start items-start gap-2">
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Rooms</div>
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Services</div>
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Events</div>
                    </div>
                    <div class="flex flex-col justify-start items-start gap-2">
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Rooms</div>
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Services</div>
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Events</div>
                    </div>
                    <div class="flex flex-col justify-start items-start gap-2">
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Rooms</div>
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Services</div>
                        <div class="text-neutral-800 text-base font-normal font-['DM_Sans'] leading-tight">Events</div>
                    </div>
                </div>
            </div>
            
            <div class="w-full flex justify-between items-center">
                <div class="text-neutral-600 text-xs font-normal font-['DM_Sans'] leading-none">
                    © Saylor's Mirissa 2025. All rights reserved
                </div>
                <div class="flex justify-start items-center gap-4">
                    <div class="text-neutral-600 text-xs font-normal font-['DM_Sans'] leading-none">Find Us on:</div>
                    <div class="flex justify-start items-center gap-2">

                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>