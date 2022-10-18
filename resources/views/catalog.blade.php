@extends('html')
@extends('header')
@extends('footer')

@section('content')

    <p>Каталог продукции</p>

    @php
    echo '<pre>';
    echo print_r($products);
    echo '</pre>';

    @endphp
 



@endsection
