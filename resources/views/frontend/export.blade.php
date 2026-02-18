@extends('frontend.header')
@section('title', 'Export')
@section('background-image', asset('frontend/assets/imges/eport.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', app()->getLocale() == 'en' ? 'Export' : 'ផលិតផលនាំចេញ')

@section('section_content')

    {{-- Section prodcut for selling --}}
    <section class="section-product relative top-[50px]">
        <div class="inset-0 flex flex-col justify-center items-center text-center px-6" data-aos="fade-right"
            data-aos-duration="1500">
            <h2
                class="relative top-0 md:-top-14 md:py-0 py-4 text-3xl md:text-5xl font-extrabold text-[#4DA358] mb-6 tracking-wide drop-shadow-lg">
               
                {{ app()->getLocale() == 'en' ? ' For Export' : 'ទិសដៅនាំចេញ' }}
            </h2>
        </div>

        <!-- make sure Alpine is loaded in your layout -->
        {{--
        <script src="//unpkg.com/alpinejs" defer></script> --}}

        <!-- ONE Alpine root wrapping grid + modal -->
        <div x-data="{ openOrderModal: false, selectedProduct: { name:'', type:'', capacity:'', price: 0 }, quantity: 1 }"
            x-cloak>

            <div class="relative top-[30px] flex justify-center">
                <div
                    class="grid grid-cols-1 gap-y-15 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center items-start ">
                    @foreach ($showExport as $items)
                        {{-- Product Card for Selling--}}
                        <div class="relative w-[250px] h-[500px] text-center group p-5">
                            <!-- Background -->
                            <img src="{{ asset('frontend/assets/imges/card-product.png') }}" alt="Product Background"
                                class="absolute inset-0 w-full h-full object-contain">

                            <!-- Overlay -->
                            <div class="absolute inset-0 z-10 flex flex-col justify-between top-[-20px]">
                                <!-- Top: Image -->
                                <div class="flex justify-center">
                                    <img src="{{ asset('storage/local_product/' . $items->image_export) }}" alt=""
                                        class="w-[240px] h-[240px] object-contain rounded-lg mb-3 transition-transform duration-300 group-hover:scale-105">
                                </div>

                                <!-- Middle: Brand + Name + Type -->
                                <div class="relative top-[-50px] flex flex-col items-center text-center">
                                    <h2 class="text-[#324A0A] font-bold text-lg md:text-xl leading-snug">
                                        {{ $items->brand }}
                                    </h2>

                                    <h2
                                        class="text-[#324A0A] font-semibold text-lg md:text-xl leading-snug max-w-[230px] break-words">
                                        {{ $items->name }}
                                        <br>
                                    </h2>
                                </div>

                                <!-- Bottom: Price, Capacity, Button -->
                                <div class="relative top-[-90px] flex flex-col items-center">
                                    <span class="text-[#324A0A] font-medium text-base">{{ $items->type }}</span>
                                    <div class="w-full flex justify-center my-2">
                                        <div class="w-[100px] h-[2px] bg-[#DDCC81]"></div>
                                    </div>

                                    <p class="text-[#EF0104] text-xl font-bold">
                                        ${{ number_format($items->price, 2) }}
                                    </p>
                                    <p class="text-[#324A0A] text-sm font-medium">{{ $items->capacity }}KG</p>

                                    {{-- <button class="btn-buy-now mt-3 hover:scale-110 transition-transform" id="btn-buy-now">
                                        <img src="{{ asset('frontend/assets/imges/quotation_request.png') }}"
                                            alt="Buy Now Button" class="w-[140px] h-auto">
                                    </button> --}}
                                   <button type="button"
                                        class="btn-buy-now mt-3 hover:scale-110 transition-transform"
                                        @click="$dispatch('add-product', {
                                            name: '{{ $items->name }}',
                                            capacity: '{{ $items->capacity }}'
                                        })">

                                        <img src="{{ asset('frontend/assets/imges/quotation_request.png') }}"
                                            alt="Quotation Request Button"
                                            class="w-[140px] h-auto">
                                    </button>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <div class="grid grid-cols-1 gap-y-15">
        {{-- Section: International Destination--}}
        <section class="relative w-full xl:hidden block">
            <!-- Background Image -->
            <div class="relative w-full h-full">
                <img src="{{ app()->getLocale() == 'en' ? asset('assets/image/bg-national-text.svg') : asset('assets/image/bg-nation-txt_km.svg') }}" alt="Background Image"
                    class="w-full h-full object-cover">
            </div>
        </section>
        <section class="relative w-full xl:block hidden">
            <!-- Background Image -->
            <div class="relative w-full h-full">
                <img src="{{ app()->getLocale() == 'en' ? asset('assets/image/bg-national.svg') : asset('assets/image/bg-nation-not-txt_km.svg') }}" alt="Background Image"
                    class="w-full h-full object-cover">
                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center text-white px-6 overflow-y-auto text-center">

                    <!-- Destination Details -->
                    <div class="relative right-[450px] top-[300px] max-w-xl space-y-2 mb-10 text-left justify-start items-start"
                        data-aos="fade-right" data-aos-duration="1500">
                        <p class="text-[#D6B157] text-[14px] font-semibold">{{ app()->getLocale() == 'en' ? 'International Destination' : 'គោលដៅអន្តរជាតិ' }}</p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold"> {{ app()->getLocale() == 'en' ? 'Europe:' : 'ទ្វីបអឺរ៉ុប៖' }}</strong>
                            <span class="text-[#1E1E1E] text-[14px]"> 
                                 {{ app()->getLocale() == 'en' ? 'Germany, Sweden, France, United Kingdom, Italy, Switzerland, Hungary, Lithuania, The Netherlands, Poland, Norway, Reunion Island, etc.' 
                                 : 'អាល្លឺម៉ង់ ស៊ុយអែត បារាំង ចក្រភពអង់គ្លេស អ៊ីតាលី ស្វីស ហុងគ្រី លីទុយអានី ហូឡង់ ប៉ូឡូញ ន័រវែស កោះរ៉េអ៊ុយនីញ៉ុង ជាដើម។' }}
                            </span>
                        </p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">
                                 {{ app()->getLocale() == 'en' ? 'Asian Market:' : 'ទ្វីបអាស៊ី៖ ' }}
                            </strong>
                            <span class="text-[#1E1E1E] text-[14px]">
                                 {{ app()->getLocale() == 'en' ? 'China, Hong Kong SAR, Singapore, Malaysia, Thailand, Vietnam, etc.' : 'ចិន ហុងកុង សិង្ហបុរី ម៉ាឡេស៊ី ថៃ វៀតណាម ជាដើម។' }}
                            </span>
                        </p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">
                                 {{ app()->getLocale() == 'en' ? 'Oceanian Markets:' : 'ទ្វីបអូស្ត្រាលី៖ ' }}
                            </strong>
                            <span class="text-[#1E1E1E] text-[14px]">
                                 {{ app()->getLocale() == 'en' ? 'Australia, New Zealand, Republic of Maldives, etc.' : 'អូស្ត្រាលី នូវែលសេឡង់ សាធារណរដ្ឋម៉ាល់ឌីវ ជាដើម។' }}</span><br>
                            <span class="text-[#1E1E1E] text-[14px]"> {{ app()->getLocale() == 'en' ? 'Middle East: Israel, United Arab Emirates, etc.' : 'តំបន់មជ្ឈិមបូព៌ា៖ អ៉ីស្រាអែល អារ៉ាប់រួម ជាដើម។' }}</span>
                        </p>

                        <p><strong class="text-[#D6B157] text-[14px] font-semibold"> {{ app()->getLocale() == 'en' ? 'Other' : 'ផ្សេងៗ' }}</strong></p>
                        <p class="text-[#1E1E1E] text-[14px]">
                             {{ app()->getLocale() == 'en' ? 'Russian Federation' : 'សហព័ន្ធរុស្ស៊ី' }}
                        </p>
                    </div>

                    <!-- Why Partner With Us -->
                    <div class="relative top-64 max-w-6xl mx-auto w-full" data-aos="fade-left" data-aos-duration="1500">
                        <h2 class="text-3xl font-bold mb-6 text-[#4DA358]">
                             {{ app()->getLocale() == 'en' ? 'Why Partner With Us?' : 'ហេតុអ្វីបានជាត្រូវសហការជាមួយក្រុមហ៊ុនយើងខ្ញុំ?' }}
                        </h2>

                        <div class="relative top-32 text-left">
                            <!-- Icon Block 1 -->
                            <div class=" flex flex-wrap justify-center items-start gap-10 mb-10">
                                <div class="w-80">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('assets/image/icon/1.svg') }}" class="mx-auto mb-3" alt="">
                                    </div>
                                    <h2 class="text-xl font-semibold text-[#324A0A]">
                                         {{ app()->getLocale() == 'en' ? 'Letter of Credit (LC) Expertise' : 'មានលិខិតធានាការទូទាត់ (LC)' }}
                                    </h2>
                                    <span class="text-sm block mt-2 text-[#1E1E1E]">
                                        {{ app()->getLocale() == 'en' ? 'With decades of export experience, we handle LC transactions with accuracy
                                        and efficiency—ensuring smooth documentation, full compliance, and timely shipments.' 
                                        : 'យើងខ្ញុំមានបទពិសោធន៍នាំចេញរាប់ទសវត្សរ៍ដោយមាននូវលិខិតធានាការទូទាត់លើការដោះស្រាយបញ្ហាប្រតិបត្តិការទិញលក់ប្រកបដោយភាពត្រឹមត្រូវ និងប្រសិទ្ធភាព — ធានាបាននូវការរត់ឯកសារដោយរលូន ការអនុលោមពេញលេញ និងការដឹកជញ្ជូនទាន់ពេលវេលា។' }}
                                    </span>
                                </div>

                                <div class="w-80">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('assets/image/icon/2.svg') }}" class="mx-auto mb-3" alt="">
                                    </div>

                                    <h2 class="text-xl font-semibold text-[#324A0A]">
                                        {{ app()->getLocale() == 'en' ? 'Lower Tariff Export Advantage' : 'អត្ថប្រយោជន៍នាំចេញក្នុងអត្រាពន្ធទាប' }}
                                    </h2>
                                    <span class="text-sm block mt-2 text-[#1E1E1E]">
                                       {{ app()->getLocale() == 'en' ? ' We help partners access lower or preferential export tariffs,
                                        reducing costs and strengthening your competitive in the regional markets. ' : 'យើងខ្ញុំជួយដៃគូទទួលបានពន្ធនាំចេញទាប ឬអនុគ្រោះ កាត់បន្ថយថ្លៃដើម និងពង្រឹងភាពប្រកួតប្រជែងរបស់អ្នកនៅក្នុងទីផ្សារក្នុងតំបន់។ 
' }}
                                    </span>
                                </div>

                                <div class="w-80">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('assets/image/icon/3.svg') }}" class="mx-auto mb-3" alt="">
                                    </div>

                                    <h2 class="text-xl font-semibold text-[#324A0A]">
                                        {{ app()->getLocale() == 'en' ? 'Decades of Export Experience' : 'បទពិសោធន៍នាំចេញរាប់ទសវត្សរ៍' }}
                                    </h2>
                                    <span class="text-sm block mt-2 text-[#1E1E1E]">
                                        {{ app()->getLocale() == 'en' ? 'With over 30 years of experience since 1994, we offer deep industry expertise and a
                                        proven track record of
                                        exporting to Europe and global markets—ensuring reliability, stability, and
                                        professional service.' : 'យើងខ្ញុំបទពិសោធន៍ជាង 30 ឆ្នាំចាប់តាំងពីឆ្នាំ 1994 ផ្តល់ជូននូវជំនាញនាំចេញនៅក្នុងវិស័យនេះយ៉ាងមុតមាំ ស្តែង ឃើញនូវលទ្ធផលនៃការនាំចេញទៅកាន់ទីផ្សារអឺរ៉ុប និងទីផ្សារសកល — ធានានូវភាពជឿជាក់ ស្ថិរភាព និងការផ្តល់សេវាកម្មប្រកបដោយវិជ្ជាជីវៈ។' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Icon Block 2 -->
                            <div class="relative top-12 flex flex-wrap justify-center items-start gap-10">
                                <div class="w-80">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('assets/image/icon/4.svg') }}" alt="">
                                    </div>

                                    <h2 class="text-xl font-semibold text-[#324A0A]">
                                        {{ app()->getLocale() == 'en' ? 'Capable Production Output' : 'សមត្ថភាពក្នុងការផលិត' }}
                                    </h2>
                                    <span class="text-sm block mt-2 text-[#1E1E1E]">
                                        {{ app()->getLocale() == 'en' ? 'With advanced machinery, we can meet any production volume—scaling smoothly from
                                        small batches to large orders.' : 'ជាមួយនឹងគ្រឿងចក្រទំនើបៗរោងចក្រកិនស្រូវរបស់យើងខ្ញ៉ំអាចបំពេញតាមបរិមាណផលិតកម្មបញ្ជាទិញចាប់តាំងពីការបញ្ជាទិញក្នុងបរិមាណតិចរហូតដល់បរិមាណធំ។' }}
                                    </span>
                                </div>

                                <div class="w-80">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('assets/image/icon/5.svg') }}" class="mx-auto mb-3" alt="">
                                    </div>

                                    <h2 class="text-xl font-semibold text-[#324A0A]">
                                        {{ app()->getLocale() == 'en' ? 'FDA Approval & Certified Quality' : 'ការអនុម័ត និងគុណភាពដែលមានការបញ្ជាក់ដោយរដ្ឋបាលចំណីអាហារ និងឱសថសហរដ្ឋអាមេរិក' }}
                                    </h2>
                                    <span class="text-sm block mt-2 text-[#1E1E1E]">
                                        {{ app()->getLocale() == 'en' ? 'Our rice is FDA-approved and certified to
                                        international standards, ensuring trusted quality, safety, and compliance in every
                                        shipment.' : 'អង្កររបស់យើងខ្ញ៉ំត្រូវបានអនុម័តដោយរដ្ឋបាលចំណីអាហារ និងឱសថសហរដ្ឋអាមេរិក អនុលោមតាមស្តង់ដាអន្តរជាតិ ដោយធានាបាននូវគុណភាព សុវត្ថិភាព និងទំនុកចិត្តនៅក្នុងរាល់ការដឹកជញ្ជូន។' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Section: Input Information --}}
        <section class="flex justify-center items-center bg-white px-4" id="enquiry-form">
            <div class="">
                <form action="" class="space-y-2" x-data="productSelector()" @submit.prevent="submitForm()" id="myForm">
                    @csrf
                    <div class="flex flex-col md:flex-row justify-center space-x-0 md:space-x-8">
                        <div class="space-y-2">
                            <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">
                                {{ app()->getLocale() == 'en' ? 'Enquiry Form' : 'ទម្រង់បែបបទបំពេញព័ត៌មាន' }}
                            </h2>
                            <input type="text" placeholder="{{ app()->getLocale() == 'en' ? 'Name' : 'ឈ្មោះ' }}" name="name" required
                                class="w-full lg:w-[96%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
                            <input type="text" placeholder="{{ app()->getLocale() == 'en' ? 'Company Name' : 'ក្រុមហ៊ុន' }}" name="company_name" required
                                class="w-full lg:w-[96%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
                            <div class="relative custom-select-container">
                                <input id="customer-country" list="country-list" name="country" placeholder="{{ app()->getLocale() == 'en' ? 'Country' : 'ប្រទេស' }}"
                                    required
                                    class="w-full lg:w-[96%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                <datalist id="country-list" name="country" required
                                    class="h-14 px-6 pr-12 rounded-full bg-[#F1F1F1] text-[#03254B] outline-none appearance-none">
                                    {{-- <option>Country of Origin</option> --}}
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="USA">USA</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                   
                                </datalist>
                                <span class="absolute right-6 top-1/2 -translate-y-1/2">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none">
                                        <path
                                            d="M10.5 4.60096C11.8333 5.37076 11.8333 7.29526 10.5 8.06506L3 12.3952C1.66666 13.165 0 12.2027 0 10.6631L0 2.00288C0 0.463276 1.66667 -0.498971 3 0.27083L10.5 4.60096Z"
                                            fill="#cb9f10" />
                                    </svg>
                                </span>
                            </div>
                            <input type="email" placeholder="{{ app()->getLocale() == 'en' ? 'Email' : 'អ៊ីម៉ែល ' }}" name="email" required
                                class="w-full lg:w-[96%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
                            <div class="flex md:flex-row items-center space-x-2">
                                <select id="country_code" name="country_code"
                                    class="form-select w-[50%] px-4 md:w-[30%] rounded-md bg-[#FFF9E6] h-[55px] text-gray-700 placeholder-gray-600" required>
                                    <option value="">{{ app()->getLocale() == 'en' ? 'Country Code' : 'លេខកូដប្រទេស' }}</option>
                                    <option value="+93">Afghanistan (+93)</option>
                                    <option value="+355">Albania (+355)</option>
                                    <option value="+213">Algeria (+213)</option>
                                    <option value="+376">Andorra (+376)</option>
                                    <option value="+244">Angola (+244)</option>
                                    <option value="+54">Argentina (+54)</option>
                                    <option value="+374">Armenia (+374)</option>
                                    <option value="+61">Australia (+61)</option>
                                    <option value="+43">Austria (+43)</option>
                                    <option value="+994">Azerbaijan (+994)</option>
                                    <option value="+973">Bahrain (+973)</option>
                                    <option value="+880">Bangladesh (+880)</option>
                                    <option value="+375">Belarus (+375)</option>
                                    <option value="+32">Belgium (+32)</option>
                                    <option value="+501">Belize (+501)</option>
                                    <option value="+229">Benin (+229)</option>
                                    <option value="+975">Bhutan (+975)</option>
                                    <option value="+591">Bolivia (+591)</option>
                                    <option value="+387">Bosnia and Herzegovina (+387)</option>
                                    <option value="+267">Botswana (+267)</option>
                                    <option value="+55">Brazil (+55)</option>
                                    <option value="+673">Brunei (+673)</option>
                                    <option value="+359">Bulgaria (+359)</option>
                                    <option value="+226">Burkina Faso (+226)</option>
                                    <option value="+257">Burundi (+257)</option>
                                    <option value="+855">Cambodia (+855)</option>
                                    <option value="+237">Cameroon (+237)</option>
                                    <option value="+1">Canada (+1)</option>
                                    <option value="+238">Cape Verde (+238)</option>
                                    <option value="+236">Central African Republic (+236)</option>
                                    <option value="+235">Chad (+235)</option>
                                    <option value="+56">Chile (+56)</option>
                                    <option value="+86">China (+86)</option>
                                    <option value="+57">Colombia (+57)</option>
                                    <option value="+269">Comoros (+269)</option>
                                    <option value="+242">Congo (+242)</option>
                                    <option value="+506">Costa Rica (+506)</option>
                                    <option value="+385">Croatia (+385)</option>
                                    <option value="+53">Cuba (+53)</option>
                                    <option value="+357">Cyprus (+357)</option>
                                    <option value="+420">Czech Republic (+420)</option>
                                    <option value="+45">Denmark (+45)</option>
                                    <option value="+253">Djibouti (+253)</option>
                                    <option value="+593">Ecuador (+593)</option>
                                    <option value="+20">Egypt (+20)</option>
                                    <option value="+503">El Salvador (+503)</option>
                                    <option value="+240">Equatorial Guinea (+240)</option>
                                    <option value="+291">Eritrea (+291)</option>
                                    <option value="+372">Estonia (+372)</option>
                                    <option value="+251">Ethiopia (+251)</option>
                                    <option value="+358">Finland (+358)</option>
                                    <option value="+33">France (+33)</option>
                                    <option value="+995">Georgia (+995)</option>
                                    <option value="+49">Germany (+49)</option>
                                    <option value="+233">Ghana (+233)</option>
                                    <option value="+30">Greece (+30)</option>
                                    <option value="+502">Guatemala (+502)</option>
                                    <option value="+852">Hong Kong (+852)</option>
                                    <option value="+36">Hungary (+36)</option>
                                    <option value="+354">Iceland (+354)</option>
                                    <option value="+91">India (+91)</option>
                                    <option value="+62">Indonesia (+62)</option>
                                    <option value="+98">Iran (+98)</option>
                                    <option value="+964">Iraq (+964)</option>
                                    <option value="+353">Ireland (+353)</option>
                                    <option value="+972">Israel (+972)</option>
                                    <option value="+39">Italy (+39)</option>
                                    <option value="+81">Japan (+81)</option>
                                    <option value="+962">Jordan (+962)</option>
                                    <option value="+7">Kazakhstan (+7)</option>
                                    <option value="+254">Kenya (+254)</option>
                                    <option value="+82">Korea, South (+82)</option>
                                    <option value="+965">Kuwait (+965)</option>
                                    <option value="+856">Laos (+856)</option>
                                    <option value="+371">Latvia (+371)</option>
                                    <option value="+961">Lebanon (+961)</option>
                                    <option value="+370">Lithuania (+370)</option>
                                    <option value="+60">Malaysia (+60)</option>
                                    <option value="+960">Maldives (+960)</option>
                                    <option value="+52">Mexico (+52)</option>
                                    <option value="+95">Myanmar (+95)</option>
                                    <option value="+31">Netherlands (+31)</option>
                                    <option value="+64">New Zealand (+64)</option>
                                    <option value="+234">Nigeria (+234)</option>
                                    <option value="+47">Norway (+47)</option>
                                    <option value="+92">Pakistan (+92)</option>
                                    <option value="+63">Philippines (+63)</option>
                                    <option value="+48">Poland (+48)</option>
                                    <option value="+351">Portugal (+351)</option>
                                    <option value="+974">Qatar (+974)</option>
                                    <option value="+40">Romania (+40)</option>
                                    <option value="+7">Russia (+7)</option>
                                    <option value="+966">Saudi Arabia (+966)</option>
                                    <option value="+65">Singapore (+65)</option>
                                    <option value="+421">Slovakia (+421)</option>
                                    <option value="+386">Slovenia (+386)</option>
                                    <option value="+27">South Africa (+27)</option>
                                    <option value="+34">Spain (+34)</option>
                                    <option value="+94">Sri Lanka (+94)</option>
                                    <option value="+46">Sweden (+46)</option>
                                    <option value="+41">Switzerland (+41)</option>
                                    <option value="+66">Thailand (+66)</option>
                                    <option value="+90">Turkey (+90)</option>
                                    <option value="+380">Ukraine (+380)</option>
                                    <option value="+971">United Arab Emirates (+971)</option>
                                    <option value="+44">United Kingdom (+44)</option>
                                    <option value="+1">United States (+1)</option>
                                    <option value="+598">Uruguay (+598)</option>
                                    <option value="+998">Uzbekistan (+998)</option>
                                    <option value="+84">Vietnam (+84)</option>
                                    <option value="+263">Zimbabwe (+263)</option>
                                </select>
                                <input type="text" placeholder="{{ app()->getLocale() == 'en' ? 'Phone Number' : ' លេខទូរស័ព្ទ' }}" name="phone" required
                                    class="w-full lg:w-[65%] h-[55px] px-5 rounded-md text-gray-700 placeholder-gray-600  bg-[#FFF9E6] focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">{{ app()->getLocale() == 'en' ? 'Product Enquiry' : 'ផលិតផល' }}</h2>
                            <!-- Product Multi Select -->
                            <div class="relative w-full lg:w-[99%]">

                                <!-- Dropdown Button -->
                                <div @click="open = !open" class="bg-[#FFF9E6] px-3 py-2 h-auto  min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                                    flex flex-wrap items-center gap-2 justify-between">

                                    <!-- Tags or Placeholder -->
                                    <div class="flex flex-wrap items-center gap-1 flex-1">
                                        <template x-if="products.length === 0">
                                            <span class="text-gray-500 ml-2">
                                                {{ app()->getLocale() == 'en' ? 'Products' : 'ផលិតផល' }}
                                            </span>
                                        </template>

                                         <template x-for="(product, index) in products" :key="index">
                                            <div class="flex items-center bg-[#DDCC81] text-[#324A0A] px-2 py-1 rounded-full text-sm">
                                                <span x-text="product.name + ' - ' + product.capacity + 'KG'"></span>

                                                <button type="button"
                                                    class="ml-2"
                                                    @click.stop="products.splice(index,1)">
                                                    ✕
                                                </button>
                                            </div>
                                        </template>
                                    </div>

                                    <!-- Dropdown Icon -->
                                    <svg x-bind:class="open ? 'rotate-180' : ''"
                                        class="w-5 h-5 text-gray-600 transition-transform duration-300 ml-2" fill="none"
                                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>

                                <!-- Dropdown List -->
                                <div x-show="open" @click.outside="open=false"
                                    class="absolute z-50 bg-white border rounded-md w-full mt-1 max-h-48 overflow-y-auto shadow">

                                    @foreach($showExport as $item)
                                        <label class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100">
                                            <input type="checkbox"
                                                @change="toggleProduct('{{ $item->name }}', '{{ $item->capacity }}')">
                                            <span>{{ $item->name }} - {{ $item->capacity }}KG</span>
                                        </label>
                                    @endforeach
                                </div>

                                <!-- Hidden input to submit -->
                                <input type="hidden" class="form-input" id="input-name" name="products"
                                    :value="selected.join(', ')">
                                <input type="hidden" name="products_data"
                                    :value="JSON.stringify(products)">
                                <div class="mt-4 space-y-3">

                                    <!-- Show only if products exist -->
                                  <div class="bg-[#FFF9E6] p-4 cursor-pointer rounded-md"
                                        @click="if(products.length === 0){ alert('Please select product first') }">

                                        <h3 class="bg-[#FFF9E6] px-2 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                            {{ app()->getLocale() == 'en' ? 'Quantity (KG)' : 'បរិមាណ (គីឡូ)' }}
                                        </h3>
                                    </div>

                                    <template x-for="(product, index) in products" :key="index">
                                        <div class="bg-[#FFF9E6] p-3 rounded-md border">

                                            <div class="flex justify-between items-center">
                                                <span class="font-semibold text-[#324A0A]">
                                                    <span x-text="product.name"></span>
                                                    (<span x-text="product.capacity"></span> KG)
                                                </span>
                                            </div>

                                            <div class="flex items-center gap-3 mt-2">
                                                <button type="button"
                                                    @click="decrease(index)"
                                                    class="bg-[#decd81] px-3 py-1 rounded">-</button>

                                                <span x-text="product.quantity"
                                                    class="font-bold text-lg text-[#324A0A]"></span>

                                                <button type="button"
                                                    @click="increase(index)"
                                                    class="bg-[#decd81] px-3 py-1 rounded">+</button>
                                            </div>

                                        </div>
                                    </template>

                                </div>


                            </div>
                            {{-- <input type="number" id="input-quantity" placeholder="{{ app()->getLocale() == 'en' ? 'Quantity (KG)' : 'បរិមាណ (គីឡូ)' }}" name="input-quantity" min="1"
                                class="form-input h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"/> --}}
                           
                            <div x-data="{
                                    open: false,
                                    items: ['Plastic Bag', 'Laminated PP', 'BOPP', 'Normal PP'],
                                    selected: []
                                }" class="relative w-full">

                                <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">{{ app()->getLocale() == 'en' ? 'Bag Type' : 'ប្រភេទវេចខ្ចប់ ' }}</h2>

                                <!-- Dropdown Button -->
                                <div @click="open = !open"
                                        class="bg-[#FFF9E6] px-3 py-2 w-full lg:w-[32rem] min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                                            flex flex-wrap items-center gap-2 justify-between" >

                                        <!-- Tags or Placeholder -->
                                        <div class="flex flex-wrap items-center gap-1 flex-1">

                                            <!-- Placeholder -->
                                            <template x-if="selected.length === 0">
                                                <span class="text-gray-500">{{ app()->getLocale() == 'en' ? 'Select Bag Types' : 'ជ្រើសរើសប្រភេទវេចខ្ចប់ ' }}</span>
                                            </template>

                                            <!-- Selected Tags -->
                                            <template x-for="(item, index) in selected" :key="index">
                                                <div class="flex items-center bg-[#DDCC81] text-[#324A0A] px-2 py-1 rounded-full text-sm">
                                                    <span x-text="item"></span>

                                                    <!-- X Button -->
                                                    <button type="button" class="ml-1"
                                                            @click.stop="selected.splice(index, 1)">
                                                        <svg class="w-3 h-3 text-[#324A0A]" fill="none" stroke="currentColor"
                                                            stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </template>
                                        </div>

                                        <!-- Dropdown Icon -->
                                        <svg x-bind:class="open ? 'rotate-180' : ''"
                                            class="w-5 h-5 text-gray-600 transition-transform duration-300 ml-2"
                                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                </div>

                                <!-- Dropdown List -->
                                <div x-show="open" @click.outside="open = false"
                                    class="absolute z-50 bg-white border rounded-md w-full mt-1 max-h-48 overflow-y-auto shadow">

                                    <template x-for="(item, index) in items" :key="index">
                                        <label class="flex items-center gap-2 p-2 cursor-pointer hover:bg-gray-100">

                                            <!-- Checkbox -->
                                            <input type="checkbox"
                                                :value="item"
                                                @change="
                                                        if ($event.target.checked) {
                                                            selected.push(item)
                                                        } else {
                                                            selected = selected.filter(v => v !== item)
                                                        }
                                                        open = false
                                                "
                                                :checked="selected.includes(item)">

                                            <span x-text="item"></span>
                                        </label>
                                    </template>
                                </div>

                                <!-- Hidden input for form submit -->
                                <input type="hidden" name="bag_types" :value="selected.join(',')">
                            </div>


                        </div>
                    </div>
                    <div class="space-y-2">
                        <input type="text" placeholder="{{ app()->getLocale() == 'en' ? 'Address' : 'អាសយដ្ឋាន ' }}" name="address" required
                            class="w-full h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"/>
                        <textarea name="message" id="message" rows="4" placeholder="{{ app()->getLocale() == 'en' ? 'Message' : 'សារ' }}" required class="py-2 w-full h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                    </div>
                    <div class="flex justify-center items-center">    
                        <button type="submit" class="cursor-pointer" onclick="submitAndRefresh()" >
                             <img src="{{ app()->getLocale() == 'en' ? asset('assets/logo/btn-submit.png') : asset('assets/logo/btn-submit-km.svg') }}" alt="" class="w-64 h-40 object-contain">
                        </button>
                    </div>
                </form>
            </div>
        </section>
        @section('section_footer')
            {{-- Section: Footer --}}
            <section class="relative top-[20px]">
                @include('frontend.footer')
            </section>
        @endsection
    </div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
function productSelector() {
    return {
        open: false,
        products: [],

        init() {
            window.addEventListener('add-product', (event) => {
                let name = event.detail.name
                let capacity = parseInt(event.detail.capacity)

                // check if already exists
                let existing = this.products.find(p => p.name === name)

                if (!existing) {
                    this.products.push({
                        name: name,
                        capacity: capacity,
                        quantity: capacity
                    })
                } else {
                    existing.quantity += existing.capacity
                }

                // Scroll to form smoothly
                document.getElementById('enquiry-form')
                    .scrollIntoView({ behavior: 'smooth' })
            })
        },

        toggleProduct(name, capacity) {
            capacity = parseInt(capacity)

            let existing = this.products.find(p => p.name === name)

            if (!existing) {
                this.products.push({
                    name: name,
                    capacity: capacity,
                    quantity: capacity
                })
            } else {
                this.products = this.products.filter(p => p.name !== name)
            }
        },

        increase(index) {
            this.products[index].quantity += this.products[index].capacity
        },

        decrease(index) {
            if (this.products[index].quantity > this.products[index].capacity) {
                this.products[index].quantity -= this.products[index].capacity
            }
        },

        submitForm() {
            if(this.products.length === 0){
                alert("Please select at least one product")
                return
            }

            let name = document.querySelector('[name="name"]').value
            let company = document.querySelector('[name="company_name"]').value
            let email = document.querySelector('[name="email"]').value
            let address = document.querySelector('[name="address"]').value
            let country = document.querySelector('[name="country"]').value
            let countryCode = document.querySelector('[name="country_code"]').value
            let phone = document.querySelector('[name="phone"]').value
            let bagTypes = document.querySelector('[name="bag_types"]').value
            let userMessage = document.querySelector('[name="message"]').value

            let productText = ""

            this.products.forEach(p => {
                productText += `${p.name} (${p.capacity}KG) - Quantity: ${p.quantity}KG`
            })

            let message =
`New Enquiry:

Name: ${name}
Company: ${company}
Email: ${email}
Phone: ${countryCode} ${phone}
Country: ${country}
Address: ${address}
Bag Types: ${bagTypes}

Customer Message:
${userMessage}

Products:
${productText}`

            let encoded = encodeURIComponent(message)

            let telegramUrl = `https://t.me/+85587686768?text=${encoded}`

            window.open(telegramUrl, "_blank")
        }
    }
}

</script>



<script>
    const countrySelect = new Choices('#country-select', {
        searchEnabled: true,      // Allows user to input text
        itemSelectText: '',       // Removes the "Press to select" text
        shouldSort: true,         // Automatically sorts A to Z
        searchPlaceholderValue: "Type a country...",
    });
</script>

<script>
document.getElementById("myForm").addEventListener("submit", function(e) {
    e.preventDefault();

    fetch(this.action, {
        method: "POST",
        body: new FormData(this),
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => {
        location.reload();
    });
});
</script>


@endsection


 {{-- <input type="number" id="input-price" placeholder="Price" name="price"
                                class="form-input w-full lg:w-[99%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"readonly/> --}}