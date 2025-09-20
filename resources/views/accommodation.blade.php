<x-layout>
    <x-slot:title>Accommodation- Saylor's Mirissa</x-slot:title>

    <!-- Hero Section -->
<section class="relative h-[50vh]" 
         style="background-image: url('{{ asset('images/home.png') }}'); background-size: cover; background-position: bottom;">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Content at bottom-left -->
    <div class="absolute bottom-4 left-8 md:bottom-8 md:left-20 z-10 text-neutral-50 max-w-4xl ">
        <h1 class="text-5xl  md:text-6xl font-['STIX_Two_Text'] leading-tight">
            Accommodation
        </h1>
    </div>
</section>







<!-- Rooms Section -->
<section x-data="{ tab: 'single' }" class=" ">
        <div class="-mx-8 px-8">
        <div class="flex justify-center gap-80 border-b border-stone-300 mb-12 bg-[#EEE0CD] py-10">
            <button @click="tab = 'single'"
                            :class="tab === 'single' ? 'text-stone-900 font-bold border-b-2 border-stone-900 pb-2' : 'text-stone-500 pb-2'"
                            class="uppercase tracking-wide transition">
                Single
            </button>

            <button @click="tab = 'double'"
                            :class="tab === 'double' ? 'text-stone-900 font-bold border-b-2 border-stone-900 pb-2' : 'text-stone-500 pb-2'"
                            class="uppercase tracking-wide transition">
                Double
            </button>

            <button @click="tab = 'triple'"
                            :class="tab === 'triple' ? 'text-stone-900 font-bold border-b-2 border-stone-900 pb-2' : 'text-stone-500 pb-2'"
                            class="uppercase tracking-wide transition">
                Triple
            </button>

            <button @click="tab = 'family'"
                            :class="tab === 'family' ? 'text-stone-900 font-bold border-b-2 border-stone-900 pb-2' : 'text-stone-500 pb-2'"
                            class="uppercase tracking-wide transition">
                Family
            </button>
        </div>
    </div>
  <div class="max-w-screen-xl mx-auto px-8">

    <!-- Tabs -->


    <!-- Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Image -->
      <div>
        <template x-if="tab === 'single'">
          <img src="{{ asset('/images/rooms/single.png') }}" alt="Single Room" class="w-full h-[400px] object-cover rounded-3xl shadow-lg">
        </template>
        <template x-if="tab === 'double'">
          <img src="{{ asset('images/rooms/double.jpg') }}" alt="Double Room" class="w-full h-[400px] object-cover rounded-3xl shadow-lg">
        </template>
        <template x-if="tab === 'triple'">
          <img src="{{ asset('images/rooms/single.png') }}" alt="Triple Room" class="w-full h-[400px] object-cover rounded-3xl shadow-lg">
        </template>
        <template x-if="tab === 'family'">
          <img src="{{ asset('images/rooms/family.jpg') }}" alt="Family Room" class="w-full h-[400px] object-cover rounded-3xl shadow-lg">
        </template>
      </div>

      <!-- Content -->
      <div class="space-y-6">
        <!-- Single -->
        <template x-if="tab === 'single'">
          <div>
            <h2 class="text-3xl font-bold font-['STIX_Two_Text'] mb-4">Single Rooms</h2>
            <ul class="space-y-2 text-stone-700">
              <li>👤 3 Guests</li>
              <li>🛏 2 Beds - 1 Double, 1 Single</li>
            </ul>
            <p class="mt-4 text-stone-600 leading-relaxed">
              Sailors Mirissa sits in the heart of town where everything cool happens – just a 2-minute walk to the beach, practically next door to Coconut Tree Hill, surrounded by great restaurants, surf spots, and the whale watching harbor.
            </p>
            <div class="mt-6">
              <a href="#" class="uppercase text-stone-700 font-['NATS']">Book Now</a>
              <div class="w-24 h-px bg-stone-300 mt-1"></div>
            </div>
          </div>
        </template>

        <!-- Double -->
        <template x-if="tab === 'double'">
          <div>
            <h2 class="text-3xl font-bold font-['STIX_Two_Text'] mb-4">Double Rooms</h2>
            <ul class="space-y-2 text-stone-700">
              <li>👥 4 Guests</li>
              <li>🛏 2 Double Beds</li>
            </ul>
            <p class="mt-4 text-stone-600 leading-relaxed">
              Perfect for couples or friends traveling together, our Double Rooms combine comfort with convenience, just steps from Mirissa beach.
            </p>
            <div class="mt-6">
              <a href="#" class="uppercase text-stone-700 font-['NATS']">Book Now</a>
              <div class="w-24 h-px bg-stone-300 mt-1"></div>
            </div>
          </div>
        </template>

        <!-- Triple -->
        <template x-if="tab === 'triple'">
          <div>
            <h2 class="text-3xl font-bold font-['STIX_Two_Text'] mb-4">Triple Rooms</h2>
            <ul class="space-y-2 text-stone-700">
              <li>👥 5 Guests</li>
              <li>🛏 1 Double Bed, 2 Single Beds</li>
            </ul>
            <p class="mt-4 text-stone-600 leading-relaxed">
              Ideal for small groups, our Triple Rooms offer extra space and comfort, with all modern amenities close to the beach and local spots.
            </p>
            <div class="mt-6">
              <a href="#" class="uppercase text-stone-700 font-['NATS']">Book Now</a>
              <div class="w-24 h-px bg-stone-300 mt-1"></div>
            </div>
          </div>
        </template>

        <!-- Family -->
        <template x-if="tab === 'family'">
          <div>
            <h2 class="text-3xl font-bold font-['STIX_Two_Text'] mb-4">Family Rooms</h2>
            <ul class="space-y-2 text-stone-700">
              <li>👨‍👩‍👧‍👦 6 Guests</li>
              <li>🛏 2 Double Beds, 2 Single Beds</li>
            </ul>
            <p class="mt-4 text-stone-600 leading-relaxed">
              Spacious and welcoming, our Family Rooms are designed to keep everyone comfortable, with quick access to Mirissa’s top attractions.
            </p>
            <div class="mt-6">
              <a href="#" class="uppercase text-stone-700 font-['NATS']">Book Now</a>
              <div class="w-24 h-px bg-stone-300 mt-1"></div>
            </div>
          </div>
        </template>
      </div>
    </div>
  </div>
