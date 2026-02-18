@extends('frontend.header')
@section('title', 'Latest News')
@section('background-image', asset('frontend/assets/imges/news.png'))
@section('rice-background', asset('frontend/assets/imges/1.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', app()->getLocale() == 'en' ? 'Latest News' : 'ព្រឹត្តិការណ៍ថ្មីៗ')

@section('section_content')
<style>
    /* in your CSS or Tailwind @layer utilities */
.no-scroll {
    overflow: hidden !important;
    height: 100vh !important;
}

</style>
<section class="flex flex-col justify-center items-center space-y-0 md:space-y-10">
    {{-- Section: Media --}}
    <section class="section-media relative h-auto bg-[#FFFFFF]" x-data="lightbox()">

        <div class="flex flex-col justify-center items-center text-center px-6 mb-12 py-8" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] tracking-wide">
               {{ app()->getLocale() == 'en' ? 'Latest News' : 'ព្រឹត្តិការណ៍ថ្មីៗ' }}
            </h2>
        </div>

        <div class="flex flex-col justify-center items-center px-4 sm:px-10 md:px-20">
            <div class="max-w-7xl w-full">
                <div class="grid grid-cols-1 gap-x-20 gap-y-16" data-aos="fade-left" data-aos-duration="1500">
                    @foreach($showMedia as $media)
                            <div class="flex flex-col md:flex-row items-center gap-10 justify-center
                                    {{ $loop->iteration % 2 == 0 ? 'md:flex-row-reverse' : '' }}">
                            <!-- Image -->
                            <div class="relative w-[90%] sm:w-[90%] md:w-[420px] lg:w-[450px] flex-shrink-0 mx-auto">
                                <div
                                    class="absolute -top-4 {{ $loop->iteration % 2 == 0 ? '-right-4' : '-left-4' }} w-12 h-12 opacity-90">
                                    <img src="{{ asset('frontend/assets/imges/news-media/icon-star-1.png') }}" alt="">
                                </div>

                                <div class="w-full h-80 overflow-hidden transform transition duration-500 hover:scale-105 cursor-pointer"
                                     @click="open({{ $loop->index }})">
                                    <img src="{{ asset('storage/local_product/'.$media->image_media) }}"
                                        class="w-full h-full object-cover {{ $loop->iteration % 2 == 0 ? 'rounded-tr-[80px] rounded-bl-[80px]' : 'rounded-tl-[80px] rounded-br-[80px]' }}"
                                        alt="{{ $media->title }}">
                                </div>

                                <div
                                    class="absolute -bottom-[30px] {{ $loop->iteration % 2 == 0 ? '-left-[50px]' : '-right-[50px]' }} w-[80px] h-[80px] opacity-90">
                                    <img src="{{ asset('frontend/assets/imges/news-media/icon-star-2.png') }}" alt="">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="w-[90%] md:max-w-[550px] flex flex-col justify-center px-4 space-y-4">

                                <h3 class="text-[#1E1E1E] font-normal text-3xl hidden">
                                    {{ $media->title }}
                                </h3>

                                <p class="text-[#1E1E1E] text-lg">
                                    {{ app()->getLocale() == 'en' ? $media->description : $media->description_km }}
                                </p>
                                
                                <div class="flex justify-center items-center w-32 h-12 rounded-xl cursor-pointer"
                                    @click="open({{ $loop->index }})">
                                     <img src="{{ app()->getLocale() == 'en' ? asset('assets/logo/btn-details.svg') : asset('assets/logo/btn-details-km.svg') }}" alt=""
                                        class="w-full h-full">
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="isOpen" x-cloak
             class="fixed inset-0 z-[9999] flex items-center justify-center bg-black bg-opacity-90 overflow-hidden">
            <!-- Close -->
            <button @click="close()" class="absolute top-4 right-4 text-white text-4xl font-bold">×</button>

            <!-- Left -->
            <button @click="prev()" class="absolute left-4 text-white text-4xl font-bold">‹</button>

            <!-- Right -->
            <button @click="next()" class="absolute right-4 text-white text-4xl font-bold">›</button>

            <!-- Image -->
            <div class="w-[60%] h-[60%]">
                <template x-for="(img, idx) in images[current]" :key="idx">
                    <img :src="img" x-show="idx === currentIndex"
                         class="w-full h-full object-cover rounded-lg">
                </template>
            </div>
        </div>

    </section>
    {{-- Section: News --}}
    <section class="section-news relative bg-[#F4ECC8] py-10" id="activity">
        <div class="flex flex-col justify-center items-center text-center px-6 mb-12">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] tracking-wide">
                {{ app()->getLocale() == 'en' ? 'Activities ' : 'សកម្មភាព' }}
            </h2>
        </div>

        <div class="flex justify-center items-center px-4 sm:px-10 md:px-20">
            <div class="max-w-7xl w-full">
                <div class="grid grid-cols-1 gap-y-12 md:gap-y-16 gap-x-8 md:grid-cols-2">
                    @foreach ($showNews as $news)
                        @php
    $images = json_decode($news->image_news ?? '[]', true);
