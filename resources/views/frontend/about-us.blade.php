@extends('frontend.header')
@section('title', 'About')
@section('background-image', asset('frontend/assets/imges/about.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('picture-rice', asset('frontend/assets/imges/rice.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', 'About Us')

@section('section_content')

    {{-- Section: About Us --}}
     <section class="about-use relative top-[40px] md:top-[60px]">
        <img src="{{ asset('frontend/assets/imges/about__us.png') }}" alt="About Us Background" class="w-full object-cover">
        <div
            class="absolute xl:top-[-50px] sm:top-[-30px] inset-0 flex flex-col justify-center items-center text-center px-6">
            <div class="relative top-[-35px] md:top-[-90px] lg:top-[-100px] px-4 sm:px-6 md:px-10 py-8 sm:py-10 w-full md:max-w-7xl">
                <h2 data-aos="fade-right" data-aos-duration="1500"
                    class="relative top-0 xl:-top-14 md:py-0 py-4 text-[25px] sm:text-4xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-[#4DA358] mb-4 sm:mb-6 tracking-wide drop-shadow-lg">
                    About Us
                </h2>

                <p data-aos="fade-left" data-aos-duration="1500"
                    class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl xl:text-[22px] leading-relaxed text-[#000000] text-left px-2">
                    Lor Eak Heng Sek Meas Rice Co., Ltd is one of the leading rice mill production factories and rice
                    exporters
                    in Cambodia. We have operated this business since 1994, starting from a small rice mill using
                    traditional
                    rice machines to a state-of-the-art production line with a two-processing-line system capable of
                    producing
                    20 tons per hour.
                </p>

                <p data-aos="fade-left" data-aos-duration="1500"
                    class="mt-4 text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl xl:text-[22px] leading-relaxed text-[#000000] text-left px-2">
                    With this advanced technology, our production capacity has significantly increased, allowing us to
                    export
                    high-quality rice to more than 16 countries across the European Union, Africa, and the ASEAN region.
                </p>
            </div>

        </div>
    </section>
    <div class="grid grid-cols-1 gap-y-20">
        
        {{-- Section: Vision And Mission --}}
        <section class="vision-mission relative top-[50px] w-full px-4 py-10 bg-white">
            <!-- Container -->
            <div class="flex justify-center items-center">
                <div class="mx-auto grid xl:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 justify-items-center items-center">

                    <!-- Vision -->
                    <div class="bg-[#4DA358] hover:bg-[#F1C119] transition-colors duration-500 ease-in-out 
                                                w-[350px] sm:w-[530px] md:w-[600px] max-w-[600px] md:h-[500px] h-[200px] rounded-tl-[80px] rounded-br-[80px] 
                                                flex flex-col justify-start items-center" data-aos="fade-right" data-aos-duration="1500">
                        <div
                            class="relative top-[50px] left-[50px] w-full max-w-[450px] flex flex-col gap-4 pt-[40px] pl-[40px] pr-8 pb-8">
                            <h1 class="text-2xl sm:text-3xl font-bold text-black">Vision</h1>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                Become the leading company in supplying <br> high-quality rice for export
                                to all the rice <br> markets around the world.
                            </p>
                        </div>
                    </div>

                    <!-- Mission -->
                    <div class="bg-[#4DA358] hover:bg-[#F1C119] transition-colors duration-500 ease-in-out 
                                                                w-[350px] sm:w-[530px] md:w-[600px] max-w-[600px] md:h-[500px] h-[380px] rounded-tr-[80px] rounded-bl-[80px] 
                                                                flex flex-col justify-start items-center p-8" data-aos="fade-left" data-aos-duration="1500">
                        <div class="relative top-[50px] left-[50px] w-full max-w-[500px] flex flex-col gap-4">
                            <h1 class="text-2xl sm:text-3xl font-bold text-black">Mission</h1>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                Go on business trips to explore new <br> potential customers.
                            </p>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                Conduct continual research to improve and <br> renovate new rice mill technologies.
                            </p>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                Enhance quality control to meet higher standards <br> across continents.
                            </p>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                Get work done by an automated replacement <br /> method, while nurturing the team members
                                <br>
                                to acquire advanced rice-milling skills.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Centered Bottom Image -->
            <div class="flex justify-center items-center mt-10" data-aos="fade-up" data-aos-duration="1500">
                <img src="{{ asset('frontend/assets/imges/Vector.png') }}" alt="Divider"
                    class="w-[80px] sm:w-[100px] h-auto">
            </div>
        </section>
         {{-- History of Sek Meas --}}
        <section class="w-full py-16 bg-white px-8">
            <div class="text-center text-[#4DA358] font-bold mb-12" data-aos="fade-right" data-aos-duration="1500">
                <h1 class="text-2xl sm:text-3xl md:text-4xl">History of Rice Milling Production</h1>
            </div>

            <div class="relative w-full mx-auto px-4" data-aos="fade-left" data-aos-duration="1500">
                <!-- Vertical line on mobile -->
                {{-- <div class="md:hidden absolute left-1/2 top-0 bottom-0 w-1 bg-yellow-300 transform -translate-x-1/2"></div> --}}

                <!-- Horizontal line on desktop -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-yellow-300"></div>

                <div class="flex flex-col md:flex-row md:justify-between gap-16 relative">

                    <!-- Timeline Items -->
                    @php
                        $timeline = [
                            ['year' => '1994', 'text' => 'Began the rice milling by hand'],
                            ['year' => '1998', 'text' => 'Rice production machines with 1 processing line, which produce 2 tons/h'],
                            ['year' => '2002', 'text' => 'Rice production machines with 1 processing line, which produce 5 tons/h'],
                            ['year' => '2008', 'text' => 'Rice production machines with 1 processing line, which produce 8 tons/h'],
                            ['year' => '2011', 'text' => 'Rice production machines with 2 processing lines, which produce 10 tons/h'],
                            ['year' => '2013 – Present', 'text' => 'Rice production machines with 2 processing lines, which produce 20 tons/h'],
                        ];
                      @endphp

                    @foreach ($timeline as $item)
                        <div class="flex flex-col items-center text-center relative md:w-1/6 gap-16">
                            <!-- Year -->
                            <span class="relative top-[20px] text-red-500 text-xl font-semibold mb-3 md:mb-6">{{ $item['year'] }}</span>

                            <!-- Dot -->
                            <div class="w-4 h-4 bg-yellow-300 rotate-45 absolute md:top-1/2 md:-translate-y-1/2"></div>

                            <!-- Text below line -->
                            <span class="relative lg:top-[10px] text-[#4DA358] mt-10 md:mt-14 text-sm md:max-w-xs">
                                {{ $item['text'] }}
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
       
        {{-- Section: Inoformation of SEO in Sek Meas Rice --}}
        <section class="relative w-full xl:hidden block" data-aos="fade-right" data-aos-duration="1500">
            <img src="{{ asset('frontend/assets/imges/infor-seo.png') }}" alt="" class="w-full h-full object-cover">
        </section>
        <section class="relative w-full xl:block hidden" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('assets/image/bg-ms.svg') }}" alt="" class="w-full h-full object-cover">

            <div class="absolute inset-0 -top-12 flex flex-col justify-center items-center text-center px-6 text-white">
                <h1 class="text-[#4DA358] text-3xl py-6">Messages From CEO</h1>
                <div class="text-black max-w-7xl mx-auto text-left text-md space-y-2">
                    <p>
                    Rice is an important factor in daily life for both the local and international markets. Rice consumption has been the most important choice for rice-consuming customers. We have selected the best rice variety from the original source of supply in Cambodia to deliver the most component rice variety. The agricultural factor played an important role in the government's standard of living improvement strategy. By 2025, 
                    the target of 1 million tons of exports is strategized by the government, aiming to improve the overall Cambodia Standard.
                    </p>
                    <p>
                        We have selected the rice variety based on standard parameters and sources for growing paddy that provide with 
                        good and genuine origin of paddy. Continuously, we have improved our standard from time to time to match 
                        the market developments, by now our capacity has reached to international standard with state-of-the-art technology. 
                        Plus, our human capital has put a lot of inputs for development to improve the product quality and standard of the work.
                        We have developed our system from handicraft production to a state-of-the-art production line in order to support 
                        increasing market demands. Furthermore, SEK MEAS has been certified for Good Hygiene Practice (GHP) and Hazard 
                        Analysis on Critical Control Points (HACCP) in order to offer very standardized and hygienized products to consumers.
                        "We care for your eating and that's why we continue to develop and innovate more standards 
                        for achieving good ones for you all", added Mrs. LOR SENG LEAP. We hope to serve you fresher and healthier rice.
                    </p>
                    <p>
                        We are also working with farmer groups and the community to plant the best rice seeds, 
                        and in parallel with markets and such momentum has been noticed in the company. Farmers grow, and we grow together.
                    </p>
                    <p>
                        By 2023, SEK MEAS will have increased its capital investment to around 20 million USD for rice 
                        production and processing of rice to serve the demand from customers in both international markets. With innovative technology and human capital, 
                        we hope that customers will continue consuming our rice, and we are <br> growing together with you all.
                    </p>
                </div>
            </div>
        </section>
    </div>
    {{-- Section: Business Registration --}}
    <section id="business" class="relative px-4 py-12 md:px-10 lg:px-20">
        <div class="grid grid-cols-1 gap-10 business">
            <div class="text-center text-[#4DA358] font-bold mb-8" data-aos="fade-right" data-aos-duration="1500">
                <h1 class="text-2xl sm:text-3xl md:text-4xl">Business Registration Certificates</h1>
            </div>

            <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6 m-10" data-aos="fade-left" data-aos-duration="1500">
                @foreach ($showAboutBusiness as $items)
                    <div
                        class="mx-auto transform transition-transform duration-300 hover:scale-110
                                bg-white flex items-center justify-center
                                w-auto h-[250px] md:h-[400px]">
                        <img src="../../storage/local_product/{{ $items->thumbnail }}" alt="Certificate"
                            class="rounded-lg object-contain h-full" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Section: FDA Approved Certificate --}}
    <section id="business" class="px-4 py-12 md:px-10 lg:px-20">
        <div class="grid grid-cols-1 gap-10">
            <!-- Section Title -->
            <div class="text-center text-[#4DA358] font-bold mb-8">
                <h1 class="relative top-[10px] text-2xl sm:text-3xl md:text-4xl" data-aos="fade-right" data-aos-duration="1500">
                    FDA Approved Certificate
                </h1>
            </div>

            <!-- Image Container -->
            <div class="flex flex-col md:flex-row flex-wrap justify-center items-center gap-y-6 md:gap-x-6 m-10" data-aos="fade-left" data-aos-duration="1500">
                @foreach ($showAboutApproved as $items)
                    <div class="w-full sm:w-[80%] md:w-[45%] lg:w-[30%] flex justify-center">
                        <img src="../../storage/local_product/{{ $items->thumbnail }}" alt="Certificate"
                            class="relative top-[-10px] w-auto max-w-full max-h-[400px] rounded-lg object-contain mx-auto transform transition-transform duration-300 hover:scale-110" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('section_footer')
    {{-- Section: Footer --}}
    <section class="relative">
        @include('frontend.footer')
    </section>
@endsection