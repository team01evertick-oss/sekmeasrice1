@extends('frontend.header')
@section('title', 'About')
@section('background-image', asset('frontend/assets/imges/about.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('picture-rice', asset('frontend/assets/imges/rice.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', app()->getLocale() == 'en' ? 'About Us' : 'អំពីក្រុមហ៊ុន')

@section('section_content')

    {{-- Section: About Us --}}
     <section class="about-use relative top-[40px] md:top-[60px]">
        <img src="{{ asset('frontend/assets/imges/about__us.png') }}" alt="About Us Background" class="w-full object-cover">
        <div
            class="absolute xl:top-[-50px] sm:top-[90px] inset-0 flex flex-col justify-center items-center text-center px-6">
            <div class="relative top-[-50px] md:top-[-90px] lg:top-[-100px] px-4 sm:px-6 md:px-10 lg:px-32 py-8 sm:py-10 max-w-8xl">
                <h2 data-aos="fade-right" data-aos-duration="1500"
                    class="relative top-8 xl:-top-14 md:py-0 py-4 text-[14px] sm:text-xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold text-[#4DA358] mb-4 sm:mb-6 tracking-wide drop-shadow-lg">
                    {{ app()->getLocale() == 'en' ? 'About Us' : 'អំពីក្រុមហ៊ុន' }}
                </h2>

                <p
                    class="text-[8px] md:text-[15px] lg:text-xl xl:text-[22px] leading-relaxed text-[#000000] text-left">
                    {{ app()->getLocale() == 'en' ? 'Lor Eak Heng Sek Meas Rice Co., Ltd is one of the leading rice mill production factories and rice
                    exporters
                    in Cambodia. We have operated this business since 1994, starting from a small rice mill using
                    traditional
                    rice machines to a state-of-the-art production line with a two-processing-line system capable of
                    producing
                    20 tons per hour.
                    With this advanced technology, our production capacity has significantly increased, allowing us to
                    export
                    high-quality rice to more than 16 countries across the European Union, Africa, and the ASEAN region.' 
                    : 'ក្រុមហ៊ុន ឡអៀកហេងសេកមាសរាយស៍ គឺជារោងចក្រកិនស្រូវ និងនាំចេញអង្ករឈានមុខគេនៅក្នុងប្រទេសកម្ពុជា។ យើង ខ្ញុំបានបង្កើតអាជីវកម្មនេះចាប់តាំងពីឆ្នាំ១៩៩៤ ដោយផ្តើមពីម៉ាស៊ីនកិនស្រូវខ្នាតតូច និងកិនដោយដៃ។ បច្ចុប្បន្នយើងខ្ញុំបាន វិវដ្តដោយប្រើម៉ាស៊ីនកិនស្រូវទំនើបដែលអាចកិនបានរហូតដល់ ២០តោន ក្នុង១ម៉ោង បង្កើនបរិមាណច្រើនជាងមុន
                    ជម្រុញការនាំចេញទៅកាន់ ១៦ប្រទេសរួមមានសហភាពអឺរ៉ុប ទ្វីបអាហ្វ្រិក និងតំបន់អាស៊ាន។
                    ' }}
                </p>
            </div>

        </div>
    </section>
    <div class="grid grid-cols-1 gap-y-10">
        
        {{-- Section: Vision And Mission --}}
        <section class="vision-mission relative top-[50px] w-full px-4 py-10 bg-white">
            <!-- Container -->
            <div class="flex justify-center items-center">
                <div class="mx-auto grid xl:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 justify-items-center items-center">

                    <!-- Vision -->
                    <div class="bg-[#4DA358] hover:bg-[#F1C119] transition-colors duration-500 ease-in-out 
                                                w-[350px] sm:w-[400px] md:w-[600px] max-w-[600px] md:h-[500px] h-[200px] rounded-tl-[80px] rounded-br-[80px] 
                                                flex flex-col justify-start items-center" data-aos="fade-right" data-aos-duration="1500">
                        <div
                            class="relative top-0 md:top-[50px] w-full max-w-[450px] flex flex-col gap-4 pt-[40px] pl-[40px] pr-8 pb-8">
                            <h1 class="text-2xl sm:text-3xl font-bold text-black">
                                {{ app()->getLocale() == 'en' ? 'Vision' : 'ចក្ខុវិស័យ' }}
                            </h1>
                            <p class="max-w-lg mx-auto text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                {{ app()->getLocale() == 'en' ? 'Become the leading company in supplying high-quality rice for export to all the rice markets around the world.' 
                                : 'ក្លាយជាក្រុមហ៊ុនឈានមុខគេក្នុងការនាំចេញអង្ករប្រកបដោយគុណភាពខ្ពស់ទៅគ្រប់ទីកន្លែងនៅលើសកលលោក ។' }}
                            </p>
                        </div>
                    </div>

                    <!-- Mission -->
                    <div class="bg-[#4DA358] hover:bg-[#F1C119] transition-colors duration-500 ease-in-out 
                                                                w-[350px] sm:w-[400px] md:w-[600px] max-w-[600px] md:h-[500px] h-[300px] rounded-tr-[80px] rounded-bl-[80px] 
                                                                flex flex-col justify-start items-center p-8" data-aos="fade-left" data-aos-duration="1500">
                        <div class="relative top-[10px] md:top-[50px] w-full max-w-[400px] mx-auto flex flex-col gap-4">
                            <h1 class="text-2xl sm:text-3xl font-bold text-black">
                                {{ app()->getLocale() == 'en' ? 'Mission' : 'បេសកកម្ម' }}
                            </h1>
                            <div class="">
                                <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                {{ app()->getLocale() == 'en' ? '• Go on business trips to explore new potential customers.' : '• ធ្វើទស្សនកិច្ចនៅបរទេសដើម្បីកសាងទំនាក់ទំនង និងស្វែងរកទីផ្សារថ្មីបន្ថែម។' }}
                            </p>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                {{ app()->getLocale() == 'en' ? '• Conduct continual research to improve and renovate new rice mill technologies.' : '• ធ្វើការស្រាវជ្រាវបន្ថែមដើម្បីការស្ថាបនា និងអភិវឌ្ឍផលិតផលថ្មីៗ។' }}
                            </p>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                {{ app()->getLocale() == 'en' ? '• Enhance quality control to meet higher standards across continents.' : '• បង្កើនការត្រួតពិនិត្យនៅលើគុណភាពអោយស្របទៅតាមស្តង់ដារកំណត់ដោយប្រទេសនីមួយៗ។' }}
                            </p>
                            <p class="text-[10px] md:text-[15px] sm:text-[15px] lg:text-xl text-[#1A1A1A] leading-relaxed">
                                {{ app()->getLocale() == 'en' ? '• Get work done by an automated replacement method, while nurturing the team members to acquire advanced rice-milling skills.' : '• រកវិធីសាស្ត្រសម្រេចការងារដោយស្វ័យប្រវត្តិកម្ម និងបណ្តុះបណ្តាលក្រុមការងារអោយមានជំនាញបច្ចេកទេស បន្ថែមទៅលើការផលិតអង្ករ។' }}
                            </p>
                            </div>
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
                <h1 class="text-2xl sm:text-3xl md:text-4xl">{{ app()->getLocale() == 'en' ? 'History of Rice Milling Production' : ' ប្រវត្តិនៃការកិនស្រូវ' }}</h1>
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
                            ['year' => '1994','year_km' => '1994', 'text' => 'Began the rice milling by hand','text_km' => 'ចាប់ផ្តើមឡើងជាសិប្បកម្មកិនស្រូវដោយដៃ'],
                            ['year' => '1998','year_km' => '1998', 'text' => 'Rice production machines with 1 processing line, which produce 2 tons/h', 'text_km' => 'កិនដោយម៉ាស៊ីនកិនស្រូវ <br/> (១ខ្សែចង្វាក់ផលិតកម្ម ដែលអាចកិនបាន២តោនក្នុង១ម៉ោង) '],
                            ['year' => '2002','year_km' => '2002', 'text' => 'Rice production machines with 1 processing line, which produce 5 tons/h', 'text_km' => 'កិនដោយម៉ាស៊ីនកិនស្រូវ <br/> (១ខ្សែចង្វាក់ផលិតកម្ម ដែលអាចកិនបាន៥តោនក្នុង១ម៉ោង)'],
                            ['year' => '2008','year_km' => '2008', 'text' => 'Rice production machines with 1 processing line, which produce 8 tons/h', 'text_km' => 'កិនដោយម៉ាស៊ីនកិនស្រូវ  <br/> (១ខ្សែចង្វាក់ផលិតកម្ម ដែលអាចកិនបាន៨តោនក្នុង១ម៉ោង)'],
                            ['year' => '2011','year_km' => '2011',  'text' => 'Rice production machines with 2 processing lines, which produce 10 tons/h', 'text_km' => 'កិនដោយម៉ាស៊ីនកិនស្រូវ  <br/> (២ខ្សែចង្វាក់ផលិតកម្ម ដែលអាចកិនបាន១០តោនក្នុង១ម៉ោង)'],
                            ['year' => '2013 – Present','year_km' => '2013- បច្ចុប្បន្ន', 'text' => 'Rice production machines with 2 processing lines, which produce 20 tons/h', 'text_km' => 'កិនដោយម៉ាស៊ីនកិនស្រូវ <br/> (២ខ្សែចង្វាក់ផលិតកម្ម ដែលអាចកិនបាន២០តោនក្នុង១ម៉ោង)'],
                        ];
                      @endphp

                    @foreach ($timeline as $item)
                        <div class="flex flex-col items-center text-center relative md:w-1/6 gap-16">
                            <!-- Year -->
                            <span class="relative top-[20px] text-red-500 text-xl font-semibold mb-3 md:mb-6">{{ app()->getLocale() == 'en' ? $item['year'] : $item['year_km'] }}</span>

                            <!-- Dot -->
                            <div class="w-4 h-4 bg-yellow-300 rotate-45 absolute md:top-1/2 md:-translate-y-1/2"></div>

                            <!-- Text below line -->
                            <span class="relative lg:top-[10px] text-[#4DA358] mt-10 md:mt-14 text-sm md:max-w-xs">
                                {!! app()->getLocale() == 'en' ? $item['text'] : $item['text_km'] !!}
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
       
        {{-- Section: Inoformation of SEO in Sek Meas Rice --}}
        <section class="relative w-full xl:hidden block" data-aos="fade-right" data-aos-duration="1500">
            <img src="{{ app()->getLocale() == 'en' ? asset('assets/logo/why-choes/msceo-en.svg') : asset('assets/logo/why-choes/ms-km-final.svg') }}" alt="" class="w-full h-full object-cover">
        </section>
        <section class="relative w-full xl:block hidden" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{ asset('assets/image/bg-ms.svg') }}" alt="" class="w-full h-full object-cover">

            <div class="absolute inset-0 -top-12 flex flex-col justify-center items-center text-center px-6 text-white">
                <h1 class="text-[#4DA358] text-4xl py-6 font-semibold">{{ app()->getLocale() == 'en' ? 'Message from CEO' : 'សារពីអគ្គនាយិកា' }}</h1>
                <div class="text-black text-left text-sm space-y-2 -mt-4 {{ app()->getLocale() == 'km' ? 'max-w-4xl mx-auto' : 'max-w-7xl mx-auto' }}">
                    <p class="{{ app()->getLocale() == 'km' ? 'text-xl' : '' }}">
                     {{ 
                        app()->getLocale() == 'en' ? "Rice is an important factor in daily life for both the local and international markets. Rice consumption has been the most important choice for rice-consuming customers. We have selected the best rice variety from the original source of supply in Cambodia to deliver the most component rice variety. The agricultural factor played an important role in the government's standard of living improvement strategy. By 2025, the target of 1 million tons of exports is strategized by the government, aiming to improve the overall Cambodia Standard."
                        : '[...]យើងខ្ញុំយកចិត្តទុកដាក់ចំពោះសុវត្ថិភាពនៃការបរិភោគរបស់អតិថិជនដូច្នេះហើយយើងខ្ញុំបន្តអភិវឌ្ឍ និងបង្កើននូវស្តង់ដារបន្ថែមទៀតដើម្បីសម្រេចបាននូវផលិតផលអង្ករល្អៗដើម្បីបរិភោគកាន់តែមានសុខភាពល្អ។ យើងខ្ញុំក៏កំពុងធ្វើការជាមួយសហគមន៍កសិករ និងសហគមន៍ដើម្បីដាំពូជស្រូវដែលល្អបំផុតឆ្លើយតបទៅនឹងតម្រូវការរបស់ទីផ្សារហើយវាក៏ជាកម្លាំងចលករមួយដែលត្រូវបានកត់សម្គាល់អំពីក្រុមហ៊ុនរបស់យើងខ្ញុំផងដែរ។ នៅឆ្នាំ 2023 ក្រុមហ៊ុនសេកមាសរាយស៍ បាននឹងកំពុងបង្កើនទុនវិនិយោគរបស់ខ្លួនប្រមាណជា20លានដុល្លារអាមេរិក
                            ដើម្បីជម្រុញសង្វាក់ផលិតកម្ម និងដំណើរការនៃការផលិតទាំងមូលសម្រាប់បំពេញនូវតម្រូវការរបស់អតិថិជនទាំងក្នុង និងក្រៅប្រទេស។ 
                            យើងសម្រេចផលិតផលនេះបានដោយប្រើប្រាស់នូវបច្ចេកវិទ្យាជឿនលឿន និងធនធានមនុស្សដែលប៉ិនប្រសព្វហេតុនេះ
                            ហើយយើងជឿជាក់ថាអតិថិជននឹងនៅតែបន្តគាំទ្រ និងជ្រើសរើសផលិតផលអង្កររបស់យើង។ យើងរីកចម្រើនរួមគ្នា។

                        ' 
                    }}
                    </p>
                    {!! 
                        app()->getLocale() == 'en' ?  "
                        <p>
                        We have selected the rice variety based on standard parameters and sources for growing paddy that provide with 
                        good and genuine origin of paddy. Continuously, we have improved our standard from time to time to match 
                        the market developments, by now our capacity has reached to international standard with state-of-the-art technology. 
                        Plus, our human capital has put a lot of inputs for development to improve the product quality and standard of the work.
                        We have developed our system from handicraft production to a state-of-the-art production line in order to support 
                        increasing market demands. Furthermore, SEK MEAS has been certified for Good Hygiene Practice (GHP) and Hazard 
                        Analysis on Critical Control Points (HACCP) in order to offer very standardized and hygienized products to consumers.
                        We care for your eating and that's why we continue to develop and innovate more standards 
                        for achieving good ones for you all, added Mrs. LOR SENG LEAP. We hope to serve you fresher and healthier rice.
                        </p>
                        <p>
                            We are also working with farmer groups and the community to plant the best rice seeds, 
                            and in parallel with markets and such momentum has been noticed in the company. Farmers grow, and we grow together.
                        </p>
                        <p>
                            By 2023, SEK MEAS will have increased its capital investment to around 20 million USD for rice 
                            production and processing of rice to serve the demand from customers in both international markets. With innovative technology and human capital, 
                            we hope that customers will continue consuming our rice, and we are <br> growing together with you all.
                        </p>"
                        : ''
                    !!}
                </div>
            </div>
        </section>
    </div>
    {{-- Section: Business Registration --}}
    <section id="business" class="relative px-4 py-2 md:py-12 md:px-10 lg:px-20">
        <div class="grid grid-cols-1 gap-10 business">
            <div class="text-center text-[#4DA358] font-bold mb-8" data-aos="fade-right" data-aos-duration="1500">
                <h1 class="text-2xl sm:text-3xl md:text-4xl">
                    {{ app()->getLocale() == 'en' ? 'Business Registration Certificates' : 'ឯកសារចុះបញ្ជិកាសហគ្រាស ' }}
                </h1>
            </div>

            <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6" data-aos="fade-left" data-aos-duration="1500">
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

@endsection
@section('section_footer')
    {{-- Section: Footer --}}
    <section class="relative">
        @include('frontend.footer')
    </section>
@endsection