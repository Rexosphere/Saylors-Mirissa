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
          @foreach (config('experiences') as $slug => $experience)
            <a href="{{ route('experience', $slug) }}" class="relative rounded-xl overflow-hidden h-96 group cursor-pointer transform hover:scale-105 transition-transform duration-300 block">
              <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
                   style="background-image: url('{{ $experience['image'] }}');"></div>
              <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80"></div>
              
              <!-- Default state: title at bottom -->
              <div class="absolute bottom-0 left-0 right-0 px-8 py-6 flex justify-center items-end group-hover:opacity-0 transition-opacity duration-300">
                <h3 class="text-white text-2xl font-medium text-center" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                  {{ $experience['heading'] }}
                </h3>
              </div>
              
              <!-- Hover state: title centered with description -->
              <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <h3 class="text-white text-3xl font-medium mb-3" style="font-family: 'OFL Sorts Mill Goudy TT', serif;">
                  {{ $experience['heading'] }}
                </h3>
                <p class="text-white text-sm leading-relaxed">
                  {{ $experience['description'] }}
                </p>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Footer -->


</x-layout>