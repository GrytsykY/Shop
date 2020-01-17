@extends('master')

@section('title','Все категории')

@section('content')

    <div class="starter-template">
        @foreach($categories as $category)
        <div class="panel">
            <a href="/{{$category->code}}/{{$category->id}}">
                <img style="width: 50px" src="/images/{{$category->img}}">
                <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
        @endforeach
    </div>

@endsection