@endphp

<div class="block-news flex flex-col lg:flex-row gap-6 md:gap-8 items-center md:items-start">
    
    <!-- First Image -->
    <div class="image-news w-[90%] md:w-[420px] lg:w-[450px] mx-auto">
        <div class="w-full h-64 sm:h-72 lg:h-80 overflow-hidden rounded-lg">
            @if(!empty($images))
                <img src="{{ asset('storage/news/'.$images[0]) }}"
                     class="w-full h-full object-cover hover:scale-105 transition duration-500">
            @endif
        </div>
    </div>

    <!-- Content -->
    <div class="content w-full md:max-w-[550px] flex flex-col justify-between gap-4 px-1">
        <h3 class="text-[#1E1E1E] font-semibold text-2xl sm:text-3xl hidden">
            {{ app()->getLocale() == 'km' ? $news->title_km : $news->title }}
        </h3>

        <p class="text-[#1E1E1E] text-base sm:text-lg h-auto md:h-[32vh]">
            {!! nl2br(e(app()->getLocale() == 'km' ? $news->description_km : $news->description)) !!}
        </p>

        <button onclick="openModal({{ $news->id }})"
            class="w-[125px] h-[35px] mt-4 mx-auto md:mx-0">
            <img src="{{ app()->getLocale() == 'en' 
                ? asset('assets/logo/btn-details.svg') 
                : asset('assets/logo/btn-details-km.svg') }}">
        </button>
    </div>
</div>

<!-- Hidden JSON Images -->
<script type="application/json" id="news-images-{{ $news->id }}">
    {!! json_encode($images) !!}
</script>

                    @endforeach
                    <!-- Modal -->
<div id="imageModal" class="fixed inset-0 bg-black hidden items-center justify-center z-[99999]">

    <div class="relative w-[90%] max-w-5xl">

        <!-- Close Button -->
        <button onclick="closeModal()" 
            class="absolute top-[-40px] right-0 text-white text-3xl">
            ✕
        </button>

        <div class="max-w-5xl mx-auto w-5xl h-[500px]">
            <img id="modalImage" class="w-full h-full object-cover">
        </div>

        <!-- Left Button -->
        <button onclick="prevImage()"
            class="absolute left-2 md:left-[-40px] top-1/2 transform -translate-y-1/2 text-white text-4xl">
            ❮
        </button>

        <!-- Right Button -->
        <button onclick="nextImage()"
            class="absolute right-2 md:right-[-40px] top-1/2 transform -translate-y-1/2 text-white text-4xl">
            ❯
        </button>

    </div>
</div>

                </div>
            </div>
        </div>
    </section>

</section>

