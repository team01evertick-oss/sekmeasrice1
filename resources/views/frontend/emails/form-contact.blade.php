<h2>New Job Application</h2>

<p><strong>Full Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Position Applied For:</strong> {{ $data['position'] }}</p>

@if(!empty($data['cv_path']))
    <p>
        <strong>CV and Cover Letter</strong>
        {{-- <a href="{{ Storage::url($data['cv_path']) }}" target="_blank">
            View / Download CV
        </a> --}}
        {{-- <img src="{{ asset('storage/' . $data['cv_path']) }}" alt=""> --}}
    </p>
@endif

{{-- @if(!empty($data['cover_letter_path']))
    <p>
        <strong>Cover Letter:</strong>
        <a href="{{ Storage::url($data['cover_letter_path']) }}" target="_blank">
            View / Download Cover Letter
        </a>
       
    </p>
@endif --}}
