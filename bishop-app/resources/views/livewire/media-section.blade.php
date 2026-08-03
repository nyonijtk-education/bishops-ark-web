<?php
use function Livewire\Volt\{state};

state([
    'gallery' => [
        [
            'title' => 'Beitbridge Reception & Transit Care',
            'type' => 'image',
            // Update this URL with your custom African community photograph
            'url' => 'https://images.unsplash.com/photo-1593113598332-cd288d649433?q=80&w=1200', 
            'desc' => 'Immediate shelter, warm meals, and registration at border reception hubs for returning families.'
        ],
        [
            'title' => 'Cross-Border Repatriation Transport',
            'type' => 'video',
            // Update this URL with your custom bus boarding photograph
            'thumbnail' => 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=1200',
            'videoUrl' => 'https://www.w3schools.com/html/mov_bbb.mp4',
            'desc' => 'Coordinated bus transport moving displaced individuals safely from Johannesburg and Limpopo.'
        ],
        [
            'title' => 'Emergency Medical & Chronic Care',
            'type' => 'image',
            // Update this URL with your custom African medical tent photograph
            'url' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1200',
            'desc' => 'Mobile medical clinics restoring interrupted chronic treatment and providing trauma care.'
        ]
    ]
]);
?>

<div x-data="{ videoOpen: false, currentSrc: '' }" class="py-12 bg-gray-900 text-white px-6 rounded-2xl my-6 border border-gray-800 shadow-2xl">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-[#E5A823]">Cross-Border Emergency Relief</h2>
            <p class="text-gray-300 mt-2 text-sm md:text-base">Documenting sanctuary, relocation transport, and healthcare support for affected Zimbabwean returnees.</p>
        </div>

        <!-- Media Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($gallery as $item)
                <!-- Single Media Card -->
                <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-2xl flex flex-col group transition-all duration-300 hover:ring-2 hover:ring-[#E5A823]">
                    
                    <!-- Media Thumbnail Container (Prominent) -->
                    <div class="relative aspect-[4/3] w-full overflow-hidden">
                        <img 
                            src="{{ $item['type'] === 'video' ? $item['thumbnail'] : $item['url'] }}" 
                            alt="{{ $item['title'] }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        >
                        
                        @if($item['type'] === 'video')
                            <!-- Centered Play Button Overlay -->
                            <button 
                                @click="videoOpen = true; currentSrc = '{{ $item['videoUrl'] }}'" 
                                class="absolute inset-0 flex items-center justify-center bg-black/40 group-hover:bg-black/20 transition"
                            >
                                <div class="w-16 h-16 bg-[#E5A823] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                                    <svg class="w-8 h-8 text-gray-900 fill-current ml-1" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </div>

                    <!-- Text Content (Grouped below media) -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-xl text-white mb-2">{{ $item['title'] }}</h3>
                            <p class="text-sm text-gray-300 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Video Modal Overlay -->
    <template x-if="videoOpen">
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4"
             x-transition.opacity
             @keydown.escape.window="videoOpen = false">
            <div class="relative w-full max-w-4xl bg-black rounded-xl overflow-hidden shadow-2xl" @click.away="videoOpen = false">
                <button @click="videoOpen = false" class="absolute top-4 right-4 z-10 text-white bg-gray-800/80 rounded-full p-2 hover:bg-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="aspect-video w-full">
                    <video x-ref="player" :src="currentSrc" controls autoplay class="w-full h-full object-cover"></video>
                </div>
            </div>
        </div>
    </template>
</div>