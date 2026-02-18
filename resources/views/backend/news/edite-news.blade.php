@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | edit news
    @endsection
    @section('page-main-title')
        EDIT NEWS
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
               <form action="{{ route('submit.update.news') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="update_id" value="{{ $row->id }}">

    <div class="grid grid-cols-2 gap-10">

        <!-- LEFT SIDE -->
        <div>
            <!-- English -->
            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Title (EN)</label>
                <input type="text" name="update_title" class="form-control"
                    value="{{ $row->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Description (EN)</label>
                <textarea name="update_description" class="form-control"
                    rows="6">{{ $row->description }}</textarea>
            </div>

            <!-- Khmer -->
            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Title (KM)</label>
                <input type="text" name="update_title_km" class="form-control"
                    value="{{ $row->title_km ?? '' }}">
            </div>

            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Description (KM)</label>
                <textarea name="update_description_km" class="form-control"
                    rows="6">{{ $row->description_km ?? '' }}</textarea>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div>
            <label class="block mb-2 text-sm font-medium text-[#0F4634]">
                Select Multiple Images
            </label>

            <input type="file" id="imageInput"
                name="update_image_news[]"
                multiple
                accept="image/*"
                class="form-control mb-3">

            <!-- Preview Area -->
            <div id="previewContainer" class="grid grid-cols-3 gap-4"></div>
        </div>
    </div>

    <div class="flex gap-3 mt-5">
        <a href="{{ route('view.news') }}"
            class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] rounded-xl hover:bg-[#0F4634] hover:text-white">
            Cancel
        </a>

        <input type="submit" value="Update News"
            class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] rounded-xl hover:bg-[#0F4634] hover:text-white">
    </div>
</form>

            </div>
        </div>
    </div>
    <script>
document.getElementById('imageInput').addEventListener('change', function (event) {
    const previewContainer = document.getElementById('previewContainer');
    previewContainer.innerHTML = "";

    Array.from(event.target.files).forEach((file, index) => {

        const reader = new FileReader();

        reader.onload = function (e) {

            const wrapper = document.createElement('div');
            wrapper.classList.add('relative');

            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('w-full', 'h-32', 'object-cover', 'rounded');

            const closeBtn = document.createElement('button');
            closeBtn.innerHTML = '✕';
            closeBtn.classList.add(
                'absolute','top-1','right-1',
                'bg-red-500','text-white',
                'rounded-full','w-6','h-6','text-xs'
            );

            closeBtn.onclick = function () {
                wrapper.remove();
            };

            wrapper.appendChild(img);
            wrapper.appendChild(closeBtn);
            previewContainer.appendChild(wrapper);
        };

        reader.readAsDataURL(file);
    });
});
</script>

@endsection