@extends('frontend.header')
@section('title', 'Export')
@section('background-image', asset('frontend/assets/imges/eport.png'))
@section('rice-background', asset('frontend/assets/imges/rice-background.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', 'Export')

@section('section_content')

    {{-- Section prodcut for selling --}}
    <section class="section-product relative top-[50px]">
        <div class="inset-0 flex flex-col justify-center items-center text-center px-6" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="relative top-0 md:-top-14 md:py-0 py-4 text-3xl md:text-5xl font-extrabold text-[#4DA358] mb-6 tracking-wide drop-shadow-lg">
                For Export
            </h2>
        </div>

        <!-- make sure Alpine is loaded in your layout -->
        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

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
                                    <p class="text-[#324A0A] text-sm font-medium">{{ $items->capacity }}</p>

                                    {{-- <button class="btn-buy-now mt-3 hover:scale-110 transition-transform" id="btn-buy-now">
                                        <img src="{{ asset('frontend/assets/imges/quotation_request.png') }}"
                                            alt="Buy Now Button" class="w-[140px] h-auto">
                                    </button> --}}
                                    <button class="btn-buy-now mt-3 hover:scale-110 transition-transform"
                                        data-name="{{ $items->name }}" data-type="{{ $items->type }}"
                                        data-price="{{ $items->price }}" data-capacity="{{ $items->capacity }}">
                                        <img src="{{ asset('frontend/assets/imges/quotation_request.png') }}"
                                            alt="Quotation Request Button" class="w-[140px] h-auto">
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
                <img src="{{ asset('frontend/assets/imges/international.png') }}" alt="Background Image"
                    class="w-full h-full object-cover">
            </div>
        </section>
        <section class="relative w-full xl:block hidden">
            <!-- Background Image -->
            <div class="relative w-full h-full">
                <img src="{{ asset('assets/image/bg-national.svg') }}" alt="Background Image"
                    class="w-full h-full object-cover">
                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center text-white px-6 overflow-y-auto text-center">

                    <!-- Destination Details -->
                    <div
                        class="relative right-[450px] top-[200px] max-w-4xl space-y-2 mb-10 text-left justify-start items-start" data-aos="fade-right" data-aos-duration="1500">
                        <p class="text-[#D6B157] text-[14px] font-semibold">International Destination</p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">Europe:</strong>
                            <span class="text-[#1E1E1E] text-[14px]"> Germany, Sweden, France, United Kingdom, Italy, <br>
                                Switzerland,
                                Hungary, Lithuania, The Netherlands, Poland, Norway, <br> Reunion Island, etc.</span>
                        </p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">Asian Market:</strong>
                            <span class="text-[#1E1E1E] text-[14px]">China, Hong Kong SAR, Singapore, Malaysia, Thailand,
                                <br> Vietnam,
                                etc.</span>
                        </p>

                        <p>
                            <strong class="text-[#D6B157] text-[14px] font-semibold">Oceanian Markets:</strong>
                            <span class="text-[#1E1E1E] text-[14px]">Australia, New Zealand, Republic of Maldives,
                                etc.</span><br>
                            <span class="text-[#1E1E1E] text-[14px]">Middle East: Israel, United Arab Emirates, etc.</span>
                        </p>

                        <p><strong class="text-[#D6B157] text-[14px] font-semibold">Other</strong></p>
                        <p class="text-[#1E1E1E] text-[14px]">Russian Federation</p>
                    </div>

                    <!-- Why Partner With Us -->
                    <div class="relative top-64 max-w-6xl mx-auto w-full" data-aos="fade-left" data-aos-duration="1500">
                        <h2 class="text-3xl font-bold mb-6 text-[#4DA358]">Why Partner With Us?</h2>

                       <div class="relative top-32 text-left">
                         <!-- Icon Block 1 -->
                        <div class=" flex flex-wrap justify-center items-start gap-10 mb-10">
                            <div class="w-80">
                                <div class="flex justify-center">
                                    <img src="{{ asset('assets/image/icon/1.svg') }}" class="mx-auto mb-3" alt="">
                                </div>
                                <h2 class="text-xl font-semibold text-[#324A0A]">Letter of Credit (LC) Expertise</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    With decades of export experience, we handle LC transactions with accuracy 
                                    and efficiency—ensuring smooth documentation, full compliance, and timely shipments.
                                </span>
                            </div>

                            <div class="w-80">
                                <div class="flex justify-center">
                                     <img src="{{ asset('assets/image/icon/2.svg') }}" class="mx-auto mb-3" alt="">
                                </div>
                               
                                <h2 class="text-xl font-semibold text-[#324A0A]">Lower Tariff Export Advantage</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    We help partners access lower or preferential export tariffs, 
                                    reducing costs and strengthening your competitiveness in Cambodia and regional markets.
                                </span>
                            </div>

                            <div class="w-80">
                                <div class="flex justify-center">
                                    <img src="{{ asset('assets/image/icon/3.svg') }}" class="mx-auto mb-3" alt="">
                                </div>
                                
                                <h2 class="text-xl font-semibold text-[#324A0A]">Decades of Export Experience</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    With over 30 years of experience since 1995, we offer deep industry expertise and a proven track record of 
                                    exporting to Europe and global markets—ensuring reliability, stability, and professional service.
                                </span>
                            </div>
                        </div>

                        <!-- Icon Block 2 -->
                        <div class="relative top-12 flex flex-wrap justify-center items-start gap-10">
                            <div class="w-80">
                                <div class="flex justify-center">
                                    <img src="{{ asset('assets/image/icon/4.svg') }}" alt="">
                                </div>
                                
                                <h2 class="text-xl font-semibold text-[#324A0A]">Capable Production Output</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    With advanced machinery, we can meet any production volume—scaling smoothly from small batches to large orders.
                                </span>
                            </div>

                            <div class="w-80">
                                <div class="flex justify-center">
                                    <img src="{{ asset('assets/image/icon/5.svg') }}" class="mx-auto mb-3" alt="">
                                </div>
                                
                                <h2 class="text-xl font-semibold text-[#324A0A]">FDA Approval & Certified Quality</h2>
                                <span class="text-sm block mt-2 text-[#1E1E1E]">
                                    Our rice is FDA-approved and certified to 
                                    international standards, ensuring trusted quality, safety, and compliance in every shipment.
                                </span>
                            </div>
                        </div>
                       </div>
                    </div>
                </div> 

            </div>
        </section>

        {{-- Section: Input Information --}}
        <section class="flex justify-center bg-white py-[70px] px-4" id="section-products">
            <div class="flex flex-col lg:flex-row justify-between w-full max-w-[1200px] h-auto gap-8 lg:gap-4 pt-10 pb-10"
                style="padding-left: 70px; padding-right: 70px;">
                <div class="w-full lg:w-[25%] flex flex-col items-center p-4">
                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Enquiry Form</h2>
                    <form class="flex flex-col gap-4 items-center w-full">
                        <input type="text" placeholder="Name"
                            class="w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <input type="text" placeholder="Company Name "
                            class="w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <input type="text" placeholder="Email"
                            class="w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
                        <div class="relative custom-select-container">
                                <input id="customer-country" list="country-list" name="country" placeholder="Country" required
                                class="w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                <datalist id="country-list" name="country" required
                                        class="w-full h-14 px-6 pr-12 rounded-full bg-[#F1F1F1] text-[#03254B] outline-none appearance-none">
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
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
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
                    </form>
                </div>

                <div class="w-full lg:w-[45%] flex flex-col items-center p-4">
                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Product Enquiry</h2>
                    <form class="flex flex-col gap-4 items-center w-full">
                        <input type="text" id="" placeholder="Name Product"
                            class="hidden form-input w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />
                        <!-- Product Multi Select -->
                        <div 
                            x-data="productSelector()" 
                            x-ref="productSelector"
                            class="relative w-80 lg:w-[90%]">

                            <!-- Dropdown Button -->
                            <div @click="open = !open" class="bg-[#FFF9E6] px-3 py-2 h-auto min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                            flex flex-wrap items-center gap-2 justify-between">

                                <!-- Tags or Placeholder -->
                                <div class="flex flex-wrap items-center gap-1 flex-1">
                                    <template x-if="selected.length === 0">
                                        <span class="text-gray-500">Products</span>
                                    </template>

                                    <template x-for="(item, index) in selected" :key="index">
                                        <div
                                            class="flex items-center bg-[#DDCC81] text-[#324A0A] px-2 py-1 rounded-full text-sm">
                                            <span x-text="item"></span>
                                            <button type="button" class="ml-1" 
                                                    @click.stop="
                                                        const parts = item.split('-');
                                                        removeProduct(parts[0], parts[1]);
                                                        selected.splice(index, 1);
                                                    ">
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
                                         value="{{ $item->name }}-{{ $item->capacity }}" @change="
                                        if ($event.target.checked) {
                                            selected.push($event.target.value);
                                        } else {
                                            selected = selected.filter(v => v !== $event.target.value);
                                        }
                                    " :checked="selected.includes('{{ $item->name }}-{{ $item->capacity }}')">
                                        <span>{{ $item->name }}-{{ $item->capacity }}</span>
                                    </label>
                                @endforeach
                            </div>

                            <!-- Hidden input to submit -->
                            <input type="hidden" class="form-input" id="input-name" name="products" :value="selected.join(', ')">

                        </div>

                        <input type="text" id="input-capacity" placeholder="Quantity(KG)"
                            class="form-input w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />

                        <input type="number" id="input-quantity" placeholder="Quantity(KG)"
                            class="hidden form-input w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400" />

                        <input type="text" id="input-price" placeholder="Price"
                            class="form-input w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400"
                            readonly />

                        <input type="text" id="input-total" placeholder="Total"
                        class="form-input w-80 lg:w-[90%] h-[55px] bg-[#FFF9E6] px-5 rounded-md"
                        readonly />

                          <div class="block lg:hidden w-80 flex flex-col justify-between items-center p-4">

                   <div x-data="{
                        open: false,
                        items: ['Plastic Bag', 'Laminated PP', 'BOPP', 'Normal PP'],
                        selected: []
                    }" class="relative w-full">

                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Bag Type</h2>

                    <!-- Dropdown Button -->
                    <div @click="open = !open"
                        class="bg-[#FFF9E6] px-3 py-2 min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                            flex flex-wrap items-center gap-2 justify-between">

                        <!-- Tags or Placeholder -->
                        <div class="flex flex-wrap items-center gap-1 flex-1">

                            <!-- Placeholder -->
                            <template x-if="selected.length === 0">
                                <span class="text-gray-500">Select Bag Types</span>
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


                {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}



                    
                </div>
                        <div class="w-full flex justify-center mt-6">
                        <button type="submit" id="btn-send-telegram" class="w-[90%] h-[55px] bg-gradient-to-r from-[#DDCC81] to-[#B8A34E] 
                                    text-[#324A0A] font-bold rounded-lg shadow-md 
                                    hover:shadow-lg hover:scale-105 transition-all duration-300">
                            Submit
                        </button>
                    </div>

                    </form>
                </div>

                <div class="lg:block hidden w-full lg:w-[35%] flex flex-col justify-between items-center p-4">

                   <div x-data="{
                        open: false,
                        items: ['Plastic Bag', 'Laminated PP', 'BOPP', 'Normal PP'],
                        selected: []
                    }" class="relative w-full">

                    <h2 class="text-[#4DA358] font-bold text-2xl mb-6 text-center">Bag Type</h2>

                    <!-- Dropdown Button -->
                    <div @click="open = !open"
                        class="bg-[#FFF9E6] px-3 py-2 min-h-[55px] rounded-md text-gray-700 cursor-pointer border border-gray-300
                            flex flex-wrap items-center gap-2 justify-between">

                        <!-- Tags or Placeholder -->
                        <div class="flex flex-wrap items-center gap-1 flex-1">

                            <!-- Placeholder -->
                            <template x-if="selected.length === 0">
                                <span class="text-gray-500">Select Bag Types</span>
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


                <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
                </div>

            </div>
        </section>
        @section('section_footer')
            {{-- Section: Footer --}}
            <section class="relative top-[20px]">
                @include('frontend.footer')
            </section>
        @endsection
    </div>
