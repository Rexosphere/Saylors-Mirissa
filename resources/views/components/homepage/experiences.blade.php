<section id="Experiences">
    <div class="max-w-screen-2xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-display text-gray-800 mb-10">
            Experiences
        </h2>
    </div>
</section>

{{-- experience view  --}}
<div class=" bg-orange-50 px-36 py-20">
    <div class="max-w-screen-2xl mx-auto">
        <div class="grid grid-cols-3 gap-6">
            @foreach (config('experiences') as $slug => $experience)
                <a href="{{ route('experience', $slug) }}"
                    class="relative rounded-xl overflow-hidden h-96 group cursor-pointer block">
                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-transform duration-500 group-hover:scale-110"
                        style="background-image: url('{{ $experience['image'] }}');"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-stone-900 opacity-80">
                    </div>
                    <!-- Title that moves from bottom to center on hover -->
                    <div class="absolute inset-0 flex justify-end items-center text-center">
                        <div
                            class="px-6 pb-6 transition-all duration-500 ease-out transform translate-y-24 group-hover:translate-y-0">
                            <h3 class="text-white text-3xl font-medium mb-3">
                                {{ $experience['heading'] }}
                            </h3>
                            <p
                                class="text-white text-sm leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                {{ $experience['description'] }}
                            </p>
                            <x-mary-button
                                class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 mt-8">
                                See More
                            </x-mary-button>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>