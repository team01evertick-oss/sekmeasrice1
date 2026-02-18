<header
            class="relative w-full flex flex-col items-center fixed top-0 left-0 z-20 p-0 m-0 sm:p-0 sm:m-0 md:p-0 md:m-0 lg:p-4 lg:mt-2" data-aos="fade-down" data-aos-duration="1500">
            <!-- WRAPPER to control overlap -->
            <div class="relative w-full flex flex-col items-center"> <!-- TOP GOLD BAR -->
                <div class="relative xl:top-[34px] lg:top-[34px] sm:top-0 w-[80%] h-[65px] flex items-center justify-between px-0 md:px-4 z-20"
                    style=" background-image: url('{{ asset('frontend/assets/imges/vector-img.png') }}'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; ">

                    <!-- Contact Info + Logo Section -->
                    <div class="relative left-10 flex flex-wrap items-center gap-4 text-sm text-black font-medium">
                        <!-- This section is visible only on large screens -->
                        <div class="hidden lg:flex items-center gap-4">
                            <span class="flex items-center gap-2">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4C2.89 4 2 4.9 2 6v12c0 1.09.89 2 2 2h16c1.1 0 2-.91 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zM4 18V8l8 7 8-7v10H4z" />
                                </svg>
                                info@lehsekmeasrice.com
                            </span>

                            <span class="hidden xl:flex items-center gap-2">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M6.62 10.79a15.055 15.055 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 5c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                                855 (0) 87 68 67 68
                            </span>
                        </div>

                        <!-- This logo only shows on tablets and mobile -->
                        <div class="lg:hidden relative top-[20px] transform -translate-y-1/2">
                            <img src="{{ asset('frontend/assets/logo/logo_rice.png') }}" alt="Logo" class="h-12 w-auto">
                        </div>
                    </div>

                    <!-- Centered Logo (show on desktop only) -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-[50%] hidden lg:block">
                        <img src="{{ asset('frontend/assets/logo/logo_rice.png') }}" alt="Logo" class="h-14" />
                    </div>
                    <!-- Right: Social Icons -->
                    <div class="relative left-0 md:-left-10 flex items-center gap-2">
                        <div class="gap-3 flex justify-center items-center">
                            <div class="hidden xl:flex">
                                <p class="text-sm">{{ app()->getLocale() == 'en' ? 'Monday - Friday 8am - 5pm' : 'ច័ន្ទ ដល់ សុក្រ 8 ព្រឹក ដល់ 5 ល្ងាច ' }}</p>
                            </div>
                            <a href="https://www.facebook.com/sekmeasrice" class="hidden md:flex hover:scale-110 transition-transform" target="_blank"> <svg width="21" height="21"
                                    viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                        fill="#007BFF" />
                                </svg>
                            </a>
                            <a href="https://t.me/Sekmeas88" class="hidden md:flex hover:scale-110 transition-transform" target="_blank"> <svg width="22" height="21"
                                    viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.1513 20.7117C16.8706 20.7117 21.5071 16.0752 21.5071 10.3559C21.5071 4.63648 16.8706 0 11.1513 0C5.43189 0 0.79541 4.63648 0.79541 10.3559C0.79541 16.0752 5.43189 20.7117 11.1513 20.7117Z"
                                        fill="#039BE5" />
                                    <path
                                        d="M5.53401 10.1315L15.5188 6.28174C15.9822 6.11432 16.3869 6.3948 16.2368 7.09554L16.2376 7.09468L14.5376 15.1041C14.4116 15.6719 14.0741 15.81 13.6021 15.5425L11.0131 13.6344L9.76437 14.8374C9.6263 14.9755 9.50979 15.092 9.24227 15.092L9.42608 12.4573L14.2243 8.1225C14.4331 7.93868 14.1777 7.83512 13.9024 8.01808L7.97281 11.7514L5.41664 10.954C4.86174 10.7779 4.84966 10.3991 5.53401 10.1315Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="https://wa.me/85587686768?text=Hello%20I%20want%20more%20information" target="_blank" class="hidden md:flex hover:scale-110 transition-transform"> <svg width="22" height="21"
                                    viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9468 20.7117C16.6662 20.7117 21.3027 16.0752 21.3027 10.3559C21.3027 4.63648 16.6662 0 10.9468 0C5.22742 0 0.590942 4.63648 0.590942 10.3559C0.590942 16.0752 5.22742 20.7117 10.9468 20.7117Z"
                                        fill="#29A71A" />
                                    <path
                                        d="M15.5128 5.79041C14.4354 4.70222 13.0045 4.03486 11.4784 3.90873C9.95223 3.78259 8.43124 4.20597 7.18976 5.1025C5.94828 5.99903 5.06804 7.30969 4.70781 8.79806C4.34757 10.2864 4.53107 11.8546 5.22519 13.2196L4.54382 16.5275C4.53675 16.5605 4.53655 16.5945 4.54324 16.6275C4.54992 16.6605 4.56334 16.6918 4.58266 16.7194C4.61096 16.7612 4.65136 16.7935 4.69846 16.8117C4.74556 16.83 4.79713 16.8335 4.84626 16.8217L8.08835 16.0533C9.44952 16.7298 11.0066 16.9015 12.4824 16.5378C13.9583 16.1741 15.2573 15.2986 16.1482 14.067C17.0392 12.8355 17.4643 11.3278 17.3479 9.81223C17.2316 8.29666 16.5813 6.87153 15.5128 5.79041ZM14.5019 13.8586C13.7564 14.6019 12.7965 15.0927 11.7573 15.2616C10.7182 15.4305 9.65224 15.269 8.7097 14.8L8.25781 14.5764L6.27019 15.0471L6.27608 15.0224L6.68796 13.0219L6.46672 12.5853C5.98512 11.6394 5.81524 10.5654 5.98139 9.51715C6.14754 8.46886 6.64122 7.50005 7.39169 6.7495C8.33466 5.80681 9.61344 5.27724 10.9468 5.27724C12.2802 5.27724 13.5589 5.80681 14.5019 6.7495C14.51 6.75871 14.5186 6.76736 14.5278 6.77539C15.4591 7.72051 15.979 8.99547 15.9741 10.3223C15.9693 11.6492 15.4401 12.9203 14.5019 13.8586Z"
                                        fill="white" />
                                    <path
                                        d="M14.3254 12.3909C14.0818 12.7745 13.697 13.244 13.2133 13.3605C12.366 13.5653 11.0657 13.3676 9.44756 11.8589L9.42756 11.8413C8.0048 10.5221 7.63529 9.42414 7.72473 8.5533C7.77415 8.05905 8.18603 7.61186 8.53319 7.32002C8.58807 7.27317 8.65316 7.23982 8.72324 7.22263C8.79332 7.20544 8.86644 7.20488 8.93678 7.22101C9.00711 7.23713 9.07269 7.26949 9.12828 7.31549C9.18387 7.3615 9.22793 7.41987 9.25692 7.48594L9.7806 8.66275C9.81463 8.73905 9.82724 8.82318 9.81708 8.90611C9.80692 8.98904 9.77438 9.06763 9.72294 9.13347L9.45816 9.47709C9.40134 9.54805 9.36706 9.63438 9.35972 9.72498C9.35238 9.81558 9.37232 9.9063 9.41697 9.98547C9.56524 10.2455 9.92064 10.628 10.3149 10.9822C10.7573 11.3823 11.2481 11.7483 11.5587 11.8731C11.6419 11.907 11.7333 11.9153 11.8212 11.8969C11.909 11.8784 11.9894 11.834 12.0518 11.7695L12.359 11.46C12.4182 11.4016 12.4919 11.3599 12.5726 11.3392C12.6532 11.3185 12.7379 11.3196 12.8179 11.3423L14.0618 11.6954C14.1304 11.7164 14.1933 11.7529 14.2457 11.802C14.298 11.851 14.3385 11.9114 14.3639 11.9786C14.3894 12.0457 14.3991 12.1177 14.3924 12.1892C14.3858 12.2606 14.3628 12.3296 14.3254 12.3909Z"
                                        fill="white" />
                                </svg>
                            </a>

                            <div class="relative inline-block" id="langSwitch">

                                <!-- Trigger Button -->
                                <button id="langTrigger" type="button"
                                    class="flex items-center gap-2 px-3 py-2 rounded-lg transition"
                                    aria-haspopup="menu" aria-expanded="false" aria-controls="langMenu">

                                    <span id="langFlag" class="flex items-center">

                                    @if(session('locale') === 'km')
                                       
                                        <div class="w-11 h-5">
                                            <img src="{{ asset('assets/logo/kh-flag.png') }}" alt="" class="w-full h-full object-cover">
                                        </div>
                                    @else
                                       
                                        <div class="w-11 h-5">
                                            <img src="{{ asset('assets/logo/icons8-usa-96.png') }}" alt="" class="w-full h-full object-cover">
                                        </div>
                                    @endif
                                    </span>

                                    <span id="langName" class="font-medium text-black">
                                        {{ session('locale') === 'km' ? 'ភាសាខ្មែរ' : 'English' }}
                                    </span>

                                    <svg viewBox="0 0 24 24" class="w-4 h-4 text-white"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2"/></svg>
                                </button>

                                <!-- Dropdown -->
                                <div id="langMenu"
                                    class="absolute left-0 mt-2 w-40 bg-white rounded-lg shadow-lg hidden z-[9999]"
                                    role="menu" style="padding: 10px; margin: 10px;">

                                    <!-- ENGLISH -->
                                    <button data-lang="en" data-url="{{ route('locale', 'en') }}"
                                    class="item w-full flex items-center gap-3 px-3 py-2 hover:bg-gray-100 cursor-pointer" style="margin: 5px;">
                                    <div class="w-11 h-6">
                                        <img src="{{ asset('assets/logo/icons8-usa-96.png') }}" alt="" class="w-full h-full object-cover">
                                    </div>

                                    <span>English</span>
                                    </button>

                                    <!-- KHMER -->
                                    <button data-lang="km" data-url="{{ route('locale', 'km') }}"
                                    class="item w-full flex items-center gap-3 px-3 py-2 hover:bg-gray-100 cursor-pointer"  style="margin: 5px;">

                                    <div class="w-11 h-6">
                                        <img src="{{ asset('assets/logo/kh-flag.png') }}" alt="" class="w-full h-full object-cover">
                                    </div>
                                    <span>Khmer</span>
                                    </button>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- BOTTOM WHITE BAR -->
                <div class="relative w-[65%] h-[130px] top-[-65px] lg:top-[-30px] flex justify-center items-center   z-0"
                    style="
                    background-image: url('{{ asset('frontend/assets/imges/header-white.png') }}'); 
                    background-size: 100% 100%; background-repeat: 
                    no-repeat;background-position: center;">

                    <!--  Mobile Menu Button (LEFT SIDE) -->
                    <div class="absolute left-[20px] top-[90px] -translate-y-1/2 block lg:hidden z-50">
                        <button id="menuButton"
                            class="text-[#1E3E0F] text-3xl focus:outline-none w-[50px] h-[50px] flex items-center justify-center">
                            <!-- Menu Icon -->
                            <img id="menuIcon" src="{{ asset('image/icon/button-mobail.png') }}" alt="menu"
                                class="w-[25px] h-[25px]" />
                            <!-- Close Icon -->
                            <img id="closeIcon" src="{{ asset('image/icon/close.png') }}" alt="close"
                                class="w-[25px] h-[25px] hidden" />
                        </button>
                    </div>

                    <!--  Navbar -->
                    <nav class="">
                        <ul
                            class="relative z-50 top-4 flex flex-wrap justify-center gap-4 sm:gap-6 lg:gap-8 text-green-700 font-medium text-sm sm:text-base mt-4 sm:mt-8">

                            <div class="hidden lg:flex gap-6">

                                <li>
                                    <a href="{{ route('home') }}"
                                    class="{{ request()->routeIs('home') ? 'text-yellow-600 border-b-2 border-yellow-600' : 'hover:text-yellow-600' }} transition pb-1">
                                        {{ app()->getLocale() == 'en' ? 'Home' : 'ទំព័រដើម' }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('export') }}"
                                    class="{{ request()->routeIs('export') ? 'text-yellow-600 border-b-2 border-yellow-600' : 'hover:text-yellow-600' }} transition pb-1">
                                        
                                        {{ app()->getLocale() == 'en' ? 'Export' : 'ការនាំចេញ' }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('about') }}"
                                    class="{{ request()->routeIs('about') ? 'text-yellow-600 border-b-2 border-yellow-600' : 'hover:text-yellow-600' }} transition pb-1">
                                        
                                        {{ app()->getLocale() == 'en' ? 'About Us' : 'អំពីក្រុមហ៊ុន' }}
                                    </a>
                                </li>

                                <li class="relative group">
                                    <!-- Main Menu -->
                                    <a href="{{ route('news') }}"
                                    class="flex items-center gap-1 {{ request()->routeIs('news') ? 'text-yellow-600 border-b-2 border-yellow-600' : 'hover:text-yellow-600' }} transition pb-1">
                                        
                                        {{ app()->getLocale() == 'en' ? 'Latest News' : 'ព្រឹត្តិការណ៍ថ្មីៗ' }}
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </a>

                                    <!-- Dropdown Menu -->
                                    <ul class="absolute left-0 mt-2 w-[110px] bg-[#e8c661] shadow-md rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                        <li>
                                            <a href="{{ route('news') }}#activity"
                                            class="block px-4 py-2 text-[#008236] hover:bg-gradient-to-b from-[#e8c661] to-[#ae8f31] hover:text-white rounded-t-md">
                                                
                                                {{ app()->getLocale() == 'en' ? 'Activities' : 'សកម្មភាព' }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="{{ route('career') }}"
                                    class="{{ request()->routeIs('career') ? 'text-yellow-600 border-b-2 border-yellow-600' : 'hover:text-yellow-600' }} transition pb-1">
                                        
                                        {{ app()->getLocale() == 'en' ? 'Career' : 'ឱកាសការងារ' }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('contact') }}"
                                    class="{{ request()->routeIs('contact') ? 'text-yellow-600 border-b-2 border-yellow-600' : 'hover:text-yellow-600' }} transition pb-1">
                                        
                                        {{ app()->getLocale() == 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}
                                    </a>
                                </li>

                            </div>
                        </ul>


                      
                    </nav>
                </div>
                  <!--  Mobile Slide Menu -->
                        <div id="mobileMenu"
                            class="fixed h-screen top-[120px] left-0 w-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-20 p-6 lg:hidden">
                            <ul
                                class="relative left-[30px] top-[30px] flex flex-col gap-6 text-green-700 font-medium text-base">
                                <li><a href="{{ route('home') }}" class="hover:text-yellow-600 transition">{{ app()->getLocale() == 'en' ? 'Home' : 'ទំព័រដើម' }}</a></li>
                                <li><a href="{{ route('export') }}" class="hover:text-yellow-600 transition">{{ app()->getLocale() == 'en' ? 'Export' : 'ការនាំចេញ' }}</a>
                                </li>
                                <li><a href="{{ route('about') }}" class="hover:text-yellow-600 transition">{{ app()->getLocale() == 'en' ? 'About Us' : 'អំពីក្រុមហ៊ុន' }}</a>
                                </li>
                                <li>
                                    <button onclick="toggleMobileDropdown()"
                                        class="flex items-center justify-between w-full hover:text-yellow-600 transition">
                                         {{ app()->getLocale() == 'en' ? 'Latest News' : 'ព្រឹត្តិការណ៍ថ្មីៗ' }}
                                        <svg id="mobileArrow"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 transition-transform duration-200"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown -->
                                    <ul id="mobileDropdown" class="hidden flex flex-col gap-3 mt-3 ml-4 text-sm">
                                        <li>
                                            <a href="{{ route('news') }}#activity"
                                                class="block hover:text-yellow-600 transition">
                                                {{ app()->getLocale() == 'en' ? 'Activities' : 'សកម្មភាព' }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('career') }}" class="hover:text-yellow-600 transition">{{ app()->getLocale() == 'en' ? 'Career' : 'ឱកាសការងារ' }}</a>
                                </li>
                                <li><a href="{{ route('contact') }}" class="hover:text-yellow-600 transition">{{ app()->getLocale() == 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}
                                        Us</a></li>

                                <li class="relative top-[50px]">
                                     <div>
                                        <p class="text-sm">{{ app()->getLocale() == 'en' ? 'Monday - Friday 8am - 5pm' : 'ច័ន្ទ ដល់ សុក្រ 8 ព្រឹក ដល់ 5 ល្ងាច ' }}</p>
                                    </div>
                                    <span class="flex items-center gap-2"> <svg width="14" height="14"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20 4H4C2.89 4 2 4.9 2 6v12c0 1.09.89 2 2 2h16c1.1 0 2-.91 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zM4 18V8l8 7 8-7v10H4z" />
                                        </svg> info@lehsekmeasrice.com
                                    </span>
                                    <span class="flex items-center gap-2">
                                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M6.62 10.79a15.055 15.055 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 5c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                        </svg>855 (0) 87 68 67 68
                                    </span>
                                </li>
                                <li class="relative top-[50px] flex gap-4">
                                    <a href="https://www.facebook.com/sekmeasrice" class="hover:scale-110 transition-transform" target="_blank"> <svg width="21"
                                            height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.3559 0C4.64566 0 0 4.64566 0 10.3559C0 16.0656 4.64566 20.7117 10.3559 20.7117C16.0656 20.7117 20.7117 16.0656 20.7117 10.3559C20.7117 4.64566 16.0665 0 10.3559 0ZM12.9313 10.7204H11.2465V16.7256H8.74988C8.74988 16.7256 8.74988 13.4443 8.74988 10.7204H7.56312V8.59804H8.74988V7.22524C8.74988 6.24205 9.21708 4.70573 11.2694 4.70573L13.1194 4.71282V6.77306C13.1194 6.77306 11.9952 6.77306 11.7766 6.77306C11.5581 6.77306 11.2473 6.88235 11.2473 7.35122V8.59846H13.1494L12.9313 10.7204Z"
                                                fill="#007BFF" />
                                        </svg>
                                    </a>
                                    <a href="https://t.me/Sekmeas88" class="hover:scale-110 transition-transform" target="_blank"> <svg width="22"
                                            height="21" viewBox="0 0 22 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.1513 20.7117C16.8706 20.7117 21.5071 16.0752 21.5071 10.3559C21.5071 4.63648 16.8706 0 11.1513 0C5.43189 0 0.79541 4.63648 0.79541 10.3559C0.79541 16.0752 5.43189 20.7117 11.1513 20.7117Z"
                                                fill="#039BE5" />
                                            <path
                                                d="M5.53401 10.1315L15.5188 6.28174C15.9822 6.11432 16.3869 6.3948 16.2368 7.09554L16.2376 7.09468L14.5376 15.1041C14.4116 15.6719 14.0741 15.81 13.6021 15.5425L11.0131 13.6344L9.76437 14.8374C9.6263 14.9755 9.50979 15.092 9.24227 15.092L9.42608 12.4573L14.2243 8.1225C14.4331 7.93868 14.1777 7.83512 13.9024 8.01808L7.97281 11.7514L5.41664 10.954C4.86174 10.7779 4.84966 10.3991 5.53401 10.1315Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    <a href="https://wa.me/85587686768?text=Hello%20I%20want%20more%20information" target="_blank" class="hover:scale-110 transition-transform"> <svg width="22"
                                            height="21" viewBox="0 0 22 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9468 20.7117C16.6662 20.7117 21.3027 16.0752 21.3027 10.3559C21.3027 4.63648 16.6662 0 10.9468 0C5.22742 0 0.590942 4.63648 0.590942 10.3559C0.590942 16.0752 5.22742 20.7117 10.9468 20.7117Z"
                                                fill="#29A71A" />
                                            <path
                                                d="M15.5128 5.79041C14.4354 4.70222 13.0045 4.03486 11.4784 3.90873C9.95223 3.78259 8.43124 4.20597 7.18976 5.1025C5.94828 5.99903 5.06804 7.30969 4.70781 8.79806C4.34757 10.2864 4.53107 11.8546 5.22519 13.2196L4.54382 16.5275C4.53675 16.5605 4.53655 16.5945 4.54324 16.6275C4.54992 16.6605 4.56334 16.6918 4.58266 16.7194C4.61096 16.7612 4.65136 16.7935 4.69846 16.8117C4.74556 16.83 4.79713 16.8335 4.84626 16.8217L8.08835 16.0533C9.44952 16.7298 11.0066 16.9015 12.4824 16.5378C13.9583 16.1741 15.2573 15.2986 16.1482 14.067C17.0392 12.8355 17.4643 11.3278 17.3479 9.81223C17.2316 8.29666 16.5813 6.87153 15.5128 5.79041ZM14.5019 13.8586C13.7564 14.6019 12.7965 15.0927 11.7573 15.2616C10.7182 15.4305 9.65224 15.269 8.7097 14.8L8.25781 14.5764L6.27019 15.0471L6.27608 15.0224L6.68796 13.0219L6.46672 12.5853C5.98512 11.6394 5.81524 10.5654 5.98139 9.51715C6.14754 8.46886 6.64122 7.50005 7.39169 6.7495C8.33466 5.80681 9.61344 5.27724 10.9468 5.27724C12.2802 5.27724 13.5589 5.80681 14.5019 6.7495C14.51 6.75871 14.5186 6.76736 14.5278 6.77539C15.4591 7.72051 15.979 8.99547 15.9741 10.3223C15.9693 11.6492 15.4401 12.9203 14.5019 13.8586Z"
                                                fill="white" />
                                            <path
                                                d="M14.3254 12.3909C14.0818 12.7745 13.697 13.244 13.2133 13.3605C12.366 13.5653 11.0657 13.3676 9.44756 11.8589L9.42756 11.8413C8.0048 10.5221 7.63529 9.42414 7.72473 8.5533C7.77415 8.05905 8.18603 7.61186 8.53319 7.32002C8.58807 7.27317 8.65316 7.23982 8.72324 7.22263C8.79332 7.20544 8.86644 7.20488 8.93678 7.22101C9.00711 7.23713 9.07269 7.26949 9.12828 7.31549C9.18387 7.3615 9.22793 7.41987 9.25692 7.48594L9.7806 8.66275C9.81463 8.73905 9.82724 8.82318 9.81708 8.90611C9.80692 8.98904 9.77438 9.06763 9.72294 9.13347L9.45816 9.47709C9.40134 9.54805 9.36706 9.63438 9.35972 9.72498C9.35238 9.81558 9.37232 9.9063 9.41697 9.98547C9.56524 10.2455 9.92064 10.628 10.3149 10.9822C10.7573 11.3823 11.2481 11.7483 11.5587 11.8731C11.6419 11.907 11.7333 11.9153 11.8212 11.8969C11.909 11.8784 11.9894 11.834 12.0518 11.7695L12.359 11.46C12.4182 11.4016 12.4919 11.3599 12.5726 11.3392C12.6532 11.3185 12.7379 11.3196 12.8179 11.3423L14.0618 11.6954C14.1304 11.7164 14.1933 11.7529 14.2457 11.802C14.298 11.851 14.3385 11.9114 14.3639 11.9786C14.3894 12.0457 14.3991 12.1177 14.3924 12.1892C14.3858 12.2606 14.3628 12.3296 14.3254 12.3909Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
            </div>
        </header>