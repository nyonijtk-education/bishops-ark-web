<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Bishop's Ark | Restoring Safety, Dignity & Hope" }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen" 
      x-data="{ toast: false, toastMsg: '' }"
      x-on:notify.window="toastMsg = $event.detail.message; toast = true; setTimeout(() => toast = false, 4000)">

    <!-- Emergency Notification Top Bar -->
    <div class="bg-[#04332D] text-white px-6 py-2 text-xs sm:text-sm flex flex-wrap justify-between items-center gap-2 z-50">
        <div>
            🚨 Emergency Contact: 
            <a href="tel:+263772405511" class="text-[#E5A823] font-bold hover:underline">+263 77 240 5511</a> | 
            <a href="tel:+263772457295" class="text-[#E5A823] font-bold hover:underline">+263 77 245 7295</a>
        </div>
        <div>
            ✉️ <a href="mailto:bishopstea22@gmail.com" class="text-[#E5A823] hover:underline">bishopstea22@gmail.com</a>
        </div>
    </div>

    {{ $slot }}

    <!-- Livewire Toast Component -->
    <div x-show="toast" x-transition class="fixed bottom-5 right-5 bg-[#04332D] text-white border-l-4 border-[#E5A823] p-4 rounded shadow-2xl z-50 max-w-sm" x-cloak>
        <p x-text="toastMsg" class="text-sm font-semibold"></p>
    </div>

    @livewireScripts
</body>
</html>