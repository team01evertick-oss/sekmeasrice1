<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Nokora:wght@100..900&family=Siemreap&display=swap"
        rel="stylesheet">
    {{-- Icon --}}
    <link rel="stylesheet" href="{{asset('vendor/fonts/boxicons.css')}}" />
    {{-- Custom CSS --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/theme.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    {{-- Khmer Os Moul Light --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Moul&family=Nokora:wght@100..900&family=Siemreap&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Moul&display=swap" rel="stylesheet">
    <!-- Kantumruy Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('frontend/assets/logo/logo_rice.png') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        [x-cloak] {
            display: none !important;
        }

        html, body {
            /* Applies Inter to all text in the <body>, with fallbacks */
            font-family: "Inter", sans-serif;
            overflow-x: hidden !important;
        }
        .Kantumruy{
            font-family: "Kantumruy Pro", sans-serif;
        }
        .inter{
            font-family: "Inter", sans-serif;
        }
        .kh-font-moul{
            font-family: "Moul", serif;
        }
    </style>
</head>

<body class="{{ app()->getLocale() === 'km' ? 'Kantumruy' : '' }} overflow-y-hidden p-0 m-0">

    <!-- HERO SECTION -->
    <section class="relative w-full max-w-full">

        <!-- Background Image -->
        <div class="absolute inset-0 w-full -z-10">
            <img src="@yield('background-image')" alt="Background"
                class="w-full h-full object-cover object-center max-w-full">
        </div>
        @if(View::hasSection('background-career'))
            <div class="absolute inset-0 w-full">
                {{-- <img src="@yield('background-career')" alt="Career" class="w-full h-full max-w-full object-cover"> --}}
                @yield('background-career')
            </div>
        @endif
        <!-- HEADER -->
        @include('frontend.navbar')




        <!-- @@@ HERO TEXT (Centered on screen) -->
        {{-- Text Career --}}
        <div
            class="absolute xl:top-[-180px] lg:top-[-100px] inset-0 flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
                <!-- Title -->
                <h1 data-aos="fade-right" data-aos-duration="1500"
                    class="text-3xl sm:text-3xl md:text-5xl lg:text-[100px] font-extrabold text-white leading-tight mb-6">
                    @yield('title-career')
                </h1>

                <!-- Centered Email Box -->
                @yield('gmail-career')
            </div>
        </div>
        {{-- Text Home, Export, About Us, Activity, and Contact Us --}}
        <div
            class="absolute inset-0 top-8 lg:-top-24 xl:-top-60 flex flex-col justify-center items-center text-center z-20" data-aos="fade-up" data-aos-duration="1500">
            <div class="bg-white/3">
                <h4 class="text-lg sm:text-3xl text-[#1E3E0F] font-semibold tracking-wide">
                    @yield('welcome')
                </h4>

                <!-- Centered White Line -->
                <div class="flex justify-center w-full">
                    @yield('white-line')
                </div>
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-[100px] font-extrabold text-[#1E3E0F] leading-tight">
                    @yield('sek-meas')
                    {{-- {{ app()->getLocale() == 'km' ? 'kh-font-moul text-2xl sm:text-3xl md:text-3xl lg:text-[60px]' : 'inter' }} --}}
                </h1>
                <h1
                    class="text-5xl sm:text-6xl md:text-7xl lg:text-[100px] font-extrabold text-[#FFFFFF] leading-tight">
                    @yield('text-title')
                </h1>



                <p
                    class="text-lg md:text-2xl lg:text-[20px] leading-relaxed text-[#F1C119] mt-4 font-bold tracking-wide">
                    @yield('rice-mall')
                </p>


                <!-- Centered White Line -->
                <div class="flex justify-center w-full">
                    @yield('white-line')
                </div>
            </div>
        </div>
        <!-- FULL-WIDTH RICE IMAGE AT BOTTOM -->
        <div class="relative w-full overflow-hidden top-[80px] sm:top-[100px] md:top-[120px]">
            <div class="relative w-full sm:top-[-30px]">
                <!-- Background image -->
                <img src="@yield('rice-background')" alt="" class="relative top-[-70px] md:top-[-90px] w-full h-auto object-cover block">

                <img src="@yield('picture-rice')" alt=""
                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[70%] md:w-[45%] lg:w-[35%] max-w-[700px] md:translate-y-4 sm:translate-y-6">
            </div>
            <!-- Background rice texture -->
            {{-- <img src="@yield('rice-background')" alt="" class="relative w-full h-auto object-cover block"> --}}
            <img src="@yield('img-background-contact')" alt="" class="w-full object-cover relative -z-10
            {{ Route::is('contact') ? 'h-[150vh] lg:h-auto' : 'h-auto' }}">

            <!-- Center rice picture overlay -->
            {{-- <img src="@yield('picture-rice')" alt=""
                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[70%] md:w-[45%] lg:w-[35%] max-w-[700px]"> --}}
        </div>
    </section>
    <!-- PAGE CONTENT -->
    <section class="relative z-10 w-full">
        @yield('section_content')
    </section>
    <section class="">
        @yield('section_footer')
    </section>
</body>
<script src="{{ asset('frontend/js/theme.js') }}"></script>
<!-- Include Alpine.js once in your layout (if not already included) -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
{{-- Drop down --}}
{{-- Alert for comment of customer --}}
{{--
<script src="{{ asset('js/alercomment.js') }}"></script> --}}
{{-- Sweet Alert 2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    fetch('/telegram-notify', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            message: '🛒 New order from VIN SOLANG!'
        })
    })
        .then(res => res.json())
        .then(data => console.log('Sent to Telegram:', data))
        .catch(err => console.error('Error:', err));

</script>
<!-- JS to toggle menu -->
{{--
<script>
    const menuButton = document.getElementById('menuButton');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        const isMenuHidden = mobileMenu.classList.contains('-translate-x-full');

        if (isMenuHidden) {
            // Show menu
            mobileMenu.classList.remove('-translate-x-full');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // disable scroll
        } else {
            // Hide menu
            mobileMenu.classList.add('-translate-x-full');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = ''; // enable scroll
        }
    });
</script> --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    const menuButton = document.getElementById('menuButton');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.contains('-translate-x-full');

        if (isHidden) {
            // Show menu
            mobileMenu.classList.remove('-translate-x-full');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden'; // also stop html scroll
        } else {
            // Hide menu
            mobileMenu.classList.add('-translate-x-full');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = '';
            document.documentElement.style.overflow = ''; // re-enable scroll
        }
    });
</script>
<script>
  AOS.init();
</script>
<script>
const trigger = document.getElementById('langTrigger');
const menu = document.getElementById('langMenu');
const langFlag = document.getElementById('langFlag');
const langName = document.getElementById('langName');

trigger.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});

document.addEventListener('click', e => {
  if (!document.getElementById('langSwitch').contains(e.target)) {
    menu.classList.add('hidden');
  }
});

document.querySelectorAll("#langMenu .item").forEach(btn => {
  btn.addEventListener("click", () => {
    window.location.href = btn.dataset.url; // redirect to locale route
  });
});

</script>

<!-- JS for dropdown toggle -->
<script>
    const btn = document.getElementById('activitiesBtn');
    const dropdown = document.getElementById('activitiesDropdown');
    const icon = document.getElementById('activitiesIcon');

    btn.addEventListener('click', () => {
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });
</script>
<script>
function toggleMobileDropdown() {
    const dropdown = document.getElementById("mobileDropdown");
    const arrow = document.getElementById("mobileArrow");

    dropdown.classList.toggle("hidden");
    arrow.classList.toggle("rotate-180");
}
</script>

</html>


{{-- User dropdown --}}
                        {{-- @auth('customer')
                        <li x-data="{ open: false }" class="relative left-5">
                            <button @click="open = !open"
                                class="flex items-center gap-2 px-3 py-2 rounded-full hover:bg-gray-100">
                                <i class="tf-icons bx bx-user text-xl"></i>
                                <span>{{ Auth::guard('customer')->user()->username }}</span>
                                <i class="bx bx-chevron-down"></i>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-lg p-4">
                                <ul>
                                    <li class="flex items-center gap-2">
                                        <img src="{{ 
                                                                        Auth::guard('customer')->user()->avatar
                            ?? (Auth::guard('customer')->user()->profile
                                ? 'storage/profiles/' . Auth::guard('customer')->user()->profile
                                : asset('frontend/assets/imges/profile.png')
                            )
                                                                    }}" alt="Profile"
                                            class="w-10 h-10 rounded-full object-cover">
                                        <div>
                                            <p class="font-semibold">{{ Auth::guard('customer')->user()->username }}</p>
                                            <p class="text-sm text-gray-500">
                                                {{ Auth::guard('customer')->user()->email }}
                                            </p>
                                        </div>
                                    </li>
                                    <li class="mt-2 border-t pt-2">
                                        <form method="POST" action="{{ route('client.logout.submit') }}">
                                            @csrf
                                            <button type="submit"
                                                class="w-full text-left text-red-600 flex items-center gap-2">
                                                <i class="bx bx-log-out"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endauth --}}