{{-- Alpine.js Lightbox --}}
<script src="//unpkg.com/alpinejs" defer></script>
<script>
function lightbox() {
    return {
        isOpen: false,
        current: 0,
        currentIndex: 0,
        scrollY: 0,
        images: @json($showMedia->map(function($media){
            return isset($media->images) && !empty($media->images) ? json_decode($media->images) : ['{{ $media->image_media }}'];
        })),
        open(index) {
            this.current = index;
            this.currentIndex = 0;
            this.isOpen = true;

            this.scrollY = window.scrollY;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollY}px`;
            document.body.style.left = '0';
            document.body.style.right = '0';
            document.body.style.overflow = 'hidden';
        },
        close() {
            this.isOpen = false;

            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            document.body.style.overflow = '';

            window.scrollTo(0, this.scrollY);
        },
        prev() {
            if(this.currentIndex > 0) {
                this.currentIndex--;
            }
        },
        next() {
            if(this.currentIndex < this.images[this.current].length - 1) {
                this.currentIndex++;
            }
        }
    }
}

</script>
<script>
let currentImages = [];
let currentIndex = 0;
let originalOverflow = '';
function openModal(newsId) {

    const data = document.getElementById('news-images-' + newsId).textContent;
    currentImages = JSON.parse(data);

    if (currentImages.length === 0) return;

    currentIndex = 0;
    document.getElementById('modalImage').src =
        '/storage/news/' + currentImages[currentIndex];

    const modal = document.getElementById('imageModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    // 🔥 Lock full page scroll
    document.body.style.overflow = 'hidden';
    document.documentElement.style.overflow = 'hidden';
}

function closeModal() {

    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');

    // 🔥 Restore scroll properly
    document.body.style.overflow = '';
    document.documentElement.style.overflow = '';
}



function nextImage() {
    currentIndex = (currentIndex + 1) % currentImages.length;
    document.getElementById('modalImage').src =
        '/storage/news/' + currentImages[currentIndex];
}

function prevImage() {
    currentIndex =
        (currentIndex - 1 + currentImages.length) % currentImages.length;

    document.getElementById('modalImage').src =
        '/storage/news/' + currentImages[currentIndex];
}
</script>



@endsection

@section('section_footer')
<div class="relative top-20 -z-[99999]">
    @include('frontend.footer')
</div>
@endsection




        {{-- Section: News --}}
        {{-- <section class="section-news relative bg-[#F4ECC8] py-16 pb-24">
            <div class="flex flex-col justify-center items-center text-center px-6 mb-12">
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] tracking-wide">
                    News
                </h2>
            </div>

            <div class="flex justify-center items-center px-4 sm:px-10 md:px-20">
                <div class="max-w-7xl w-full">
                    <div class="grid grid-cols-1 gap-y-12 md:gap-y-16 gap-x-8 md:grid-cols-2">
                        @foreach ($showNews as $news)
                            <div class="block-news flex flex-col md:flex-row gap-6 md:gap-8 items-center md:items-start">
                                <!-- Image -->
                                <div class="image-news w-[90%] md:w-[420px] lg:w-[450px] mx-auto">
                                    <div
                                        class="w-full h-64 sm:h-72 lg:h-80 transform transition duration-500 hover:scale-105 overflow-hidden rounded-lg">
                                        <img src="../../storage/local_product/{{ $news->image_news }}" alt=""
                                            class="w-full h-[90%] object-cover">
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="content w-[90%] md:max-w-[550px] flex flex-col justify-center gap-4 text-left md:text-left px-4">
                                    <h3 class="text-[#1E1E1E] font-semibold text-2xl sm:text-3xl md:text-3xl mb-2">
                                        {{ $news->title }}
                                    </h3>
                                    <p class="text-[#1E1E1E] text-base sm:text-lg">
                                        {{ $news->description }}
                                    </p>
                                    <button
                                        class="relative top-[-5px] w-[125px] h-[35px] mt-4 text-white rounded-md transform transition duration-500 hover:scale-105 mx-auto md:mx-0">
                                        <img src="{{ asset('frontend/assets/imges/btn-read-more.png') }}" alt=""
                                            class="w-full h-full">
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> --}}
