<?php
use function Livewire\Volt\{state};

state(['active' => 1]);

$toggle = fn($id) => $this->active = ($this->active === $id) ? null : $id;
?>

<section id="approach" class="bg-[#074B43] text-white py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h3 class="text-3xl font-bold uppercase tracking-wide">Our Guiding Approach</h3>
            <div class="w-16 h-1 bg-[#E5A823] mx-auto mt-2"></div>
        </div>

        <div class="space-y-4">
            <div class="bg-[#04332D]/50 rounded-lg p-4 border border-[#E5A823]/30">
                <button wire:click="toggle(1)" class="w-full flex justify-between items-center text-left font-bold text-lg text-[#E5A823]">
                    <span>✓ Dignity & Respect</span>
                    <span>{{ $active === 1 ? '-' : '+' }}</span>
                </button>
                @if($active === 1)
                    <p class="mt-2 text-gray-200 text-sm">Services offered with respect and cultural sensitivity for every individual.</p>
                @endif
            </div>

            <div class="bg-[#04332D]/50 rounded-lg p-4 border border-[#E5A823]/30">
                <button wire:click="toggle(2)" class="w-full flex justify-between items-center text-left font-bold text-lg text-[#E5A823]">
                    <span>✓ Do No Harm & Confidentiality</span>
                    <span>{{ $active === 2 ? '-' : '+' }}</span>
                </button>
                @if($active === 2)
                    <p class="mt-2 text-gray-200 text-sm">Safety and confidentiality guide everything we do in the field.</p>
                @endif
            </div>

            <div class="bg-[#04332D]/50 rounded-lg p-4 border border-[#E5A823]/30">
                <button wire:click="toggle(3)" class="w-full flex justify-between items-center text-left font-bold text-lg text-[#E5A823]">
                    <span>✓ Person-Centered Care</span>
                    <span>{{ $active === 3 ? '-' : '+' }}</span>
                </button>
                @if($active === 3)
                    <p class="mt-2 text-gray-200 text-sm">Support tailored specifically to each person's unique needs.</p>
                @endif
            </div>

            <div class="bg-[#04332D]/50 rounded-lg p-4 border border-[#E5A823]/30">
                <button wire:click="toggle(4)" class="w-full flex justify-between items-center text-left font-bold text-lg text-[#E5A823]">
                    <span>✓ Collaborative & Accountable</span>
                    <span>{{ $active === 4 ? '-' : '+' }}</span>
                </button>
                @if($active === 4)
                    <p class="mt-2 text-gray-200 text-sm">We partner with faith networks, NGOs, local authorities, and provide clear feedback channels.</p>
                @endif
            </div>
        </div>
    </div>
</section>