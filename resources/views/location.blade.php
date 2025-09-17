<x-layout>
    <x-slot:title>Location - Saylor's Mirissa</x-slot:title>

    <!-- Hero Section -->
    <section class="relative h-96 flex items-center justify-center"
             style="background-image: url('https://images.unsplash.com/photo-1519046904884-53103b34b206?w=1920&h=400&fit=crop'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/40"></div>
        
        
        
        <div class="relative z-10 text-center text-neutral-50 max-w-4xl mx-auto px-4">
            <h1 class="text-5xl md:text-6xl font-bold font-['STIX_Two_Text'] mb-6 leading-tight">
                Right Where You Want to Be!
            </h1>
            <p class="text-lg md:text-xl font-normal font-['Noto_Sans'] leading-relaxed max-w-2xl mx-auto">
                We're literally in the middle of everything cool in Mirissa. Beach vibes, amazing sunsets, great food, and all the fun stuff - you can walk to it all from Sailors. No stress, no long rides, just pure convenience.
            </p>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-orange-50">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Map -->
                <div class="order-2 lg:order-1">
                    <div class="bg-white rounded-3xl shadow-xl p-8 h-96">
                        <img class="w-full h-full object-cover rounded-2xl" 
                             src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=600&h=400&fit=crop" 
                             alt="Mirissa Location Map" />
                    </div>
                </div>
                
                <!-- Content -->
                <div class="order-1 lg:order-2 space-y-8">
                    <h2 class="text-4xl lg:text-5xl font-bold font-['STIX_Two_Text'] text-stone-700 leading-tight">
                        In the Heart of It All
                    </h2>
                    <p class="text-xl text-stone-700 font-['Noto_Sans'] leading-relaxed">
                        Sailors Mirissa sits in the heart of town where everything cool happens - just a 2-minute walk to the beach, practically next door to Coconut Tree Hill, surrounded by great restaurants, surf spots, and the whale watching harbor. Also right on the main road for easy tuk-tuk rides to Galle and other adventures.
                    </p>
                    <button class="inline-flex items-center gap-3 bg-teal-500 hover:bg-teal-600 text-white px-8 py-4 rounded-full font-bold font-['Noto_Sans'] transition-colors">
                        GET DIRECTIONS
                        <div class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm">→</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Historic Galle Section -->
    <section class="py-20 bg-white">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-6">
                    Historic Galle
                </h2>
                <p class="text-xl text-stone-700 font-['Noto_Sans'] leading-relaxed max-w-4xl mx-auto">
                    Journey to the UNESCO World Heritage city of Galle, where 400 years of colonial history meet contemporary Sri Lankan culture. Explore ancient ramparts, boutique galleries, and world-class dining within the historic fort walls.
                </p>
            </div>
            
            <!-- Image Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Large Image -->
                <div class="md:col-span-1 lg:col-span-2 md:row-span-2">
                    <img class="w-full h-full min-h-96 object-cover rounded-3xl shadow-lg" 
                         src="https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?w=800&h=600&fit=crop" 
                         alt="Galle Fort Aerial View" />
                </div>
                
                <!-- Top Right -->
                <div class="lg:col-span-1">
                    <img class="w-full h-48 lg:h-60 object-cover rounded-3xl shadow-lg" 
                         src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?w=400&h=300&fit=crop" 
                         alt="Galle Fort Architecture" />
                </div>
                
                <!-- Bottom Left -->
                <div class="lg:col-span-1">
                    <img class="w-full h-48 lg:h-60 object-cover rounded-3xl shadow-lg" 
                         src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" 
                         alt="Galle Lighthouse" />
                </div>
                
                <!-- Bottom Right -->
                <div class="lg:col-span-1">
                    <img class="w-full h-48 lg:h-60 object-cover rounded-3xl shadow-lg" 
                         src="https://images.unsplash.com/photo-1570197788417-0e82375c9371?w=400&h=300&fit=crop" 
                         alt="Galle Fort Streets" />
                </div>
            </div>
        </div>
    </section>

    <!-- Nearby Attractions Section -->
    <section class="py-20 bg-orange-50">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-6">
                    What's Around
                </h2>
                <p class="text-xl text-stone-700 font-['Noto_Sans'] leading-relaxed max-w-3xl mx-auto">
                    Everything you want to experience in Mirissa is just steps away from Saylor's
                </p>
            </div>
            
            <!-- Attractions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Beach -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400&h=300&fit=crop" 
                         alt="Mirissa Beach" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Mirissa Beach</h3>
                        <p class="text-stone-700 font-['Noto_Sans'] mb-4">Golden sand beach perfect for swimming, surfing, and sunset watching. Just 2 minutes walk from the hotel.</p>
                        <div class="text-sm text-stone-400 font-['Noto_Sans']">2 min walk</div>
                    </div>
                </div>
                
                <!-- Whale Watching -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&h=300&fit=crop" 
                         alt="Whale Watching" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Whale Watching</h3>
                        <p class="text-stone-700 font-['Noto_Sans'] mb-4">World-class whale watching tours departing from Mirissa harbor. See blue whales and dolphins in their natural habitat.</p>
                        <div class="text-sm text-stone-400 font-['Noto_Sans']">5 min walk to harbor</div>
                    </div>
                </div>
                
                <!-- Coconut Tree Hill -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop" 
                         alt="Coconut Tree Hill" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Coconut Tree Hill</h3>
                        <p class="text-stone-700 font-['Noto_Sans'] mb-4">Instagram-famous viewpoint offering panoramic views of the coastline and perfect sunset photo opportunities.</p>
                        <div class="text-sm text-stone-400 font-['Noto_Sans']">3 min walk</div>
                    </div>
                </div>
                
                <!-- Secret Beach -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=400&h=300&fit=crop" 
                         alt="Secret Beach" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Secret Beach</h3>
                        <p class="text-stone-700 font-['Noto_Sans'] mb-4">Hidden cove with crystal clear waters and fewer crowds. Perfect for a peaceful swim and snorkeling.</p>
                        <div class="text-sm text-stone-400 font-['Noto_Sans']">10 min walk</div>
                    </div>
                </div>
                
                <!-- Restaurants -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?w=400&h=300&fit=crop" 
                         alt="Local Restaurants" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Beach Restaurants</h3>
                        <p class="text-stone-700 font-['Noto_Sans'] mb-4">Fresh seafood and Sri Lankan cuisine at beachfront restaurants with sand between your toes.</p>
                        <div class="text-sm text-stone-400 font-['Noto_Sans']">1-5 min walk</div>
                    </div>
                </div>
                
                <!-- Surf Spots -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1502933691298-84fc14542831?w=400&h=300&fit=crop" 
                         alt="Surf Spots" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Surf Spots</h3>
                        <p class="text-stone-700 font-['Noto_Sans'] mb-4">Multiple surf breaks suitable for all levels, from beginner-friendly waves to advanced reef breaks.</p>
                        <div class="text-sm text-stone-400 font-['Noto_Sans']">Beach access</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>