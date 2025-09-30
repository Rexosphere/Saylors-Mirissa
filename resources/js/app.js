import './bootstrap';

import Alpine from 'alpinejs'
import { HeroSlider } from './hero-slider';
import fragmentShader from './shaders/displacement-fragment.glsl?raw';

window.Alpine = Alpine

Alpine.start()

// Initialize Hero Slider
document.addEventListener('DOMContentLoaded', () => {
    const sliderElement = document.getElementById('slider');

    if (sliderElement) {
        new HeroSlider({
            fragment: fragmentShader,
            uniforms: {},
            duration: 2,
            easing: 'power2.inOut',
            autoPlayInterval: 5000
        });
    }
});