</section>













<section class="bg-[#FAF6F0] py-16">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-['Sorts_Mill_Goudy'] text-gray-800 mb-10">
Right Where You Want to Be!
    </h2>

    <!-- Description -->
    <p class="text-gray-600 text-base md:text-lg leading-relaxed font-['NATS'] ">
    We're literally in the middle of everything cool in Mirissa. Beach vibes, amazing sunsets, great food, and all the fun stuff - you can walk to it all from Sailors. No stress, no long rides, just pure convenience.
    </p>
  </div>
</section>


    <!-- Map Section -->
<section class="py-20 bg-[#FAF6F0]">
    <div class="max-w-screen-2xl mx-auto  border-2">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Map -->
            <div class="order-2 lg:order-1">
                <div class="bg-white shadow-xl overflow-hidden h-[60vh]">
                    <img class="w-full h-full object-cover" 
                         src="{{ asset('images/location/gallemap.png') }}" 
                         alt="Mirissa Location Map" />
                </div>
            </div>
            
            <!-- Content -->
            <div class="order-1 lg:order-2 space-y-8 ">
                <h2 class="text-4xl lg:text-5xl font-['STIX_Two_Text'] text-stone-700 leading-tight">
                    In the Heart of It All
                </h2>
                <p class="text-lg lg:text-xl text-stone-700 font-['NATS'] leading-relaxed mr-5">
                    Sailors Mirissa sits in the heart of town where everything cool happens - just a 2-minute walk to the beach, practically next door to Coconut Tree Hill, surrounded by great restaurants, surf spots, and the whale watching harbor. Also right on the main road for easy tuk-tuk rides to Galle and other adventures.   </p>
              <div class="pt-4">
    <a href="#" class="text-stone-700 font-['NATS'] tracking-wide text-base uppercase">
        GET DIRECTIONS
    </a>
    <div class="w-32 h-px bg-stone-300 mt-2"></div>
</div>






            </div>
        </div>
    </div>
</section>










<section class="bg-[#FAF6F0] py-16">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-['Sorts_Mill_Goudy'] text-gray-800 mb-10">
Transportation and Access
    </h2>

    <!-- Description -->
    <p class="text-gray-600 text-base md:text-lg leading-relaxed font-['NATS'] ">
 Sailors Mirissa's strategic location provides seamless access to southern Sri Lanka's highlights while ensuring convenient transportation options for arrival and exploration. </p>
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

<section class="bg-[#FAF6F0] py-16">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-['Sorts_Mill_Goudy'] text-gray-800 mb-10">
Historic Galle
    </h2>

    <!-- Description -->
    <p class="text-gray-600 text-base md:text-lg leading-relaxed font-['NATS'] ">
