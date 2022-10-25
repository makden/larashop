@extends('html')
@extends('header')
@extends('footer')

@section('content')

    <h1>{{$category->name}}</h1>
    <hr>
    <div id="catalog_description">
        {{$category->description}}
    </div>
@endsection
