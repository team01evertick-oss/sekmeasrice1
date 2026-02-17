@extends('frontend.header')
@section('title', 'Latest News')
@section('background-image', asset('frontend/assets/imges/news.png'))
@section('rice-background', asset('frontend/assets/imges/1.png'))
@section('white-line')
    <div class="w-24 sm:w-32 md:w-40 lg:w-[154px] h-1 bg-white mt-8 mb-6 mt-5"></div>
@endsection
@section('text-title', 'Latest News')

@section('section_content')
<section class="flex justify-center items-center">
    {{-- Section: Media --}}
    <section class="section-media relative h-auto bg-[#FFFFFF]" x-data="lightbox()">

        <div class="flex flex-col justify-center items-center text-center px-6 mb-12 py-8" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#4DA358] tracking-wide">
                Latest News
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
                                    {{ $media->description }}
                                </p>
                                
                                <div class="flex justify-center items-center text-white py-3 bg-[#4DA358] w-32 h-12 rounded-xl cursor-pointer"
                                    @click="open({{ $loop->index }})">
                                    Details
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
