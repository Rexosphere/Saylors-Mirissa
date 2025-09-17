<x-layout>
    <x-slot:title>Belleza - Your Chill Spot in Paradise</x-slot:title>

    <!-- Hero Section -->
<section id="home" 
         class="relative min-h-screen flex items-center justify-start pl-15"
         style="background-image: url('/images/home.png'); background-size: cover; background-position: center;">

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black/30"></div>
    
  <!-- Hero content (top-left) -->
  <div class="relative z-10 text-white px-8 py-8 text-left max-w-full">
    <h1 class="text-6xl md:text-7xl font-bold font-['STIX_Two_Text'] mb-6 leading-tight text-neutral-50">
      Your Chill Spot in Paradise
    </h1>
    <p class="text-xl md:text-2xl font-light font-['NATS'] mb-8 leading-relaxed text-neutral-50 whitespace-pre-line">
      Wake up in the heart of Mirissa, roll out of bed. 
      and you're already living your best life. 
      Everything you want is within a wave's reach.
    </p>

    <div class="flex flex-col items-start gap-4">
      <div class="text-lg font-normal font-['NATS'] tracking-widest text-neutral-50">
        CHECK AVAILABILITY
      </div>
      <div class="w-48 h-0.5 bg-neutral-50"></div>
    </div>
  </div>

  <!-- Wave divider -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
    <svg class="relative block w-full h-48" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 1440 320" preserveAspectRatio="none">
      <path fill="#ffffff" fill-opacity="1" 
            d="M0,224 C480,0 960,448 1440,224 L1440,320 L0,320Z"></path>
    </svg>
  </div>
</section>



    <!-- Booking Form Section -->
   <section class="bg-white py-8 shadow-lg">
  <div class="max-w-screen-xl mx-auto px-4">
    <div class="flex flex-wrap items-center justify-center gap-4 md:gap-8">

      <!-- Check In -->
      <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
        <div class="w-6 h-6">
          <img src="./icons/calander.png" alt="Calendar Icon" class="w-6 h-6" />
        </div>
        <div class="flex-1">
          <label class="text-stone-400 text-xs font-['NATS']">Check In</label>
          <input type="date" name="check_in" id="check_in" 
                 class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none cursor-pointer"
                 value="2025-09-14">
        </div>
      </div>

      <!-- Divider -->
      <div class="w-px h-8 bg-stone-300 hidden md:block"></div>

      <!-- Check Out -->
      <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
        <div class="w-6 h-6">
          <img src="./icons/calander.png" alt="Calendar Icon" class="w-6 h-6" />
        </div>
        <div class="flex-1">
          <label class="text-stone-400 text-xs font-['NATS']">Check Out</label>
          <input type="date" name="check_out" id="check_out" 
                 class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none cursor-pointer"
                 value="2025-09-17">
        </div>
      </div>

      <!-- Divider -->
      <div class="w-px h-8 bg-stone-300 hidden md:block"></div>

      <!-- No of adults -->
      <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
        <div class="w-6 h-6 bg-teal-500 rounded"></div>
        <div class="flex-1">
          <label class="text-stone-400 text-xs font-['NATS']">No of adults</label>
          <input type="number" name="adults" id="adults" min="1" max="20" 
                 class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none"
                 value="3">
        </div>
      </div>

      <!-- Divider -->
      <div class="w-px h-8 bg-stone-300 hidden md:block"></div>

      <!-- No of children -->
      <div class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg min-w-[200px]">
        <div class="w-6 h-6 bg-teal-500 rounded"></div>
        <div class="flex-1">
          <label class="text-stone-400 text-xs font-['NATS']">No of children</label>
          <input type="number" name="children" id="children" min="0" max="20" 
                 class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none"
                 value="1">
        </div>
      </div>

      <!-- Check Now Button -->
      <button class="bg-teal-500 hover:bg-teal-600 text-white px-8 py-4 rounded-full font-bold font-['NATS'] transition-colors">
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
                        <p class="text-xl text-stone-700 font-['NATS'] leading-relaxed mb-8">
                            Situated in the vibrant center of Mirissa, Sailors offers unparalleled access to the island's most coveted coastal experiences. Step from our refined accommodations onto golden sands, while the town's finest dining, cultural attractions, and adventure opportunities await within moments of your stay.
                        </p>
                        <a href="/location" class="group">
                            <div class="flex flex-col gap-3">
                                <div class="text-2xl font-normal font-['NATS'] text-stone-400 tracking-wider group-hover:text-stone-700 transition-colors">EXPLORE LOCATION</div>
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
                    <p class="text-xl text-stone-700 font-['NATS'] leading-relaxed">
                        Step outside and the best of Mirissa is right here.<br/>
                        From golden beaches to whale watching,<br/>
                        our hotel puts you in the center of it all
                    </p>
                    <div class="flex flex-col gap-3">
                        <div class="text-2xl font-normal font-['NATS'] text-stone-400 tracking-wider">DISCOVER</div>
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
                    <p class="text-stone-700 text-lg font-['NATS']">Beach access at walking distance</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏖️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['NATS']">Beach access at walking distance</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">✈️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['NATS']">3 hours away from the airport</p>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">✈️</span>
                    </div>
                    <p class="text-stone-700 text-lg font-['NATS']">3 hours away from the airport</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>