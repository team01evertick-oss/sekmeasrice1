@extends('frontend.header')
@section('title', 'Career')
@section('background-career', asset('frontend/assets/imges/career.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('title-career', 'Join Our Team')
@section('gmail-career')

    <div class="flex items-center justify-center gap-4 bg-white rounded-full w-[300px] h-[64px] mx-auto">
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
    <section class="w-full min-h-[60vh] flex items-center justify-center bg-gray-50/50" 
            x-data="{ open: false, title: '', description: '' }">
        <div class="max-w-7xl mx-auto px-6">
        

           @php
                $jobs = [
                    [
                        'title' => 'Sales Executive',
                        'image' => asset('assets/image/image.png'),
                        'description' => '
                             <h4>Job Summary</h4>
                                <p>
                                    The Sales Executive is responsible for generating new business, maintaining client relationships,
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
                        '
                    ],
                    [
                        'title' => 'Sales Supervisor',
                        'image' => asset('assets/image/image.png'),
                        'description' => '
                                <h4>Job Summary</h4>
                                <p>
                                    The Sales Supervisor supports the Sales Manager by supervising daily sales activities,
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
                        '
                    ],
                    [
                        'title' => 'Sales Manager',
                        'image' => asset('assets/image/image.png'),
                        'description' => '
                                 <h4>Job Summary</h4>
                                <p>
                                    The Sales Manager leads the sales department, develops sales strategies,
                                    drives revenue growth, and expands market presence for RSL Trading Company.
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
                        '
                    ],
                ];
            @endphp


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16 justify-items-center">
                @foreach($jobs as $job)
                <div class="group w-[380px] max-w-[450px] h-[50vh] bg-white p-10 rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transition-all duration-500 flex flex-col justify-between items-center text-center">
                    
                    <div class="w-32 h-32 mb-8 bg-gray-50 rounded-full flex items-center justify-center group-hover:bg-green-50 transition-colors duration-500">
                        <img src="{{ $job['image'] }}" alt="{{ $job['title'] }}" class="w-full h-full object-cover rounded-full">
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $job['title'] }}</h3>
                    <p class="text-gray-400 font-medium mb-10">Full-time • Head Office</p>
                    <button 
                        @click="
                            open = true;
                            title = '{{ $job['title'] }}';
                            description = `{!! $job['description'] !!}`;
                        "
                        class="w-full h-12 py-4 px-8 -mt-4 rounded-2xl border-2 cursor-pointer border-[#53A557] text-[#53A557] font-bold group-hover:bg-[#53A557] group-hover:text-white transition-all duration-300" style="padding: 5px;">
                        View Description
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
            class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50"
        >
            <div 
                  @click.outside="open = false"
                class="bg-white w-5xl max-w-6xl rounded-2xl px-12 relative" style="padding: 30px;"
            >
                <!-- Close Button -->
                <button @click="open = false" class="absolute top-5 right-5 text-gray-400 hover:text-red-500 text-2xl font-bold">&times;</button>

                <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-6" x-text="title"></h2>

                <!-- Render HTML content -->
                <div x-html="description"
                    class="text-gray-600 space-y-4 lg:text-lg md:text-sm text-xs
                            [&_h4]:text-lg [&_h4]:font-bold [&_h4]:mt-4
                            [&_ul]:list-disc [&_ul]:pl-6
                            [&_li]:mb-2">
                </div>

            </div>
        </div>

    </section>
  

    {{-- ================= APPLICATION FORM ================= --}}
    {{-- Added a distinct background or separator space --}}
    <section class="w-full h-[120vh] md:h-[70vh] lg:min-h-[70vh] flex items-center justify-center bg-gray-50/50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="lg:w-7xl rounded-xl border border-gray-50 p-8 md:p-20">
                
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mt-4">Application Form</h2>
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

                    <div class="flex flex-col space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                        
                        <div class="space-y-3">
                            <label class="text-sm font-bold text-gray-700 ml-2">Full Name</label>
                            <input type="text" name="name" placeholder="Your Name" required
                                class="w-full h-12 placeholder:px-2 px-7 py-5 rounded-2xl bg-gray-50 border-none focus:bg-white focus:ring-2 focus:ring-green-400 outline-none transition-all shadow-inner">
                        </div>

                        <div class="space-y-3">
                            <label class="text-sm font-bold text-gray-700 ml-2">Email Address</label>
                            <input type="email" name="email" placeholder="example@mail.com" required
                                class="w-full h-12 placeholder:px-2 px-7 py-5 rounded-2xl bg-gray-50 border-none focus:bg-white focus:ring-2 focus:ring-green-400 outline-none transition-all shadow-inner">
                        </div>

                        <div class="space-y-3">
                            <label class="text-sm font-bold text-gray-700 ml-2">Phone Number</label>
                            <input type="text" name="phone" placeholder="Your phone Number" required
                                class="w-full h-12 placeholder:px-2 px-7 py-5 rounded-2xl bg-gray-50 border-none focus:bg-white focus:ring-2 focus:ring-green-400 outline-none transition-all shadow-inner">
                        </div>

                        <div class="space-y-3">
                            <label class="text-sm font-bold text-gray-700 ml-2">Position</label>
                            <div class="relative">
                                <select name="position" required
                                    class="w-full h-12 placeholder:px-2 px-7 py-5 rounded-2xl bg-gray-50 border-none focus:bg-white focus:ring-2 focus:ring-green-400 outline-none transition-all appearance-none shadow-inner">
                                    <option value="">Select a position</option>
                                    <option>Sales Executive</option>
                                    <option>Sales Supervisor</option>
                                    <option>Sales Manager</option>
                                </select>
                                <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M7 7l3-3 3 3m0 6l-3 3-3-3"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="text-sm font-bold text-gray-700 ml-2">Upload CV (PDF)</label>
                            <input type="file" name="cv" required
                                class="block h-12 placeholder:px-2 w-full text-sm text-gray-500 file:mr-4 file:py-4 file:px-6 file:rounded-2xl file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer transition-all">
                        </div>

                        <div class="space-y-3">
                            <label class="text-sm font-bold text-gray-700 ml-2">Cover Letter</label>
                            <input type="file" name="cover_letter" required
                                class="block h-12 placeholder:px-2 w-full text-sm text-gray-500 file:mr-4 file:py-4 file:px-6 file:rounded-2xl file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer transition-all">
                        </div>
                    </div>

                    <div class="relative top-4 pt-12 flex justify-center py-12">
                        <button type="submit"
                            class="w-64 px-16 h-12 py-5 font-bold text-white bg-[#53A557] rounded-2xl hover:bg-[#468e4a] hover:shadow-xl hover:shadow-green-200 transition-all duration-300">
                            Submit Application
                        </button>
                    </div>
                    </div>
                </form>
            </div>
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