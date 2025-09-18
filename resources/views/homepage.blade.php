<x-layout>
    <x-slot:title>Belleza - Your Chill Spot in Paradise</x-slot:title>
<link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=NATS&display=swap" rel="stylesheet">

    <!-- Hero Section -->
<!-- Hero Section -->
<section id="home" class="relative bg-cover bg-center min-h-screen" style="background-image: url('/images/home.png');">

  <!-- Dark overlay -->
  <div class="absolute inset-0 bg-black/40"></div>

  <!-- Content wrapper -->
  <div class="relative z-10 flex flex-col justify-between min-h-screen pl-16 pr-8">

    <!-- Hero text (vertically centered) -->
<div class="text-white px-8 py-8 w-full flex flex-col justify-center flex-1" style="margin-top: 10vh;">
  <h1 class="text-4xl md:text-7xl font-bold font-['Sorts_Mill_Goudy'] leading-tight w-full whitespace-nowrap">
    Your Chill Spot in Paradise
  </h1>

  <p class="text-xl md:text-2xl font-light font-['NATS'] mb-8 leading-relaxed whitespace-pre-line">
    Wake up in the heart of Mirissa, roll out of bed.  
    and you're already living your best life.  
    Everything you want is within a wave's reach.
  </p>

  <div class="flex flex-col items-start gap-4">
    <div class="text-2xl font-bold font-['NATS'] tracking-widest">CHECK AVAILABILITY</div>
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
              <label class="text-stone-400 text-xs font-['NATS']">Check In</label>
              <input type="date" name="check_in" id="check_in" 
                     class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none cursor-pointer"
                     value="2025-09-14">
            </div>
          </div>

          <!-- Check Out -->
          <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]">
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

          <!-- No of adults -->
          <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]">
            <div class="w-6 h-6 bg-teal-500 rounded"></div>
            <div class="flex-1">
              <label class="text-stone-400 text-xs font-['NATS']">No of adults</label>
              <input type="number" name="adults" id="adults" min="1" max="20" 
                     class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none"
                     value="3">
            </div>
          </div>

          <!-- No of children -->
          <div class="flex items-center gap-3 p-4 rounded-lg min-w-[200px]">
            <div class="w-6 h-6 bg-teal-500 rounded"></div>
            <div class="flex-1">
              <label class="text-stone-400 text-xs font-['NATS']">No of children</label>
              <input type="number" name="children" id="children" min="0" max="20" 
                     class="w-full text-black text-base font-['NATS'] bg-transparent border-none outline-none"
                     value="1">
            </div>
          </div>

          <!-- Check Now Button -->
          <button class="bg-[#72B6B9] hover:bg-[#5A8E91] text-white px-8 py-4 rounded-lg font-bold font-['NATS'] transition-colors">
            CHECK NOW
          </button>

        </div>
      </div>
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