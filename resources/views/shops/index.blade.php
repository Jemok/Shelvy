<h1>Shops</h1>

@foreach($shops as $shop )

    <a href="{{ url('/shops', $shop->slug) }}"> <h2>{{ $shop->shop_name }}</h2></a>

@endforeach