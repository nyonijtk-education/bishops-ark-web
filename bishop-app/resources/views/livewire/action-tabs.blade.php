<?php
use function Livewire\Volt\{state};

state(['tab' => 'refer']);

$openIntake = fn() => $this->dispatch('open-intake');
?>

<section id="action" class="max-w-5xl mx-auto px-6 py-16">
    <div class="text-center mb-8">
        <h3 class="text-3xl font-bold text-[#074B43] uppercase tracking-wide">Get Involved</h3>
        <div class="w-16 h-1 bg-[#E5A823] mx-auto mt-2"></div>
    </div>

    <div class="flex justify-center border-b border-gray-200 mb-6">
        <button wire:click="$set('tab', 'refer')" class="py-3 px-6 border-b-2 font-medium {{ $tab === 'refer' ? 'border-[#074B43] text-[#074B43] font-bold' : 'text-gray-500' }}">Refer</button>
        <button wire:click="$set('tab', 'donate')" class="py-3 px-6 border-b-2 font-medium {{ $tab === 'donate' ? 'border-[#074B43] text-[#074B43] font-bold' : 'text-gray-500' }}">Donate</button>
        <button wire:click="$set('tab', 'partner')" class="py-3 px-6 border-b-2 font-medium {{ $tab === 'partner' ? 'border-[#074B43] text-[#074B43] font-bold' : 'text-gray-500' }}">Partner</button>
        <button wire:click="$set('tab', 'volunteer')" class="py-3 px-6 border-b-2 font-medium {{ $tab === 'volunteer' ? 'border-[#074B43] text-[#074B43] font-bold' : 'text-gray-500' }}">Volunteer</button>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-md border border-gray-100 min-h-[200px]">
        @if($tab === 'refer')
            <div class="space-y-4">
                <h4 class="text-2xl font-bold text-[#074B43]">Refer Everyone in Need</h4>
                <p class="text-gray-600">Know someone affected by xenophobic violence or displacement? Submit a referral directly for transit assistance and temporary housing.</p>
                <button wire:click="openIntake" class="bg-[#E5A823] hover:bg-[#c99017] text-[#04332D] px-6 py-2.5 rounded-lg font-bold">Open Intake Form</button>
            </div>
        @elseif($tab === 'donate')
            <div class="space-y-4">
                <h4 class="text-2xl font-bold text-[#074B43]">Donate Money or Essential Items</h4>
                <p class="text-gray-600">Contributions fund emergency transport lines, food parcels, and shelter provisions for stranded returning nationals.</p>
                <p class="text-sm font-semibold text-[#074B43]">Contact: bishopstea22@gmail.com</p>
            </div>
        @elseif($tab === 'partner')
            <div class="space-y-4">
                <h4 class="text-2xl font-bold text-[#074B43]">Partner With Us</h4>
                <p class="text-gray-600">Collaborate with our network to expand shelter infrastructure, transport routes, and legal/psychosocial aid services.</p>
            </div>
        @elseif($tab === 'volunteer')
            <div class="space-y-4">
                <h4 class="text-2xl font-bold text-[#074B43]">Volunteer Your Skills</h4>
                <p class="text-gray-600">We require expertise in trauma counseling, social work, legal aid, logistics, and healthcare support.</p>
            </div>
        @endif
    </div>
</section>