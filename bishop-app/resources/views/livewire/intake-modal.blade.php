<?php
use function Livewire\Volt\{state};

state([
    'name' => '',
    'phone' => '',
    'assistance_type' => 'Emergency Transport',
    'details' => ''
]);

$submit = function () {
    // Process intake request
    $this->reset();
    $this->dispatch('intake-submitted');
};
?>

<div x-data="{ 
    open: false, 
    mode: 'avatar', // 'avatar' or 'form'
    isPlaying: false,
    
    initAvatar() {
        this.isPlaying = true;
        // Connect to your HeyGen/Tavus WebRTC session here
    }
}" 
x-on:open-intake.window="open = true">

    <!-- Trigger Button -->
    <button @click="open = true; initAvatar()" 
            class="bg-[#E5A823] hover:bg-yellow-600 text-gray-900 font-bold py-3 px-6 rounded-lg transition shadow-md">
        Get Urgent Assistance
    </button>

    <!-- Modal Backdrop -->
    <div x-show="open" 
         x-transition.opacity 
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4">
        
        <div class="bg-gray-900 border border-gray-700 rounded-2xl w-full max-w-3xl overflow-hidden shadow-2xl relative"
             @click.away="open = false">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-800 bg-gray-950">
                <div class="flex items-center space-x-3">
                    <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                    <h3 class="text-xl font-bold text-white">Bishop's Ark Intake Assistant</h3>
                </div>
                
                <!-- Toggle Mode -->
                <div class="flex items-center space-x-2 bg-gray-800 p-1 rounded-lg">
                    <button @click="mode = 'avatar'" 
                            :class="mode === 'avatar' ? 'bg-[#E5A823] text-gray-900' : 'text-gray-300'"
                            class="px-3 py-1 rounded-md text-xs font-semibold transition">
                        AI Guide
                    </button>
                    <button @click="mode = 'form'" 
                            :class="mode === 'form' ? 'bg-[#E5A823] text-gray-900' : 'text-gray-300'"
                            class="px-3 py-1 rounded-md text-xs font-semibold transition">
                        Form
                    </button>
                    <button @click="open = false" class="text-gray-400 hover:text-white px-2">✕</button>
                </div>
            </div>

            <div class="p-6">
                <!-- Mode 1: AI Video Avatar Stream -->
                <div x-show="mode === 'avatar'" class="space-y-4">
                    <div class="relative aspect-video w-full bg-black rounded-xl overflow-hidden border border-gray-800 flex items-center justify-center">
                        
                        <!-- WebRTC Video Element for AI Avatar -->
                        <video id="avatarVideo" autoplay playsinline class="w-full h-full object-cover"></video>

                        <!-- Avatar Placeholder/Loading State -->
                        <div x-show="!isPlaying" class="absolute inset-0 flex flex-col items-center justify-center bg-gray-950 text-gray-400">
                            <svg class="w-12 h-12 mb-2 text-[#E5A823] animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                            </svg>
                            <p class="text-sm">Connecting to AI Intake Representative...</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between bg-gray-800/60 p-4 rounded-xl border border-gray-700">
                        <p class="text-sm text-gray-300">
                            <strong class="text-[#E5A823]">Speak naturally:</strong> The AI guide is listening to answer questions and take your information.
                        </p>
                        <button @click="mode = 'form'" class="text-xs text-[#E5A823] underline whitespace-nowrap ml-4">
                            Switch to manual form
                        </button>
                    </div>
                </div>

                <!-- Mode 2: Standard Livewire Form -->
                <form x-show="mode === 'form'" wire:submit="submit" class="space-y-4 text-left">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Full Name</label>
                        <input type="text" wire:model="name" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-[#E5A823] focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Contact Phone Number</label>
                        <input type="text" wire:model="phone" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-[#E5A823] focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-1">Type of Support Needed</label>
                        <select wire:model="assistance_type" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:border-[#E5A823] focus:outline-none">
                            <option>Emergency Transport</option>
                            <option>Temporary Shelter</option>
                            <option>Essential Supplies</option>
                            <option>Legal & Documentation Care</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-[#E5A823] text-gray-900 font-bold py-3 rounded-lg hover:bg-yellow-600 transition">
                        Submit Intake Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>