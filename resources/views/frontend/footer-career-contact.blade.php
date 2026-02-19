
<div class="relative w-full xl:h-[600px] lg:h-[600px] h-[1300px] sm:h-[800px]">

    <!-- Footer Content -->
    <footer class="absolute inset-0 text-black flex flex-col justify-between overflow-hidden"
        style="background: linear-gradient(90deg, #B57E10 0%, #E5C35C 9%, #F9DF7B 14%, #FFF3A6 26%, #F9DF7B 36%, #B57E10 49%, #E5C35C 57%, #F9DF7B 61%, #FFF3A6 72%, #F9DF7B 84%, #B57E10 100%);">
        <!-- Main Footer -->
        <div class="flex-grow flex items-center justify-center">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 w-full max-w-7xl px-6 sm:px-10 lg:px-20 py-10">
                <!-- Column 1: About -->
                <div class="relative left-[10px] grid grid-cols-1">
                    <h4 class="font-bold text-sm">
                        {{ app()->getLocale() == 'en' ? 'Lor Eak Heng Sek Meas Rice Co., Ltd' : 'ក្រុមហ៊ុន ឡអៀកហេងសេកមាសរាយស៍ ឯ.ក' }}
                    </h4>
                    <p class="text-sm leading-relaxed mt-0 lg:-mt-8 {{ app()->getLocale() == 'km' ? 'mt-0 lg:-mt-10' : '' }}">
                        {{ app()->getLocale() == 'en' ? 'Lor Eak Heng Sek Meas Rice Co., Ltd is one of the leading rice mill production factories
                        and rice exporters in Cambodia. We have operated this business since 1994, from a small
                        rice mill with a traditional rice machine to a state-of-the-art rice production system.
                        This technology enables exports to over 16 countries globally.' 
                            : 'ក្រុមហ៊ុន ឡអៀកហេងសេកមាសរាយស៍គឺជារោងចក្រកិនស្រូវ និងជាអ្នកនាំចេញអង្ករឈានមុខគេមួយនៅក្នុងប្រទេសកម្ពុជា។ យើងខ្ញុំបានដំណើរការអាជីវកម្មនេះតាំងពីឆ្នាំ 1994 ចាប់ពីរោងម៉ាស៊ីនកិនស្រូវតូចមួយដែលមានម៉ាស៊ីនកិនស្រូវបែបប្រពៃណី រហូតដល់ប្រព័ន្ធគ្រឿងចក្រកិនស្រូវទំនើបៗ។ ប្រព័ន្ធគ្រឿងចក្រនេះជម្រុញឱ្យមានការនាំចេញទៅកាន់ប្រទេសជាង 16 នៅទូទាំងពិភពលោក។' 
                        }}
                    </p>

                    <div class="relative top-0 lg:-top-10">
                        <h5 class="font-bold text-sm">
                            {{ app()->getLocale() == 'en' ? 'Follow Us' : 'តាមដានបណ្តាញសង្គម' }}
                        </h5>
                        <div class="flex items-center space-x-2 mt-2">
                            <!-- Social Icons -->
                            <a href="https://www.facebook.com/sekmeasrice" class="hover:scale-110 transition-transform" target="_blank">
                                <img src="{{ asset('frontend/assets/icon/f.png') }}" alt="Facebook" class="w-6 h-6">
                            </a>
                            <a href="https://t.me/Sekmeas88" class="hover:scale-110 transition-transform" target="_blank">
                                <img src="{{ asset('frontend/assets/icon/t.png') }}" alt="Twitter"  class="w-6 h-6">
                            </a>
                            <a href="https://wa.me/85587686768?text=Hello%20I%20want%20more%20information" target="_blank" class="hover:scale-110 transition-transform">
                                <img src="{{ asset('frontend/assets/icon/ch.png') }}" alt="WhatsApp" class="w-6 h-6">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Information -->
                <div class="relative left-[10px] space-y-4">
                    <div>
                        <h4 class="font-bold text-sm">{{ app()->getLocale() == 'en' ? 'Information' : 'ព័ត៌មាន' }}</h4>
                    </div>
                    <div class="grid grid-cols-1">
                        <ul class="text-sm space-y-2">
                            <li><a href="{{ route('home') }}" class="hover:underline">
                                {{ app()->getLocale() == 'en' ? 'Home' : 'ទំព័រដើម' }}</a></li>
                            <li><a href="{{ route('export') }}" class="hover:underline">
                                {{ app()->getLocale() == 'en' ? 'Export' : 'ការនាំចេញ' }}</a></li>
                            <li><a href="{{ route('about') }}" class="hover:underline">
                                {{ app()->getLocale() == 'en' ? 'About Us' : 'អំពីក្រុមហ៊ុន' }}</a></li>
                            <li><a href="{{ route('news') }}" class="hover:underline">
                                 {{ app()->getLocale() == 'en' ? 'Latest News' : 'ព្រឹត្តិការណ៍ថ្មីៗ' }}</a></li>
                            <li><a href="{{ route('news') }}#activities" class="hover:underline">
                                {{ app()->getLocale() == 'en' ? 'Activities' : 'សកម្មភាព' }}</a></li>
                            <li><a href="{{ route('career') }}" class="hover:underline">
                                {{ app()->getLocale() == 'en' ? 'Career' : 'ឱកាសការងារ' }}</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:underline"> {{ app()->getLocale() == 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Contact -->
                <div class="relative left-[10px] flex flex-col space-y-4 text-[#1E1E1E]">
                    <h4 class="font-bold text-sm mb-1 pb-0 md:pb-2">
                        {{ app()->getLocale() == 'en' ? 'Lor Eak Heng Sek Meas Rice Co., Ltd' : 'ក្រុមហ៊ុន ឡអៀកហេងសេកមាសរាយស៍ ឯ.ក' }}
                    </h4>

                    <!-- Factory Location -->
                    <div class="text-sm leading-relaxed flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mt-[2px] flex-shrink-0 text-[#000000]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2.25c4.556 0 8.25 3.694 8.25 8.25 0 3.713-2.528 7.56-7.456 11.366a.75.75 0 0 1-.838 0C6.278 18.06 3.75 14.213 3.75 10.5 3.75 5.944 7.444 2.25 12 2.25z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 12.75a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5z" />
                        </svg>
                        <div>
                            <h1 class="font-semibold">{{ app()->getLocale() == 'en' ? 'Factory Address' : 'អាស័យដ្ឋានរោងចក្រ' }}: </h1> <br>
                            <span class="relative -top-6">
                                {{ app()->getLocale() == 'en' ? 'National Road 6, Skun Village, Sotep Commune, Cheung Prey District, Kompong Cham Province.' : 'ផ្លូវជាតិលេខ6, ភូមិស្គន់ ឃុំសូទិព ស្រុកជើងព្រៃ ខេត្តកំពង់ចាម ប្រទេសកម្ពុជា។' }}
                            </span>
                        </div>
                    </div>

                    <!-- Office Address -->
                    <p class="text-sm leading-relaxed flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mt-[2px] flex-shrink-0 text-[#000000]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.44 1.152-.44 1.592 0L21.75 12M4.5 9.75v9.75A1.5 1.5 0 0 0 6 21h12a1.5 1.5 0 0 0 1.5-1.5V9.75" />
                        </svg>
                        <span>
                            <strong>{{ app()->getLocale() == 'en' ? 'Office Address' : 'អាស័យដ្ឋានការិយាល័យ' }}:</strong> <br>
                            {!! app()->getLocale() == 'en' ? '#70, St.70, Sangkat Srah Chrok, Khan Daun Penh, Phnom Penh, Cambodia.' : 'ផ្ទះលេខ 70, ផ្លូវលេខ 70, សង្កាត់ស្រះចក, ខណ្ឌដូនពេញ, រាជធានីភ្នំពេញ ប្រទេសកម្ពុជា។ ' !!}
                        </span>
                    </p>

                    <!-- Phone -->
                    <p class="text-sm mt-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#000000]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3.75l5.25 1.5L9 8.25l-3 3a15.75 15.75 0 0 0 6.75 6.75l3-3 3 1.5 1.5 5.25a.75.75 0 0 1-.75.75A18.75 18.75 0 0 1 2.25 4.5a.75.75 0 0 1 .75-.75z" />
                        </svg>
                        <strong>{{ app()->getLocale() == 'en' ? 'Tel' : 'លេខទូរស័ព្ទ ' }}:</strong> 855 (0) 87 68 67 68
                    </p>

                    <!-- Email -->
                    <p class="text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#000000]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5A2.25 2.25 0 0 1 2.25 17.25V6.75m19.5 0L12 12.75 2.25 6.75" />
                        </svg>
                        <a href="mailto:info@lehsekmeasrice.com" class="underline">info@lehsekmeasrice.com</a>
                    </p>

                    <!-- Website -->
                    <p class="text-sm flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-[#000000]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c4.97 0 9 4.03 9 9 0 1.74-.5 3.37-1.36 4.76L12 21l-7.64-4.24A8.97 8.97 0 0 1 3 12c0-4.97 4.03-9 9-9z" />
                        </svg>
                        <a href="http://www.lehsekmeasrice.com" class="hover:underline">www.lehsekmeasrice.com.kh</a>
                    </p>
                </div>


                <!-- Column 4: Working Time -->
                <div class="relative left-[10px] grid grid-cols-1 gap-2">
                    <h4 class="font-bold text-sm mb-2">{{ app()->getLocale() == 'en' ? 'Working Time' : 'ម៉ោងធ្វើការ' }}: </h4>
                    <p class="text-sm"> {{ app()->getLocale() == 'en' ? 'Monday - Friday' : 'ច័ន្ទ ដល់ សុក្រ' }}</p>
                    <p class="text-sm mb-3">{{ app()->getLocale() == 'en' ? '8am – 5pm' : '8 ព្រឹក ដល់ 5 ល្ងាច' }}</p>

                    <h4 class="font-bold text-sm mb-2">{{ app()->getLocale() == 'en' ? 'Map' : 'ទីតាំងការិយាល័យ' }}</h4>
                     <div class="w-full h-52 lg:h-64 bg-gray-300 rounded-md overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.089502260989!2d104.9132125!3d11.5854499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095160523ca91b%3A0xd9c51e2d57b148ad!2sLor%20Eak%20Heng%20Sek%20Meas%20Rice%20Co.%2CLtd!5e0!3m2!1sen!2skh!4v1698325030000!5m2!1sen!2skh"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-md">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="relative w-full bg-[#4DA358] h-[50px] flex items-center justify-center z-50">
            <p class="text-white text-sm sm:text-base font-semibold">
                {{ app()->getLocale() == 'en' ? 'All rights reserved ©' : 'រក្សាសិទ្ធគ្រប់បែបយ៉ាង' }} <span id="year"></span>
            </p>
        </div>
    </footer>
</div>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
























{{-- <section class="contents relative w-full z-50">

    <!-- Main Footer -->
    <footer
        class="relative z-50 sm:top-[150px] xl:top-[-5px] lg:top-[-5px] bg-white text-black w-full flex items-center justify-center py-16 px-6 md:px-10 lg:px-24">
        <div class="relative top-[10px] left-[10px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 w-full max-w-7xl">

            <!-- Column 1: About -->
            <div class="flex flex-col gap-3">
                <h4 class="font-bold text-sm text-[#499D56]"> {{ app()->getLocale() == 'en' ? 'Lor Eak Heng Sek Meas Rice Co., Ltd' : 'ក្រុមហ៊ុន ឡអៀកហេងសេកមាសរាយស៍ ឯ.ក' }}</h4>
                <p class="text-sm leading-relaxed">
                     {{ app()->getLocale() == 'en' ? 'is one of the leading rice mill production factories
                        and rice exporters in Cambodia. We have operated this business since 1994, from a small
                        rice mill with a traditional rice machine to a state-of-the-art rice production system.
                        This technology enables exports to over 16 countries globally.' 
                            : 'គឺជារោងចក្រកិនស្រូវ និងជាអ្នកនាំចេញអង្ករឈានមុខគេមួយនៅក្នុងប្រទេសកម្ពុជា។ យើងខ្ញុំបានដំណើរការអាជីវកម្មនេះតាំងពីឆ្នាំ 1994 ចាប់ពីរោងម៉ាស៊ីនកិនស្រូវតូចមួយដែលមានម៉ាស៊ីនកិនស្រូវបែបប្រពៃណី រហូតដល់ប្រព័ន្ធគ្រឿងចក្រកិនស្រូវទំនើបៗ។ ប្រព័ន្ធគ្រឿងចក្រនេះជម្រុញឱ្យមានការនាំចេញទៅកាន់ប្រទេសជាង 16 នៅទូទាំងពិភពលោក។' 
                        }}
                </p>

                <h5 class="font-bold mt-5 text-sm">{{ app()->getLocale() == 'en' ? 'Follow Us' : 'តាមដានបណ្តាញសង្គម' }}</h5>
                <div class="flex items-center gap-4 mt-2">
                    <!-- Social Icons -->
                    <a href="https://www.facebook.com/sekmeasrice" class="hover:scale-110 transition-transform" target="_blank">
                        <img src="{{ asset('frontend/assets/icon/f.png') }}" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="https://t.me/Sekmeas88" class="hover:scale-110 transition-transform" target="_blank">
                        <img src="{{ asset('frontend/assets/icon/t.png') }}" alt="Twitter" class="w-6 h-6">
                    </a>
                    <a href="https://wa.me/85587686768?text=Hello%20I%20want%20more%20information" target="_blank" class="hover:scale-110 transition-transform">
                        <img src="{{ asset('frontend/assets/icon/ch.png') }}" alt="WhatsApp" class="w-6 h-6">
                    </a>
                </div>
            </div>

            <!-- Column 2: Information -->
            <div class="sm:pl-5">
                <h4 class="font-bold text-sm text-[#499D56] mb-2">{{ app()->getLocale() == 'en' ? 'Information' : 'ព័ត៌មាន' }}</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:underline"> {{ app()->getLocale() == 'en' ? 'Home' : 'ទំព័រដើម' }}</a></li>
                    <li><a href="{{ route('export') }}" class="hover:underline">{{ app()->getLocale() == 'en' ? 'Export' : 'ការនាំចេញ' }}</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline">{{ app()->getLocale() == 'en' ? 'About Us' : 'អំពីក្រុមហ៊ុន' }}</a></li>
                    <li><a href="{{ route('news') }}" class="hover:underline"> {{ app()->getLocale() == 'en' ? 'Latest News' : 'ព្រឹត្តិការណ៍ថ្មីៗ' }}</a></li>
                    <li><a href="{{ route('news') }}#activities" class="hover:underline"> {{ app()->getLocale() == 'en' ? 'Activities' : 'សកម្មភាព' }}</a></li>
                    <li><a href="{{ route('career') }}" class="hover:underline">{{ app()->getLocale() == 'en' ? 'Career' : 'ឱកាសការងារ' }}</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:underline">{{ app()->getLocale() == 'en' ? 'Contact Us' : 'ការទំនាក់ទំនង' }}</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact -->
            <div class="grid grid-cols-1 gap-2">
                <h4 class="font-bold text-sm mb-1 text-[#499D56]">{{ app()->getLocale() == 'en' ? 'Lor Eak Heng Sek Meas Rice Co., Ltd' : 'ក្រុមហ៊ុន ឡអៀកហេងសេកមាសរាយស៍ ឯ.ក' }}</h4>

                <!-- Factory Location -->
                <div class="text-sm leading-relaxed flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mt-[2px] flex-shrink-0 text-[#000000]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2.25c4.556 0 8.25 3.694 8.25 8.25 0 3.713-2.528 7.56-7.456 11.366a.75.75 0 0 1-.838 0C6.278 18.06 3.75 14.213 3.75 10.5 3.75 5.944 7.444 2.25 12 2.25z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 12.75a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5z" />
                        </svg>
                        <div>
                            <h1 class="font-semibold">{{ app()->getLocale() == 'en' ? 'Factory Address' : 'អាស័យដ្ឋានរោងចក្រ' }}: </h1> <br>
                            <span class="relative -top-4"> {{ app()->getLocale() == 'en' ? 'National Road 6, Skun Village, Sotep Commune, Cheung Prey District, Kompong Cham Province.' : 'ផ្លូវជាតិលេខ6, ភូមិស្គន់ ឃុំសូទិព ស្រុកជើងព្រៃ ខេត្តកំពង់ចាម ប្រទេសកម្ពុជា។' }}</span>
                        </div>
                    </div>

                <!-- Office Address -->
                <p class="text-sm leading-relaxed flex items-start gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mt-[2px] flex-shrink-0 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.44 1.152-.44 1.592 0L21.75 12M4.5 9.75v9.75A1.5 1.5 0 0 0 6 21h12a1.5 1.5 0 0 0 1.5-1.5V9.75" />
                    </svg>
                    <span>
                        <strong>{{ app()->getLocale() == 'en' ? 'Office Address' : 'អាស័យដ្ឋានការិយាល័យ' }}:</strong> <br>
                        {!! app()->getLocale() == 'en' ? '#70, St.70,<br>Sangkat Srah Chrok, Khan Daun Penh, <br> Phnom Penh, Cambodia.' : 'ផ្ទះលេខ 70, ផ្លូវលេខ 70, សង្កាត់ស្រះចក, ខណ្ឌដូនពេញ, រាជធានីភ្នំពេញ ប្រទេសកម្ពុជា។ ' !!}
                    </span>
                </p>

                <!-- Phone -->
                <p class="text-sm mt-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3.75l5.25 1.5L9 8.25l-3 3a15.75 15.75 0 0 0 6.75 6.75l3-3 3 1.5 1.5 5.25a.75.75 0 0 1-.75.75A18.75 18.75 0 0 1 2.25 4.5a.75.75 0 0 1 .75-.75z" />
                    </svg>
                    <strong>{{ app()->getLocale() == 'en' ? 'Tel' : 'លេខទូរស័ព្ទ ' }}:</strong> 855 (0) 87 68 67 68
                </p>

                <!-- Email -->
                <p class="text-sm flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5A2.25 2.25 0 0 1 2.25 17.25V6.75m19.5 0L12 12.75 2.25 6.75" />
                    </svg>
                    <a href="mailto:info@lehsekmeasrice.com" class="underline">info@lehsekmeasrice.com</a>
                </p>

                <!-- Website -->
                <p class="text-sm flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-[#000000]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c4.97 0 9 4.03 9 9 0 1.74-.5 3.37-1.36 4.76L12 21l-7.64-4.24A8.97 8.97 0 0 1 3 12c0-4.97 4.03-9 9-9z" />
                    </svg>
                    <a href="http://www.lehsekmeasrice.com" class="hover:underline">www.lehsekmeasrice.com.kh</a>
                </p>
            </div>

            <!-- Column 4: Working Time -->
            <div class="relative xl:top-0 top-[-30px]">
                <h4 class="font-bold text-sm text-[#499D56] mb-2">{{ app()->getLocale() == 'en' ? 'Working Time' : 'ម៉ោងធ្វើការ' }}</h4>
                <p class="text-sm mb-1"> {{ app()->getLocale() == 'en' ? 'Monday - Friday' : 'ច័ន្ទ ដល់ សុក្រ' }}</p>
                <p class="text-sm mb-4">{{ app()->getLocale() == 'en' ? '8am – 5pm' : '8 ព្រឹក ដល់ 5 ល្ងាច' }}</p>

                <h4 class="font-bold text-sm text-[#499D56] mb-2">{{ app()->getLocale() == 'en' ? 'Map' : 'ទីតាំងការិយាល័យ' }}</h4>
                <div class="w-full h-64 bg-gray-300 rounded-md overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.089502260989!2d104.9132125!3d11.5854499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095160523ca91b%3A0xd9c51e2d57b148ad!2sLor%20Eak%20Heng%20Sek%20Meas%20Rice%20Co.%2CLtd!5e0!3m2!1sen!2skh!4v1698325030000!5m2!1sen!2skh"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-md">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bottom Green Bar + Banner Image -->
    <div class="relative w-full mt-10 sm:top-[200px] xl:top-[40px] z-50 md:top-0 top-8">
        <!-- Green Background -->
        <div class="absolute inset-0 h-[80px] bg-[#4DA358]"></div>

        <!-- Image + Text -->
        <div class="relative w-full flex justify-center items-center h-[80px] px-4">
            <div class="relative w-[95%] sm:w-[90%] md:w-[85%] h-[50px] flex items-center justify-center">
                <!-- Banner Image -->
                <img src="{{ asset('frontend/assets/imges/header-image.png') }}" alt="Header Image"
                    class="absolute inset-0 top-[-40px] xl:top-[-40px] sm:top-[-40px] w-full h-full">

                <!-- Overlay Text -->
                <div
                    class="relative z-10 top-[-40px] xl:top-[-40px] sm:top-[-40px] text-center text-[#1E3E0F] text-xs sm:text-sm md:text-base font-bold">
                    {{ app()->getLocale() == 'en' ? 'All rights reserved ©' : 'រក្សាសិទ្ធគ្រប់បែបយ៉ាង' }} 
                </div>
            </div>
        </div>
    </div>

</section> --}}