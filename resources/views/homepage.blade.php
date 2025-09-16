<x-layout>
    <x-slot:title>Saylor's Mirissa - Where Ocean Meets Elegance</x-slot:title>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center"
             style="background-image: url('https://images.unsplash.com/photo-1519046904884-53103b34b206?w=1920&h=1080&fit=crop');">
        <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/40"></div>
        
        <div class="relative z-10 text-center text-white px-8">
            <h1 class="text-4xl md:text-6xl font-light mb-6 tracking-wider">Where Ocean Meets Elegance</h1>
            <p class="text-lg max-w-2xl mx-auto mb-8 leading-relaxed">
                Saylor's Mirissa offers a tranquil escape with breathtaking views and unparalleled comfort. 
                Nestled on the sun-kissed shores of Sri Lanka, our hotel provides the perfect blend of modern luxury and natural beauty.
            </p>
            <x-mary-button class="inline-block px-8 py-3 bg-white/90 text-gray-800 text-sm uppercase tracking-wider hover:bg-white hover:-translate-y-1 transition-all duration-300">
                Check Availability
            </x-mary-button>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-gray-100 py-12 px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex justify-center items-center gap-8 flex-wrap">
                <x-mary-card class="flex items-center gap-4 p-0 bg-transparent shadow-none">
                    <x-mary-icon name="o-calendar-days" class="w-10 h-10 text-teal-600" />
                    <div class="text-sm text-gray-600">
                        Check-in Date<br>
                        <strong class="block text-gray-800">14 Sep 2025</strong>
                    </div>
                </x-mary-card>
                
                <x-mary-card class="flex items-center gap-4 p-0 bg-transparent shadow-none">
                    <x-mary-icon name="o-calendar-days" class="w-10 h-10 text-teal-600" />
                    <div class="text-sm text-gray-600">
                        Check-out Date<br>
                        <strong class="block text-gray-800">20 Sep 2025</strong>
                    </div>
                </x-mary-card>
                
                <x-mary-card class="flex items-center gap-4 p-0 bg-transparent shadow-none">
                    <x-mary-icon name="o-users" class="w-10 h-10 text-teal-600" />
                    <div class="text-sm text-gray-600">
                        Number of people<br>
                        <strong class="block text-gray-800">3 People</strong>
                    </div>
                </x-mary-card>
                
                <x-mary-button class="flex items-center gap-2 bg-teal-600 text-white px-7 py-3 hover:bg-teal-700 transition-colors">
                    <x-mary-icon name="o-magnifying-glass" class="w-5 h-5" />
                    Find Reservations
                </x-mary-button>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-20 px-8">
        <div class="max-w-6xl mx-auto">
            <x-mary-card class="grid grid-cols-1 lg:grid-cols-2 gap-0 overflow-hidden rounded-3xl shadow-2xl p-0">
                <div class="h-96 lg:h-full bg-cover bg-center"
                     style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&h=600&fit=crop');">
                </div>
                <div class="p-12">
                    <h2 class="text-3xl lg:text-4xl font-normal mb-8 leading-tight">
                        Perfectly Positioned in the Heart of Mirissa
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Nestled in the vibrant center of Mirissa, Sailor's offers unparalleled access to the island's most coveted experiences. 
                        Just steps from pristine beaches, lush golden sands, while the town's finest dining, cultural attractions, 
                        and adventure opportunities await within moments of your stay.
                    </p>
                    <x-mary-button class="text-teal-600 border-b border-teal-600 bg-transparent hover:text-teal-700 hover:border-teal-700 px-0 py-1 text-sm uppercase tracking-wider transition-colors">
                        Explore Location
                    </x-mary-button>
                </div>
            </x-mary-card>
        </div>
    </section>

    <!-- Features -->
    <section class="bg-gray-50 py-12 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-around flex-wrap gap-12">
                <div class="text-center min-w-64">
                    <x-mary-icon name="o-building-storefront" class="w-15 h-15 mx-auto mb-4 text-yellow-600" />
                    <h3 class="font-normal text-gray-800">Beach access at walking distance</h3>
                </div>
                <div class="text-center min-w-64">
                    <x-mary-icon name="o-building-storefront" class="w-15 h-15 mx-auto mb-4 text-yellow-600" />
                    <h3 class="font-normal text-gray-800">Beach access at walking distance</h3>
                </div>
                <div class="text-center min-w-64">
                    <x-mary-icon name="o-building-storefront" class="w-15 h-15 mx-auto mb-4 text-yellow-600" />
                    <h3 class="font-normal text-gray-800">Beach access at walking distance</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Section -->
    <section id="experiences" class="py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-normal mb-6 text-gray-800">Explore Mirissa</h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Step outside and the best of Mirissa is right here. From golden beaches to whale watching, 
                        our hotel puts you in the center of it all.
                    </p>
                    <x-mary-button class="inline-block border-b-2 border-yellow-600 text-gray-800 bg-transparent hover:text-yellow-600 px-0 py-2 text-sm uppercase tracking-widest transition-colors">
                        Discover
                    </x-mary-button>
                </div>
                <div class="h-96 lg:h-150 bg-cover bg-center rounded-lg"
                     style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800&h=600&fit=crop');">
                </div>
            </div>
        </div>
    </section>
</x-layout>