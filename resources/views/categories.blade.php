@extends('layouts.master')

@section('title','Все категории')

@section('content')
    @foreach($categories as $category)
        <div class="text-center">
            <a href="{{route('category',$category->code)}}">
                <img style="width: 50px" src="{{ Storage::url($category->img) }}">
                <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
    @endforeach

@endsection
