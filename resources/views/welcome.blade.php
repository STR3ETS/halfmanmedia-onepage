<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HalfmanMedia - Slimme software. Slimme groei.</title>
        <link rel="icon" type="image/x-icon" href="/assets/halfmanmedia-logo-gold-white.png">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>
        {{-- BELANGRIJK: altijd Vite laden, geen if/else --}}
        @viteReactRefresh
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/js/silk-entry.jsx',
        ])
    </head>
    <body>
        <div class="w-full h-dvh relative">
            <img src="/assets/halfmanmedia-logo-gold-white.png" class="max-h-[2rem] fixed top-4 left-0 right-0 ml-auto mr-auto opacity-50">
            {{-- Silk achtergrond --}}
            <div id="silk-root" class="absolute inset-0 -z-10"></div>
            <div class="w-full h-full absolute z-1 top-0 left-0 flex flex-col gap-4 items-center justify-center px-[1.5rem]">
                <p
                    class="px-6 py-3 rounded-full
                        bg-white/10 border border-white/20
                        backdrop-blur-md shadow-lg
                        text-xs md:text-sm font-medium text-white flex items-center gap-2"
                >
                    <i class="fa-solid fa-sparkle"></i>
                    <span>Ondersteund door Artificial Intelligence</span>
                </p>
                <div
                    id="animated-title-root"
                    data-line1="Slimme software."
                    data-line2="Slimme groei."
                    class="text-2xl md:text-6xl text-white font-extrabold text-center"
                ></div>
                <div class="w-full md:w-[500px] flex flex-col md:flex-row items-center gap-4 mb-8 -mt-2">
                    <a href="https://www.instagram.com/halfmanmedia/" target="_blank" class="w-full md:w-1/2 text-sm md:text-base text-center shadow-lg px-6 py-3 rounded-full bg-[#e4ab6c] hover:bg-[#191919] hover:text-white transition duration-500 ease-in-out text-[#191919] font-semibold">Portfolio bekijken</a>
                    <a href="tel:0633770299" class="w-full md:w-1/2 text-sm md:text-base text-center shadow-lg px-6 py-3 rounded-full bg-white text-[#191919] font-semibold">Jouw idee bespreken</a>
                </div>
                <div class="flex items-center gap-10">
                    <div>
                        <h2 class="text-3xl md:text-4xl text-white font-extrabold text-right">30+</h2>
                        <p class="text-white text-sm md:text-base font-bold text-right">
                            Nieuwe websites<br>live gezet
                        </p>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl text-white font-extrabold text-left">10+</h2>
                        <p class="text-white text-sm md:text-base font-bold text-left">
                            Nieuwe systemen<br>opgeleverd
                        </p>
                    </div>
                </div>
            </div>
            <p class="fixed bottom-5 left-0 right-0 ml-auto mr-auto opacity-50 text-center md:text-right md:pr-5 text-white font-light text-xs">Copyright HalfmanMedia © Alle rechten voorbehouden</p>
        </div>
    </body>
</html>