<script>
function productSelector() {
    return {
        open: false,
        selected: [],

        addProduct(product) {
            if (!this.selected.includes(product)) {
                this.selected.push(product);
            }
        }
    }
}
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    const priceInput      = document.getElementById("input-price");
    const totalInput      = document.getElementById("input-total");
    const qtyInput        = document.getElementById("input-quantity");
    const hiddenProducts  = document.querySelector("input[name='products']");
    const grandTotalInput = document.getElementById("input-grand-total");

    // ===============================
    // BUY NOW BUTTON
    // ===============================
   document.querySelectorAll('.btn-buy-now').forEach(button => {

    button.addEventListener('click', () => {

        // Scroll
        document.getElementById('section-products')
            .scrollIntoView({ behavior: 'smooth' });

        const name     = button.dataset.name;
        const price    = parseFloat(button.dataset.price) || 0;
        const capacity = button.dataset.capacity;

        const productLabel = `${name}-${capacity}`;

        // ==============================
        // Add to Alpine Multi Select UI
        // ==============================
        // const alpineComponent = document.querySelector('[x-ref="productSelector"]').__x.$data;
        // alpineComponent.addProduct(productLabel);
        const alpineEl = document.querySelector('[x-ref="productSelector"]');
if (alpineEl && alpineEl._x_dataStack) {
    alpineEl._x_dataStack[0].selected.push(productLabel);
}

        function productSelector() {
            return {
                open: false,
                selected: [],

                addProduct(product) {
                    if (!this.selected.includes(product)) {
                        this.selected.push(product);
                    }
                }
            }
        }


        // ==============================
        // Fill single preview fields
        // ==============================
        document.getElementById('input-name').value     = name;
        document.getElementById('input-capacity').value = capacity;
        document.getElementById('input-price').value    = "$" + formatNumber(price);

        qtyInput.value = 1;

        updateSingleTotal(price, 1);

        // ==============================
        // Add hidden product
        // ==============================
        addOrUpdateProduct(name, capacity, price, 1);

        updateGrandTotal();
    });

});


    // ===============================
    // QUANTITY CHANGE
    // ===============================
    qtyInput.addEventListener("input", () => {

        const qty   = parseFloat(qtyInput.value) || 0;
        const price = getCleanPrice(priceInput.value);

        updateSingleTotal(price, qty);

        const name     = document.getElementById('input-name').value;
        const capacity = document.getElementById('input-capacity').value;

        updateHiddenQuantity(name, capacity, qty);
        updateGrandTotal();
    });

    // ===============================
    // TELEGRAM SEND
    // ===============================
    document.getElementById("btn-send-telegram").addEventListener("click", (e) => {
         e.preventDefault();

        const customerName  = document.querySelector("input[placeholder='Name']").value.trim();
        const companyName   = document.querySelector("input[placeholder='Company Name']").value.trim();
        const email         = document.querySelector("input[placeholder='Email']").value.trim();
        const contactPerson = document.querySelector("input[placeholder='Country']").value.trim();
        const bagTypes      = document.querySelector("input[name='bag_types']").value.trim();

        if (!hiddenProducts.value.trim()) {
            alert("❗ Please select at least one product");
            return;
        }

        let message = `📦 *New Export Enquiry*\n\n`;
        message += `👤 *Customer Info:*\n`;
        message += `• Name: ${customerName}\n`;
        message += `• Company: ${companyName}\n`;
        message += `• Email: ${email}\n`;
        message += `• Contact: ${contactPerson}\n\n`;
        message += `🛒 *Products Selected:*\n`;

        hiddenProducts.value.split(",").forEach(item => {

            const [name, capacity] = item.split("-");
            const price = parseFloat(document.getElementById(makePriceId(name, capacity))?.value || 0);
            const qty   = parseFloat(document.getElementById(makeQtyId(name, capacity))?.value || 0);
            const total = price * qty;

            message += `• ${name} - ${capacity} | Qty: ${qty} | Price: $${formatNumber(price)} | Total: $${formatNumber(total)}\n`;
        });

        const grandTotal = calculateGrandTotal();

        message += `\n💰 *Grand Total:* $${formatNumber(grandTotal)}`;
        message += `\n🛍 Bag Types: ${bagTypes || "None"}`;

        const telegramLink = `https://t.me/+85587686768?text=${encodeURIComponent(message)}`;
        window.open(telegramLink, "_blank");

    });

});


