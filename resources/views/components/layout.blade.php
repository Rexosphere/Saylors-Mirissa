<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Saylor\'s Mirissa - Where Ocean Meets Elegance' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans leading-relaxed text-gray-800">
    <!-- Header -->
    <x-mary-header class="fixed top-0 w-full bg-white/98 z-[1000] shadow-lg">
        <x-slot:middle class="max-w-screen-xl mx-auto">
            <nav class="flex items-center justify-between py-4">
                <div class="text-xl font-light text-gray-800">Saylor's Mirissa</div>
                <div class="hidden md:flex items-center gap-8">
                    <x-mary-menu-item title="HOME" link="#home" class="text-gray-600 text-sm uppercase tracking-wider hover:text-black transition-colors" />
                    <x-mary-menu-item title="ACCOMMODATION" link="#accommodation" class="text-gray-600 text-sm uppercase tracking-wider hover:text-black transition-colors" />
                    <x-mary-menu-item title="LOCATION" link="#location" class="text-gray-600 text-sm uppercase tracking-wider hover:text-black transition-colors" />
                    <x-mary-menu-item title="EXPERIENCES" link="#experiences" class="text-gray-600 text-sm uppercase tracking-wider hover:text-black transition-colors" />
                    <x-mary-menu-item title="ABOUT" link="#about" class="text-gray-600 text-sm uppercase tracking-wider hover:text-black transition-colors" />
                    
                    <x-mary-button class="px-6 py-2 border border-gray-300 bg-white text-gray-600 text-sm hover:bg-gray-50 transition-all">
                        Check Availability
                    </x-mary-button>
                </div>
            </nav>
        </x-slot:middle>
    </x-mary-header>

    <!-- Main Content -->
    <main class="mt-20">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-16 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-2">
                    <h3 class="text-xl font-light mb-4">Saylor's Mirissa</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Book Your Stay and Let the Ocean Be Your Guide.
                    </p>
                    <p class="text-gray-500 text-xs mt-8">© Saylor's Mirissa 2025. All rights reserved.</p>
                </div>
                
                <div>
                    <h4 class="mb-4 font-normal text-sm">Rooms</h4>
                    <ul class="space-y-2">
                        <li><x-mary-menu-item title="Services" link="#" class="text-gray-400 text-xs hover:text-white transition-colors" /></li>
                        <li><x-mary-menu-item title="Gallery" link="#" class="text-gray-400 text-xs hover:text-white transition-colors" /></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="mb-4 font-normal text-sm">Rooms</h4>
                    <ul class="space-y-2">
                        <li><x-mary-menu-item title="Services" link="#" class="text-gray-400 text-xs hover:text-white transition-colors" /></li>
                        <li><x-mary-menu-item title="Events" link="#" class="text-gray-400 text-xs hover:text-white transition-colors" /></li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center pt-8 border-t border-gray-700">
                <p class="text-gray-400 text-xs mb-4">Find us on:</p>
                <div class="flex justify-center gap-4">
                    <x-mary-menu-item title="f" link="#" class="text-gray-400 hover:text-white transition-colors" />
                    <x-mary-menu-item title="in" link="#" class="text-gray-400 hover:text-white transition-colors" />
                    <x-mary-menu-item title="tw" link="#" class="text-gray-400 hover:text-white transition-colors" />
                </div>
            </div>
        </div>
    </footer>
</body>
</html>