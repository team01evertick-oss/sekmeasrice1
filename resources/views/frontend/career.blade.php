@extends('frontend.header')
@section('title', 'Career')
@section('background-career')
<div class="relative w-full h-screen">
    <div class="absolute inset-0 -top-4 bg-black/50 bg-opacity-50 z-0"></div>
    <img src="{{ asset('assets/image/bg-career.jpg') }}" alt="" class="w-full h-full object-cover">
</div>
@endsection

@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('title-career', app()->getLocale() == 'en' ? 'Join Our Team' : 'ចូលរួមជាមួយក្រុមរបស់យើង')
@section('gmail-career')

    <div class="flex items-center justify-center gap-4 bg-white rounded-full w-[300px] h-[64px] mx-auto" data-aos="fade-left" data-aos-duration="1500">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M25 50C11.2149 50 0 38.7851 0 25C0 11.2149 11.2149 0 25 0C38.7851 0 50 11.2149 50 25C50 38.7851 38.7851 50 25 50ZM37.9646 33.7823C38.2729 33.7823 38.5237 33.5315 38.5237 33.2232V17.5282L25.804 27.629C25.5687 27.816 25.2842 27.9095 24.9999 27.9095C24.7156 27.9095 24.4312 27.8159 24.1958 27.629L11.4762 17.5282V33.2232C11.4762 33.5315 11.7271 33.7823 12.0353 33.7823H37.9646ZM36.0154 16.2177L25 24.9652L13.9845 16.2177H36.0154ZM41.11 16.7768V33.2234C41.11 34.9577 39.6989 36.3687 37.9646 36.3687H12.0353C10.3009 36.3687 8.89004 34.9577 8.89004 33.2234V16.7768C8.89004 15.0425 10.301 13.6315 12.0353 13.6315H37.9646C39.6989 13.6314 41.11 15.0425 41.11 16.7768Z"
                fill="#53A557" />
        </svg>
        {{-- <h3 class="underline text-[16px] text-[#3e3e3e] flex text-center">hrdepartment@sekmeasrice.com</h3> --}}
        <h3 class="underline text-[16px] text-[#3e3e3e] flex text-center">info@lehsekmeasrice.com</h3>
    </div>
@endsection


@section('section_content')
<style>
    [x-cloak] { display: none !important; }
</style>