// =====================================
// PRODUCT MANAGEMENT
// =====================================

function addOrUpdateProduct(name, capacity, price, qty) {

    const hiddenInput = document.querySelector("input[name='products']");
    const value = `${name}-${capacity}`;

    let selected = hiddenInput.value ? hiddenInput.value.split(",") : [];

    if (!selected.includes(value)) {
        selected.push(value);
        hiddenInput.value = selected.join(",");
    }

    createHiddenInput(makePriceId(name, capacity), price);
    createHiddenInput(makeQtyId(name, capacity), qty);
}

function removeProduct(name, capacity) {

    const hiddenInput = document.querySelector("input[name='products']");
    const value = `${name}-${capacity}`;

    let selected = hiddenInput.value ? hiddenInput.value.split(",") : [];
    selected = selected.filter(item => item !== value);
    hiddenInput.value = selected.join(",");

    document.getElementById(makePriceId(name, capacity))?.remove();
    document.getElementById(makeQtyId(name, capacity))?.remove();

    updateGrandTotal();
}

function updateHiddenQuantity(name, capacity, qty) {
    const qtyEl = document.getElementById(makeQtyId(name, capacity));
    if (qtyEl) qtyEl.value = qty;
}

function createHiddenInput(id, value) {
    if (!document.getElementById(id)) {
        const input = document.createElement("input");
        input.type = "hidden";
        input.id   = id;
        input.value = value;
        document.body.appendChild(input);
    }
}


