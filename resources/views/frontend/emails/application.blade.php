<h2>New Contact / Trade Inquiry</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['country_code'] }} {{ $data['phone'] }}</p>

@if(!empty($data['company']))
    <p><strong>Company:</strong> {{ $data['company'] }}</p>
@endif

<p><strong>Trade Type:</strong> {{ $data['trade_type'] }}</p>
<p><strong>Country:</strong> {{ $data['country'] }}</p>

@if(!empty($data['commodities']))
    <p><strong>Commodities:</strong></p>
    <ul>
        @foreach ($data['commodities'] as $commodity)
            <li>{{ $commodity }}</li>
        @endforeach
    </ul>
@endif

@if(!empty($data['commodityOtherInput']))
    <p><strong>Other Commodity:</strong> {{ $data['commodityOtherInput'] }}</p>
@endif

@if(!empty($data['address']))
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
@endif

@if(!empty($data['message']))
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
@endif
