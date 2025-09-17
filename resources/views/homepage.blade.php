<x-layout>
    <x-slot:title>Saylor's Mirissa - Your Chill Spot in Paradise</x-slot:title>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center"
             style="background-image: url('/Home.png'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/30"></div>
        
        <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
            <h1 class="text-6xl md:text-7xl font-bold font-['STIX_Two_Text'] mb-6 leading-tight text-neutral-50">
                Your Chill Spot in Paradise
            </h1>
            <p class="text-xl md:text-2xl font-light font-['Noto_Sans'] mb-8 leading-relaxed max-w-3xl mx-auto text-neutral-50">
                Wake up in the heart of Mirissa, roll out of bed, and you're already living your best life. 
                Everything you want is within a wave's reach.
            </p>
            <div class="flex flex-col items-center gap-4">
                <div class="text-lg font-normal font-['Noto_Sans'] tracking-widest text-neutral-50">CHECK AVAILABILITY</div>
                <div class="w-48 h-0.5 bg-neutral-50"></div>
            </div>
        </div>
    </section>

    <!-- Booking Form Section -->
    <section class="bg-white py-8 shadow-lg">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="flex flex-wrap items-center justify-center gap-4 md:gap-8">
                <!-- Check In -->
                <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
                    <div class="w-6 h-6 bg-teal-500 rounded"></div>
                    <div>
                        <div class="text-stone-400 text-xs font-['Noto_Sans']">Check In</div>
                        <div class="text-black text-base font-['Noto_Sans']">14 Sep 2025</div>
                    </div>
                </div>
                
                <div class="w-px h-8 bg-stone-400 hidden md:block"></div>
                
                <!-- Check Out -->
                <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
                    <div class="w-6 h-6 bg-teal-500 rounded"></div>
                    <div>
                        <div class="text-stone-400 text-xs font-['Noto_Sans']">Check Out</div>
                        <div class="text-black text-base font-['Noto_Sans']">17 Sep 2025</div>
                    </div>
                </div>
                
                <div class="w-px h-8 bg-stone-400 hidden md:block"></div>
                
                <!-- No of adults -->
                <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
                    <div class="w-6 h-6 bg-teal-500 rounded"></div>
                    <div>
                        <div class="text-stone-400 text-xs font-['Noto_Sans']">No of adults</div>
                        <div class="text-black text-base font-['Noto_Sans']">01</div>
                    </div>
                </div>
                
                <div class="w-px h-8 bg-stone-400 hidden md:block"></div>
                
                <!-- No of children -->
                <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
                    <div class="w-6 h-6 bg-teal-500 rounded"></div>
                    <div>
                        <div class="text-stone-400 text-xs font-['Noto_Sans']">No of children</div>
                        <div class="text-black text-base font-['Noto_Sans']">01</div>
                    </div>
                </div>
                
                <!-- Check Now Button -->
                <button class="bg-teal-500 hover:bg-teal-600 text-white px-8 py-4 rounded-full font-bold font-['Noto_Sans'] transition-colors">
                    CHECK NOW
                </button>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-20 bg-orange-50">
        <div class="max-w-screen-2xl mx-auto px-8">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="flex flex-col lg:flex-row">
                    <div class="lg:w-1/2">
                        <img class="w-full h-96 lg:h-full object-cover" 
                             src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&h=600&fit=crop" 
                             alt="Saylor's Mirissa Hotel" />
                    </div>
                    <div class="lg:w-1/2 p-12 lg:p-16 flex flex-col justify-center">
                        <h2 class="text-4xl lg:text-5xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-8 leading-tight">
                            Perfectly Positioned in the Heart of Mirissa
                        </h2>
                        <p class="text-xl text-stone-700 font-['Noto_Sans'] leading-relaxed mb-8">
                            Situated in the vibrant center of Mirissa, Sailors offers unparalleled access to the island's most coveted coastal experiences. Step from our refined accommodations onto golden sands, while the town's finest dining, cultural attractions, and adventure opportunities await within moments of your stay.
                        </p>
                        <a href="/location" class="group">
                            <div class="flex flex-col gap-3">
                                <div class="text-2xl font-normal font-['Noto_Sans'] text-stone-400 tracking-wider group-hover:text-stone-700 transition-colors">EXPLORE LOCATION</div>
                                <div class="w-64 h-0.5 bg-stone-400 group-hover:bg-stone-700 transition-colors"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore Section -->
    <section id="experiences" class="py-20 bg-white">
        <div class="max-w-screen-2xl mx-auto px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 space-y-8">
                    <h2 class="text-5xl lg:text-6xl font-bold font-['STIX_Two_Text'] text-stone-700 leading-tight">
                        Explore Mirissa
                    </h2>
                    <p class="text-xl text-stone-700 font-['Noto_Sans'] leading-relaxed">
                        Step outside and the best of Mirissa is right here.<br/>
                        From golden beaches to whale watching,<br/>
                        our hotel puts you in the center of it all
                    </p>
                    <div class="flex flex-col gap-3">
                        <div class="text-2xl font-normal font-['Noto_Sans'] text-stone-400 tracking-wider">DISCOVER</div>
                        <div class="w-48 h-0.5 bg-stone-400"></div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img class="w-full h-96 lg:h-[500px] rounded-3xl object-cover shadow-xl" 
                         src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=837&h=733&fit=crop" 
                         alt="Mirissa beach experience" />
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-orange-50">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏖️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['Noto_Sans']">Beach access at walking distance</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏖️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['Noto_Sans']">Beach access at walking distance</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">✈️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['Noto_Sans']">3 hours away from the airport</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">✈️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['Noto_Sans']">3 hours away from the airport</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>