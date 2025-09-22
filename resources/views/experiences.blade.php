<x-layout>
    <x-slot:title>Experiences - Saylor's Mirissa</x-slot:title>

    <!-- Hero Section -->
    <section class="relative h-[50vh] bg-cover bg-center bg-fixed"
        style="background-image: url('{{ asset('images/home.png') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content at bottom-left -->
        <div class="absolute bottom-4 left-8 md:bottom-8 md:left-20 z-10 text-neutral-50 max-w-4xl ">
            <h1 class="text-5xl  md:text-6xl font-['STIX_Two_Text'] leading-tight">
                Experiences
            </h1>
        </div>
    </section>
    <!-- Experiences Grid Section -->
    <div class="w-full bg-orange-50 px-56 py-20">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-3 gap-6">
          
          <!-- Scuba Diving -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Scuba Diving
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Scuba Diving
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Explore the vibrant underwater world of Mirissa with certified instructors and discover colorful coral reefs.
              </p>
            </div>
          </div>

          <!-- Whale Watching -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Whale Watching
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Whale Watching
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Witness magnificent blue whales and dolphins in their natural habitat during peak season.
              </p>
            </div>
          </div>

          <!-- Surfing -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Surfing
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Surfing
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Ride perfect waves at Mirissa Beach with lessons for beginners and advanced surfers.
              </p>
            </div>
          </div>

          <!-- Parrot Rock -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Parrot Rock
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Parrot Rock
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Climb this iconic rock formation for breathtaking panoramic views of the coastline.
              </p>
            </div>
          </div>

          <!-- Coconut Tree Hill -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Coconut Tree Hill
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Coconut Tree Hill
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Walk among swaying coconut palms and capture Instagram-perfect tropical shots.
              </p>
            </div>
          </div>

          <!-- Snake Island -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Snake Island
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Snake Island
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Take a boat trip to this secluded island for snorkeling and pristine beaches.
              </p>
            </div>
          </div>

          <!-- Sunset Point -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Sunset Point
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Sunset Point
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Experience magical golden hour views from the best sunset spot in Mirissa.
              </p>
            </div>
          </div>

          <!-- Beach Hopping -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1540979388789-6cee28a1cdc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Beach Hopping
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Beach Hopping
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Discover hidden coves and pristine beaches along the stunning southern coast.
              </p>
            </div>
          </div>

          <!-- Fishing -->
          <div class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                 style="background-image: url('https://images.unsplash.com/photo-1502680390469-be75c86b636f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
            
            <!-- Default state: title at bottom -->
            <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
              <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Fishing
              </h3>
            </div>
            
            <!-- Hover state: title centered with description -->
            <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                Fishing
              </h3>
              <p class="text-white text-sm leading-relaxed">
                Join local fishermen for traditional boat fishing or try deep-sea fishing adventures.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Footer -->


</x-layout>