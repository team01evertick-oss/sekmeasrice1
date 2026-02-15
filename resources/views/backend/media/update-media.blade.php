@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | edit media
    @endsection
    @section('page-main-title')
        EDIT MEDIA
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('submit.update.media') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_id" value="{{ $row->id }}">
                    <input type="hidden" name="old_image_media" value="{{ $row->image_media }}">

                    <div class="grid grid-cols-2 gap-10">
                        <div>
                            <div class="mb-3">
                                <label for="update_title" class="form-label text-[#0F4634]">Title</label>
                                <input type="text" name="update_title" id="update_title" class="form-control"
                                    value="{{ $row->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="update_description" class="form-label text-[#0F4634]">Description</label>
                                <textarea name="update_description" class="form-control" cols="50"
                                    rows="9">{{ $row->description }}</textarea>
                            </div>
                        </div>

                        <div>
                            <div class="mb-5">
                                <label class="block mb-2 text-sm font-medium text-[#0F4634]">Please choose image
                                    News</label>
                                <label for="thumbnailFile"
                                    class="flex flex-col items-center justify-center w-[400px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                    <img id="thumbnailPreview" src="{{ asset('storage/local_product/' . $row->image_media) }}"
                                        class="absolute inset-0 m-auto w-[300px] h-[250px] object-contain" />
                                    <div id="thumbnailPlaceholder"
                                        class="flex flex-col items-center justify-center text-center">
                                        <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                            stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                        </svg>
                                        <p class="text-xs text-gray-500">Upload</p>
                                    </div>
                                    <input id="thumbnailFile" type="file" name="update_image_media" accept="image/*"
                                        class="hidden" />
                                </label>
                            </div>
                        </div>
                        <!-- Upload New Images -->
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">
                            Upload New Images (When update image needed close old image for show new image)
                        </label>
                        <input id="images" type="file" name="edit_images[]" multiple accept="image/*"
                            class="form-control block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" />
                    </div>

                    <!-- Old Images Preview -->
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">Old Images</label>
                        <div id="old-preview" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                            @foreach ($customer->images ?? [] as $img)
                                <div class="relative w-full h-[200px]">
                                    <img src="{{ asset($img) }}" class="w-full h-full object-cover rounded-lg shadow-md">
                                    <button type="button"
                                            class="remove-old absolute top-1 right-1 bg-white text-red-600 rounded-full w-6 h-6 flex items-center justify-center text-lg font-bold shadow hover:bg-red-100"
                                            data-path="{{ $img }}">×</button>
                                    <!-- hidden input to keep this image -->
                                    <input type="hidden" name="keep_old_images[]" value="{{ $img }}">
                                </div>
                            @endforeach

                        </div>
                    </div>


                    <!-- New Images Preview -->
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">New Images Preview</label>
                        <div id="new-preview" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4"></div>
                    </div>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('view.news') }}"
                            class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                            Cancel
                        </a>
                        <input type="submit" value="Edit news"
                            class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                    </div>
                </form>
            </div>
        </div>
    </div>
     <script>
        // Preview image when upload multiple image
        // Preview new images
        document.getElementById('images').addEventListener('change', function (event) {
            const preview = document.getElementById('new-preview');
            preview.innerHTML = "";

            [...event.target.files].forEach(file => {
                if (!file.type.startsWith("image/")) return;

                const reader = new FileReader();
                reader.onload = e => {
                    const wrapper = document.createElement("div");
                    wrapper.className = "relative w-full h-[200px]";

                    const img = document.createElement("img");
                    img.src = e.target.result;
                    img.className = "w-full h-full object-cover rounded-lg shadow-md";

                    const btn = document.createElement("button");
                    btn.innerHTML = "×";
                    btn.type = "button";
                    btn.className = "absolute top-1 right-1 bg-white text-red-600 rounded-full w-6 h-6 flex items-center justify-center font-bold shadow hover:bg-red-100";

                    btn.addEventListener("click", () => wrapper.remove());

                    wrapper.appendChild(img);
                    wrapper.appendChild(btn);
                    preview.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            });
        });

        // Remove old image (removes its hidden input too)
        document.querySelectorAll('.remove-old').forEach(btn => {
            btn.addEventListener('click', function () {
                this.parentElement.remove();
            });
        });
    </script>
    <script>
        document.querySelectorAll('.remove-old').forEach(btn => {
    btn.addEventListener('click', function () {
        // remove hidden input too
        const input = this.parentElement.querySelector('input[name="keep_old_images[]"]');
        if (input) input.remove();

        // remove image preview
        this.parentElement.remove();
    });
});

    </script>
@endsection