Journey to the UNESCO World Heritage city of Galle, where 400 years of colonial history meet contemporary
Sri Lankan culture. Explore ancient ramparts, boutique galleries, and world-class dining within the historic fort walls.</div>
</section>

   <!-- Historic Galle Section -->
<section class="py-10 pb-40 bg-[#FAF6F0]">
  <div class="max-w-screen-xl mx-auto px-8">
    
    <!-- Image Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
      
      <!-- Tall Image (Left Side) -->
      <div class="md:row-span-2">
        <img class="w-full h-full object-cover rounded-3xl shadow-lg" 
             src="{{ asset('images/location/galle1.png') }}" 
             alt="Galle Fort Aerial View" />
      </div>

      <!-- Top Right (Wide) -->
      <div class="lg:col-span-2">
        <img class="w-full h-60 md:h-72 object-cover rounded-3xl shadow-lg" 
             src="{{ asset('images/location/galle2.png') }}" 
             alt="Galle Fort Architecture" />
      </div>

      <!-- Bottom Right 1 -->
      <div>
        <img class="w-full h-80  object-cover rounded-3xl shadow-lg" 
             src="{{ asset('images/location/galle3.png') }}" 
             alt="Galle Lighthouse" />
      </div>

      <!-- Bottom Right 2 -->
      <div>
        <img class="w-full h-80 object-cover rounded-3xl shadow-lg" 
             src="{{ asset('images/location/galle4.png') }}" 
             alt="Galle Fort Streets" />
      </div>
    </div>
  </div>
</section>


    <!-- Nearby Attractions Section -->
    {{-- <section class="py-20 bg-orange-50">
        <div class="max-w-screen-xl mx-auto px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-6">
                    What's Around
                </h2>
                <p class="text-xl text-stone-700 font-['NATS'] leading-relaxed max-w-3xl mx-auto">
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
                        <p class="text-stone-700 font-['NATS'] mb-4">Golden sand beach perfect for swimming, surfing, and sunset watching. Just 2 minutes walk from the hotel.</p>
                        <div class="text-sm text-stone-400 font-['NATS']">2 min walk</div>
                    </div>
                </div>
                
                <!-- Whale Watching -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400&h=300&fit=crop" 
                         alt="Whale Watching" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Whale Watching</h3>
                        <p class="text-stone-700 font-['NATS'] mb-4">World-class whale watching tours departing from Mirissa harbor. See blue whales and dolphins in their natural habitat.</p>
                        <div class="text-sm text-stone-400 font-['NATS']">5 min walk to harbor</div>
                    </div>
                </div>
                
                <!-- Coconut Tree Hill -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop" 
                         alt="Coconut Tree Hill" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Coconut Tree Hill</h3>
                        <p class="text-stone-700 font-['NATS'] mb-4">Instagram-famous viewpoint offering panoramic views of the coastline and perfect sunset photo opportunities.</p>
                        <div class="text-sm text-stone-400 font-['NATS']">3 min walk</div>
                    </div>
                </div>
                
                <!-- Secret Beach -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=400&h=300&fit=crop" 
                         alt="Secret Beach" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Secret Beach</h3>
                        <p class="text-stone-700 font-['NATS'] mb-4">Hidden cove with crystal clear waters and fewer crowds. Perfect for a peaceful swim and snorkeling.</p>
                        <div class="text-sm text-stone-400 font-['NATS']">10 min walk</div>
                    </div>
                </div>
                
                <!-- Restaurants -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?w=400&h=300&fit=crop" 
                         alt="Local Restaurants" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Beach Restaurants</h3>
                        <p class="text-stone-700 font-['NATS'] mb-4">Fresh seafood and Sri Lankan cuisine at beachfront restaurants with sand between your toes.</p>
                        <div class="text-sm text-stone-400 font-['NATS']">1-5 min walk</div>
                    </div>
                </div>
                
                <!-- Surf Spots -->
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" 
                         src="https://images.unsplash.com/photo-1502933691298-84fc14542831?w=400&h=300&fit=crop" 
                         alt="Surf Spots" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold font-['STIX_Two_Text'] text-stone-700 mb-3">Surf Spots</h3>
                        <p class="text-stone-700 font-['NATS'] mb-4">Multiple surf breaks suitable for all levels, from beginner-friendly waves to advanced reef breaks.</p>
                        <div class="text-sm text-stone-400 font-['NATS']">Beach access</div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</x-layout>