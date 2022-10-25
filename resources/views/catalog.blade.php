@extends('html')
@extends('header')
@extends('footer')

@section('content')

    <h1>Каталог продукции</h1>
    <hr>
    <div id="products">
    @foreach ($categories as $item)
        <div class="product">
            <p class="product_name"><a href="/categories/{{$item->alias}}">{{strip_tags($item->name)}}</a></p>
            <p class="product_desc">{{ mb_substr(strip_tags(html_entity_decode($item->description, ENT_QUOTES, 'UTF-8')),0,250)}}...</p>
        </div>
    @endforeach
    </div>
@endsection
