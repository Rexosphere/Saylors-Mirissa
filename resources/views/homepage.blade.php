<x-layout>
    <x-slot:title>Sailors Mirissa- Your Chill Spot in Paradise</x-slot:title>

    <!-- Hero Section -->
    <!-- Hero Section -->
    <section id="featured_header" class="relative bg-cover bg-center min-h-screen bg-fixed"
        style="background-image: url('/images/home.png');">

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content wrapper -->
        <div class="relative z-10 flex flex-col justify-between min-h-screen pl-16 pr-8">

            <!-- Hero text (vertically centered) -->
            <div class="text-white px-8 py-8 w-full flex flex-col justify-center flex-1" style="margin-top: 10vh;">
                <h1 class="text-4xl md:text-7xl font-bold font-display leading-tight w-full whitespace-nowrap">
                    Your Chill Spot in Paradise
                </h1>

                <p class="text-xl md:text-2xl font-light mb-8 leading-relaxed whitespace-pre-line">
                    Wake up in the heart of Mirissa, roll out of bed.
                    and you're already living your best life.
                    Everything you want is within a wave's reach.
                </p>

                <div class="flex flex-col items-start gap-4">
                    <div class="text-2xl font-bold tracking-widest">CHECK AVAILABILITY</div>
                    <div class="w-48 h-0.5 bg-white"></div>
                </div>
            </div>


            <!-- Booking Form (bottom) -->
            <div class="flex justify-center w-full ">
                <div class=" bg-orange-50  py-6 px-8  rounded-t-2xl inline-block">
                    <div class="flex flex-wrap items-center gap-6">

                        <!-- Check In -->
                        <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]">
                            <div class="w-6 h-6">
                                <img src="./icons/calander.png" alt="Calendar Icon" class="w-6 h-6" />
                            </div>
                            <div class="flex-1">
                                <x-mary-input label="Check In" type="date" name="check_in" id="check_in"
                                    class="w-full text-black text-base bg-transparent border-none outline-none cursor-pointer"
                                    value="2025-09-14" />
                            </div>
                        </div>

                        <!-- Check Out -->
                        <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]">
                            <div class="w-6 h-6">
                                <img src="./icons/calander.png" alt="Calendar Icon" class="w-6 h-6" />
                            </div>
                            <div class="flex-1">
                                <x-mary-input label="Check Out" type="date" name="check_out" id="check_out"
                                    class="w-full text-black text-base bg-transparent border-none outline-none cursor-pointer"
                                    value="2025-09-17" />
                            </div>
                        </div>

                        <!-- No of adults -->
                        <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]" x-data="{ adults: 3 }">
                            <div class="w-6 h-6 bg-teal-500 rounded"></div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <x-mary-input label="No of Adults" type="number" name="adults" id="adults"
                                        min="1" max="20"
                                        class="w-16 text-center text-black text-base bg-transparent border-none outline-none"
                                        x-model="adults" readonly>
                                        <x-slot:prepend>
                                            <x-mary-button icon="o-minus"
                                                class="p-1 w-8 h-8 bg-gray-200 hover:bg-gray-300 text-gray-700"
                                                x-on:click="adults = Math.max(1, adults - 1)" />
                                        </x-slot:prepend>
                                        <x-slot:append>
                                            <x-mary-button icon="o-plus"
                                                class="p-1 w-8 h-8 bg-gray-200 hover:bg-gray-300 text-gray-700"
                                                x-on:click="adults = Math.min(20, adults + 1)" />
                                        </x-slot:append>
                                    </x-mary-input>

                                </div>
                            </div>
                        </div>

                        <!-- No of children -->
                        <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]" x-data="{ children: 1 }">
                            <div class="w-6 h-6 bg-teal-500 rounded"></div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <x-mary-input label="No of Children" type="number" name="children" id="children"
                                        min="0" max="20"
                                        class="w-16 text-center text-black text-base bg-transparent border-none outline-none"
                                        x-model="children" readonly>
                                        <x-slot:prepend>
                                            <x-mary-button icon="o-minus"
                                                class="p-1 w-8 h-8 bg-gray-200 hover:bg-gray-300 text-gray-700"
                                                x-on:click="children = Math.max(0, children - 1)" />
                                        </x-slot:prepend>
                                        <x-slot:append>
                                            <x-mary-button icon="o-plus"
                                                class="p-1 w-8 h-8 bg-gray-200 hover:bg-gray-300 text-gray-700"
                                                x-on:click="children = Math.min(20, children + 1)" />
                                        </x-slot:append>
                                    </x-mary-input>
                                </div>
                            </div>
                        </div>

                        <!-- Check Now Button -->
                        <button
                            class="bg-[#72B6B9] hover:bg-[#5A8E91] text-white px-8 py-4 rounded-lg font-bold transition-colors">
                            CHECK NOW
                        </button>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="bg-[#FAF6F0] py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-display text-gray-800 mb-20">
                Perfectly Positioned in Mirissa’s Heart
            </h2>

            <!-- Description -->
            <p class="text-gray-600 text-base md:text-lg leading-relaxed ">
                Nestled in the vibrant center of Mirissa, Sailors offers unparalleled access to the island's most
                coveted coastal experiences. Step from our refined accommodations onto golden sands, while the town's
                finest dining, cultural attractions, and adventure opportunities await within moments of your stay.
            </p>
        </div>
    </section>


    <section class="py-16 bg-[#FAF6F0] ">
        <div class="max-w-screen-xl mx-auto px-4 text-center">
            <!-- Section Title -->
            <h2 class="text-sm font-medium text-gray-400 tracking-widest mb-6">
                EXPLORE LOCATION
            </h2>
            <div class="w-30 h-0.5 bg-[#0e0903]  mx-auto mb-12"></div>

            <!-- Locations Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Coconut Tree Hill -->
                <div class="relative group overflow-hidden rounded-lg cursor-pointer">
                    <img src="/images/location/Rectangle9.png" alt="Coconut Tree Hill"
                        class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <span class="text-white text-lg font-semibold flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C10.343 2 9 3.343 9 5c0 1.656 1.343 3 3 3s3-1.344 3-3c0-1.657-1.343-3-3-3zM5 9v2h14V9H5zm-2 4v2h18v-2H3zm0 4v2h18v-2H3z" />
                            </svg>
                            Coconut Tree Hill
                        </span>
                    </div>
                </div>

                <!-- Mirissa Beach -->
                <div class="relative group overflow-hidden rounded-lg cursor-pointer">
                    <img src="/images/location/Rectangle10.png" alt="Mirissa Beach"
                        class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-4 text-center">
                        <h3 class="text-white text-xl font-semibold mb-2">Mirissa Beach</h3>
                        <p class="text-white text-sm">A hidden cove away from the crowds, perfect for swimming,
                            sunbathing, and catching the most peaceful sunsets.</p>
                    </div>
                </div>

                <!-- Parrot Rock -->
                <div class="relative group overflow-hidden rounded-lg cursor-pointer">
                    <img src="/images/location/Rectangle11.png" alt="Parrot Rock"
                        class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <span class="text-white text-lg font-semibold flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C10.343 2 9 3.343 9 5c0 1.656 1.343 3 3 3s3-1.344 3-3c0-1.657-1.343-3-3-3zM5 9v2h14V9H5zm-2 4v2h18v-2H3zm0 4v2h18v-2H3z" />
                            </svg>
                            Parrot Rock
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-[#FAF6F0] py-16">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12 text-center">

                <!-- Item 1 -->
                <div class="flex flex-col items-center">
                    <img src="images/icons/image16.png" alt="Airport Icon" class="h-12 w-12 mb-2 object-contain">
                    <div class="w-8 h-0.5 bg-gray-800 mb-2"></div>
                    <p class="text-sm text-gray-700">2.5 hours from <br> the airport</p>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col items-center">
                    <img src="images/icons/image17.png" alt="highwayIcon" class="h-12 w-12 mb-2 object-contain">
                    <div class="w-8 h-0.5 bg-gray-800 mb-2"></div>
                    <p class="text-sm text-gray-700">Minutes away from the <br> Southern Expressway</p>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col items-center">
                    <img src="images/icons/image18.png" alt="mobile Icon" class="h-12 w-12 mb-2 object-contain">
                    <div class="w-8 h-0.5 bg-gray-800 mb-2"></div>
                    <p class="text-sm text-gray-700">24/7 available <br> Tuk-tuks and taxis</p>
                </div>

                <!-- Item 4 -->
                <div class="flex flex-col items-center">
                    <img src="images/icons/image19.png" alt="walk Icon" class="h-12 w-12 mb-2 object-contain">
                    <div class="w-8 h-0.5 bg-gray-800 mb-2"></div>
                    <p class="text-sm text-gray-700">Walk to most <br> Mirissa highlights</p>
                </div>

            </div>
        </div>
    </section>


    <!-- room section -->
    <section id="rooms" class="py-20 bg-[#FAF6F0]">
        <div class="flex justify-center w-full">
            <div class="inline-block px-8 max-w-7xl w-full">
                <div class="flex flex-col lg:flex-row items-stretch">

                    <!-- Left Image -->
                    <div class="lg:w-1/2 w-full">
                        <img class="w-full h-[450px] object-cover rounded-l-xl shadow-md"
                            src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&h=600&fit=crop&crop=center"
                            alt="Coastal Living Room at Sailors Mirissa" />
                    </div>

                    <!-- Right Content -->
                    <div class="lg:w-1/2 w-full relative flex items-center">



                        <!-- White Content Card -->
                        <div
                            class="relative bg-transparent rounded-r-xl shadow-md p-10 lg:p-14 w-full border border-black">
                            <h2
                                class="text-3xl lg:text-4xl font-medium font-['Sorts_Mill_Goudy'] mb-6 leading-tight text-black">
                                Coastal Living in Comfort
                            </h2>
                            <p class="text-base lg:text-lg font-['NATS'] leading-relaxed mb-10 text-black">
                                Unwind in cozy, stylish rooms designed as your perfect base in Mirissa. Whether you're
                                here to surf, explore, or simply relax, our spaces offer the comfort you need after a
                                day by the sea.
                            </p>
                            <div>
                                <div
                                    class="text-sm lg:text-base font-normal font-['NATS'] text-black tracking-[0.2em]">
                                    EXPLORE OUR ROOMS
                                </div>
                                <div class="w-40 h-px bg-black mt-2"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->
    {{-- <section class="py-16 bg-orange-50">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏖️</span>
                    </div>
                    <p class="text-stone-700 text-lg">Beach access at walking distance</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏖️</span>
                    </div>
                    <p class="text-stone-700 text-lg">Beach access at walking distance</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">✈️</span>
                    </div>
                    <p class="text-stone-700 text-lg">3 hours away from the airport</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">✈️</span>
                    </div>
                    <p class="text-stone-700 text-lg">3 hours away from the airport</p>
                </div>
            </div>
        </div>
    </section> --}}

</x-layout>
