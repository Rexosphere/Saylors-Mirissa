<!-- Hero Section -->
<section id="featured_header" class="relative min-h-screen overflow-hidden">
    <!-- Three.js Slider Container -->
    <div id="content" class="absolute inset-0 cursor-pointer">
        <div id="slider" class="w-full h-full"
             data-images='["/images/home.png","/images/home2.png"]'>
        </div>
    </div>

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black/40 pointer-events-none z-10"></div>

    <!-- Content wrapper -->
    <div class="relative z-20 flex flex-col min-h-screen pointer-events-none">
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
    </div>
</section>

<style>
    #slider {
        position: relative;
    }

    #slider canvas {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>