{{-- Main Wrapper: Removed the flex-center here to allow sections to behave like blocks --}}
<div class="relative w-full bg-white overflow-hidden z-50">
  
    {{-- ================= OPEN POSITIONS ================= --}}
    {{-- Added w-full and clear vertical padding --}}
    <section data-aos="fade-right" data-aos-duration="1500" class="relative z-50 w-full flex items-center justify-center bg-gray-50/50" 
            x-data="{ open: false, title: '', description: '' }">
        <div class="max-w-7xl mx-auto px-6">
        

           @php
                $jobs = [
                    [
                        'title' => 'Sales Executive',
                        'title_km' => 'អ្នកប្រត្តិបត្តិផ្នែកលក់',
                        'image' => asset('assets/image/image.png'),
                        'description' => '
                             <h4>Job Summary</h4>
                                <p>
                                    The Sales Executive is responsible for generating new business, maintaining client relationships, <br/>
                                    and achieving sales targets through effective product promotion and customer engagement.
                                </p>

                                <h4>Key Responsibilities</h4>
                                <ul>
                                    <li>Identify and develop new customers in local and international markets</li>
                                    <li>Promote and sell company products to wholesalers, distributors, and partners</li>
                                    <li>Prepare quotations, follow up on inquiries, and close sales deals</li>
                                    <li>Maintain strong relationships with existing clients</li>
                                    <li>Collect market feedback and competitor information</li>
                                    <li>Prepare sales reports and update customer databases</li>
                                    <li>Coordinate with operations and logistics teams to ensure smooth delivery</li>
                                </ul>

                                <h4>Requirements</h4>
                                <ul>
                                    <li>Bachelor’s degree in Business, Marketing, or related field</li>
                                    <li>Minimum 1–2 years of sales experience (trading or FMCG preferred)</li>
                                    <li>Strong communication and negotiation skills</li>
                                    <li>Self-motivated and target-driven</li>
                                    <li>Good command of English; Khmer required (additional languages are an advantage)</li>
                                    <li>Willingness to travel when required</li>
                                </ul>
                        ',
                        'description_km' => '
                            <h4>សេចក្តីសង្ខេបពីការងារ</h4>
                            <p>
                                មុខតំណែងអ្នកលក់ (Sales Executive) មានភារកិច្ចក្នុងការស្វែងរកអាជីវកម្មថ្មី
                                ថែរក្សាទំនាក់ទំនងជាមួយអតិថិជន និងសម្រេចគោលដៅលក់
                                តាមរយៈការផ្សព្វផ្សាយផលិតផល និងការបម្រើអតិថិជនប្រកបដោយប្រសិទ្ធភាព។
                            </p>

                            <h4>ភារកិច្ចសំខាន់ៗ</h4>
                            <ul>
                                <li>ស្វែងរក និងអភិវឌ្ឍអតិថិជនថ្មីទាំងក្នុងស្រុក និងអន្តរជាតិ</li>
                                <li>ផ្សព្វផ្សាយ និងលក់ផលិតផលរបស់ក្រុមហ៊ុនទៅកាន់អ្នកលក់ដុំ អ្នកចែកចាយ និងដៃគូ</li>
                                <li>រៀបចំសម្រង់តម្លៃ តាមដានសំណើ និងបិទកិច្ចព្រមព្រៀងលក់</li>
                                <li>ថែរក្សាទំនាក់ទំនងល្អជាមួយអតិថិជនដែលមានស្រាប់</li>
                                <li>ប្រមូលព័ត៌មានទីផ្សារ និងព័ត៌មានគូប្រកួត</li>
                                <li>រៀបចំរបាយការណ៍លក់ និងធ្វើបច្ចុប្បន្នភាពទិន្នន័យអតិថិជន</li>
                                <li>សហការជាមួយក្រុមប្រតិបត្តិការ និងដឹកជញ្ជូន ដើម្បីធានាការដឹកជញ្ជូនរលូន</li>
                            </ul>

                            <h4>លក្ខខណ្ឌតម្រូវការ</h4>
                            <ul>
                                <li>មានបរិញ្ញាបត្រផ្នែកធុរកិច្ច ទីផ្សារ ឬជំនាញដែលពាក់ព័ន្ធ</li>
                                <li>មានបទពិសោធន៍ការងារផ្នែកលក់យ៉ាងតិច ១–២ ឆ្នាំ (ពាណិជ្ជកម្ម ឬ FMCG នឹងផ្តល់អាទិភាព)</li>
                                <li>មានជំនាញទំនាក់ទំនង និងចរចាល្អ</li>
                                <li>មានការលើកទឹកចិត្តខ្លួនឯង និងផ្តោតលើគោលដៅ</li>
                                <li>ប្រើប្រាស់ភាសាអង់គ្លេសបានល្អ ត្រូវការភាសាខ្មែរ (ភាសាបន្ថែមគឺជាប្រយោជន៍)</li>
                                <li>អាចធ្វើដំណើរតាមការចាំបាច់</li>
                            </ul>
                        '
                    ],
                    [
                        'title' => 'Sales Supervisor',
                        'title_km' => 'អ្នកត្រួតពិនិត្យផ្នែកលក់',
                        'image' => asset('assets/image/image.png'),
                        'description' => '
                                <h4>Job Summary</h4>
                                <p>
                                    The Sales Supervisor supports the Sales Manager by supervising daily sales activities, <br/>
                                    guiding the sales team, and ensuring targets and performance standards are met.
                                </p>

                                <h4>Key Responsibilities</h4>
                                <ul>
                                    <li>Supervise and support Sales Executives in daily operations</li>
                                    <li>Monitor sales performance and ensure achievement of targets</li>
                                    <li>Assist in implementing sales strategies and promotional plans</li>
                                    <li>Train, coach, and motivate sales staff</li>
                                    <li>Ensure proper reporting of sales activities and customer feedback</li>
                                    <li>Maintain strong relationships with key customers</li>
                                    <li>Coordinate between sales team and management</li>
                                </ul>

                                <h4>Requirements</h4>
                                <ul>
                                    <li>Bachelor’s degree in Business, Marketing, or related field</li>
                                    <li>Minimum 3 years of sales experience, with supervisory exposure preferred</li>
                                    <li>Strong leadership and team management skills</li>
                                    <li>Good analytical and reporting skills</li>
                                    <li>Excellent communication and problem-solving abilities</li>
                                    <li>Proficient in Microsoft Office and CRM systems</li>
                                </ul>
                        ',
                        'description_km' => '
                                <h4>សេចក្តីសង្ខេបពីការងារ</h4>
                                <p>
                                    មុខតំណែងអ្នកគ្រប់គ្រងការលក់ (Sales Supervisor) ជួយគាំទ្រអ្នកគ្រប់គ្រងការលក់
                                    ដោយត្រួតពិនិត្យសកម្មភាពលក់ប្រចាំថ្ងៃ ដឹកនាំក្រុមលក់
                                    និងធានាថាគោលដៅ និងស្តង់ដារការងារត្រូវបានសម្រេច។
                                </p>

                                <h4>ភារកិច្ចសំខាន់ៗ</h4>
                                <ul>
                                    <li>ត្រួតពិនិត្យ និងគាំទ្រអ្នកលក់ក្នុងការងារប្រចាំថ្ងៃ</li>
                                    <li>តាមដានលទ្ធផលការលក់ និងធានាការសម្រេចគោលដៅ</li>
                                    <li>ជួយអនុវត្តយុទ្ធសាស្ត្រលក់ និងផែនការផ្សព្វផ្សាយ</li>
                                    <li>បណ្តុះបណ្តាល ណែនាំ និងលើកទឹកចិត្តបុគ្គលិកលក់</li>
                                    <li>ធានាការរាយការណ៍ត្រឹមត្រូវអំពីសកម្មភាពលក់ និងមតិយោបល់អតិថិជន</li>
                                    <li>ថែរក្សាទំនាក់ទំនងល្អជាមួយអតិថិជនសំខាន់ៗ</li>
                                    <li>សម្របសម្រួលរវាងក្រុមលក់ និងអ្នកគ្រប់គ្រង</li>
                                </ul>

                                <h4>លក្ខខណ្ឌតម្រូវការ</h4>
                                <ul>
                                    <li>មានបរិញ្ញាបត្រផ្នែកធុរកិច្ច ទីផ្សារ ឬជំនាញដែលពាក់ព័ន្ធ</li>
                                    <li>មានបទពិសោធន៍ការងារផ្នែកលក់យ៉ាងតិច ៣ ឆ្នាំ (មានបទពិសោធន៍គ្រប់គ្រងនឹងផ្តល់អាទិភាព)</li>
                                    <li>មានជំនាញដឹកនាំ និងគ្រប់គ្រងក្រុមបានល្អ</li>
                                    <li>មានជំនាញវិភាគ និងរៀបចំរបាយការណ៍</li>
                                    <li>មានជំនាញទំនាក់ទំនង និងដោះស្រាយបញ្ហាបានល្អ</li>
                                    <li>អាចប្រើប្រាស់ Microsoft Office និងប្រព័ន្ធ CRM បានល្អ</li>
                                </ul>
                        '
                    ],
                    [
                        'title' => 'Sales Manager',
                        'title_km' => 'ប្រធានផ្នែកលក់',
                        'image' => asset('assets/image/image.png'),
                        'description' => '
                                <h4>Job Summary</h4>
                                <p>
                                    The Sales Manager leads the sales department, develops sales strategies, <br/>
                                    drives revenue growth, and expands market presence for Sek Meas Rice Company.
                                </p>

                                <h4>Key Responsibilities</h4>
                                <ul>
                                    <li>Develop and implement short- and long-term sales strategies</li>
                                    <li>Set sales targets and monitor team performance</li>
                                    <li>Lead, manage, and develop the sales team</li>
                                    <li>Identify new markets, business opportunities, and strategic partnerships</li>
                                    <li>Manage key accounts and high-value clients</li>
                                    <li>Analyze sales data, market trends, and competitor activities</li>
                                    <li>Prepare sales forecasts, budgets, and management reports</li>
                                    <li>Collaborate with senior management to support company growth</li>
                                </ul>

                                <h4>Requirements</h4>
                                <ul>
                                    <li>Bachelor’s or Master’s degree in Business, Marketing, or related field</li>
                                    <li>Minimum 5 years of sales experience, including management level</li>
                                    <li>Proven track record in sales growth and team leadership</li>
                                    <li>Strong strategic thinking and negotiation skills</li>
                                    <li>Excellent communication and presentation skills</li>
                                    <li>Experience in trading, import/export, or commodities is a strong advantage</li>
                                </ul>
                        ',
                        'description_km' => '
                                 <h4>សេចក្តីសង្ខេបពីការងារ</h4>
                                <p>
                                    មុខតំណែងអ្នកគ្រប់គ្រងការលក់ (Sales Manager) ទទួលខុសត្រូវដឹកនាំនាយកដ្ឋានលក់
                                    បង្កើតយុទ្ធសាស្ត្រលក់ ជំរុញការកើនឡើងនៃប្រាក់ចំណូល
                                    និងពង្រីកទីផ្សាររបស់ក្រុមហ៊ុន Sek Meas Rice Company។
                                </p>

                                <h4>ភារកិច្ចសំខាន់ៗ</h4>
                                <ul>
                                    <li>រៀបចំ និងអនុវត្តយុទ្ធសាស្ត្រលក់រយៈពេលខ្លី និងរយៈពេលវែង</li>
                                    <li>កំណត់គោលដៅលក់ និងតាមដានប្រសិទ្ធភាពក្រុមការងារ</li>
                                    <li>ដឹកនាំ គ្រប់គ្រង និងអភិវឌ្ឍក្រុមលក់</li>
                                    <li>ស្វែងរកទីផ្សារថ្មី ឱកាសអាជីវកម្ម និងដៃគូយុទ្ធសាស្ត្រ</li>
                                    <li>គ្រប់គ្រងអតិថិជនសំខាន់ៗ និងអតិថិជនមានតម្លៃខ្ពស់</li>
                                    <li>វិភាគទិន្នន័យលក់ និន្នាការទីផ្សារ និងសកម្មភាពគូប្រកួត</li>
                                    <li>រៀបចំព្យាករណ៍លក់ ថវិកា និងរបាយការណ៍គ្រប់គ្រង</li>
                                    <li>សហការជាមួយអ្នកគ្រប់គ្រងជាន់ខ្ពស់ ដើម្បីគាំទ្រការកើនឡើងរបស់ក្រុមហ៊ុន</li>
                                </ul>

                                <h4>លក្ខខណ្ឌតម្រូវការ</h4>
                                <ul>
                                    <li>មានបរិញ្ញាបត្រ ឬអនុបណ្ឌិតផ្នែកធុរកិច្ច ទីផ្សារ ឬជំនាញពាក់ព័ន្ធ</li>
                                    <li>មានបទពិសោធន៍ការងារផ្នែកលក់យ៉ាងតិច ៥ ឆ្នាំ រួមទាំងកម្រិតគ្រប់គ្រង</li>
                                    <li>មានប្រវត្តិជោគជ័យក្នុងការកើនឡើងលក់ និងដឹកនាំក្រុម</li>
                                    <li>មានជំនាញគិតយុទ្ធសាស្ត្រ និងចរចាល្អ</li>
                                    <li>មានជំនាញទំនាក់ទំនង និងបង្ហាញការងារល្អ</li>
                                    <li>មានបទពិសោធន៍ផ្នែកពាណិជ្ជកម្ម នាំចូល/នាំចេញ ឬទំនិញ គឺជាប្រយោជន៍ខ្លាំង</li>
                                </ul>
                        '
                    ],
                ];
            @endphp


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16 justify-items-center">
                @foreach($jobs as $job)
                <div class="group w-[380px] max-w-[450px] h-[50vh] bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 flex flex-col justify-between items-center text-center">
                    
                    <div class="w-32 h-32 mb-8 rounded-full flex items-center justify-center transition-colors duration-500">
                        <img src="{{ $job['image'] }}" alt="{{ $job['title'] }}" class="w-full h-full object-cover rounded-full" style="margin-top: 20px;">
                    </div>

                   <div>
                     <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ app()->getLocale() == 'en' ? $job['title'] : $job['title_km'] }}</h3>
                    <p class="text-gray-400 font-medium mb-10">{{ app()->getLocale() == 'en' ? 'Full-time • Head Office' : 'ការងារពេញម៉ោង • ការិយាល័យកណ្តាល' }}</p>
                   </div>
                    <button 
                        @click="
                            open = true;
                            title = '{{ app()->getLocale() == 'en' ? $job['title'] : $job['title_km'] }}';
                            description = `{!! app()->getLocale() == 'en' ? $job['description'] : $job['description_km'] !!}`;
                        "
                        class="w-full h-12 py-4 px-8 -mt-4 cursor-pointer" style="padding: 5px;">
                        <img src="{{ app()->getLocale() == 'en' ? asset('assets/logo/view-more-en.svg') : asset('assets/logo/view-more-km.svg') }}" alt="" class="w-full h-full object-contain">
                    </button>



                </div>
                @endforeach
            </div>
        </div>
        <!-- Modal -->
        <div 
           x-show="open"
            x-transition
            x-cloak
            class="h-auto md:h-[95vh] fixed inset-0 backdrop-blur-sm flex items-center justify-center z-50">
            <div 
                  @click.outside="open = false"
                class="bg-white w-4xl max-w-6xl rounded-2xl px-12 relative" style="padding: 30px;"
            >
                <!-- Close Button -->
                <button @click="open = false" class="absolute top-5 right-5 text-gray-400 hover:text-red-500 text-2xl font-bold">&times;</button>

                <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-6" x-text="title"></h2>

                <!-- Render HTML content -->
                <div x-html="description"
                    class="text-gray-600 space-y-4 lg:text-sm md:text-sm text-xs
                            [&_h4]:text-lg [&_h4]:font-bold [&_h4]:mt-4
                            [&_ul]:list-disc [&_ul]:pl-6
                            [&_li]:mb-2">
                </div>

            </div>
        </div>

    </section>
  

    {{-- ================= APPLICATION FORM ================= --}}
    {{-- Added a distinct background or separator space --}}
    <section data-aos="fade-left" data-aos-duration="1500" class="relative -z-50">
        <div class="max-w-7xl mx-auto rounded-xl border border-gray-50">
            
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mt-4">{{ app()->getLocale() == 'en' ? 'Application Form' : 'ទម្រង់បែបបទដាក់ពាក្យ' }}</h2>
            </div>
            @if (session('successfully'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                    class="fixed top-6 right-6 z-50 bg-green-600 text-white h-32 px-6 py-4 rounded-xl shadow-lg">
                    {{ session('successfully') }}
                </div>
            @endif

            @if ($errors->any())
                    <div class="mb-6 rounded-xl bg-red-50 border border-red-200 p-4 text-red-600">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <form action="{{ route('application.send') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                @csrf

                <div class="flex flex-col space-y-4 px-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                    
                    <div class="space-y-3">
                        <label class="text-sm font-bold text-gray-700 ml-2 px-2">{{ app()->getLocale() === 'en' ? 'Full Name' : 'ឈ្មោះ' }}</label>
                        <input type="text" name="name" placeholder="{{ app()->getLocale() === 'en' ? 'Your Name' : 'ឈ្មោះរបស់អ្នក' }}" required
                            class="w-full h-12 placeholder:px-2 px-2 py-5 rounded-md bg-[#fff9e6] border-none focus:bg-white focus:ring-2 focus:ring-yellow-400 outline-none transition-all shadow-inner">
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-gray-700 ml-2 px-2">{{ app()->getLocale() === 'en' ? 'Email' : 'អ៊ីម៉ែល' }}</label>
                        <input type="email" name="email" placeholder="example@mail.com" required
                            class="w-full h-12 placeholder:px-2 px-2 py-5 rounded-md bg-[#fff9e6] border-none focus:bg-white focus:ring-2 focus:ring-yellow-400 outline-none transition-all shadow-inner">
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-gray-700 ml-2 px-2">{{ app()->getLocale() === 'en' ? 'Phone Number' : 'លេខទូរស័ព្ទ' }}</label>
                        <input type="text" name="phone" placeholder="{{ app()->getLocale() === 'en' ? 'Phone Number' : 'លេខទូរស័ព្ទរបស់អ្នក' }}" required
                            class="w-full h-12 placeholder:px-2 px-2 py-5 rounded-md bg-[#fff9e6] border-none focus:bg-white focus:ring-2 focus:ring-yellow-400 outline-none transition-all shadow-inner">
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-gray-700 ml-2 px-2">{{ app()->getLocale() === 'en' ? 'Position' : 'មុខតំណែង' }}</label>
                        <div class="relative">
                            <select id="position" name="position" required
                                class="w-full h-12 px-4 rounded-md bg-[#fff9e6] 
                                    text-gray-700
                                    border-none focus:bg-white focus:ring-2 
                                    focus:ring-yellow-400 outline-none 
                                    transition-all shadow-inner appearance-none">
                                <option value="" disabled selected>{{ app()->getLocale() === 'en' ? 'Select a position' :  'បំពេញមុខតំណែង' }}</option>
                                <option value="Sales Executive">{{ app()->getLocale() === 'en' ? 'Sales Executive' :  'អ្នកប្រត្តិបត្តិផ្នែកលក់' }}</option>
                                <option value="Sales Supervisor">{{ app()->getLocale() === 'en' ? 'Sales Supervisor' :  'អ្នកត្រួតពិនិត្យផ្នែកលក់'}}</option>
                                <option value="Sales Manager"> {{ app()->getLocale() === 'en' ? 'Sales Manager' :  ' ប្រធានផ្នែកលក់' }}</option>
                            </select>

                            <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none">
                                <svg class="w-7 h-7 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M7 7l3-3 3 3m0 6l-3 3-3-3"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-gray-700 ml-2 px-2">{{ app()->getLocale() === 'en' ? 'Upload CV (PDF)' : 'អាប់ឡូត CV' }}</label>
                        <input type="file" name="cv" required
                            class="block h-12 placeholder:px-2 w-full text-sm text-gray-500 file:mr-4 file:py-4 file:px-6 file:rounded-2xl file:border-0 file:text-sm file:font-semibold file:bg-[#fff9e6] file:text-gray-500 cursor-pointer transition-all">
                    </div>

                    <div class="space-y-3">
                        <label class="text-sm font-bold text-gray-700 ml-2 px-2">{{ app()->getLocale() === 'en' ? 'Upload Cover Letter' : 'អាប់ឡូត Cover Letter'}}</label>
                        <input type="file" name="cover_letter" required
                            class="block h-12 placeholder:px-2 w-full text-sm text-gray-500 file:mr-4 file:py-4 file:px-6 file:rounded-2xl file:border-0 file:text-sm file:font-semibold file:bg-[#fff9e6] file:text-gray-500 cursor-pointer transition-all">
                    </div>
                </div>

                <div class="relative flex justify-center py-10">
                    <button type="submit"
                        class="w-52 h-10 transition-all duration-300">
                        <img src="{{ app()->getLocale() == 'en' ? asset('assets/logo/btn-application.png') : asset('assets/logo/btn-submit-km.svg') }}" alt="" class="w-full h-full">
                    </button>
                </div>
                </div>
            </form>
        </div>
    </section>

</div>

@include('frontend.footer-career-contact')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    document.getElementById('cover_letter').addEventListener('change', function () {
        const file = this.files[0];
        const maxSize = 20 * 1024 * 1024; // 20MB

        if (file && file.size > maxSize) {
            alert('Cover Letter file size must be 20MB or less.');
            this.value = '';
        }
    });
</script>
<script>
    document.getElementById('cv').addEventListener('change', function () {
        const file = this.files[0];
        const maxSize = 20 * 1024 * 1024; // 20MB

        if (file && file.size > maxSize) {
            alert('CV file size must be 20MB or less.');
            this.value = '';
        }
    });
</script>
@endsection