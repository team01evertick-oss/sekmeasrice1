  <section class="customer relative w-full h-[600px] flex flex-col items-center justify-center">
        <!-- Title -->
        <div class="text-center mb-10 relative top-[-30px]">
            <h1 class="text-3xl font-semibold text-green-600">Comments</h1>
        </div>

        <!-- Comments -->
        <div x-data="commentApp()" class="w-full flex flex-col items-center justify-center">
            <div class="w-[90%] md:w-[60%] grid grid-cols-1 gap-8 text-center">

                <!-- Comment Form -->
                {{-- @auth('customer')
                <!-- Show form when user is logged in -->
                <div class="relative w-full">
                    <input type="text" placeholder="💬 Add your comment..." x-model="text"
                        class="w-full h-[60px] bg-[#f8f1d0] px-6 pr-[60px] rounded-full shadow-sm text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-400" />

                    <button @click.prevent="submitComment()"
                        class="absolute right-3 top-1/2 -translate-y-1/2 bg-[#F1C119] p-3 rounded-full hover:bg-[#e0b617] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 4l16 8-16 8V4z" />
                        </svg>
                    </button>
                </div>
                @else
                <!-- Show disabled input for guests -->
                <div class="relative w-full">
                    <input type="text" placeholder="💬 Add Your Comments"
                        class="w-full h-[60px] bg-gray-200 px-6 rounded-full shadow-sm text-gray-500 cursor-pointer focus:outline-none" />
                </div>
                @endauth --}}

                <!-- Comments Container -->
                <div id="commentsContainer" class="grid grid-cols-1 gap-y-5 max-h-[250px] overflow-y-auto px-2 mt-4">
                    @foreach ($showComment as $comment)
                        <div class="mx-auto w-full max-w-[700px]">
                            <div class="flex items-start gap-4 p-4 rounded-lg comment-item transition">
                                <div class="flex-shrink-0">
                                    <img src="../../assets/comments/profile/{{ $comment->profile }}" alt="Profile"
                                        class="w-[55px] h-[55px] rounded-full object-cover">
                                </div>
                                <div class="flex-1 text-left">
                                    <span class="font-semibold text-gray-800 block">{{ $comment->name }}</span>
                                    <p class="text-gray-600 text-sm mt-1">{{ $comment->comment }}</p>
                                    {{-- <span class="text-[#324A0A] text-xs mt-1 block">{{
                                        $comment->created_at->diffForHumans() }}</span> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>