// =====================================
// TOTAL CALCULATIONS
// =====================================

function updateSingleTotal(price, qty) {
    const totalInput = document.getElementById("input-total");
    if (totalInput) {
        totalInput.value = "$" + formatNumber(price * qty);
    }
}

function updateGrandTotal() {
    const grandTotalInput = document.getElementById("input-grand-total");
    if (grandTotalInput) {
        grandTotalInput.value = "$" + formatNumber(calculateGrandTotal());
    }
}

function calculateGrandTotal() {

    const hiddenInput = document.querySelector("input[name='products']");
    let total = 0;

    if (!hiddenInput.value.trim()) return 0;

    hiddenInput.value.split(",").forEach(item => {

        const [name, capacity] = item.split("-");
        const price = parseFloat(document.getElementById(makePriceId(name, capacity))?.value || 0);
        const qty   = parseFloat(document.getElementById(makeQtyId(name, capacity))?.value || 0);

        total += price * qty;
    });

    return total;
}


// =====================================
// HELPERS
// =====================================

function makePriceId(name, capacity) {
    return `product-price-${name.replace(/\s/g,"")}-${capacity}`;
}

function makeQtyId(name, capacity) {
    return `product-qty-${name.replace(/\s/g,"")}-${capacity}`;
}

function getCleanPrice(value) {
    return parseFloat(value.replace("$","").replace(/,/g,"")) || 0;
}

function formatNumber(num) {
    return num.toLocaleString("en-US", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });
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
@endsection