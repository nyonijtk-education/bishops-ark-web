<?php
use function Livewire\Volt\{state};

state(['mobileMenu' => false]);

$openIntake = fn() => $this->dispatch('open-intake');
?>

<nav class="sticky top-0 bg-white shadow-md z-40 px-6 py-4 flex justify-between items-center">
    <div class="flex items-center gap-3">
        <div class="w-11 h-11 bg-[#E5A823] rounded-full flex items-center justify-center text-2xl shadow">🕊️</div>
        <div>
            <h1 class="text-xl font-bold text-[#074B43] leading-tight">Bishop's Ark</h1>
            <p class="text-xs text-[#E5A823] font-bold uppercase tracking-wider">Restoring Safety, Dignity & Hope</p>
        </div>
    </div>

    <div class="hidden md:flex items-center gap-6 font-semibold text-gray-700">
        <a href="#about" class="hover:text-[#074B43] transition">About Us</a>
        <a href="#services" class="hover:text-[#074B43] transition">Services</a>
        <a href="#approach" class="hover:text-[#074B43] transition">Our Approach</a>
        <a href="#action" class="hover:text-[#074B43] transition">Get Involved</a>
        <button wire:click="openIntake" class="bg-[#E5A823] hover:bg-[#c99017] text-[#04332D] px-4 py-2 rounded-lg font-bold shadow transition transform active:scale-95">
            Get Urgent Help
        </button>
    </div>

    <button wire:click="$toggle('mobileMenu')" class="md:hidden text-2xl text-[#074B43] focus:outline-none">
        ☰
    </button>

    @if($mobileMenu)
        <div class="absolute top-full left-0 right-0 md:hidden bg-[#074B43] text-white px-6 py-4 space-y-3 shadow-lg">
            <a href="#about" wire:click="$set('mobileMenu', false)" class="block py-1 hover:text-[#E5A823]">About Us</a>
            <a href="#services" wire:click="$set('mobileMenu', false)" class="block py-1 hover:text-[#E5A823]">Services</a>
            <a href="#approach" wire:click="$set('mobileMenu', false)" class="block py-1 hover:text-[#E5A823]">Our Approach</a>
            <a href="#action" wire:click="$set('mobileMenu', false)" class="block py-1 hover:text-[#E5A823]">Get Involved</a>
            <button wire:click="openIntake; $set('mobileMenu', false)" class="w-full bg-[#E5A823] text-[#04332D] py-2 rounded-lg font-bold">
                Get Urgent Help
            </button>
        </div>
    @endif
</nav>