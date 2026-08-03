<?php
use function Livewire\Volt\{layout};

layout('components.layouts.app');
?>

<div>
    <!-- Navigation Header -->
    <nav class="bg-[#0A3D2E] text-white py-4 px-6 border-b border-gray-800 flex justify-between items-center sticky top-0 z-40">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-[#E5A823] rounded-full flex items-center justify-center font-bold text-gray-900">
                🕊️
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tight text-white">Bishop's Ark</h1>
                <p class="text-xs text-[#E5A823] uppercase tracking-wider font-semibold">Restoring Safety, Dignity & Hope</p>
            </div>
        </div>
        <div class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="#about" class="hover:text-[#E5A823] transition">About Us</a>
            <a href="#services" class="hover:text-[#E5A823] transition">Services</a>
            <a href="#approach" class="hover:text-[#E5A823] transition">Our Approach</a>
            <a href="#action" class="hover:text-[#E5A823] transition">Get Involved</a>
        </div>
        <div>
            <livewire:intake-modal />
        </div>
    </nav>

    <!-- Main Hero Section -->
    <section class="bg-[#0A3D2E] text-white py-16 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-[#E5A823] mb-4">
                Supporting Returning Nationals
            </h1>
            <p class="text-lg text-gray-200 mb-8 max-w-2xl mx-auto">
                Assisting individuals affected by Xenophobia in South Africa through emergency transport, shelter, essential supplies, and restorative care.
            </p>
            <div class="flex justify-center gap-4 items-center">
                <button @click="$dispatch('open-intake')" class="bg-[#E5A823] hover:bg-yellow-600 text-gray-900 font-bold py-3 px-6 rounded-lg transition shadow-md">
                    Get Emergency Support
                </button>
                <a href="#services" class="border border-white hover:bg-white/10 text-white font-bold py-3 px-6 rounded-lg transition">
                    Explore Services
                </a>
            </div>
        </div>
    </section>

    <!-- Bible Verse Banner -->
    <div class="bg-[#E5A823] text-gray-900 py-3 text-center font-semibold italic text-sm px-4">
        "Carry each other's burdens and in this way you will fulfill the law of Christ." — Galatians 6:2
    </div>

    <!-- Cross-Border Emergency Relief Section -->
    <section class="max-w-6xl mx-auto px-6 pt-4">
        <livewire:media-section />
    </section>

    <!-- Main Content Area -->
    <main id="services" class="max-w-6xl mx-auto px-6 py-8 space-y-12">
        <div id="approach">
            <livewire:approach-accordion />
        </div>
        <div id="action">
            <livewire:action-tabs />
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#05281E] text-white py-12 px-6 border-t border-gray-800">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-xl font-bold text-[#E5A823] mb-3">Bishop's Ark</h4>
                <p class="text-gray-300 text-sm">Restoring safety, dignity, and hope to displaced individuals and returning nationals.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold text-[#E5A823] mb-3">Contacts & Lines</h4>
                <p class="text-sm text-gray-300">📞 Primary: +263 77 240 5511</p>
                <p class="text-sm text-gray-300 mt-1">📞 Secondary: +263 77 245 7295</p>
                <p class="text-sm text-gray-300 mt-1">✉️ bishopstea22@gmail.com</p>
            </div>
            <div>
                <h4 class="text-xl font-bold text-[#E5A823] mb-3">Scripture</h4>
                <p class="text-gray-300 text-sm italic">"Carry each other's burdens..." — Galatians 6:2</p>
            </div>
        </div>
    </footer>
</div>